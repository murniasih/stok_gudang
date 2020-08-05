<?php
if(isset($_POST['Submit'])){
include('config.php');

$no_faktur=$_POST['no_faktur'];	
$tanggal_masuk=$_POST['tanggal_masuk'];
$nama_suplier=$_POST['nama_suplier'];
$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$stok=$_POST['stok'];
$satuan=$_POST['satuan'];
$jumlah_masuk=$_POST['jumlah_masuk'];
$total=$_POST['total'];

$sql = "INSERT INTO barang_masuk (no_faktur,tanggal_masuk,nama_suplier,kode_barang,nama_barang,stok,satuan,jumlah_masuk,total)
VALUES ('$no_faktur','$tanggal_masuk','$nama_suplier','$kode_barang','$nama_barang','$stok','$satuan', '$jumlah_masuk','$total')";

if (mysqli_query($conn, $sql)) {
   header("location:barang_masuk.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);

 
}
?>

