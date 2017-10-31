<html>

<head>hy bye

<h1 align="center"><b><u> BANKING DOST</u></b> </h1>
</head>

<body>

<form action="mydata.php" method="post" enctype="multipart/form-data">
<table align="center" border="1" width="60%" margin="top-50%">
<tr>
<td> Name </td>
<td> <input type="text" placeholder="enter your name" name="name" required="required" /></td>
</tr>
<tr> 
<td> Email </td>
<td> <input type="Email" placeholder="enter your Email" name="email" required="required" /></td>

</tr>
<tr>
<td> Website </td>
<td> <input type="text" name="website" placeholder="enter your website"> </td>
</tr>
<tr>
<td> Comment</td>
<td> <textarea name="comment" rows="5" cols="40"></textarea> </td>
</tr>
<tr>
<td> Gender </td>
<td> Male <input type="radio" name="gender" value="male" required="required"/> Female <input type="radio" name="gender" value="female" required="required"/></td>
<tr>
<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
</tr>
<tr>
<td colspan="2" align="center"> <input type="submit" name="submit" value="Submit"/>   </td>
</tr>

</table>
</form>

</body>

</html>

<?php
if (isset ( $_POST ['submit'] )) {
require("class.PHPMailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "mimanshasony@gmail.com";  // specify main and backup server
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
}
?>