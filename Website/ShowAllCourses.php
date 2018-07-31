<?php
include "config.php";

// Change "persons" to match the name of the 
// 		table from your database

$showTable="SELECT * FROM Course";
$result=mysql_query($showTable) or die("query error");

echo "<table border cellpadding=3>";
echo"<tr>";
// These are the column lables that will be displayed
echo"<th>Course_ID:</th>";
echo"<th>Mode:</th>";
echo"<th>Department:</th>";

// Change 'FirstName', 'LastName', and 'Age' to 
// 		match columns of your table.
while($info = mysql_fetch_array($result))
	{
		echo"<tr><td>".$info['Course_ID'] . "</td>";
		echo"<td>".$info['Mode'] . "</td>";
		echo"<td>".$info['Department'] . "</td></tr>";
	}
echo "</table>"
?>