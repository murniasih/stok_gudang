<!doctype>
<?php
session_start();
if(!isset($_SESSION['username']))
{ 
header('location:menu.php');
} 

if($_SESSION['hak_akses']!="karyawan")
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
   <title>Aplikasi Gudang PT. Sinar Alum Sarana - Karawang</title>
</head>
<body>
   <div class="col-md-2 colmenu" style="padding:0;">
      <div class="col-md-12" style="padding:39px;"></div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;"></div>
         <?php include "menukaryawan.php"; ?>  	
   </div>
   <div>
    
   </div>
      <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="#">Home</a></li>
         <li class="active">Tambah Barang</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
		 <br>
		 <div class="container">
			<div class="row"></div>
				<div class="col-sm-12">
					<div class="page-header"><h1 align="left"> Tambah Suplier</h1></div>
					<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "gudang";
					$koneksi = new mysqli( $servername, $username, $password, $dbname );
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
											
								$carikode = mysqli_query($conn, "select max(kode_suplier) from tabel_suplier") or die (mysql_error());
						  // menjadikannya array
						  $datakode = mysqli_fetch_array($carikode);
						  // jika $datakode
						  if ($datakode) {
						   $nilaikode = substr($datakode[0], 1);
						   // menjadikan $nilaikode ( int )
						   $kode = (int) $nilaikode;
						   // setiap $kode di tambah 1
						   $kode = $kode + 1;
						   $kode_otomatis = "S".str_pad($kode, 3, "0", STR_PAD_LEFT);
						  } else {
						   $kode_otomatis = "S001";
						  }				
								
					?>
						<form class="form-horisontal" action="tambah_proses_suplier_karyawan.php" method="POST" role="form">
						<br>
						<br>
						<div class="form-group">
							<label for="kode_suplier" class="control-label col-sm-2">Kode Suplier</label>
							<div class="col-sm-4">
								<input type="text" name="kode_suplier" id="kode_suplier" value="<?php echo $kode_otomatis; ?>" class="form-control" placeholder="Masukan Kode suplier" readonly="readonly" required>
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="nama_suplier" class="control-label col-sm-2">Nama Suplier</label>
							<div class="col-sm-7">
								<input type="text" name="nama_suplier" id="nama_suplier" class="form-control" >
							</div>
					
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="alamat" class="control-label col-sm-2">Alamat</label>
							<div class="col-sm-7">
							<textarea class="form-control" rows="3" name="alamat" id="alamat"></textarea>
							</div>
						</div>
						<br>
						<br><br><br>
						<div class="form-group">
							<label for="no_telp" class="control-label col-sm-2">No Telp</label>
							<div class="col-sm-4">
								<input type="text" name="no_telp" id="no_telp" class="form-control" >
							</div>
					
						</div>
						<br>
						<br><br>
						<input type="submit" name="Submit" value="Add" class="btn btn-danger" )">
						
				</div>
				
					<a href="barang.php" class="btn btn-info">back</a>
					<a href="" class="btn btn-info">Refresh</a>
			
			</div>						
		</div>
            
			
   </div>
 <?php include"footer.php";?>
</body>
<html>
