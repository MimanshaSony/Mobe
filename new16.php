<?php
require("class.PHPMailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "mimanshasony@gmail.com";  // SMTP username
$mail->Password = "shampy12345"; // SMTP password

$mail->From = "mimanshasony@gmail.com";
$mail->FromName = "Mimansha";
$mail->AddAddress("greatgreen55445@gmail.com", "faraz");
$mail->AddAddress("mimanshasony@gmail.com");                  // name is optional
$mail->AddReplyTo("mimanshasony@gmail.com", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
/*$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
$mail->AddAttachment("/tmp/image.jpg", "new.jpg");*/    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "New Complain";
$mail->Body    = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>