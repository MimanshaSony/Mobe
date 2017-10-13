<?php
echo '<table border="1" cellpadding="10">';
echo '<tr><th>From</th> <th>Subject</th> <th>Date</th></tr>';
// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array($selectresult))
{
// echo out the contents of each row into a table
echo '<tr style="'.($row['read'] ? 'font-weight:bold;' : '').'">';
echo '<td>' . $row['from_user'] . '</td>';
echo '<td>' . $row['message_title'] . '</td>';
echo '<td>' . $row['date'] . '</td>';
echo '<td><a href="?page_id=1174&MI=' . $row['message_id'] . '">Read</a> </td>';
echo '<td><a href="?page_id=1301&MI=' . $row['message_id'] . '">Delete</a> </td>';
echo "</tr>";
}

// close table>
echo "</table>";  
?>