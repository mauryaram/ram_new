<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Add_package extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index()
	{
            $data               = array();
            $table              = 'package';
            $data["menu"]       = "package";
            $data["submenu"]    = "packageadd";
            
            $data['title']          = ( !empty($id) ? 'Update' : 'Add') .' Package';
            $id                     = $this->input->get('id');
            $getdata                = $this->c_model->getSingle($table,array('md5(id)'=>$id));
            $data['packageName']      = !empty($getdata['packageName']) ? $getdata['packageName'] :"";
            $data['slug']        = !empty($getdata['slug']) ? $getdata['slug'] :"";
            $data['meta_title']       = !empty($getdata['meta_title']) ? $getdata['meta_title'] :"";
            $data['meta_keyword']         = !empty($getdata['meta_keyword']) ? $getdata['meta_keyword'] :"";
            $data['meta_description']         = !empty($getdata['meta_description']) ? $getdata['meta_description'] :"";
            $data['description']            = !empty($getdata['description']) ? $getdata['description'] :"";
            $data['picup_drop_point']     = !empty($getdata['picup_drop_point']) ? $getdata['picup_drop_point'] :"";
            $data['transportation']           = !empty($getdata['transportation']) ? $getdata['transportation'] :"";
            $data['days']          = !empty($getdata['days']) ? $getdata['days'] :"";
            $data['night']    = !empty($getdata['night']) ? $getdata['night'] :"";
            $data['distance']          = !empty($getdata['distance']) ? $getdata['distance'] :"";
            $data['estimated_time']    = !empty($getdata['estimated_time']) ? $getdata['estimated_time'] :"";
            $data['exclusions']          = !empty($getdata['exclusions']) ? $getdata['exclusions'] :"";
            $data['ac']    = !empty($getdata['ac']) ? $getdata['ac'] :"";
            $data['route_information']          = !empty($getdata['route_information']) ? $getdata['route_information'] :"";
            $data['taxi_fare']    = !empty($getdata['taxi_fare']) ? $getdata['taxi_fare'] :"";
            $data['image']    = !empty($getdata['image']) ? $getdata['image'] :"";
            $data['priority']    = !empty($getdata['priority']) ? $getdata['priority'] :"";
            $data['status']         = !empty($getdata['status']) ? $getdata['status'] :"";
            $data['id']             = !empty($getdata['id']) ? $getdata['id'] :"";
            $data['button']         = !empty($id) ? 'Update' :'Submit';
            
            adminform('add-package',$data);
            $this->load->view('admin/qlite');
        }
        public function updsave(){
            $id = $this->input->get('id');
            $table = 'package';
            $pdata = $this->security->xss_clean($this->input->post());
            //print_r($pdata);exit;
            $url = !empty($id) ? ADMINURL.'Add_package?id='.md5($id) :ADMINURL.'Add_package';
            $this->form_validation->set_rules('packageName','Package Name','required');
            if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect($url);
            }else{
            $pdata = $this->security->xss_clean($this->input->post());
            $saveup['packageName']      = $pdata['packageName'];
            $saveup['meta_title']       = $pdata['meta_title'];
            $saveup['slug']             =  !empty($pdata['slug']) ? seoUrl($pdata['slug']) : seoUrl($pdata['packageName']);
            $saveup['meta_keyword']     = $pdata['meta_keyword'];
            $saveup['meta_description']       = $pdata['meta_description'];
            $saveup['description']       = $pdata['description'];
            $saveup['picup_drop_point']         = $pdata['picup_drop_point'];
            
            $saveup['transportation']          = $pdata['transportation'];
            $saveup['days']   = $pdata['days'];
            $saveup['night']  = $pdata['night'];
            $saveup['distance']       = $pdata['distance'];
            
            $saveup['estimated_time']     = $pdata['estimated_time'];
            $saveup['route_information']       = $pdata['route_information'];
            $saveup['taxi_fare']       = $pdata['taxi_fare'];
            $saveup['ac']         = $pdata['ac'];
            $saveup['exclusions']        = $pdata['exclusions'];
            $saveup['priority']          = $pdata['priority'];
            $saveup['status']          =  !empty($pdata['status']) ? $pdata['status'] : 'Inactive';
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
                $saveup['image']          = $image;
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
                $url = ADMINURL.'View_package';
                $table = 'package';
                $saveupdate = $this->c_model->saveupdate($table, array('status'=>'Deleted'), null ,array('md5(id)'=>$id));
                $this->session->set_flashdata('success','Record Deleted successfully!!!');
                redirect($url );
        }
        }