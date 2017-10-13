<html>
<body>
<form method="post" action="new16.php">
  Email: <input name="email" id="email" type="text" /><br />

  Message:<br />
  <textarea name="message" id="message" rows="15" cols="40"></textarea><br />

  <input type="submit" value="Submit" />
</form></body></html>
<?php

  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  // here we use the php mail function
  // to send an email to:
  // you@example.com
  mail( "bradm@inmotiontesting.com", "Feedback Form Results",$message, "From: $email" );
?>
