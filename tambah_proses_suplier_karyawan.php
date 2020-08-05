<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['Submit'])){
	
//inlcude atau memasukkan file koneksi ke database
include('config.php');
	
$kode_suplier=$_POST['kode_suplier'];
$nama_suplier=$_POST['nama_suplier'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];


$sql = "INSERT INTO tabel_suplier (kode_suplier,nama_suplier,alamat,no_telp)
VALUES ('$kode_suplier', '$nama_suplier','$alamat','$no_telp')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location:suplier_karyawan.php");
 
}
?>