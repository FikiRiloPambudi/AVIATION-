<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Add Bandara</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php">Halaman utama</a>
<br/><br/>
<h2>Tambah Bandara</h2>
<form action="addBandara.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>jadwal</td>
<td><input type="text" name="jadwal"></td>
</tr>
<tr>
<td>kode</td>
<td><input type="text" name="kode"></td>
</tr>
<tr>
<td>lokasi</td>
<td><input type="text" name="lokasi"></td>
</tr>
<tr>
<td>terminal</td>
<td><input type="text" name="terminal"></td>
</tr>
<tr>
<td>ketinggian</td>
<td><input type="text" name="ketinggian"></td>
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
$jadwal = $_POST['jadwal'];
$kode = $_POST['kode'];
$lokasi = $_POST['lokasi'];
$terminal = $_POST['terminal'];
$ketinggian = $_POST['ketinggian'];
// include database connection file
include_once("config.php");
// Insert user data into table
$result = mysqli_query($mysqli, "INSERT INTO bandara(JADWAL,ID_KODE,LOKASI,TERMINAL,KETINGGIAN) VALUES('$jadwal','$kode','$lokasi','$terminal','$ketinggian')");
header("location:bandara.php");
}
?>
</body>
</html>
