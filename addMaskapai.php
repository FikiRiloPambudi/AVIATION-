<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Add Maskapai</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php">Halaman utama</a>
<br/><br/>
<h2>Tambah Maskapai</h2>
<form action="addMaskapai.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>nama</td>
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td>terminal</td>
<td><input type="text" name="terminal"></td>
</tr>
<tr>
<td>destinasi</td>
<td><input type="text" name="destinasi"></td>
</tr>
<tr>
<td>pegawai</td>
<td><input type="text" name="pegawai"></td>
</tr>
<tr>
<td>pemasukan</td>
<td><input type="text" name="pemasukan"></td>
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
$nama = $_POST['nama'];
$terminal = $_POST['terminal'];
$destinasi = $_POST['destinasi'];
$pegawai = $_POST['pegawai'];
$pemasukan = $_POST['pemasukan'];
// include database connection file
include_once("config.php");
// Insert user data into table
$result = mysqli_query($mysqli, "INSERT INTO maskapai(NAMA,ID_TERMINAL,DESTINASI,PEGAWAI,PEMASUKAN) VALUES('$nama','$terminal','$destinasi','$pegawai','$pemasukan')");
// Show message when user added
header("location:maskapai.php");
}
?>
</body>
</html>
