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

	$id_suplier=$_GET["id_suplier"];
	
	$SQL="select * from tabel_suplier where id_suplier=$id_suplier";
	
	$hasil=mysqli_query($conn, $SQL) 
	or die ("Gagal Memproses Query");
	
	$row=mysqli_fetch_array($hasil);

	$id_suplier=$row["id_suplier"];
	$kode_suplier=$row["kode_suplier"];
	$nama_suplier=$row["nama_suplier"];
	$alamat=$row["alamat"];
	$no_telp=$row["no_telp"];
	
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
         <li class="active">Edit suplier</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
		 <br>
		 <div class="container">
			<div class="row"></div>
				<div class="col-sm-12">
					<div class="page-header"><h1 align="left"> Edit suplier</h1></div>
						<form class="form-horisontal" action="edit_proses_suplier.php" method="GET" role="form">
						<br>
						<br>
						<div class="form-group">
							<label for="id_suplier" class="control-label col-sm-2">ID suplier</label>
							<div class="col-sm-1">
								<input type="text" name="id_suplier"  class="form-control" value="<?php echo $row['id_suplier'];?>" readonly="readonly">
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="kode_suplier" class="control-label col-sm-2">Kode suplier</label>
							<div class="col-sm-1">
								<input type="text" name="kode_suplier"  class="form-control" value="<?php echo $row['kode_suplier'];?>" readonly="readonly">
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="nama_suplier" class="control-label col-sm-2">Nama suplier</label>
							<div class="col-sm-4">
								<input type="text" name="nama_suplier"  class="form-control" value="<?php echo $row['nama_suplier']; ?>">
								
							</div>
					
						</div>
						<br><br>
						<div class="form-group">
							<label for="alamat" class="control-label col-sm-2">Alamat</label>
							<div class="col-sm-4">
								<input type="text" name="alamat"  class="form-control" value="<?php echo $row['alamat']; ?>">
								
							</div>
						</div>
						<br><br>
						<div class="form-group">
							<label for="no_telp" class="control-label col-sm-2">No Telp</label>
							<div class="col-sm-1">
								<input type="text" name="no_telp"  class="form-control" value="<?php echo $row['no_telp']; ?> "readonly="readonly">
								
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
