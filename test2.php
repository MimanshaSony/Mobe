<?php

$servername = "localhost:3306";
$username = "root";
$password = "Mimansha10";
$dbname = "pics";


if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $conn= mysqli_connect($servername,$username,$password,$dbname);
    $sql = "insert into images (image) values('$img')";
 
    $stmt = mysqli_prepare($conn,$sql);
 
    
    mysqli_stmt_execute($stmt);
 
    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        echo 'Successfullly UPloaded';
    }else{
        echo 'Could not upload';
    }
    
}
?>