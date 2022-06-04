<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Add_configrout extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index()
	{
            $data               = array();
            $table              = 'routconfig';
            $data["menu"]       = "configrout";
            $data["submenu"]    = "configroutadd";
            $data['routmaster']    = $this->c_model->getAll( 'routmaster','id DESC',array('status'=>'Active'));
            
            $data['title']          = ( !empty($id) ? 'Update' : 'Add') .' Rout Config';
            $id                     = $this->input->get('id');
            $getdata                = $this->c_model->getSingle($table,array('md5(id)'=>$id));
            $data['routId']      = !empty($getdata['routId']) ? $getdata['routId'] :"";
            $data['vehicleCategory']        = !empty($getdata['vehicleCategory']) ? $getdata['vehicleCategory'] :"";
            $data['price']       = !empty($getdata['price']) ? $getdata['price'] :"";
            $data['noofperson']         = !empty($getdata['noofperson']) ? $getdata['noofperson'] :"";
            $data['noofbags']         = !empty($getdata['noofbags']) ? $getdata['noofbags'] :"";
            $data['ac']            = !empty($getdata['ac']) ? $getdata['ac'] :"";
            $data['tollTax']     = !empty($getdata['tollTax']) ? $getdata['tollTax'] :"";
            $data['stateTax']           = !empty($getdata['stateTax']) ? $getdata['stateTax'] :"";
            $data['image']          = !empty($getdata['image']) ? $getdata['image'] :"";
            $data['priority']          = !empty($getdata['priority']) ? $getdata['priority'] :"";
            $data['status']         = !empty($getdata['status']) ? $getdata['status'] :"";
            $data['image']          = !empty($getdata['image']) ? $getdata['image'] :"";
            $data['id']             = !empty($getdata['id']) ? $getdata['id'] :"";
            $data['button']         = !empty($id) ? 'Update' :'Submit';
            
            adminform('add-configrout',$data);
        }
        public function updsave(){
            $pdata = $this->security->xss_clean($this->input->post());
            //print_r($pdata);exit;
            $id = $this->input->get('id');
            $table = 'routconfig';
            $url = !empty($id) ? ADMINURL.'Add_configrout?id='.md5($id) :ADMINURL.'Add_configrout';
            $this->form_validation->set_rules('routId','Rout','required');
            if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect($url);
            }else{
            $pdata = $this->security->xss_clean($this->input->post());
            $saveup['routId']               = $pdata['routId'];
            $saveup['vehicleCategory']      = !empty($pdata['vehicleCategory']) ? $pdata['vehicleCategory'] : "";
            $saveup['price']                = !empty($pdata['price']) ? $pdata['price'] : "";
            $saveup['noofperson']           = !empty($pdata['noofperson']) ? $pdata['noofperson'] : "";
            $saveup['noofbags']             = !empty($pdata['noofbags']) ? $pdata['noofbags'] : "";
            $saveup['ac']                   = !empty($pdata['ac']) ? $pdata['ac'] : "";
            $saveup['tollTax']              = !empty($pdata['tollTax']) ? $pdata['tollTax'] : "";
            $saveup['stateTax']             = !empty($pdata['stateTax']) ? $pdata['stateTax'] : "";
            $saveup['priority']             = !empty($pdata['priority']) ? $pdata['priority'] : "";
            $saveup['status']               = !empty($pdata['status']) ? $pdata['status'] : "Inactive";
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
                $url = ADMINURL.'View_configrout';
                $table = 'routconfig';
                $saveupdate = $this->c_model->saveupdate($table, array('status'=>'Deleted'), null ,array('md5(id)'=>$id));
                $this->session->set_flashdata('success','Record Deleted successfully!!!');
                redirect($url );
        }
        }