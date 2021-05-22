<?php
//Edit the following fields in order to establish a connection with MySQL
//********************************************************************************
error_reporting(1);

$dbhost	= ""; //Leave this as 'localhost' once uploaded on a server
$dbuser	= ""; //Username that is allowed to access the database
$dbpass	= ""; //Password
$dbname	= ""; //Name of the database

$conn= mysqli_connect($dbhost,$dbuser,$dbpass, $dbname) or die ("could not connect to mysql"); 

mysqli_select_db($dbname);

?>
