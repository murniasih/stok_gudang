<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['Submit'])){
	
	
//inlcude atau memasukkan file koneksi ke database
include('config.php');
	

$kodesatuan=$_POST['kode_satuan'];
$satuan=$_POST['satuan'];


$sql = "INSERT INTO satuan (kode_satuan, satuan)
VALUES ('$kodesatuan', '$satuan')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location:satuan.php");
 
}
?>

