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
   <title>PERSEDIAAN BARANG</title>
</head>
<body>
	<div class="col-md-2 colmenu" style="padding:0;">
		<div class="col-md-12" style="padding:5px;"></div>
		<div class="col-md-12" style="padding:9px;padding-bottom:10px;color:#fff;"></div>
		<?php include "menu.php"; ?>  	
	</div>
	<div>
	<div class="col-md-10" style="padding:0px">
		<ol class="breadcrumb" style="margin:0;border-radius:0;">
			<li><a href="#">Home</a></li>
			<li class="active">Data Barang</li>
		</ol>
	</div>
	<div class="col-md-10" style="min-height:500px">
		<div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
			
        </div>
		

		<div class="col-md-12" style="margin-bottom:15px" align="right">
			<form action="" method="POST">
			<input type="text" name="nama_suplier" style="width:200px; padding:3px" placeholder="cari suplier"/>
			<input type="submit" name="" class="btn btn-danger" value="Cari" style="padding:3px"/>
			</form>
		</div>
            <table class="table table-striped">
				<tr>
					  <th class="info"><center>No</center></th>
					  <th class="info"><center>Kode Suplier</center></th>
					  <th class="info"><center>Nama Suplier</center></th>
					  <th class="info"><center>Alamat</center></th>
					  <th class="info"><center>No Telp</center></th>
                </tr>
			

					  
				<?php
		
				include('config.php');
				$nama_suplier= isset($_POST['nama_suplier']) ? $_POST['nama_suplier'] : "";
				$sql= "SELECT * from tabel_suplier where nama_suplier like '%$nama_suplier%' ";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result) == 0){
					echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
				}else{	
					$no = 1;	
					while($data = mysqli_fetch_assoc($result)){	
						echo '<tr>';
						echo '<td>'.$no.'</td>';	
						echo '<td>'.$data['kode_suplier'].'</td>';	
						echo '<td>'.$data['nama_suplier'].'</td>';	
						echo '<td>'.$data['alamat'].'</td>';
						echo '<td>'.$data['no_telp'].'</td>';
						echo '</tr>';
						$no++;
					}	
					}
				?>	
            </table>
  </div>

  </div>
   <?php include"footer.php";?>
  </body>
<html>

