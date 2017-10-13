<?php
$servername = "localhost:3306";
$username = "root";
$password = "Mimansha10";
$dbname = "pics";

if(isset($_post['submit'])) {
$imagename = $_FILES['img1']['name'];
$tempimgname = $_FILES['img']['tmp_name'];

$conn = new mysqli($servername, $username, $password, $dbname);
move_upload_file($tempimgname,"image/$imagename");
$sql = "INSERT INTO 'pics' ('images') value ('$imagename')";
$run = mysqli_query($conn.$sql);
echo "upload successfully";
}
?>