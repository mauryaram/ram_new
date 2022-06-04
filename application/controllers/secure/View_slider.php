<?php defined('BASEPATH') OR exit('No direct script access allowed');

class View_slider extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index($page=false)
	{
            $data = array();
            $table              = 'slider';
            $data["menu"]       = "banner";
            $data["submenu"]    = "slider";

            $data['title'] = 'View Slider';
            $base_url = (ADMINURL.'View_slider/index');
            $start = $page;
            $limit = 20;
            $where      = array('status !='=>'Deleted');
            $getData    = $this->c_model->getfilter($table,$where,$limit,$start, 'id DESC');            
            $countItem  = $this->c_model->countitem($table,$where = null);
            $data["pagination"] = pagination($base_url, $countItem, $limit);            
            $data['data'] = $getData;
            $data['countdata'] = $countItem;
            admintable('view-slider',$data);
        
        }
        }