<?php
$conn = mysqli_connect("localhost", "root", "","ta_fiki" );


$result = mysqli_query($conn, "SELECT * FROM pesawat");
include_once ("config.php");
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
<header>
    <div class="container">
    <h1> AVIATION+</h1>
<h2> INFO SEPUTAR DUNIA PENERBANGAN</h2>
<ul>
<li><a href="infolengkap.php">Info Keseluruhan</a></li>
<li><a href="pesawat.php">Info Pesawat</a></li>
<li><a href="bandara.php">Info Bandara</a></li>
<li><a href="maskapai.php">Info Maskapai</a></li>
</ul>
</div>
</header>
</body>
</html>