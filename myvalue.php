<?php
$servername = "localhost:3306";
$username = "root";
$password = "Mimansha10";
$dbname = "banking";

$connection = mysql_connect($servername,$username,$password,$dbname);
if (!$connection) {
    die("Database connection failed: " . mysql_error());
}
$db_select = mysql_select_db($dbname,$connection);
if (!$db_select) {
    die("Database selection failed: " . mysql_error());
}

$query = mysql_query("SELECT * FROM mydata WHERE name  Mimansha sony ");

while ($rows = mysql_fetch_array($query)) { 
   $name = $rows['Name'];
   $email = $rows['Email'];
   $website = $rows['Website'];
   $comment = $rows['Comment'];
   $gender = $rows['Gender'];

   echo "$name<br>$email<br>$website<br>$comment<br>$gender<br><br>";      
} 
?>