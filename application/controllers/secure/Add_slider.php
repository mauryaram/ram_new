<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Add_slider extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index()
	{
            $data               = array();
            $table              = 'slider';
            $data["menu"]       = "banner";
            $data["submenu"]    = "slider";
            $data['title']      = ( !empty($id) ? 'Update' : 'Add') .' Slider';
            $id                 = $this->input->get('id');
            $getdata                = $this->c_model->getSingle($table,array('md5(id)'=>$id));
            $data['heading']        = !empty($getdata['heading']) ? $getdata['heading'] :"";
            $data['subHeading']     = !empty($getdata['subHeading']) ? $getdata['subHeading'] :"";
            $data['image']          = !empty($getdata['image']) ? $getdata['image'] :"";
            $data['webp']           = !empty($getdata['webp']) ? $getdata['webp'] :"";
            $data['altTag']         = !empty($getdata['altTag']) ? $getdata['altTag'] :"";
            $data['status']         = !empty($getdata['status']) ? $getdata['status'] :"";
            $data['id']             = !empty($getdata['id']) ? $getdata['id'] :"";
            $data['button']         = !empty($id) ? 'Update' :'Submit';
            
            adminform('add-slider',$data);
        }
        public function updsave(){
            $table = 'slider';
            $pdata = $this->security->xss_clean($this->input->post());
          $id                     = $this->input->get('id');
            $url = !empty($id) ? ADMINURL.'Add_slider?id='.md5($id) :ADMINURL.'Add_slider';
            if(!empty($_FILES['image']['name'])){
                $config['upload_path']   = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $this->security->xss_clean($_FILES['image']['name']);
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                /*-------------Unlink Image----------*/
//                $file  = 'uploads/'.$oldimage;
//                if(is_file($file) && @unlink($file)){
//                $this->session->set_flashdata('success','Image Remove!!!');
//                }
                /*-------------Unlink Image----------*/
                /*-------------Unlink Image----------*/
                if($this->upload->do_upload('image')){
                    $uploadData                 = $this->upload->data();
                    $image                      = $uploadData['file_name'];
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './uploads/'.$image;
                    $config['new_image']        = './uploads/';
                    $config['maintain_ratio']   = TRUE;
                    $config['remove_spaces']    = TRUE;
                    $config['quality']          = '100%'; 
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize(); 
                    }  
                $ext = pathinfo($image, PATHINFO_EXTENSION);
                $img = getWebp($ext,$image,$path=false);
                }else{
                    $image = $pdata['oldimg'];
                    $img = $pdata['oldimgwebp'];
                }
                $base = basename($img, ".webp");
                $saveup['image']    = $image;
                $saveup['webp']     = $img;
                $saveup['altTag']   = !empty($pdata['altTag']) ? $pdata['altTag'] : $base;
                $saveup['heading'] = $pdata['heading'];
                $saveup['subHeading'] = $pdata['subHeading'];
                $saveup['status'] = $pdata['status'];
                if(!empty($id)){
                $saveup['updationDate'] = date('Y-m-d H:i:s');
                }else{
                $saveup['creationDate'] = date('Y-m-d H:i:s');  
                }
                $where = !empty($id) ? array('id'=>$id) : null;
                 $message = !empty($id)? 'Updated' :'Added';
                $query = $this->c_model->saveupdate($table,$saveup,null,$where);
                $this->session->set_flashdata('success','Record Is '.$message.' successfully!!!');
                redirect($url );
        }
        public function delete(){
                $id = $this->input->get('id');
                $url = ADMINURL.'View_slider';
                $table = 'slider';
                $saveupdate = $this->c_model->delete($table,array('md5(id)'=>$id));
                $this->session->set_flashdata('success','Record Deleted successfully!!!');
                redirect($url );
        }
        }