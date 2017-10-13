<html>
<head>
<h1>
	<u><center>Admin new Login</u>
</h1>
</head>
<body>
	<form align="center" action=<?php $_PHP_SELF ?> method="post">
		<table align="center">
			<tr>
				<td>Username: <input type="text" name="username"
					placeholder="enter your username"></td>
			</tr>
			<tr>
				<td>Password: <input type="password" name="password"
					placeholder="enter your password">
				</td>
			</tr>
			<tr>
				<td><input type="submit" onclick="check()" name="login"
					value="Login" /></td>
				<td><input type="reset" value="Reset" /></td>
			</tr>
			<tr>
				<td><a href="change.php">Change Password</a></td>
				<td align=right><a href="">Forget Password</a></td>
			</tr>
		</table>
	</form>

</body>
</html>

<?php
include ('dbcon.php');
if (isset ( $_POST ['login'] )) {
	function check() {
		$username = $_POST ['username'];
		$password = $_POST ['password'];
		if ($username == "") {
			?>
<script>alert('invalid userid');
//window.open('new3.php','_self');
																	</script>
<?php
		} else if ($password == "") {
			?>
<script>alert('invalid password');
//window.open('new3.php','_self');
														</script>
<?php
		} else if (strlen($username) < 5) {
			?>
<script>alert('weak userid');
//window.open('new3.php','_self');
											</script>
<?php
		} else if (strlen($password) < 5) {
			?>
<script>alert('weak password');
//window.open('new3.php','_self');
					</script>
<?php
		}
	}
	check ();
	
	//$username = $_POST ['username'];
	//$password = $_POST ['password'];
	//if ($_POST ['username'] || $_POST ['password']) {
		// echo "hello<br/>";
		// if (preg_match("/[^A-Za-z'-]/",$_POST['username'] )) {
		// echo ("invalid username and username should be alpha");
		// return;
		// }
		// if (preg_match("/[^A-Za-z'-]/",$_POST['password'] )) {
		// echo ("invalid password and password should be alpha");
		// return;
		// }
		
		// $qry="SELECT * FROM admin" ;
		
		$qry = "SELECT `username`,`password` FROM `admin` WHERE username= '$username' AND password= '$password'";
		// $qry="SELECT username,password FROM admin WHERE username = 'user1' AND password = 'pass1'"
		// $result= $conn->query($qry);
		// $result = mysqli_query($con,"SELECT `note` FROM `glogin_users` WHERE email = '$email'");
		
		// if ($result->num_rows > 0) {
		// // output data of each row
		// while($row = $result->fetch_assoc()) {
		// echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		// }
		// } else {
		// echo "0 results";
		// }
		
		if ($result = mysqli_query ( $conn, $qry )) {
			
			// $result = mysqli_query ( $con, $qry );
			// Return the number of rows in result set
			$rowcount = mysqli_num_rows ( $result );
			// printf("Result set has %d rows.\n",$rowcount);
			// echo "Result set has %d rows.\n", $rowcount;

			
			// Free result set
			
			if ($rowcount < 1) 
        {
			
				?>
<script>alert('username or password not match');
	//window.open('new3.php','_self');
	</script>
<?php
			} else {
				?>
<script>alert('username and password  match');
	//window.open('new3.php','_self');
	</script> <?php
			}
		}
		;
	}

?>