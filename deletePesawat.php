<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that data
$tipe = $_GET['tipe'];
$tahun = $_GET['tahun'];
// Delete data row from table based on given id
mysqli_query($mysqli, "DELETE FROM pesawat WHERE TIPE='$tipe' AND TAHUN='$tahun'");
// After delete redirect to Home, so that latest user list will bedisplayed.
header("Location:pesawat.php");
?>
