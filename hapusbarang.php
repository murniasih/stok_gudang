<?php
include("config.php");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

	$ID=$_GET["no"];
	
	$sql="delete from tabel_barang where id_barang=$id_barang";
	
if (mysqli_query($conn, $sql)) {
    echo "Deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location:barang.php");
?>