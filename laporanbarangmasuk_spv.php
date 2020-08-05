<!doctype>
<?php
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if(!isset($_SESSION['username']))
{ 
header('location:menu.php');
} 

if($_SESSION['hak_akses']!="supervisor")
{ 
die("Anda bukan supervisor");
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
         <?php include "menuspv.php"; ?>  	
   </div>
   <div>
    
          <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="#">Home</a></li>
		 <li class="#">Transaksi</li>		 		 		 
         <li class="active">Data Barang Masuk</li>
      </ol>
   </div>
   <div class="col-md-10" style="min-height:600px">
         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
            <a href="tampilbarangmasuk.php"><span><i class="fa fa-print fa-2x"></i></span></a>
         </div>
            <table class="table table-striped">
               <tr>
                  <th class="info"><center>No</center></th>
                  <th class="info"><center>No Faktur</center></th>
				  <th class="info"><center>Tanggal</center></th>
				  <th class="info"><center>Nama Suplier</center></th>
				  <th class="info"><center>Kode Barang</center></th>
				  <th class="info"><center>Nama Barang</center></th>
				  <th class="info"><center>Jumlah Masuk</center></th>
				  
				  

                </tr>
				
				
               <tr>
                  <?php
		
		include("config.php");		
		$sql = "SELECT * FROM barang_masuk";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) == 0){
			echo '<tr><td colspan="10">Tidak ada data!</td></tr>';
		}else{
			$no = 1;	
			while($data = mysqli_fetch_assoc($result)){					
				
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['no_faktur'].'</td>';	
					echo '<td>'.$data['tanggal_masuk'].'</td>';	
					echo '<td>'.$data['nama_suplier'].'</td>';
					echo '<td>'.$data['kode_barang'].'</td>';
					echo '<td>'.$data['nama_barang'].'</td>';	
					echo '<td>'.$data['jumlah_masuk'].'</td>';
				echo '</tr>';
				$no++;
			}	
		}
		?>	
              </tr>	  
            </table>
   </div>
   <?php include"footer.php";?>
  </body>
<html>
