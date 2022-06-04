<?php

 
 function send_mail($to,$msz,$sub, $cc,$from,$mailer,$host,$ServerUser,$serverPass )
 {

	 
 $email = $from;
 $message = $msz;
require("class.phpmailer.php");
 
$mail = new PHPMailer();
 
// set mailer to use SMTP
$mail->IsSMTP();
 $mail->FromName = $mailer;
$mail->Host = $host;  // specify main and backup server
 
$mail->SMTPAuth = true;     // turn on SMTP authentication
 
// When sending email using PHPMailer, you need to send from a valid email address
// In this case, we setup a test email account with the following credentials:
// email: send_from_phpmailer@bradm.inmotiontesting.com
// pass: password
$mail->Username = $ServerUser;  // SMTP username
$mail->Password = $serverPass; // SMTP password
 
// $email is the user's email address the specified
// on our contact us page. We set this variable at
// the top of this page with:
// $email = $_REQUEST['email'] ;
$mail->From = $email;
 
// below we want to set the email address we will be sending our email to.
$mail->AddAddress($to, $mailer);
$mail->AddAddress($cc, $mailer);
$mail->addCC($cc); 
// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);
 
$mail->Subject = $sub;
 
// $message is the user's message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST['message'] ;
$mail->Body    = $message;
$mail->AltBody = $message;
 
if(!$mail->Send())
{
    echo "Message could not be sent. <p>";
    echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
 
echo "Message has been sent";

}
?>