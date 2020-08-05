<?php
if(isset($_POST['Submit'])){
include('config.php');

$no_faktur_keluar=$_POST['no_faktur_keluar'];	
$tanggal_keluar=$_POST['tanggal_keluar'];
$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$stok=$_POST['stok'];
$satuan=$_POST['satuan'];
$departemen=$_POST['departemen'];
$jumlah_keluar=$_POST['jumlah_keluar'];
$total=$_POST['total'];

$sql = "INSERT INTO barang_keluar (no_faktur_keluar,tanggal_keluar,kode_barang,nama_barang,stok,satuan,departemen,jumlah_keluar,total)
VALUES ('$no_faktur_keluar','$tanggal_keluar', '$kode_barang','$nama_barang','$stok','$satuan', '$departemen','$jumlah_keluar','$total')";

if (mysqli_query($conn, $sql)) {
   header("location:barang_keluar.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);

 
}
?>

