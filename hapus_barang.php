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

	$id_barang=$_GET["id_barang"];
	
	$sql="delete from barang where id_barang=$id_barang";
	
if (mysqli_query($conn, $sql)) {
    echo "Deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);
header("location:barang.php");
?>