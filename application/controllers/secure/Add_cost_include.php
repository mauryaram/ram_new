<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Add_cost_include extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index()
	{
            $data               = array();
             $id = $this->input->get('id');
            $table              = 'packagemaster';
            $data["menu"]       = "packageconfig";
            $data["submenu"]    = "packageconfigadd";
            $data["title"]      = "Add Cost Include";
            $data['pdetail']    = $this->c_model->getSingle( 'packageconfig',array('md5(id)'=>$id));
            adminform('add-cost-include',$data);
        }
        public function updsave(){
           $pdata = $this->security->xss_clean($this->input->post());
           $table = 'packagecostinclude';
           $url = ADMINURL.'Add_cost_include?id='. md5($pdata['pid']);
           $delete = $this->c_model->delete($table,array('packageConfigId'=>$pdata['pid']));
           foreach ($pdata['cost'] as $key => $value){
                $save['packageConfigId'] = $pdata['pid'];
                $save['text'] = $value;
                $query = $this->c_model->saveupdate($table,$save);
            }
            $this->session->set_flashdata('success','Record Added successfully!!!');
            redirect($url );
        }
}