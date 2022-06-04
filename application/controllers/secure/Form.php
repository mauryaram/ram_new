<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index()
	{
            $data = array();
            adminform('form',$data);
        }
        }