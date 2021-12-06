<?php

$databaseHost = 'localhost';
$databaseName = 'dbsiswa';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost,$databaseUsername, $databasePassword,$databaseName);

if (!$mysqli){
    die("Connection fail" . mysqli_connect_error());
} 
?>