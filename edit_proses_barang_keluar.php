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
	$id_transaksi_keluar= $_GET['id_transaksi_keluar'];
	$no_faktur_keluar= $_GET['no_faktur_keluar'];
	$tanggal_keluar= $_GET['tanggal_keluar'];
	$nama_departemen= $_GET['nama_departemen'];
	$kode_barang= $_GET['kode_barang'];
	$nama_barang= $_GET['nama_barang'];
	$stok= $_GET['stok'];
	$satuan= $_GET['satuan'];

	$jumlah_keluar= $_GET['jumlah_keluar'];
	$total= $_GET['total'];
	
$sql = "update barang_keluar set no_faktur_keluar='$no_faktur_keluar',tanggal_keluar='$tanggal_keluar',nama_departemen='$nama_departemen',kode_barang='$kode_barang',nama_barang='$nama_barang', stok='$stok', satuan='$satuan' ,jumlah_keluar='$jumlah_keluar',total='$total' where id_transaksi_keluar='$id_transaksi_keluar'"; 

if (mysqli_query($conn, $sql)) {
    echo "update successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);
echo "<script>alert('Data barang berhasil ditambhakan');document.location='edit_barang_keluar.php'</script>";
//header("location:barang_keluar.php");
?>