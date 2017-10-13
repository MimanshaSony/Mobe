<!DOCTYPE html>
<html>
<head>
<title>Insert Image in MySql using PHP</title>
</head>
<body>
<?php
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
$image = $_FILES['image']['tmp_name'];
$img = file_get_contents($image);
$con = mysqli_connect('localhost','root','Mimansha10','pics') ;
if($con==true)
{
	echo "connected";
}
$sql = "insert into images (image) values(?)";
$stmt = mysqli_prepare($con,$sql);
mysqli_stmt_bind_param($stmt, "s",$img);
mysqli_stmt_execute($stmt);
$check = mysqli_stmt_affected_rows($stmt);
if($check==1){
$msg = 'Image Successfully UPloaded';
}else{
$msg = 'Error uploading image';
}
mysqli_close($con);
}
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image" />
<button>Upload</button>
</form>
<?php
echo $msg;
?>
<?php

if(isset($_POST["submit"]))
{
	$res=mysqli_query($con,"select * from images");
echo "<table>";
echo "<tr>";
while($row=mysqli_fetch_array($res))
{
echo "<td>"; 
//echo '<img src="C:\Users\Mimansha Sony\Desktop\_logo.png,'.base64_encode($row['image'] ).'" height="200" width="200"/>';
//echo "<br>"; ?><a href="insert.php?id=<?php echo $row["id"]; ?>">Delete</a>
<?php echo "</td>";
} 
echo "</tr>";
echo "</table>";
}
?>
</body>
</html>