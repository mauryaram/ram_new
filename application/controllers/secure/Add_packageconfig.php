<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Add_packageconfig extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index()
	{
            $data               = array();
            $table              = 'packagemaster';
            $data["menu"]       = "packageconfig";
            $data["submenu"]    = "packageconfigadd";
            $data['pmaster']    = $this->c_model->getAll( 'packagemaster','id DESC',array('status'=>'Active'));
            
            $data['title']          = ( !empty($id) ? 'Update' : 'Add') .' Package Config';
            $id                     = $this->input->get('id');
            $getdata                = $this->c_model->getSingle('packageconfig',array('md5(id)'=>$id));
            $data['packageId']      = !empty($getdata['packageId']) ? $getdata['packageId'] :"";
            $data['heading']        = !empty($getdata['heading']) ? $getdata['heading'] :"";
            $data['altitude']       = !empty($getdata['altitude']) ? $getdata['altitude'] :"";
            $data['summer']         = !empty($getdata['summer']) ? $getdata['summer'] :"";
            $data['winter']         = !empty($getdata['winter']) ? $getdata['winter'] :"";
            $data['mrp']            = !empty($getdata['mrp']) ? $getdata['mrp'] :"";
            $data['offerPrice']     = !empty($getdata['offerPrice']) ? $getdata['offerPrice'] :"";
            $data['days']           = !empty($getdata['days']) ? $getdata['days'] :"";
            $data['night']          = !empty($getdata['night']) ? $getdata['night'] :"";
            $data['description']    = !empty($getdata['description']) ? $getdata['description'] :"";
            $data['status']         = !empty($getdata['status']) ? $getdata['status'] :"";
            $data['id']             = !empty($getdata['id']) ? $getdata['id'] :"";
            $data['button']         = !empty($id) ? 'Update' :'Submit';
            
            adminform('add-packageconfig',$data);
        }
        public function updsave(){
            $id = $this->input->get('id');
            $table = 'packageconfig';
            $url = !empty($id) ? ADMINURL.'Add_packageconfig?id='.md5($id) :ADMINURL.'Add_packageconfig';
            $this->form_validation->set_rules('packageId','Package Name','required');
            $this->form_validation->set_rules('heading','Heading','required');
            $this->form_validation->set_rules('description','Description','required');
            if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect($url);
            }else{
            $pdata = $this->security->xss_clean($this->input->post());
            $saveup['packageId']    = $pdata['packageId'];
            $saveup['heading']      = $pdata['heading'];
            $saveup['slug']         = seoUrl($pdata['heading']);
            $saveup['altitude']     = $pdata['altitude'];
            $saveup['summer']       = $pdata['summer'];
            $saveup['winter']       = $pdata['winter'];
            $saveup['days']         = $pdata['days'];
            $saveup['night']        = $pdata['night'];
            $saveup['mrp']          = $pdata['mrp'];
            $saveup['offerPrice']   = $pdata['offerPrice'];
            $saveup['description']  = $pdata['description'];
            $saveup['status']       = $pdata['status'];
            
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
                $url = ADMINURL.'View_packageconfig';
                $table = 'packageconfig';
                $saveupdate = $this->c_model->saveupdate($table, array('status'=>'Deleted'), null ,array('md5(id)'=>$id));
                $this->session->set_flashdata('success','Record Deleted successfully!!!');
                redirect($url );
        }
        }