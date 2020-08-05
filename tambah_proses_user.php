<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['Submit'])){
	
	
//inlcude atau memasukkan file koneksi ke database
include('config.php');
	

$nama=$_POST['nama'];
$username=$_POST['username'];
$pasword=$_POST['pasword'];
$hak_akses=$_POST['hak_akses'];
$sql = "INSERT INTO tabel_user (nama, username,pasword,hak_akses)
VALUES ('$nama', '$username','$pasword','$hak_akses')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location:user_corner.php");
 
}
?>

