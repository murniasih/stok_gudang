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
         <?php include "menu.php" ;?>  
		
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
					<div class="page-header"><h1 align="left"> Tambah Barang Masuk</h1></div>
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
						$carikode = mysqli_query($conn, "select max(no_faktur) from barang_masuk") or die (mysql_error());				
						  $datakode = mysqli_fetch_array($carikode);						  
						  if ($datakode) {
						   $nilaikode = substr($datakode[0], 1);						  
						   $kode = (int) $nilaikode;						  
						   $kode = $kode + 1;
						   $kode_otomatis = "M".str_pad($kode, 3, "0", STR_PAD_LEFT);
						  } else {
						   $kode_otomatis = "M001";
						  }		
							?>				
						<form class="form-horisontal" action="tambah_proses_barang_masuk.php" method="POST" role="form">
						<br>
						<br>
						<div class="form-group">
							<label for="no_faktur" class="control-label col-sm-2">No Faktur</label>
							<div class="col-sm-2">
								<input type="text" name="no_faktur"id="no_faktur" value="<?php echo $kode_otomatis; ?>"class="form-control" placeholder="Masukan No Faktur" readonly="readonly"required>
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="tanggal" class="control-label col-sm-2">Tanggal</label>
							<div class="col-sm-4">
								<input type="date" name="tanggal_masuk" id="date" class="form-control">
							</div>
					
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="nama_suplier" class="control-label col-sm-2">Nama Suplier</label>
							<div class="col-sm-2"> 
								<select name="nama_suplier" id="nama_suplier" onchange="changeValue(this.value)" class="form-control" >
									<option value=0>-Pilih-</option>
									<?php 
										$result = mysql_query("select * from tabel_suplier");    
										$jsArray = "var dtMhs = new Array();\n";        
										while ($row = mysql_fetch_array($result)) {    
											echo '<option value="' . $row['nama_suplier'] . '">' . $row['nama_suplier'] . '</option>';  
    
										}      
										?> 										
								</select>	
							</div>
						</div>
						<br><br>						
						
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
						<br>
						<br>
						<div class="form-group">
							<label for="jumlah_masuk" class="control-label col-sm-2">Jumlah Masuk</label>
							<div class="col-sm-4">
								<input type="text" name="jumlah_masuk" id="jumlah_masuk" class="form-control" onkeyup="sum();" required>
							</div>
						</div>
						<br>
						<br>
		
						<div class="form-group">
							<label for="total" class="control-label col-sm-2">Total</label>
							<div class="col-sm-4">
								<input type="text" name="total"id="total" class="form-control"  required>
							</div>
						</div>
						<br>
						<br>
						<input type="submit" name="Submit" value="Add" class="btn btn-danger" >
						</form>
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
				</div>
						
		</div>
            
			
   </div>
 <?php include"footer.php";?>
</body>
<html>
