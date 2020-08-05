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
$id_suplier=$_GET['id_suplier'];
$kode_suplier=$_GET['kode_suplier'];
$nama_suplier=$_GET['nama_suplier'];
$alamat=$_GET['alamat'];
$no_telp=$_GET['no_telp'];

$sql = "update tabel_suplier set kode_suplier='$kode_suplier',nama_suplier='$nama_suplier', alamat='$alamat', no_telp='$no_telp' where id_suplier='$id_suplier'"; 

if (mysqli_query($conn, $sql)) {
    echo "update successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);
header("location:suplier.php");
?>