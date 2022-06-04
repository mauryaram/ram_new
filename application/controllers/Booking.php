<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function index()
	{
                $data = array();
                $data['setting']       = $this->c_model->getSingle( 'setting',array('id'=>1));
                $slug = $this->uri->segment(1);
                $routmst          = $this->c_model->getSingle( 'th_routmaster',array('slug'=>$slug));
                if(!empty($routmst)){
                $data['sedan']    = $this->c_model->getSingle( 'routconfig', array('vehicleCategory'=>10,'routId'=>$routmst['id']));
                $data['suv']      = $this->c_model->getSingle( 'routconfig', array('vehicleCategory'=>3,'routId'=>$routmst['id']));
                $data['routmst']  = $routmst;
		frontend('frontend/booking',$data);
                }else{
                $pckage          = $this->c_model->getSingle( 'package',array('slug'=>$slug)); 
                $data['package']  = $pckage;
                frontend('frontend/package',$data);    
                }
	}
}
