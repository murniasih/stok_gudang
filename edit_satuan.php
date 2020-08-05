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

	$id=$_GET["id"];
	
	$SQL="select * from satuan where id=$id";
	
	$hasil=mysqli_query($conn, $SQL) 
	or die ("Gagal Memproses Query");
	
	$row=mysqli_fetch_array($hasil);

	$id= $row["id"];
	$kode_satuan= $row["kode_satuan"];
	$satuan= $row["satuan"];
	
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

<!doctype>
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
         <li class="active">Edit Satuan</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
		 <br>
		 <div class="container">
			<div class="row"></div>
				<div class="col-sm-12">
					<div class="page-header"><h1 align="left"> Edit Satuan</h1></div>
						<form class="form-horisontal" action="edit_proses_satuan.php" method="GET" role="form">
						<div class="form-group">
							<label for="id" class="control-label col-sm-2">ID Satuan</label>
							<div class="col-sm-7">
								<input type="text" name="id"  class="form-control" value="<?php echo "$id"; ?>" readonly="readonly">
								
							</div>
						</div>
						<br><br><br>
						<div class="form-group">
							<label for="kode_satuan" class="control-label col-sm-2">Kode Satuan</label>
							<div class="col-sm-7">
								<input type="text" name="kode_satuan"  class="form-control" value="<?php echo "$kode_satuan"; ?>" readonly="readonly">
								
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="satuan" class="control-label col-sm-2">Satuan</label>
							<div class="col-sm-7">
							<input type="text" name="satuan"  class="form-control" value="<?php echo "$satuan"; ?>">	
							</div>
						</div>
					<br><br>
						<div>
						<input type="submit" name="Submit" value="Update" class="btn btn-info" >
						</div>
					</div>					
				</div>
			</div>
		</div>
   </div>
 <?php include"footer.php";?>
</body>
<html>
