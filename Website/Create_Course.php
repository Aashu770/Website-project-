<?php

if($_SERVER['REQUEST_METHOD'] != "POST")
 exit();

include "config.php";
// INSERT INTO "table name" (column1, column2, etc.) VALUES (' ".$_POST['textbox1']."','".$_POST['textbox2']."', etc.)";
$sql="INSERT INTO Course (Course_ID, Mode, Department) VALUES ('".$_POST['Student_Name0']."','".$_POST['Student_Name3']."','".$_POST['Student_Name1']."')";

$result=mysql_query($sql) or die("query error");
echo "1 record added";
?>