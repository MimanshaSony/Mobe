<html>
<head>
<h1>
	<u><center>Change my Password</u>
</h1>
</head>
<body>
	<form action="" method="post">
		<table align="center" border="1" width="40%" margin="top-50%">
			<tr><td> Usernfghame:</td>
				<td> <input type="text" name="username" placeholder="enter your username" required="required" />
					</td>
			</tr>
			<tr><td> Current Password:</td>
				<td> <input type="password" name="currentpassword" placeholder="enter your current password" required="required"/>
					</td>
			</tr>
			<tr><td>New Password:</td>
				<td> <input type="password" name="newpassword" placeholder="enter your new password" required="required"/>
					</td>
			</tr>
			<tr><td>Conform Password:</td>
				<td> <input type="password" name="conformpassword" placeholder="conform password" required="required"/>
				</td>
			</tr>
			<tr>
			 <td colspan="2" align="center"><input type="submit" name="submit" value="Submit" /></td>
				</tr>
				</table>
	</form>

</body>
</html>
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
window.open('change.php','_self');
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