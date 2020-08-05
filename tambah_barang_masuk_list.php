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

	$id_transaksi_masuk=$_GET["id_transaksi_masuk"];
	
	$SQL="select * from barang_masuk where id_transaksi_masuk=$id_transaksi_masuk";
	
	$hasil=mysqli_query($conn, $SQL) 
	or die ("Gagal Memproses Query");
	
	$row=mysqli_fetch_array($hasil);
	$id_transaksi_masuk=$row["id_transaksi_masuk"];
	$no_faktur= $row["no_faktur"];
	$tanggal_masuk= $row["tanggal_masuk"];
	$kode_barang= $row["kode_barang"];
	$nama_barang= $row["nama_barang"];
	$stok= $row["stok"];
	$satuan= $row["satuan"];
	$jumlah_masuk= $row["jumlah_masuk"];
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
         <li><a href="#">Home</a></li>
         <li class="active">Edit Barang</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
		 <br>
		 <div class="container">
			<div class="row"></div>
				<div class="col-sm-12">
					<div class="page-header"><h1 align="left"> Tambah List Barang Masuk</h1></div>
						<form class="form-horisontal" action="tambah_proses_barang_masuk_list.php" method="POST" role="form">
						<br>
						<br>
						<div class="form-group">
							<label for="id_transaksi_masuk" class="control-label col-sm-2">ID Transaksi</label>
							<div class="col-sm-2">
								<input type="text" name="id_transaksi_masuk"  class="form-control" value="<?php echo $row['id_transaksi_masuk'];?>" readonly="readonly">
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="no_faktur" class="control-label col-sm-2">NO Faktur</label>
							<div class="col-sm-2">
								<input type="text" name="no_faktur"  class="form-control" value="<?php echo $row['no_faktur'];?>" readonly="readonly">
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="tanggal_masuk" class="control-label col-sm-2">Tanggal Masuk</label>
							<div class="col-sm-4">
								<input type="text" name="tanggal_masuk"  class="form-control" value="<?php echo $row['tanggal_masuk'];?>" readonly="readonly">
							</div>
						</div>
						<br>
						<br><hr>
						
						<div class="form-group">
							<label for="kode_barang" class="control-label col-sm-2">Kode Barang</label>
							<div class="col-sm-2"> 
								<select name="kode_barang" id="kode_barang" onchange="changeValue(this.value)" class="form-control" >
									<option value=0>-Pilih-</option>
									<?php 
										$result = mysql_query("select * from barang");    
										$jsArray = "var dtMhs = new Array();\n";        
										while ($row = mysql_fetch_array($result)) {    
											echo '<option value="' . $row['kode_barang'] . '">' . $row['kode_barang'] . '</option>';  
											$jsArray .= "dtMhs['" . $row['kode_barang'] . "'] = {nama_barang:'" . addslashes($row['nama_barang']) ."',stok:'".addslashes($row['stok'])."',satuan:'".addslashes($row['satuan'])."'};\n";    
										}      
										?>    
									</select>	
							</div>
						</div>
						<br><br>						
						<div class="form-group">
							<label for="nama_barang" class="control-label col-sm-2">Nama Barang</label>
							<div class="col-sm-4">
								<input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Nama Barang" readonly="readonly">
							</div>
						</div>
						<script type="text/javascript">    
							<?php echo $jsArray; ?>  
							function changeValue(kode_barang){  
							document.getElementById('nama_barang').value = dtMhs[kode_barang].nama_barang; 
							document.getElementById('stok').value = dtMhs[kode_barang].stok;
							document.getElementById('satuan').value = dtMhs[kode_barang].satuan;							
							};  
							</script> 
						<br><br>
						<div class="form-group">
							<label for="stok" class="control-label col-sm-2">Stok</label>
							<div class="col-sm-1">
								<input type="text" name="stok" id="stok" class="form-control" onkeyup="sum();" readonly="readonly" >
							</div>
							<div class="col-sm-1">
								<input type="text" name="satuan" id="satuan" class="form-control" readonly="readonly" >
							</div>
						</div>					
						<br><br>
						<div class="form-group">
							<label for="jumlah_masuk" class="control-label col-sm-2">Jumlah Masuk</label>
							<div class="col-sm-1">
								<input type="text" name="jumlah_masuk"  class="form-control" value="<?php echo $row['jumlah_masuk']; ?>">
								
							</div>
						</div>
						<br><br>
						<div class="form-group">
							<label for="total" class="control-label col-sm-2">Total</label>
							<div class="col-sm-1">
								<input type="text" name="total"  class="form-control" value="<?php echo $row['total']; ?> ">
								
							</div>
						</div>
						<script>
							function sum() {
								  var txtFirstNumberValue = document.getElementById('stok').value;
								  var txtSecondNumberValue = document.getElementById('jumlah_masuk').value;
								  var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
								  if (!isNaN(result)) {
									 document.getElementById('total').value = result;
								  }
							}
						</script>
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
            <table class="table table-bordered">
               
            </table>
            <div class="col-md-12">
               <nav align="center">
                 <ul class="pagination">
                   <li>
                     <a href="#" aria-label="Previous">
                       <span aria-hidden="true">&laquo;</span>
                     </a>
                   </li>
                   <li><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li><a href="#">4</a></li>
                   <li><a href="#">5</a></li>
                   <li>
                     <a href="#" aria-label="Next">
                       <span aria-hidden="true">&raquo;</span>
                     </a>
                   </li>
                 </ul>
               </nav>

            </div>
			
   </div>
 <?php include"footer.php";?>
</body>
<html>
