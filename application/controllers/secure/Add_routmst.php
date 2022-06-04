<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Add_routmst extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index()
	{
            $data = array();
            $data["menu"]="routmst";
            $data["submenu"]="routmstadd";
            
            $table = 'routmaster';
            $data['title']          = ( !empty($id) ? 'Update' : 'Add') .' Rout Master';
            $id                     = $this->input->get('id');
            $getdata                = $this->c_model->getSingle( $table,array('md5(id)'=>$id));
            $data['fromm']          = !empty($getdata['fromm']) ? $getdata['fromm'] :"";
            $data['too']            = !empty($getdata['too']) ? $getdata['too'] :"";
            $data['tollTax']        = !empty($getdata['tollTax']) ? $getdata['tollTax'] :"";
            $data['parkingCharge']  = !empty($getdata['parkingCharge']) ? $getdata['parkingCharge'] :"";
            $data['description']    = !empty($getdata['description']) ? $getdata['description'] :"";
            $data['status']         = !empty($getdata['status']) ? $getdata['status'] :"";
            $data['id']             = !empty($getdata['id']) ? $getdata['id'] :"";
            $data['button']         = !empty($id) ? 'Update' :'Submit';
            adminform('add-routmst',$data);
            $this->load->view('admin/qlite');
        }
        public function updsave(){
                   $id = $this->input->get('id');
                   $url = !empty($id) ? ADMINURL.'Add_routmst?id='.md5($id) :ADMINURL.'Add_routmst';
                   $table = 'routmaster';
                   $this->form_validation->set_rules('fromm','From','required');

                   if($this->form_validation->run() == FALSE){
                    $this->session->set_flashdata('errors', validation_errors());
                    redirect($url);
                    }else{
                    $pdata = $this->security->xss_clean($this->input->post());
                    $saveup['fromm']            = $pdata['fromm'];
                    $saveup['too']              = $pdata['too'];
                    $saveup['tollTax']          = $pdata['tollTax'];
                    $saveup['parkingCharge']    = $pdata['parkingCharge'];
                    $saveup['description']      = !empty($pdata['description']) ? $pdata['description'] :"";
                    $saveup['status']           = !empty($pdata['status'])? $pdata['status'] :'Inactive';;
                    $saveup['slug']             = seoUrl($pdata['fromm']).'-to-'.seoUrl($pdata['too']);
                    if(!empty($id)){
                    $saveup['updationDate']     = date('Y-m-d H:i:s');
                    }else{
                    $saveup['creationDate']     = date('Y-m-d H:i:s');  
                    }
                    $where      = !empty($id)? array('id'=>$id) :null;
                    $message    = !empty($id)? 'Updated' :'Added';
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
                   $url = ADMINURL.'View_routmst';
                   $table = 'routmaster';
               $saveupdate = $this->c_model->saveupdate($table, array('status'=>'Deleted'), null ,array('md5(id)'=>$id));
               $this->session->set_flashdata('success','Record Deleted successfully!!!');
               redirect($url );
        }
        }