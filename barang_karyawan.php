<!doctype>
<?php
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
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
   <title>PERSEDIAAN BARANG</title>
</head>
<body>
	<div class="col-md-2 colmenu" style="padding:0;">
		<div class="col-md-12" style="padding:5px;"></div>
		<div class="col-md-12" style="padding:9px;padding-bottom:10px;color:#fff;"></div>
		<?php include "menukaryawan.php"; ?>  	
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
			<a href="tambahbarangkaryawan.php" class="btn btn-info">Tambah</a>
			
        </div>
		
		<div class="col-md-12" style="margin-bottom:15px" align="right">
			<form action="" method="POST">
			<a href="caribarang.php"><span><i class="fa fa-search"></i> cari</span></a>
			</form>
		</div>
            <table class="table table-striped">
				<tr>
					  <th class="info"><center>No</center></th>
					  <th class="info"><center>Kode Barang</center></th>
					  <th class="info"><center>Nama Barang</center></th>
					  <th class="info"><center>Stok</center></th>
					  <th class="info"><center>Satuan</center></th>
					  <th class="info"><center>Action</center></th>
                </tr>
			

					  
				<?php
		
				include('config.php');
				$sql = "SELECT * from barang";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result) == 0){
					echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
				}else{	
					$no = 1;	
					while($data = mysqli_fetch_assoc($result)){	
						echo '<tr>';
						echo '<td>'.$no.'</td>';	
						echo '<td>'.$data['kode_barang'].'</td>';	
						echo '<td>'.$data['nama_barang'].'</td>';	
						echo '<td>'.$data['stok'].'</td>';
						echo '<td>'.$data['satuan'].'</td>';
						echo '<td><a href="edit_barang_karyawan.php? id_barang='.$data['id_barang'].'" class="fa fa-edit fa-fw"></a> &nbsp / <a href="hapus_barang_karyawan.php? id_barang='.$data['id_barang'].'" class="fa fa-trash-o fa-fw" onclick="return confirm(\'Apakah Data Akan dihapus??\')"></a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
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

