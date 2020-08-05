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

$id=$_GET['id'];
$kode_satuan=$_GET['kode_satuan'];
$satuan=$_GET['satuan'];


$sql = "update satuan set kode_satuan='$kode_satuan', satuan='$satuan' where id='$id'"; 

if (mysqli_query($conn, $sql)) {
    echo "update successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);
header("location:satuan.php");
?>