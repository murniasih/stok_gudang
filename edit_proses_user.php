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
$id_user=$_GET['id_barang'];
$nama=$_GET['kode_barang'];
$username=$_GET['nama_barang'];
$pasword=$_GET['pasword'];
$hak_akses=$_GET['hak_akses'];

$sql = "update tabel_user set nama='$nama',username='$username', pasword='$pasword', hak_akses='$hak_akses' where id_user ='$id_user'"; 

if (mysqli_query($conn, $sql)) {
    echo "update successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);
header("location:tambahuser.php");
?>