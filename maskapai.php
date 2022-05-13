<?php
include_once ("config.php");
if(isset($_GET['search'])){
    $search = $_GET['search'];
    $search = strtolower($search);
}else $search = '';
if(isset($_GET['orderby']) and isset($_GET['pos'])){
    $orderby = $_GET['orderby'];
    $pos = $_GET['pos'];
    $result = mysqli_query($mysqli, "SELECT * FROM maskapai ORDER BY $orderby $pos");
}else{
    $pos = '';
    $orderby = '';
    $result = mysqli_query($mysqli, "SELECT * FROM maskapai");
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
    <h1>Daftar Informasi Maskapai</h1>
<h3></h3>
<a href="index.php">Kembali ke MENU</a>
<h3></h3>
<a href="addMaskapai.php">Tambahkan Info Maskapai</a>
    <form action="maskapai.php" method="get">
        <input type="text" name="search">
        <input type="submit" value="Search">
    </form>
    <table width='80%' border=1 cellpanding='10' cellspacing='0'>
<tr>
    <th><?php
        if($pos=='ASC' and $orderby=='NAMA') {
            echo '<a href="maskapai.php?orderby=NAMA&pos=DESC">NAMA</a>';
        }else {
            echo '<a href="maskapai.php?orderby=NAMA&pos=ASC">NAMA</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='ID_TERMINAL') {
            echo '<a href="maskapai.php?orderby=ID_TERMINAL&pos=DESC">ID_TERMINAL</a>';
        }else {
            echo '<a href="maskapai.php?orderby=ID_TERMINAL&pos=ASC">ID_TERMINAL</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='PEGAWAI') {
            echo '<a href="maskapai.php?orderby=PEGAWAI&pos=DESC">PEGAWAI</a>';
        }else {
            echo '<a href="maskapai.php?orderby=PEGAWAI&pos=ASC">PEGAWAI</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='DESTINASI') {
            echo '<a href="maskapai.php?orderby=DESTINASI&pos=DESC">DESTINASI</a>';
        }else {
            echo '<a href="maskapai.php?orderby=DESTINASI&pos=ASC">DESTINASI</a>';
        }
        ?></th>
    <th><?php
        if($pos=='ASC' and $orderby=='PEMASUKAN') {
            echo '<a href="maskapai.php?orderby=PEMASUKAN&pos=DESC">PEMASUKAN</a>';
        }else {
            echo '<a href="maskapai.php?orderby=PEMASUKAN&pos=ASC">PEMASUKAN</a>';
        }
        ?></th>

</tr>
<?php
while ($item = mysqli_fetch_array($result)) {
    
    
    if($search == ''){
        echo "<tr>";
    echo "<td>".$item ['NAMA']."</td>";
    echo "<td>".$item ['ID_TERMINAL']."</td>";
    echo "<td>".$item ['PEGAWAI']."</td>";
    echo "<td>".$item ['DESTINASI']."</td>";
    echo "<td>".$item ['PEMASUKAN']."</td>";
    echo "<td><a href='editMaskapai.php?edit=".$item['NAMA']."'>Edit</a> 
        <a href='deleteMaskapai.php?del=".$item['NAMA']."'>Delete</a>
        </td></tr>";   
    }else{
        if(
            strpos(strtolower($item ['NAMA']), $search)!==false or
            strpos(strtolower($item ['ID_TERMINAL']), $search)!==false or
            strpos(strtolower($item ['PEGAWAI']), $search)!==false or
            strpos(strtolower($item ['DESTINASI']), $search)!==false or
            strpos(strtolower($item ['PEMASUKAN']), $search)!==false
        ){
            echo "<tr>";
            echo "<td>".$item ['NAMA']."</td>";
            echo "<td>".$item ['ID_TERMINAL']."</td>";
            echo "<td>".$item ['PEGAWAI']."</td>";
            echo "<td>".$item ['DESTINASI']."</td>";
            echo "<td>".$item ['PEMASUKAN']."</td>";
            echo "<td><a href='editMaskapai.php?edit=".$item['NAMA']."'>Edit</a> 
                <a href='deleteMaskapai.php?del=".$item['NAMA']."'>Delete</a>
                </td></tr>";  
        }
          
    }        
        








    }
    ?>
</table>
</body>
</html>