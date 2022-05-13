<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title>Add Pesawat</title>
</head>
<body>
<a href="index.php">Halaman utama</a>
<br/><br/>
<h2>Tambah Pesawat</h2>
<form action="addPesawat.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>tipe</td>
<td><input type="text" name="tipe"></td>
</tr>
<tr>
<td>jadwal</td>
<td><input type="text" name="jadwal"></td>
</tr>
<tr>
<td>produsen</td>
<td><input type="text" name="produsen"></td>
</tr>
<tr>
<td>tahun</td>
<td><input type="text" name="tahun"></td>
</tr>
<tr>
<td>muatan</td>
<td><input type="text" name="muatan"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="Submit"
value="Add"></td>
</tr>
</table>
</form>
<?php
// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
$tipe = $_POST['tipe'];
$jadwal = $_POST['jadwal'];
$produsen = $_POST['produsen'];
$tahun = $_POST['tahun'];
$muatan = $_POST['muatan'];
// include database connection file
include_once("config.php");
// Insert user data into table
$result = mysqli_query($mysqli, "INSERT INTO pesawat(TIPE,ID_JADWAL,PRODUSEN,TAHUN,MUATAN) VALUES('$tipe','$jadwal','$produsen','$tahun','$muatan')");
// Show message when user added
header("location:pesawat.php");
}
?>
</body>
</html>
