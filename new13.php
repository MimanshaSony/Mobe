<?php
require_once 'mailer/class.phpmailer.php'; 
// creates object
$mail = new PHPMailer(true); 
if(isset($_POST['btn_send']))
{
	
$email = strip_tags($_POST['email']);
$subject = strip_tags($_POST['subject']);
$text_message = "Hello"; 
$message = strip_tags($_POST['message']);

try
{
$mail->IsSMTP(); 
$mail->isHTML(true);
$mail->SMTPDebug = 0;

$mail->SMTPAuth = true; 
$mail->SMTPSecure = "ssl"; 
$mail->Host = "smtp.gmail.com"; 
$mail->Port = '465'; 
$mail->AddAddress($email);

$mail->Username ="mimansa.sony@gmail.com"; 
$mail->Password ="Mimansha10"; 
$mail->SetFrom('mimansa.sony@gmail.com','Mimansha');
$mail->AddReplyTo("mimansa.sony@gmail.com","Mimansha");
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = $message;

if($mail->Send());
  
{
echo "Hi, Your mail successfully sent to".$email." ";

}
}
catch(phpmailerException $ex)
{
$msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
}
} 
?>