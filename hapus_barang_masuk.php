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

	$id_transaksi_masuk=$_GET["id_transaksi_masuk"];
	
	$sql="delete from barang_masuk where id_transaksi_masuk=$id_transaksi_masuk";
	
if (mysqli_query($conn, $sql)) {
    echo "Deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);
header("location:barang_masuk.php");
?>