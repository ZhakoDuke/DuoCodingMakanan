<?php 
require 'functions.php';

if( isset($_POST["submit"]) ) {
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Resep Telah Ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Resep Gagal Ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Resep</title>
    <style>
        table {
            font-family: cursive;
        }
        h1 {
            font-family: cursive;
        }
    </style>
</head>
<body>
    <h1>Menambah Resep Makanan</h1>

    <form action="" method="POST">
    <table>
        <tr>
        <td><label for="nama">Nama_Makanan </label></td>
        <td>:</td>
        <td><input type="text" name="nama" id="nama" required><td>
        </tr>
        <tr>
        <td><label for="bahan">Bahan_Makanan </label></td>
        <td>:</td>
        <td><input type="text" name="bahan" id="bahan" required><td>
        </tr>
        <tr>
        <td><label for="harga">Harga_Makanan </label></td>
        <td>:</td>
        <td><input type="text" name="harga" id="harga" required><td>
        </tr>
        <tr>
        <td><label for="gambar">Gambar_Makanan </label></td>
        <td>:</td>
        <td><input type="file" name="gambar" id="gambar" required><td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Tambah!</button></td>
        </tr>
    </table>
    </form>
</body>
</html>