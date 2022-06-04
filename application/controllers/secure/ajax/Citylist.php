<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Citylist extends CI_Controller {

	public function __construct() {
            parent::__construct();
            }
	public function city()
	{  
        $statedata = array();
         $countryId = $this->input->post('country_id');
        if($countryId){
            $statedata = $this->c_model->getAll('states', 'state_name ASC', array('country_id'=>$countryId),null );
        }
        if(!empty($statedata)){
        echo '<option value="">Select state</option>';
        foreach ($statedata as $key => $value) {
           echo '<option value="'.$value['id'].'">'.$value['state_name'].'</option>';
        }
        }else{
            echo '<option value="">State not available</option>';
        }
        }
        
}