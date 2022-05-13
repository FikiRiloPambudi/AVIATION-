<?php
include 'config.php';
if (isset($_GET['edit'])){
    $edit = $_GET['edit'];
$result = mysqli_query($mysqli, "SELECT * FROM bandara WHERE ID_KODE='$edit'");
$result = mysqli_fetch_array($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Edit Bandara</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php">Halaman utama</a>
<br/><br/>
<h2>Edit Bandara</h2>
<form action="editBandara.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>jadwal</td>
<td><input type="text" name="jadwal" value="<?php echo $result['JADWAL']?>"></td>
</tr>
<tr>
<td>kode</td>
<td><input type="text" name="kode" value="<?php echo $result['ID_KODE']?>"></td>
</tr>
<tr>
<td>lokasi</td>
<td><input type="text" name="lokasi" value="<?php echo $result['LOKASI']?>"></td>
</tr>
<tr>
<td>terminal</td>
<td><input type="text" name="terminal" value="<?php echo $result['TERMINAL']?>"></td>
</tr>
<tr>
<td>ketinggian</td>
<td><input type="text" name="ketinggian" value="<?php echo $result['KETINGGIAN']?>"></td>
<td><input type="hidden" name="id" value="<?php echo $result['ID_KODE']?>"></td>
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
$jadwal = $_POST['jadwal'];
$kode = $_POST['kode'];
$lokasi = $_POST['lokasi'];
$terminal = $_POST['terminal'];
$ketinggian = $_POST['ketinggian'];
$id = $_POST['id'];
// update user data into table
mysqli_query($mysqli, "UPDATE bandara SET JADWAL='$jadwal', ID_KODE='$kode', LOKASI='$lokasi', TERMINAL='$terminal', KETINGGIAN='$ketinggian' WHERE ID_KODE='$id'");

header("location:bandara.php");
}
?>
</body>
</html>
