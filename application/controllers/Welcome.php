<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
                $data = array();
                $data['setting']       = $this->c_model->getSingle( 'setting',array('id'=>1));
                $data['routmaster']    = $this->c_model->getAll('routconfig','priority ASC',array('status'=>'Active'),'id,routId',$limit = null ,'routId');
                $data['fleet']          = $this->c_model->getAll('fleet','priority ASC',array('status'=>'Active'));
                $data['package']          = $this->c_model->getAll('package','priority ASC',array('status'=>'Active'));
		$data['slider']       = $this->c_model->getAll('slider','id ASC',array('status'=>'Active'));
                frontend('frontend/index',$data);
	}
}
