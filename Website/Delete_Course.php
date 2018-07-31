<?php

if($_SERVER['REQUEST_METHOD'] != "POST")
 exit();


// INSERT INTO "table name" (column1, column2, etc.) VALUES (' ".$_POST['textbox1']."','".$_POST['textbox2']."', etc.)";

include "config.php";
$sql = "DELETE FROM Course Where Course_Id = '".$_POST['RemoveCourse']."' ";



$result=mysql_query($sql) or die("query error");
echo "1 record deleted";


?>