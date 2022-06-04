<?php defined('BASEPATH') OR exit('No direct script access allowed');

class View_package extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index($page=false)
	{
            $data = array();
            $table              = 'package';
            $data["menu"]       = "package";
            $data["submenu"]    = "packageview";
            $data['title']      = 'View Package';
            
            $base_url = (ADMINURL.'View_package/index');
            $start = $page;
            $limit = 20;
            $where = array('status !='=>'Deleted');
            $getData = $this->c_model->getfilter($table,$where,$limit,$start, 'id DESC');            
            $countItem = $this->c_model->countitem($table,$where = null);
            $data["pagination"] = pagination($base_url, $countItem, $limit);            
            $data['data'] = $getData;
            $data['countdata'] = $countItem;
            //$data['pconfig']    = $this->c_model->getAll('packageconfig','id DESC');
            admintable('view-package',$data);
        }
        }