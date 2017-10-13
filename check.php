<?php
include ('dbcon.php');

if (isset ( $_POST ['submit'] )) {
	
		$username = $_POST ['username'];
		$password = $_POST ['currentpassword'];
		
		$qry = "SELECT `username`,`password` FROM `admin` WHERE username= '$username' AND password= '$password'";
		
		if ($result = mysqli_query ( $conn, $qry )) {
			
			$rowcount = mysqli_num_rows ( $result );
	
		if ($rowcount < 1) 

			{ 
				?>
<script>alert('username or password not match');
window.open('change.php');
	</script>

 <?php
			} else {
        $newpass = $_POST ['newpassword'];
		//$conformpass = $_POST ['conformpassword'];
		$sql = "UPDATE admin SET password='$newpass' WHERE username='$username'";

           if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
} 

			}
		}
		;
	}

?>