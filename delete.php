<?php
// call file connect.php
include_once("connect.php");

// get id from URL
$id = $_GET['id'];

// Delete rows of data by id
mysqli_query($mysqli, "DELETE FROM tbsiswa WHERE id=$id");

// Redirect page to show.php
header("Location:show.php");

?>