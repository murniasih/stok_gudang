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
	$id_transaksi_masuk= $_GET['id_transaksi_masuk'];
	$no_faktur= $_GET['no_faktur'];
	$tanggal_masuk= $_GET['tanggal_masuk'];
	$nama_suplier= $_GET['nama_suplier'];
	$kode_barang= $_GET['kode_barang'];
	$nama_barang= $_GET['nama_barang'];
	$stok= $_GET['stok'];
	$satuan= $_GET['satuan'];
	$jumlah_masuk= $_GET['jumlah_masuk'];
	$total= $_GET['total'];
	
$sql = "update barang_masuk set no_faktur='$no_faktur',tanggal_masuk='$tanggal_masuk',nama_suplier=$nama_suplier,kode_barang='$kode_barang',nama_barang='$nama_barang', stok='$stok', satuan='$satuan' ,jumlah_masuk='$jumlah_masuk',total='$total' where id_transaksi_masuk ='$id_transaksi_masuk'"; 

if (mysqli_query($conn, $sql)) {
    echo "update successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);
header("location:barang_masuk.php");
?>