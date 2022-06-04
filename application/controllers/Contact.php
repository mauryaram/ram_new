<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
                $data = array();
                $slug = $this->uri->segment(2);
                $data['fleet']       = $this->c_model->getSingle( 'fleet',array('slug'=>$slug));
                $data['setting']       = $this->c_model->getSingle( 'setting',array('id'=>1));
		frontend('frontend/contact-us',$data);
	}
        public function sendinq(){
        $post = $this->security->xss_clean($this->input->post());
        $this->load->view('PHPMailer/sent_mail');
        $u = seoUrl($post["vehicleName"]);
	$vehicleName    = trim($post["vehicleName"]);
        $name           = trim($post["name"]);
        $emailId        = trim($post["emailId"]);
        $price          = trim($post["price"]);
        $mobileNo       = trim($post["mobileNo"]);
        $subject        = trim($post["subject"]);
        $messagex        = trim($post["message"]);
        $cdate          = date('Y-m-d H:i:s');
        
        $subject = "Booking Enquire From Website ".date('Y-m-d H:i:s');
        $message="
        <html>
        <head>
        <title>Booking Enquiry Details</title>
        </head>
        <body>
        <p>Enquiry Details</p>
        <table border='1'>
        <tr>
        <th>Name</th>
        <th>Mobile No</th>
        <th>Email Id</th>
        <th>Vehicle Name</th>
        <th>Price</th>
        <th>Subject</th>
        <th>Message</th>
        </tr>
        <tr>
        <th>".$name."</th>
        <th>".$mobileNo."</th>
        <th>".$emailId."</th>
        <th>".$vehicleName."</th>
        <th>".$price."</th>
        <th>".$subject."</th>
        <th>".$messagex."</th>
        </tr>
        </table>
        </body>
        </html>
        ";
        $save['vehicleName']    = $vehicleName;
        $save['name']           = $name;
        $save['mobileNo']       = $mobileNo;
        $save['emailId']        = $emailId;
        $save['price']          = $price;
        $save['subject']        = $subject;
        $save['message']        = $messagex;
        $save['status']         = 'new';
        $save['creationDate']   = $cdate;
        
        $ok = $this->c_model->saveupdate('contact_us', $save);
          $mail =  send_mail(TO,$message,$subject,cc,FROM,MAILER,HOST,ServerUser,serverPass );
            if (!empty($ok)){
                $this->session->set_flashdata('success','Thank you!. Your enquiry is successfully sent...');
                redirect(FRONTURL.'contact/'.$u);
            }else{
                $this->session->set_flashdata('error',"We're sorry, but something went wrong");
                redirect(FRONTURL.'contact/'.$u);
            }  
        }
}
