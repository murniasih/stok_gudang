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
	$id_transaksi_masuk= $_POST['id_transaksi_masuk'];
	$no_faktur= $_POST['no_faktur'];
	$tanggal_masuk= $_POST['tanggal_masuk'];
	$kode_barang= $_POST['kode_barang'];
	$nama_barang= $_POST['nama_barang'];
	$stok= $_POST['stok'];
	$satuan= $_POST['satuan'];
	$jumlah_masuk= $_POST['jumlah_masuk'];
	$total= $_POST['total'];
	
$sql = "insert barang_masuk set no_faktur='$no_faktur',tanggal_masuk='$tanggal_masuk',kode_barang='$kode_barang',nama_barang='$nama_barang', stok='$stok', satuan='$satuan' ,jumlah_masuk='$jumlah_masuk',total='$total' where id_transaksi_masuk ='$id_transaksi_masuk'"; 

if (mysqli_query($conn, $sql)) {
    echo "update successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);
header("location:barang_masuk.php");
?>