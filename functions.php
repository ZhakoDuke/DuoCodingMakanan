<?php 
$conn = mysqli_connect("Localhost", "root", "", "makanan");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $bahan = htmlspecialchars($data["bahan"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO menu_makanan VALUES('', '$nama', '$bahan', '$harga', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>