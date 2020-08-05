<!doctype>
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
   <title>Aplikasi Gudang PT. Sinar Alum Sarana - Karawang</title>
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
         <li class="active">Tambah Departemen</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
		 <br>
		 <div class="container">
			<div class="row"></div>
				<div class="col-sm-12">
					<div class="page-header"><h1 align="left"> Tambah Departemen</h1></div>
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
											
								$carikode = mysqli_query($conn, "select max(kode_departemen) from tabel_departemen") or die (mysql_error());
						  // menjadikannya array
						  $datakode = mysqli_fetch_array($carikode);
						  // jika $datakode
						  if ($datakode) {
						   $nilaikode = substr($datakode[0], 1);
						   // menjadikan $nilaikode ( int )
						   $kode = (int) $nilaikode;
						   // setiap $kode di tambah 1
						   $kode = $kode + 1;
						   $kode_otomatis = "D".str_pad($kode, 3, "0", STR_PAD_LEFT);
						  } else {
						   $kode_otomatis = "S001";
						  }				
								
					?>
						<form class="form-horisontal" action="tambah_proses_departemen.php" method="POST" role="form">
						<br>
						<br>
						<div class="form-group">
							<label for="kode_departemen" class="control-label col-sm-2">Kode Departemen</label>
							<div class="col-sm-4">
								<input type="text" name="kode_departemen" id="kode_suplier" value="<?php echo $kode_otomatis; ?>" class="form-control" placeholder="Masukan Kode suplier" readonly="readonly" required>
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="nama_Departemen" class="control-label col-sm-2">Nama Departemen</label>
							<div class="col-sm-7">
								<input type="text" name="nama_departemen" id="nama_departemen" class="form-control" >
							</div>
					
						</div>
						<br><br><br>
						<div class="form-group">
							<label for="pic" class="control-label col-sm-2">PIC / Penanggung jawab</label>
							<div class="col-sm-4">
								<input type="text" name="pic" id="pic" class="form-control" >
							</div>
					
						</div>
						<br>
						<br><br>
						<input type="submit" name="Submit" value="Add" class="btn btn-danger" )">
						
				</div>
				
					<a href="departemen.php" class="btn btn-info">back</a>
					<a href="" class="btn btn-info">Refresh</a>
			
			</div>						
		</div>
            
			
   </div>
 <?php include"footer.php";?>
</body>
<html>
