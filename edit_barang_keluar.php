<!doctype>
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

	$id_transaksi_keluar=$_GET["id_transaksi_keluar"];
	
	$SQL="select * from barang_keluar where id_transaksi_keluar=$id_transaksi_keluar";
	
	$hasil=mysqli_query($conn, $SQL) 
	or die ("Gagal Memproses Query");
	
	$row=mysqli_fetch_array($hasil);
	$id_transaksi_keluar=$row["id_transaksi_keluar"];
	$no_faktur_keluar= $row["no_faktur_keluar"];
	$tanggal_keluar= $row["tanggal_keluar"];
	$nama_departemen= $row["nama_departemen"];
	$kode_barang= $row["kode_barang"];
	$nama_barang= $row["nama_barang"];
	$stok= $row["stok"];
	$satuan= $row["satuan"];
	$satuan= $row["departemen"];
	$jumlah_keluar= $row["jumlah_keluar"];
	$total= $row["total"];
	?>
<?php
session_start();
if(!isset($_SESSION['username']))
{ 
header('location:menu.php');
} 

if($_SESSION['hak_akses']!="admin")
{ 
die("Anda bukan admin");
} 
?>
<html lang='ind'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/styles-menu-admin.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/font-awesome.min.css">

   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/script.js"></script>
   <title>CSS MenuMaker</title>
</head>
<body>
   <div class="col-md-2 colmenu" style="padding:0;">
      <div class="col-md-12" style="padding:39px;"></div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;"></div>
         <?php include "menu.php"; ?>  	
   </div>
   <div>
    
   </div>
      <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="#">Home</a></li>
         <li class="active">Edit Barang</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
		 <div class="container">
			<div class="row"></div>
				<div class="col-sm-12">
					<div class="page-header"><h1 align="left"> Edit Barang</h1></div>
						<form class="form-horisontal" action="edit_proses_barang_keluar.php" method="GET" role="form">
						<div class="form-group">
							<label for="id_transaksi_keluar" class="control-label col-sm-2">ID Transaksi</label>
							<div class="col-sm-2">
								<input type="text" name="id_transaksi_keluar"  class="form-control" value="<?php echo $row['id_transaksi_keluar'];?>" readonly="readonly">
							</div>
						</div>
						<br><br>
						<div class="form-group">
							<label for="no_faktur_keluar" class="control-label col-sm-2">No Faktur</label>
							<div class="col-sm-2">
								<input type="text" name="no_faktur_keluar"  class="form-control" value="<?php echo $row['no_faktur_keluar'];?>" readonly="readonly">
							</div>
						</div>
						<br><br>
						<div class="form-group">
							<label for="tanggal_keluar" class="control-label col-sm-2">Tanggal Keluar</label>
							<div class="col-sm-4">
								<input type="text" name="tanggal_keluar"  class="form-control" value="<?php echo $row['tanggal_keluar'];?>" readonly="readonly">
							</div>
						</div>
						<br><hr>
						<div class="form-group">
							<label for="nama_departemen" class="control-label col-sm-2">Departemen</label>
							<div class="col-sm-3">
								<input type="text" name="nama_departemen"  class="form-control" value="<?php echo $row['nama_departemen']; ?>">
								
							</div>
						</div>
						<br><br>
						<div class="form-group">
							<label for="kode_barang" class="control-label col-sm-2">Kode Barang</label>
							<div class="col-sm-4">
								<input type="text" name="kode_barang"  class="form-control" value="<?php echo $row['kode_barang']; ?>"readonly="readonly">
							</div>
						</div>
						<br><br>
						<div class="form-group">
							<label for="nama_barang" class="control-label col-sm-2">Nama Barang</label>
							<div class="col-sm-4">
								<input type="text" name="nama_barang"  class="form-control" value="<?php echo $row['nama_barang']; ?>"readonly="readonly">
							</div>
						</div>
						<br><br>
						<div class="form-group">
							<label for="stok" class="control-label col-sm-2">Stok</label>
							<div class="col-sm-1">
								<input type="text" name="stok"  class="form-control" value="<?php echo $row['stok']; ?>"readonly="readonly">
							</div>
							<div class="col-sm-1">
							<input type="text" name="satuan"  class="form-control" value="<?php echo $row['satuan']; ?> "readonly="readonly">
							</div>
						</div>
						<br><br>
						
						<div class="form-group">
							<label for="jumlah_keluar" class="control-label col-sm-2">Jumlah Keluar</label>
							<div class="col-sm-1">
								<input type="text" name="jumlah_keluar"  class="form-control" value="<?php echo $row['jumlah_keluar']; ?>">
								
							</div>
						</div>
						<br><br>
						<div class="form-group">
							<label for="total" class="control-label col-sm-2">Total</label>
							<div class="col-sm-1">
								<input type="text" name="total"  class="form-control" value="<?php echo $row['total']; ?> ">
								
							</div>
						</div>
						<br><br>
						<input type="submit" name="Submit" value="Update" class="btn btn-info" >
						<a href="javascript:history.go(-1)" class="btn btn-info">Kembali</a>
						<input type="button" value="Refresh" class="btn btn-danger" onClick="window.location.reload()" />
						<script>
						function reloadpage()
						{
						location.reload()
						}
						</script>
						
				</div>
			</div>
										
			
							
		</div>
         
			
   </div>
 <?php include"footer.php";?>
</body>
<html>
