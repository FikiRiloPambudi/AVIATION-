<?php
include_once ("config.php");
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $search = strtolower($search);
}else $search = '';
if(isset($_GET['orderby']) and isset($_GET['pos'])){
    $orderby = $_GET['orderby'];
    $pos = $_GET['pos'];
    $result = mysqli_query($mysqli, "SELECT * FROM pesawat ORDER BY $orderby $pos");
}else{
    $pos = '';
    $orderby = '';
    $result = mysqli_query($mysqli, "SELECT * FROM pesawat");
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>AVIATION+</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Informasi Pesawat</h1>
<h3></h3>
<a href="index.php">Kembali ke MENU</a>
<h3></h3>
<a href="addPesawat.php">Tambahkan Info Pesawat</a>
    <form action="pesawat.php" method="get">
        <input type="text" name="search">
        <input type="submit" value="Search">
    </form>
    <table width='80%' border=1 cellpanding='10' cellspacing='0'>
<tr>
    <th><?php
        if($pos=='ASC' and $orderby=='TIPE') {
            echo '<a href="pesawat.php?orderby=TIPE&pos=DESC">TIPE</a>';
        }else {
            echo '<a href="pesawat.php?orderby=TIPE&pos=ASC">TIPE</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='ID_JADWAL') {
            echo '<a href="pesawat.php?orderby=ID_JADWAL&pos=DESC">ID_JADWAL</a>';
        }else {
            echo '<a href="pesawat.php?orderby=ID_JADWAL&pos=ASC">ID_JADWAL</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='PRODUSEN') {
            echo '<a href="pesawat.php?orderby=PRODUSEN&pos=DESC">PRODUSEN</a>';
        }else {
            echo '<a href="pesawat.php?orderby=PRODUSEN&pos=ASC">PRODUSEN</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='TAHUN') {
            echo '<a href="pesawat.php?orderby=TAHUN&pos=DESC">TAHUN</a>';
        }else {
            echo '<a href="pesawat.php?orderby=TAHUN&pos=ASC">TAHUN</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='MUATAN') {
            echo '<a href="pesawat.php?orderby=MUATAN&pos=DESC">MUATAN</a>';
        }else {
            echo '<a href="pesawat.php?orderby=MUATAN&pos=ASC">MUATAN</a>';
        }
        ?></th>

</tr>
<?php
while ($item = mysqli_fetch_array($result)) {
        if($search == ''){
            echo "<tr>";
            echo "<td>".$item ['TIPE']."</td>";
            echo "<td>".$item ['ID_JADWAL']."</td>";
            echo "<td>".$item ['PRODUSEN']."</td>";
            echo "<td>".$item ['TAHUN']."</td>";
            echo "<td>".$item ['MUATAN']."</td>";
            echo "<td><a href='editPesawat.php?edit1=".$item['TIPE']."&edit2=".$item['TAHUN']."'>Edit</a> 
            <a href='deletePesawat.php?tipe=".$item['TIPE']."&tahun=".$item['TAHUN']."'>Delete</a>
            </td></tr>"; 
        }else{
            if(
                strpos(strtolower($item ['TIPE']), $search)!==false or
                strpos(strtolower($item ['ID_JADWAL']), $search)!==false or
                strpos(strtolower($item ['PRODUSEN']), $search)!==false or
                strpos(strtolower($item ['TAHUN']), $search)!==false or
                strpos(strtolower($item ['MUATAN']), $search)!==false
            ){
                echo "<tr>";
                echo "<td>".$item ['TIPE']."</td>";
                echo "<td>".$item ['ID_JADWAL']."</td>";
                echo "<td>".$item ['PRODUSEN']."</td>";
                echo "<td>".$item ['TAHUN']."</td>";
                echo "<td>".$item ['MUATAN']."</td>";
                echo "<td><a href='editPesawat.php?edit1=".$item['TIPE']."&edit2=".$item['TAHUN']."'>Edit</a> 
                <a href='deletePesawat.php?tipe=".$item['TIPE']."&tahun=".$item['TAHUN']."'>Delete</a>
                </td></tr>"; 
            }
              
        }
        









    }

    ?>
</table>
</body>
</html>