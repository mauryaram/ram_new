<?php defined('BASEPATH') OR exit('No direct script access allowed');

class View_enquiry extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index()
	{
            $data = array();
            $data['title'] = 'View Enquiry';
            admintable('view-enquiry',$data);
        }
        }