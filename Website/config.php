<?php 
// server to connect to 
$server = "localhost"; 
 
// name of the database 
$database = "s_ashah"; 
 
// mysql username to access the database 
$db_user = "s_ashah"; 
 
// mysql password to access the database 
$db_pass = "bradley123"; 
 
//connect to mysql server 
$link = mysql_connect($server, $db_user, $db_pass) or die("Could not connect to Database because ".mysql_error()); 
 
//select the database 
mysql_select_db($database) or die("could not select database because".mysql_error()); 
?>