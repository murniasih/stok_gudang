<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['Submit'])){
	
//inlcude atau memasukkan file koneksi ke database
include('config.php');
	
$kode_departemen=$_POST['kode_departemen'];
$nama_departemen=$_POST['nama_departemen'];
$pic=$_POST['pic'];



$sql = "INSERT INTO tabel_departemen (kode_departemen,nama_departemen,pic)
VALUES ('$kode_departemen', '$nama_departemen','$pic')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location:departemen.php");
 
}
?>