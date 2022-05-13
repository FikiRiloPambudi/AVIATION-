<?php
include 'config.php';
if (isset($_GET['edit'])){
    $edit = $_GET['edit'];
$result = mysqli_query($mysqli, "SELECT * FROM maskapai WHERE NAMA='$edit'");
$result = mysqli_fetch_array($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Edit Maskapai</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php">Halaman utama</a>
<br/><br/>
<h2>Edit Maskapai</h2>
<form action="editMaskapai.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>nama</td>
<td><input type="text" name="nama" value="<?php echo $result['NAMA']?>"></td>
</tr>
<tr>
<td>terminal</td>
<td><input type="text" name="terminal" value="<?php echo $result['ID_TERMINAL']?>"></td>
</tr>
<tr>
<td>destinasi</td>
<td><input type="text" name="destinasi" value="<?php echo $result['DESTINASI']?>"></td>
</tr>
<tr>
<td>pegawai</td>
<td><input type="text" name="pegawai" value="<?php echo $result['PEGAWAI']?>"></td>
</tr>
<tr>
<td>pemasukan</td>
<td><input type="text" name="pemasukan" value="<?php echo $result['PEMASUKAN']?>"></td>
<td><input type="hidden" name="id" value="<?php echo $result['NAMA']?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="Submit"
value="Edit"></td>
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
$id = $_POST['id'];
// Insert user data into table
print_r($_POST);
mysqli_query($mysqli, "UPDATE maskapai SET NAMA='$nama', ID_TERMINAL='$terminal' , DESTINASI='$destinasi', PEGAWAI='$pegawai', PEMASUKAN='$pemasukan' WHERE NAMA='$id'");

// Show message when user added
header("location:maskapai.php");
}
?>
</body>
</html>
