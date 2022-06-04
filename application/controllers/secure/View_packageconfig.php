<?php defined('BASEPATH') OR exit('No direct script access allowed');

class View_packageconfig extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index($page=false)
	{
            $data = array();
            $data["menu"]       = "packageconfig";
            $data["submenu"]    = "packageconfigview";
            $data['title']      = 'View Package Config';
            
            $base_url = (ADMINURL.'View_packageconfig/index');
            $table = 'packageconfig';
            $start = $page;
            $limit = 20;
            $where = array('status !='=>'Deleted');
            $getData = $this->c_model->getfilter($table,$where,$limit,$start, 'id DESC');            
            $countItem = $this->c_model->countitem($table,$where = null);
            $data["pagination"] = pagination($base_url, $countItem, $limit);            
            $data['data'] = $getData;
            $data['countdata'] = $countItem;
            //$data['pconfig']    = $this->c_model->getAll('packageconfig','id DESC');
            admintable('view-packageconfig',$data);
        }
        }