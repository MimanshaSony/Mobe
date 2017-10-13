<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = 'Mimansha10';
$dbname = 'paging';


// Create connection
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
echo"fghj";
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />
</head>

<body>



<?php 
echo"juuusism";
 include("pagination/function.php");
 $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 5; //if you want to dispaly 10 records per page then you have to change here
    	$startpoint = ($page * $limit) - $limit;
        $statement = "table1 order by name asc"; //you have to pass your query over here

		$res= mysql_query("select * from {$statement} LIMIT {$startpoint} , {$limit}");
		while($row=mysql_fetch_array($res))
		{
		echo $row["name"];
		echo "<br>";
		}

?>

<?php
echo "<div id='pagingg' >";
echo pagination($statement,$limit,$page);
echo "</div>";
?>
</body>
</html>
