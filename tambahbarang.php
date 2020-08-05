
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
<?php    
    mysql_connect("localhost","root","");    
    mysql_select_db("gudang");   
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
         <li><h4><a href="home.php">Home</a></h4></li>
         <li class="fa fa-home fa-fw"><a href="barang.php"> Master</a></li>
		 <li class="active">Tambah Barang</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
		 <br>
		 <div class="container">
			<div class="row"></div>
				<div class="col-sm-12">
					<div class="page-header"><h1 align="left"> Tambah Barang</h1></div>
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
											
								$carikode = mysqli_query($conn, "select max(kode_barang) from barang") or die (mysql_error());
						  // menjadikannya array
						  $datakode = mysqli_fetch_array($carikode);
						  // jika $datakode
						  if ($datakode) {
						   $nilaikode = substr($datakode[0], 1);
						   // menjadikan $nilaikode ( int )
						   $kode = (int) $nilaikode;
						   // setiap $kode di tambah 1
						   $kode = $kode + 1;
						   $kode_otomatis = "B".str_pad($kode, 3, "0", STR_PAD_LEFT);
						  } else {
						   $kode_otomatis = "B001";
						  }				
								
					?>
					
						<form class="form-horisontal" action="tambah_proses_barang.php" method="POST" role="form">
						<br>
						<br>
						<div class="form-group">
							<label for="kode_barang" class="control-label col-sm-2">Kode Barang</label>
							<div class="col-sm-7">
							   
								<input type="text" name="kode_barang" id="kode_barang" value="<?php echo $kode_otomatis; ?>" class="form-control" placeholder="Masukan Kode Barang" readonly="readonly">
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="nama_barang" class="control-label col-sm-2">Nama Barang</label>
							<div class="col-sm-7">
								<input type="text" name="nama_barang"id="nama" class="form-control" placeholder="Masukan Nama Barang" required>
							</div>
						</div>
						<br><br>
						<div class="form-group">
							<label for="stok" class="control-label col-sm-2">stok</label>
							<div class="col-sm-7">
								<input type="text" name="stok" id="stok" class="form-control" placeholder="Masukan Kode Barang" required>
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="satuan" class="control-label col-sm-2">Satuan</label>
							<div class="col-sm-2"> 
								<select name="satuan" id="satuan" onchange="changeValue(this.value)" class="form-control" >
									<option value=0>-Pilih-</option>
									<?php 
										$result = mysql_query("select * from satuan");    
										$jsArray = "var dtMhs = new Array();\n";        
										while ($row = mysql_fetch_array($result)) {    
											echo '<option value="' . $row['satuan'] . '">' . $row['satuan'] . '</option>';  
    
										}      
										?> 										
								</select>		
							</div>
							<a href="tambahsatuan.php"><i class="fa fa-plus fa-fw" style="padding-bottom:0"></i></a>
						</div>
						<br><br>
						
						<input type="submit" name="Submit" value="+ Add" class="btn btn-danger control-label col-sm-1" >
						
				</div>
			</div>
										
			</div>
			
   </div>
 <?php include"footer.php";?>
</body>
</html>
