<html>
<head>
<h1>
	<u><center>Admin new Login</u>
</h1>
</head>
<body>
	<form align="center" action="<?php $_PHP_SELF ?>" method="post">
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
<script>alert('invalid userid');	</script>
<?php
		} else if ($password == "") {
			?>
<script>alert('invalid password');	</script>
<?php
		} else if (strlen($username) < 5) {
			?>
<script>alert('weak userid');	</script>
<?php
		} else if (strlen($password) < 5) {
			?>
<script>alert('weak password');	</script>
<?php
		}
	}
	check ();
		$qry = "SELECT `username`,`password` FROM `admin` WHERE username= '$username' AND password= '$password'";
		if ($result = mysqli_query ( $conn, $qry )) {
			$rowcount = mysqli_num_rows ( $result );
			if ($rowcount < 1) 
			{
				?>
<script>alert('username or password not match'); </script>
<?php
			} else  {
				?>
<script>alert('username and password  match');	</script>
// <?php
			}
			
		}
		;
	}

?>
<?php
if(isset($_LOGIN['id']))
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

$sql = "SELECT name, email, website, comment, gender FROM mydata";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<pre>";
        echo "name: " . $row["name"]. " - email: " . $row["email"]. " - website: " . $row["website"]." - comment: " . $row["comment"]." - gender: " . $row["gender"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
