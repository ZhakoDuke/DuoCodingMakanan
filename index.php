<?php 
require 'functions.php';


$makanan = query("SELECT * FROM menu_makanan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: cursive;
        }
        h1 {
            font-family: cursive;
        }
        a {
            font-family: cursive;
        }
    </style>
</head>
<body>
    <h1>Menu Makanan</h1>
    <a href="tambah.php">Tambah Resep Makanan</a>
    <br><br>

    <table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <th>No.</th>
        <th>Gambar</th>
        <th>Nama Makanan</th>
        <th>Bahan Makanan</th>
        <th>Harga</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $makanan as $mkn ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><img src="img/<?= $mkn["gambar"] ?>"></td>
        <td><?= $mkn["nama"]; ?></td>
        <td><?= $mkn["bahan"]; ?></td>
        <td><?= $mkn["harga"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>
</body>
</html>