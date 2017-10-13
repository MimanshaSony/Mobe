<?php
$servername = "localhost:3306";
$username = "root";
$password = "Mimansha10";
$dbname = "banking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['login']))
{
$userid=$_POST['userid'];
$password=$_POST['password'];
$qry="SELECT * FROM 'admin' WHERE 'userid'='$userid' AND 'password'='$password'" ;
$run=mysqli_query($conn,$qry);
$row=mysqli_num_rows($run);

if($row<1)
	
{
	?>
	<script>alert('userid or password not match');
	window.open('admin1.php');
	</script>
	<?php
}
else
{
	$data=mysqli_fetch_assoc($run);
}
}
?>
		
