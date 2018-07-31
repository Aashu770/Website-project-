<?php
include "config.php";

// Change "persons" to match the name of the 
// 		table from your database

$showTable="SELECT * FROM Student";
$result=mysql_query($showTable) or die("query error");

echo "<table border cellpadding=6>";
echo"<tr>";
// These are the column lables that will be displayed
echo"<th>Student_ID:</th>";
echo"<th>Student_Name:</th>";
echo"<th>Department:</th>";
echo"<th>Gender:</th>";
echo"<th>Email:</th>";
echo"<th>Address:</th>";

// Change 'FirstName', 'LastName', and 'Age' to 
// 		match columns of your table.
while($info = mysql_fetch_array($result))
	{
		echo"<tr><td>".$info['Student_ID'] . "</td>";
		echo"<td>".$info['Student_Name'] . "</td>";
		echo"<td>".$info['Department'] . "</td>";
		echo"<td>".$info['Gender'] . "</td>";
		echo"<td>".$info['Email'] . "</td>";
		echo"<td>".$info['Address'] . "</td></tr>";
	}
echo "</table>"
?>

