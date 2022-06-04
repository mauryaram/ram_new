<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
public function __construct() {
            parent::__construct();
            $this->load->library('form_validation'); 
            //adminlogincheck();
            }
	public function index()
	{
           $data = array();
           $table   = 'setting';
           $id      = md5(1);
           $data["menu"]        = "setting";
           $data["submenu"]     = "setting";
           $data['title']       = ( !empty($id) ? 'Update' : 'Add') .' Setting';
           $getdata             = $this->c_model->getSingle( $table,array('md5(id)'=>$id));
           
           $data['compneyName']     = !empty($getdata['compneyName']) ? $getdata['compneyName'] : "";
           $data['headOffice']      = !empty($getdata['headOffice']) ? $getdata['headOffice'] : "";
           $data['branchOffice']    = !empty($getdata['branchOffice']) ? $getdata['branchOffice'] : "";
           $data['careMobile']      = !empty($getdata['careMobile']) ? $getdata['careMobile'] : "";
           $data['personalMobile']  = !empty($getdata['personalMobile']) ? $getdata['personalMobile'] : "";
           $data['careEmail']       = !empty($getdata['careEmail']) ? $getdata['careEmail'] : "";
           $data['personalEmail']   = !empty($getdata['personalEmail']) ? $getdata['personalEmail'] : "";
           
           $data['fbLink']          = !empty($getdata['fbLink']) ? $getdata['fbLink'] : "";
           $data['twitterLink']     = !empty($getdata['twitterLink']) ? $getdata['twitterLink'] : "";
           $data['yuoutubeLink']    = !empty($getdata['yuoutubeLink']) ? $getdata['yuoutubeLink'] : "";
           $data['googleLink']      = !empty($getdata['googleLink']) ? $getdata['googleLink'] : "";
           $data['logo']            = !empty($getdata['logo']) ? $getdata['logo'] : "";
           
           $data['status']          = !empty($getdata['status']) ? $getdata['status'] : "";
           $data['id']              = !empty($id) ? $id : "";
           $data['button']          = !empty($id) ? 'Update' :'Submit';
          // print_r($this->input->post());exit;
           if(!empty($this->input->post())){
            $this->input->post('compneyName') ? $this->form_validation->set_rules('compneyName','Compney Name ','required') : '';
            $this->input->post('careMobile') ? $this->form_validation->set_rules('careMobile','Mobile No','required') : '';

           if($this->form_validation->run() == false){ 
            $this->session->set_flashdata('warning','Please fill all mandatory fields!' );
           }
            if( $this->form_validation->run() != false){
            $postd = $this->security->xss_clean($this->input->post());
            if(isset($postd['compneyName'])){
            $dataarray['compneyName']       = trim( $postd['compneyName'] );
            $dataarray['careMobile']        = trim( $postd['careMobile'] );
            $dataarray['personalMobile']    = trim( $postd['personalMobile'] );
            $dataarray['careEmail']         = trim( $postd['careEmail'] );
            $dataarray['personalEmail']     = trim( $postd['personalEmail'] );
            $dataarray['headOffice']        = trim( $postd['headOffice'] );
            $dataarray['branchOffice']      = trim( $postd['branchOffice'] );
            
            $dataarray['fbLink']            = trim( $postd['fbLink'] );
            $dataarray['twitterLink']       = trim( $postd['twitterLink'] );
            //$dataarray['logo']              = trim( $postd['logo'] );
            $dataarray['yuoutubeLink']      = trim( $postd['yuoutubeLink'] );
            $dataarray['googleLink']        = trim( $postd['googleLink'] );
            $dataarray['googleLink']        = trim( $postd['googleLink'] );
            $dataarray['updationDate']      = date('Y-m-d H:i:s');
                     
            if(!empty($_FILES['image']['name'])){
                $config['upload_path']   = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name']     = $this->security->xss_clean($_FILES['image']['name']);
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                /*-------------Unlink Image----------*/
                $file  = 'uploads/'.$postd['oldlogo'];
                if(is_file($file) && @unlink($file)){
                }
                /*-------------Unlink Image----------*/
                /*-------------Unlink Image----------*/
                if($this->upload->do_upload('image')){
                    $uploadData                 = $this->upload->data();
                    $image                      = $uploadData['file_name'];
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = './uploads/'.$image;
                    $config['new_image']        = './uploads/';
                    $config['maintain_ratio']   = TRUE;
                    $config['quality']          = '100%'; 
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize(); 
                    }  
                }
            
            $dataarray['logo']              = !empty($image) ? $image : $postd['oldlogo'];
            $where      = !empty($id)? array('md5(id)'=>$id) :null;
            $message    = !empty($id)? 'Updated' :'Added';
            $url        = !empty($id)? 'Setting' :'Setting';
            $saveupdate = $this->c_model->saveupdate($table, $dataarray, null,$where );
            if(!empty($saveupdate)){
                $this->session->set_flashdata('success','Record Is '.$message.' successfully!!!');
                redirect(ADMINURL.$url );
            }else{
                $this->session->set_flashdata('error','Some Thing Went Wrong!!!!'); 
                redirect($url);
            }
            }
           }}
            
           adminform('upd-setting',$data); 
        }
}