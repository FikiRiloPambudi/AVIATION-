<?php
include_once ("config.php");
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $search = strtolower($search);
}else $search = '';
if(isset($_GET['orderby']) and isset($_GET['pos'])){
    $orderby = $_GET['orderby'];
    $pos = $_GET['pos'];
    $result = mysqli_query($mysqli, "SELECT * FROM bandara ORDER BY $orderby $pos");
}else{
    $pos = '';
    $orderby = '';
    $result = mysqli_query($mysqli, "SELECT * FROM bandara");
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
    <h1>Daftar Informasi Bandara</h1>
<h3></h3>
<a href="index.php">Kembali ke MENU</a>
<h3></h3>
<a href="addBandara.php">Tambahkan Info Bandara</a>
    <form action="bandara.php" method="get">
        <input type="text" name="search">
        <input type="submit" value="Search">
    </form>
    <table width='80%' border=1 cellpanding='10' cellspacing='0'>
<tr>
    <th><?php
        if($pos=='ASC' and $orderby=='JADWAL') {
            echo '<a href="bandara.php?orderby=JADWAL&pos=DESC">JADWAL</a>';
        }else {
            echo '<a href="bandara.php?orderby=JADWAL&pos=ASC">JADWAL</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='TERMINAL') {
            echo '<a href="bandara.php?orderby=TERMINAL&pos=DESC">TERMINAL</a>';
        }else {
            echo '<a href="bandara.php?orderby=TERMINAL&pos=ASC">TERMINAL</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='LOKASI') {
            echo '<a href="bandara.php?orderby=LOKASI&pos=DESC">LOKASI</a>';
        }else {
            echo '<a href="bandara.php?orderby=LOKASI&pos=ASC">LOKASI</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='ID_KODE') {
            echo '<a href="bandara.php?orderby=ID_KODE&pos=DESC">ID_KODE</a>';
        }else {
            echo '<a href="bandara.php?orderby=ID_KODE&pos=ASC">ID_KODE</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='KETINGGIAN') {
            echo '<a href="bandara.php?orderby=KETINGGIAN&pos=DESC">KETINGGIAN</a>';
        }else {
            echo '<a href="bandara.php?orderby=KETINGGIAN&pos=ASC">KETINGGIAN</a>';
        }
        ?></th>

</tr>

<?php
while ($item = mysqli_fetch_array($result)) {
    
    if($search == ''){
        echo '<tr>';
        echo "<td>".$item ['JADWAL']."</td>";
        echo "<td>".$item ['TERMINAL']."</td>";
        echo "<td>".$item ['LOKASI']."</td>";
        echo "<td>".$item ['ID_KODE']."</td>";
        echo "<td>".$item ['KETINGGIAN']."</td>";
        echo "<td><a href='editBandara.php?edit=".$item['ID_KODE']."'>Edit</a> 
        <a href='deleteBandara.php?del=".$item['ID_KODE']."'>Delete</a>
        </td></tr>";  
    }else{
        if(
            strpos(strtolower($item ['JADWAL']), $search)!==false or
            strpos(strtolower($item ['TERMINAL']), $search)!==false or
            strpos(strtolower($item ['LOKASI']), $search)!==false or
            strpos(strtolower($item ['ID_KODE']), $search)!==false or
            strpos(strtolower($item ['KETINGGIAN']), $search)!==false
        ){
            echo '<tr>';
            echo "<td>".$item ['JADWAL']."</td>";
            echo "<td>".$item ['TERMINAL']."</td>";
            echo "<td>".$item ['LOKASI']."</td>";
            echo "<td>".$item ['ID_KODE']."</td>";
            echo "<td>".$item ['KETINGGIAN']."</td>";
            echo "<td><a href='editBandara.php?edit=".$item['ID_KODE']."'>Edit</a> 
            <a href='deleteBandara.php?del=".$item['ID_KODE']."'>Delete</a>
            </td></tr>";  
        }
          
    }
}
    ?>
</table>
</body>
</html>