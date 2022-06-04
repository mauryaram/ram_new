<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Add_fleet extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index()
	{
            $data               = array();
            $table              = 'fleet';
            $data["menu"]       = "fleet";
            $data["submenu"]    = "fleetadd";
            
            $data['title']          = ( !empty($id) ? 'Update' : 'Add') .' Fleet';
            $id                     = $this->input->get('id');
            $getdata                = $this->c_model->getSingle($table,array('md5(id)'=>$id));
            $data['vehicleName']    = !empty($getdata['vehicleName']) ? $getdata['vehicleName'] :"";
            $data['price']          = !empty($getdata['price']) ? $getdata['price'] :"";
            $data['image']          = !empty($getdata['image']) ? $getdata['image'] :"";
            $data['priority']       = !empty($getdata['priority']) ? $getdata['priority'] :"";
            $data['status']         = !empty($getdata['status']) ? $getdata['status'] :"";
            $data['image']          = !empty($getdata['image']) ? $getdata['image'] :"";
            $data['id']             = !empty($getdata['id']) ? $getdata['id'] :"";
            $data['button']         = !empty($id) ? 'Update' :'Submit';
            
            adminform('add-fleet',$data);
        }
        public function updsave(){
            $id = $this->input->get('id');
            $table = 'fleet';
            $url = !empty($id) ? ADMINURL.'Add_fleet?id='.md5($id) :ADMINURL.'Add_fleet';
            $this->form_validation->set_rules('vehicleName','Vehicle Name','required');
            if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect($url);
            }else{
            $pdata = $this->security->xss_clean($this->input->post());
            $saveup['vehicleName']  = $pdata['vehicleName'];
            $saveup['slug']         = seoUrl($pdata['vehicleName']);
            $saveup['price']        = !empty($pdata['price']) ? trim($pdata['price']) : "";
            $saveup['priority']     = !empty($pdata['priority']) ? $pdata['priority'] : "";
            $saveup['status']       = !empty($pdata['status']) ? $pdata['status'] : "Inactive";
            if(!empty($_FILES['image']['name'])){
                $config['upload_path']   = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $this->security->xss_clean($_FILES['image']['name']);
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                /*-------------Unlink Image----------*/
                $file  = 'uploads/'.$pdata['oldlogo'];
                if(is_file($file) && @unlink($file)){
                }
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
                }
            
              $saveup['image']              = !empty($image) ? $image : $pdata['oldlogo'];
             if(!empty($id)){
                $saveup['updationDate'] = date('Y-m-d H:i:s');
                }else{
                $saveup['creationDate'] = date('Y-m-d H:i:s');  
                }
                    $where = !empty($id)? array('id'=>$id) :null;
                    $message = !empty($id)? 'Updated' :'Added';
                    $saveupdate = $this->c_model->saveupdate($table, $saveup, null ,$where);
                    if(!empty($saveupdate)){
                    $this->session->set_flashdata('success','Record Is '.$message.' successfully!!!');
                    redirect($url);
                    }else{
                    $this->session->set_flashdata('error','Some Thing Went Wrong!!!!'); 
                    redirect($url);
                    }
            }
            
        }
        public function delete(){
                $id = $this->input->get('id');
                $url = ADMINURL.'View_fleet';
                $table = 'fleet';
                $saveupdate = $this->c_model->saveupdate($table, array('status'=>'Deleted'), null ,array('md5(id)'=>$id));
                $this->session->set_flashdata('success','Record Deleted successfully!!!');
                redirect($url );
        }
        }