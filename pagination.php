<html>
  
      <h1>Paging Using PHP</h1>
   
   <body>
 <?php
$servername = "localhost:3306";
$username = "root";
$password = "Mimansha10";
$dbname = "test_db";
 $rec_limit = 10;
 echo "farz"
// Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	echo "ds";
    die("Connection failed: " . $conn->connect_error);
}
         
         /* Get total number of records */
         $sql = "SELECT count(emp_id) FROM employee ";
         $retval = mysql_query($conn, $sql);
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
         $row = mysql_fetch_array($retval, MYSQL_NUM );
         $rec_count = $row[0];
         
         if( isset($_GET{'page'} ) ) {
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }
         
         $left_rec = $rec_count - ($page * $rec_limit);
         $sql = "SELECT emp_id, emp_name, emp_salary ". 
            "FROM employee ".
            "LIMIT $offset, $rec_limit";
            
         $retval = mysql_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
         
         while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
            echo "EMP ID :{$row['emp_id']}  <br> ".
               "EMP NAME : {$row['emp_name']} <br> ".
               " EMP SALARY : {$row['emp_salary']} <br> ".
               "--------------------------------<br>";
         }
         
         if( $page > 0 ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a> |";
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a>";
         }
         
         mysql_close($conn);
      ?>
      
   </body>
</html>