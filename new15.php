<?php
$mailto = $_POST['mail_to'];
$mailSub = $_POST['mail_sub'];
$mailMsg = $_POST['mail_msg'];
require 'mailer/class.phpmailer.php'; 
// creates object
$mail = new PHPMailer(); 

$mail->IsSMTP(); 

$mail->SMTPDebug = 0;

$mail->SMTPAuth = true; 
$mail->SMTPSecure = "ssl"; 
$mail->Host = "smtp.gmail.com"; 
$mail->Port = '465'; 
$mail->IsHTML(true);

$mail->Username ="Mimanshasony@gmail.com"; 
$mail->Password ="shampy12345"; 
$mail->SetFrom("Mimanshasony@gmail.com");
$mail->Subject = $mailSub;
$mail->Body = $mailMsg;
$mail->AddAddress($mailto);

if(!$mail->Send()) 
{
echo " mail not sent ";
}
else
{
echo "Mail Send";
} 
?>