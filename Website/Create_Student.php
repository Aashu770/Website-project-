<?php

if($_SERVER['REQUEST_METHOD'] != "POST")
 exit();


// INSERT INTO "table name" (column1, column2, etc.) VALUES (' ".$_POST['textbox1']."','".$_POST['textbox2']."', etc.)";

include "config.php";
$sql = "INSERT INTO Student (Student_ID, Student_Name, Department, Gender, Email, Address) VALUES ('".$_POST['Student_Name5']."','".$_POST['Student_Name6']."','".$_POST['Student_Name7']."',
'".$_POST['Student_Name8']."','".$_POST['Student_Name9']."','".$_POST['Student_Name4']."')";



$result=mysql_query($sql) or die("query error");
echo "1 record added";


?>