<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that data
$del = $_GET['del'];
// Delete data row from table based on given id
mysqli_query($mysqli, "DELETE FROM bandara WHERE ID_KODE='$del'");
	
// After delete redirect to Home, so that latest user list will bedisplayed.
header("Location:bandara.php");
?>
