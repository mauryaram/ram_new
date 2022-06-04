<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Add_package_slider extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index()
	{
            $data = array();
            $data["menu"]       = "packageconfig";
            $data["submenu"]    = "packageconfigview";
            $data['title']      = 'Add Package Slider';
            $pid = $this->input->get('pid');
            $id = $this->input->get('id');
            $data['singled']    = $this->c_model->getSingle( 'packageslider',array('md5(id)'=>$pid));
            $data['pdetail']    = $this->c_model->getSingle( 'packageconfig',array('md5(id)'=>$id));
            $data['pslider']    = $this->c_model->getAll( 'packageslider','id DESC',array('md5(packageConfigId)'=>$id,'status !='=>'Deleted'));
            adminform('add-package-slider',$data);
        }
        public function updsave(){
            $table = 'packageslider';
            $pdata = $this->security->xss_clean($this->input->post());
            $url = ADMINURL.'Add_package_slider?id='. md5($pdata['pid']);
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
                    $config['quality']          = '100%'; 
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize(); 
                    }  
                $ext = pathinfo($image, PATHINFO_EXTENSION);
                $img = getWebp($ext,$image,$path=false);
                }
                $base = basename($img, ".webp");
                $saveup['image']    = $image;
                $saveup['webp']     = $img;
                $saveup['altTag']   = !empty($pdata['altTag']) ? $pdata['altTag'] : $base;
                $saveup['packageConfigId'] = $pdata['pid'];
                $saveup['status'] = $pdata['status'];
                $query = $this->c_model->saveupdate($table,$saveup);
                $this->session->set_flashdata('success','Record Added successfully!!!');
               redirect($url );
        }
        public function delete(){
                $id = $this->input->get('delId');
               echo  $pid = $this->input->get('pid');
                $url = ADMINURL.'Add_package_slider?id='.$pid;
                $table = 'packageslider';
               $saveupdate = $this->c_model->saveupdate($table, array('status'=>'Deleted'), null ,array('md5(id)'=>$id));
               $this->session->set_flashdata('success','Record Deleted successfully!!!');
               redirect($url );
        }
        }