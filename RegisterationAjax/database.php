<?php
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = 'root';
$databaseName = 'Registertaion_Ajax';

$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword,$databaseName);
if (!$connection) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
?>