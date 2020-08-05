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
$id_departemen=$_GET['id_departemen'];
$kode_departemen=$_GET['kode_departemen'];
$nama_departemen=$_GET['nama_departemen'];
$pic=$_GET['pic'];


$sql = "update tabel_departemen set kode_departemen='$kode_departemen',nama_departemen='$nama_departemen', pic='$pic' where id_departemen='$id_departemen'"; 

if (mysqli_query($conn, $sql)) {
    echo "update successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);
header("location:departemen.php");
?>