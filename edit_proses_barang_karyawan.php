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
$stok=$_GET['stok'];
$satuan=$_GET['satuan'];

$sql = "update barang set kode_barang='$kode_barang',nama_barang='$nama_barang', stok='$stok', satuan='$satuan' where id_barang ='$id_barang'"; 

if (mysqli_query($conn, $sql)) {
    echo "update successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);
header("location:barang_karyawan.php");
?>