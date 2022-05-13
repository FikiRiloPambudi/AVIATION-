<?php
include 'config.php';
if (isset($_GET['edit1'])){
    $edit1 = $_GET['edit1'];
    $edit2 = $_GET['edit2'];
$result = mysqli_query($mysqli, "SELECT * FROM pesawat WHERE TIPE='$edit1' AND TAHUN='$edit2'");
$result = mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Edit Pesawat</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php">Halaman utama</a>
<br/><br/>
<h2>Edit Pesawat</h2>
<form action="editPesawat.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>tipe</td>
<td><input type="text" name="tipe" value="<?php echo $result['TIPE']?>"></td>
</tr>
<tr>
<td>jadwal</td>
<td><input type="text" name="jadwal" value="<?php echo $result['ID_JADWAL']?>"></td>
</tr>
<tr>
<td>produsen</td>
<td><input type="text" name="produsen" value="<?php echo $result['PRODUSEN']?>"></td>
</tr>
<tr>
<td>tahun</td>
<td><input type="text" name="tahun" value="<?php echo $result['TAHUN']?>"></td>
</tr>
<tr>
<td>muatan</td>
<td><input type="text" name="muatan" value="<?php echo $result['MUATAN']?>"></td>
<td><input type="hidden" name="id1" value="<?php echo $result['TIPE']?>"></td>
<td><input type="hidden" name="id2" value="<?php echo $result['TAHUN']?>"></td>
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
$tipe = $_POST['tipe'];
$jadwal = $_POST['jadwal'];
$produsen = $_POST['produsen'];
$tahun = $_POST['tahun'];
$muatan = $_POST['muatan'];
$id1 = $_POST['id1'];
$id2 = $_POST['id2'];
// include database connection file
include_once("config.php");
// Insert user data into table
mysqli_query($mysqli, "UPDATE pesawat SET TIPE='$tipe',ID_JADWAL='$jadwal',PRODUSEN='$produsen',TAHUN='$tahun',MUATAN='$muatan' WHERE TIPE='$id1' AND TAHUN='$id2'");
// Show message when user added
header("location:pesawat.php");
}
?>
</body>
</html>
