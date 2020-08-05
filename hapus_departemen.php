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

	$id_departemen=$_GET["id_departemen"];
	
	$sql="delete from tabel_departemen where id_departemen=$id_departemen";
	
if (mysqli_query($conn, $sql)) {
    echo "Deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location:departemen.php");
?>