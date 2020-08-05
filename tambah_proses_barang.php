<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['Submit'])){
	
	
//inlcude atau memasukkan file koneksi ke database
include('config.php');
	

$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$stok=$_POST['stok'];
$satuan=$_POST['satuan'];
$sql = "INSERT INTO barang (kode_barang, nama_barang,stok,satuan)
VALUES ('$kode_barang', '$nama_barang','$stok','$satuan')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location:barang.php");
 
}
?>

