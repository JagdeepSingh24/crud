<?php 

$hostname= "localhost";
$username= "root";
$password= "root";
$databasename= "jagdeeptest";

$connection= mysqli_connect($hostname,$username,$password,$databasename);

if(!$connection){
	die("Unable to connect to database: " .mysqli_connect_error());
}
?>