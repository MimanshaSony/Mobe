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
echo "hiii Mimansha here 5nd time";
echo "hiii Mimansha here 2nd time";

echo "hiii Mimansha here 3nd time";
$sql = "SELECT userid,password FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<pre>";
        echo "userid: " . $row["userid"]. " - password: " . $row["password"].  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
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
