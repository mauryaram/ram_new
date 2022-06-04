<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
        public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        }
	public function index()
	{
                $this->load->view('admin/login');
	}
         public function check(){

            $this->form_validation->set_rules('txt_email','Email','required');
            $this->form_validation->set_rules('txt_password','Password','required');

            // check the form has any error (any miss of rules we set in above codes

                   if($this->form_validation->run() == FALSE){
                    $this->session->set_flashdata('errors', validation_errors());
                    redirect(ADMINURL.'Login');
                    }else{
                       $post = $this->security->xss_clean($this->input->post());
                       $datai['userId']     = $post['txt_email'];
                       $datai['password']   = md5($post['txt_password']);
                       $datai['status']     = 'Active';
                       $query = $this->c_model->getSingle('login',$datai);
                       if(!empty($query['userId'] == $post['txt_email'] && $query['password'] == MD5($post['txt_password']))) {
                       $data = [
                       'id' => $query['id'],
                       'userid' => $query['username'],
                       'password' => $query['password']
                       ];
                $this->session->set_userdata($data);
                redirect(ADMINURL.'Dashboard');
                } else {
                $this->session->set_flashdata('Error', 'Username or password is wrong!');
                redirect(ADMINURL.'Login');
            }
           }
        }
}
