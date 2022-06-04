<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {

	public function home()
	{
                $data = array();
                $post = $this->security->xss_clean($this->input->post());
                $this->load->view('PHPMailer/sent_mail');
               // print_r($pdata);exit;
	$vehicleName    = getftcharray('vehiclecategory', array('id'=>$post["vehicleName"]), 'categoryname');;
        $name           = trim($post["name"]);
        $mobileNo       = trim($post["mobileNo"]);
        $bookingDate    = trim($post["bookingDate"]);
        $bookingTime    = trim($post["bookingTime"]);
        $picuPaddress   = trim($post["picuPaddress"]);
        $dropAddress    = trim($post["dropAddress"]);
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
        <th>Vehicle Name</th>
        <th>Booking Date/ Time</th>
        <th>Picup Address</th>
        <th>Drop Address</th>
        </tr>
        <tr>
        <th>".$name."</th>
        <th>".$mobileNo."</th>
        <th>".$vehicleName."</th>
        <th>".$bookingDate." / ".$bookingTime."</th>
        <th>".$picuPaddress."</th>
        <th>".$dropAddress."</th>
        </tr>
        </table>
        </body>
        </html>
        ";
        $save['vehicleName']    = $vehicleName;
        $save['name']           = $name;
        $save['mobileNo']       = $mobileNo;
        $save['bookingDate']    = $bookingDate;
        $save['bookingTime']    = $bookingTime;
        $save['picuPaddress']   = $picuPaddress;
        $save['dropAddress']    = $dropAddress;
        $save['status']         = 'new';
        $save['creationDate']   = $cdate;
        
        $ok = $this->c_model->saveupdate('enquiry', $save);
          $mail =  send_mail(TO,$message,$subject,cc,FROM,MAILER,HOST,ServerUser,serverPass );
            if (!empty($ok)){
                $this->session->set_flashdata('success','Thank you!. Your message is successfully sent...');
                redirect(FRONTURL);
            }else{
                $this->session->set_flashdata('error',"We're sorry, but something went wrong");
                redirect(FRONTURL);
            }
	}
        
        public function booking()
	{
                $data = array();
                $post = $this->security->xss_clean($this->input->post());
                $this->load->view('PHPMailer/sent_mail');
               // print_r($pdata);exit;
	$vehicleName    = getftcharray('vehiclecategory', array('id'=>$post["vehicleName"]), 'categoryname');
        $routName       = trim($post["routName"]);
        $routId         = trim($post["routid"]);
        
        $name           = trim($post["name"]);
        $mobileNo       = trim($post["mobileNo"]);
        $bookingDate    = trim($post["bookingDate"]);
        $bookingTime    = trim($post["bookingTime"]);
        $picuPaddress   = trim($post["picuPaddress"]);
        $dropAddress    = trim($post["dropAddress"]);
        $messagex        = trim($post["message"]);
        $url        = trim($post["url"]);
        
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
        <th>Vehicle Name</th>
        <th>Rout Name</th>
        <th>Booking Date/ Time</th>
        <th>Picup Address</th>
        <th>Drop Address</th>
        <th>Message</th>
        </tr>
        <tr>
        <th>".$name."</th>
        <th>".$mobileNo."</th>
        <th>".$vehicleName."</th>
        <th>".$routName."</th>
        <th>".$bookingDate." / ".$bookingTime."</th>
        <th>".$picuPaddress."</th>
        <th>".$dropAddress."</th>
        <th>".$messagex."</th>
        </tr>
        </table>
        </body>
        </html>
        ";
        $save['vehicleName']    = $vehicleName;
        $save['routid']         = $routId;
        $save['routName']       = $routName;
        $save['message']        = $messagex;
        $save['name']           = $name;
        $save['mobileNo']       = $mobileNo;
        $save['bookingDate']    = $bookingDate;
        $save['bookingTime']    = $bookingTime;
        $save['picuPaddress']   = $picuPaddress;
        $save['dropAddress']    = $dropAddress;
        $save['status']         = 'new';
        $save['creationDate']   = $cdate;
        
        $ok = $this->c_model->saveupdate('booking_enquiry', $save);
          $mail =  send_mail(TO,$message,$subject,cc,FROM,MAILER,HOST,ServerUser,serverPass );
            if (!empty($ok)){
                $this->session->set_flashdata('success','Thank you!. Your message is successfully sent...');
                redirect(FRONTURL.$url);
            }else{
                $this->session->set_flashdata('error',"We're sorry, but something went wrong");
                redirect(FRONTURL.$url);
            }
	}
        
        
        public function package(){
             $data = array();
                $post = $this->security->xss_clean($this->input->post());
                $this->load->view('PHPMailer/sent_mail');
              // print_r($post);exit;
	$vehicleName    = getftcharray('vehiclecategory', array('id'=>$post["vehicleName"]), 'categoryname');
        $packageName       = trim($post["packageName"]);
        $pakcageId         = trim($post["pakcageId"]);
        
        $name           = trim($post["name"]);
        $mobileNo       = trim($post["mobileNo"]);
        $bookingDate    = trim($post["bookingDate"]);
        $bookingTime    = trim($post["bookingTime"]);
        $picuPaddress   = trim($post["picuPaddress"]);
        $messagex       = trim($post["message"]);
        $url            = trim($post["url"]);
        
        $cdate          = date('Y-m-d H:i:s');
        
        $subject = "Package Enquire From Website ".date('Y-m-d H:i:s');
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
        <th>Vehicle Name</th>
        <th>Package Name</th>
        <th>Booking Date/ Time</th>
        <th>Picup Address</th>
        <th>Message</th>
        </tr>
        <tr>
        <th>".$name."</th>
        <th>".$mobileNo."</th>
        <th>".$vehicleName."</th>
        <th>".$packageName."</th>
        <th>".$bookingDate." / ".$bookingTime."</th>
        <th>".$picuPaddress."</th>
        <th>".$messagex."</th>
        </tr>
        </table>
        </body>
        </html>
        ";
        $save['vehicleName']    = $vehicleName;
        $save['pakcageId']         = $pakcageId;
        $save['packageName']       = $packageName;
        $save['message']        = $messagex;
        $save['name']           = $name;
        $save['mobileNo']       = $mobileNo;
        $save['bookingDate']    = $bookingDate;
        $save['bookingTime']    = $bookingTime;
        $save['picuPaddress']   = $picuPaddress;
        $save['status']         = 'new';
        $save['creationDate']   = $cdate;
        
        $ok = $this->c_model->saveupdate('package_enquiry', $save);
          $mail =  send_mail(TO,$message,$subject,cc,FROM,MAILER,HOST,ServerUser,serverPass );
            if (!empty($ok)){
                $this->session->set_flashdata('success','Thank you!. Your message is successfully sent...');
                redirect(FRONTURL.$url);
            }else{
                $this->session->set_flashdata('error',"We're sorry, but something went wrong");
                redirect(FRONTURL.$url);
            }
        }
        
        
        
        
        
        
        
        
        
        
        public function sendenquiry()
	{
                $data = array();
                $post = $this->security->xss_clean($this->input->post());
                $this->load->view('PHPMailer/sent_mail');
               // print_r($pdata);exit;
        $triptype       = trim($post["triptype"]);
        $cabs         = trim($post["cabs"]);
        $picupaddress           = trim($post["picupaddress"]);
        $dropaddress       = trim($post["dropaddress"]);
        $mobile    = trim($post["mobile"]);
        $picupdate    = trim($post["picupdate"]);
        $picuptime   = trim($post["picuptime"]);
        
        $cdate          = date('Y-m-d H:i:s');
        $url = base_url();
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
        <th>Trip Type</th>
        <th>Mobile No</th>
        <th>Vehicle Name</th>
        <th>Booking Date/ Time</th>
        <th>Picup Address</th>
        <th>Drop Address</th>
        </tr>
        <tr>
        <th>".$triptype."</th>
        <th>".$mobile."</th>
        <th>".$cabs."</th>
        <th>".$picupdate." / ".$picuptime."</th>
        <th>".$picupaddress."</th>
        <th>".$dropaddress."</th>
        </tr>
        </table>
        </body>
        </html>
        ";
        $save['triptype']    = $triptype;
        $save['cabs']       = $cabs;
        $save['mobileNo']        = $mobile;
        $save['bookingDate']       = $picupdate;
        $save['bookingTime']    = $picuptime;
        $save['picuPaddress']    = $picupaddress;
        $save['dropAddress']    = $dropaddress;
        $save['status']         = 'new';
        $save['creationDate']   = $cdate;
        
        $ok = $this->c_model->saveupdate('th_enquiry_tab', $save);
          $mail =  send_mail(TO,$message,$subject,cc,FROM,MAILER,HOST,ServerUser,serverPass );
            if (!empty($ok)){
                $this->session->set_flashdata('success','Thank you!. Your message is successfully sent...');
                redirect(FRONTURL.$url);
            }else{
                $this->session->set_flashdata('error',"We're sorry, but something went wrong");
                redirect(FRONTURL.$url);
            }
	}
        
}
