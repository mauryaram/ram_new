<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
public function __construct() {
            parent::__construct();
            //adminlogincheck();
            }
	public function index()
	{
            $data = array();
            $data["menu"]="dashboard";
            $data["submenu"]="dashboard";
            $data['title'] = "Dashboard";
            dashboard('dashboard',$data);
	}
}
