<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gudang";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id_barang=$_GET['id_barang'];
$kode_barang=$_GET['kode_barang'];
$nama_barang=$_GET['nama_barang'];

$sql = "INSERT INTO tabel_barang (id_barang, kode_barang, nama_baranng)
VALUES ('$id_barang', '$kode_barang', '$nama_barang')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location:barang.php");
?>
