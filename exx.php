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
   // setup formatting
	$bold = ( !$row['msg_read'] ? 'font-weight: bold;' : '');
	
	// echo out the contents of each row into a table
	echo "<tr style=''>";
	echo '<td style="' . $bold . '">' . $row['name'] . '</td>';
	echo '<td style="' . $bold . '">' . $row['email'] . '</td>';
	echo '<td style="' . $bold . '">' . $row['website'] . '</td>';
	//echo '<td><a href="?page_id=1174&MI=' . $row['message_id'] . '">Read</a> </td>';
	//echo '<td><a href="?page_id=1301&MI=' . $row['message_id'] . '">Delete</a> </td>';
	echo "</tr>";
   }
} else {
    echo "0 results";
}
$conn->close();
?>
