<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>AVIATION+</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Informasi keseluruhan</h1>
<h3></h3>
<a href="index.php">Kembali ke MENU</a>
<h3></h3>
<table border="1">
    <tr><th>TIPE</th><th>PRODUSEN</th><th>TAHUN</th><th>MUATAN</th><th>JADWAL</th><th>TERMINAL</th><th>LOKASI</th><th>ID_KODE</th><th>KETINGGIAN</th><th>NAMA</th><th>DESTINASI</th><th>PEGAWAI</th><th>PEMASUKAN</th></tr>
    <?php
    include 'config.php';
    $infolengkap = mysqli_query($mysqli, "SELECT * FROM infokeseluruhan");
    $no=1;
    while ($row = mysqli_fetch_array($infolengkap)){
        echo "<tr>";
        echo "<td>".$row['TIPE']."</td>";
        echo "<td>".$row['PRODUSEN']."</td>";
        echo "<td>".$row['TAHUN']."</td>";
        echo "<td>".$row['MUATAN']."</td>";
        echo "<td>".$row['JADWAL']."</td>";
        echo "<td>".$row['TERMINAL']."</td>";
        echo "<td>".$row['LOKASI']."</td>";
        echo "<td>".$row['ID_KODE']."</td>";
        echo "<td>".$row['KETINGGIAN']."</td>";
        echo "<td>".$row['NAMA']."</td>";
        echo "<td>".$row['DESTINASI']."</td>";
        echo "<td>".$row['PEGAWAI']."</td>";
        echo "<td>".$row['PEMASUKAN']."</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>