<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Add_packagemst extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index()
	{
            $data = array();
            $data["menu"]="packagemst";
            $data["submenu"]="packagemstadd";
            
            $table = 'packagemaster';
            $data['title']      = ( !empty($id) ? 'Update' : 'Add') .' Package Master';
            $id                     = $this->input->get('id');
            $getdata                = $this->c_model->getSingle( $table,array('md5(id)'=>$id));
            $data['packageName']    = !empty($getdata['packageName']) ? $getdata['packageName'] :"";
            $data['status']         = !empty($getdata['status']) ? $getdata['status'] :"";
            $data['id']             = !empty($getdata['id']) ? $getdata['id'] :"";
            $data['button']         = !empty($id) ? 'Update' :'Submit';
            adminform('add-packagemst',$data);
        }
        public function updsave(){
                   $id = $this->input->get('id');
                   $url = !empty($id) ? ADMINURL.'Add_packagemst?id='.$id :ADMINURL.'Add_packagemst';
                   $table = 'packagemaster';
                   $this->form_validation->set_rules('packageName','Package Name','required');

                   if($this->form_validation->run() == FALSE){
                    $this->session->set_flashdata('errors', validation_errors());
                    redirect($url);
                    }else{
                    $pdata = $this->security->xss_clean($this->input->post());
                    $saveup['packageName']  = $pdata['packageName'];
                    $saveup['status']       = !empty($pdata['status'])? $pdata['status'] :'Inactive';;
                    $saveup['slug']         = seoUrl($pdata['packageName']);
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
                   $url = ADMINURL.'View_packagemst';
                   $table = 'packagemaster';
               $saveupdate = $this->c_model->saveupdate($table, array('status'=>'Deleted'), null ,array('md5(id)'=>$id));
               $this->session->set_flashdata('success','Record Deleted successfully!!!');
               redirect($url );
        }
        }