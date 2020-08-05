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
   <title>CSS MenuMaker</title>
</head>
<body>
   <div class="col-md-2 colmenu" style="padding:0;">
      <div class="col-md-12" style="padding:5px;"></div>
      <div class="col-md-12" style="padding:9px;padding-bottom:10px;color:#fff;"></div>
         <?php include "menukaryawan.php"; ?>  	
   </div>
   <div>
    
          <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:5;">
         <li><a href="#">Home</a></li>
         <li class="active">Data Barang</li>
      </ol>
   </div>
   <div class="col-md-10" style="min-height:500px">

         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
            <a href="tambahsatuan.php" class="btn btn-info">Tambah</a>
         </div>
		 <hr>
            <table class="table table-striped">
               <tr>
                  <th class="info"><center>No</center></th>
                  <th class="info"><center>Kode Satuan</center></th>
				  <th class="info"><center>Satuan</center></th>
                  <th class="info"><center>Action</center></th>
                </tr>
				 
				<?php
				
		
		include('config.php');
		$sql = "SELECT * FROM satuan";
		$result = mysqli_query($conn, $sql);
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysqli_num_rows($result) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="4">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysqli_fetch_assoc($result)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';//menampilkan nomor urut
					echo '<td>'.$data['kode_satuan'].'</td>';
					echo '<td>'.$data['satuan'].'</td>';
					echo '<td><a href="edit_satuan.php? id='.$data['id'].'" class="fa fa-edit fa-fw"></a> &nbsp / <a href="hapus_satuan.php? id='.$data['id'].'" class="fa fa-trash-o fa-fw" onclick="return confirm(\'Apakah Data Akan dihapus??\')"></a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
					echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>	
		
            </table>
            
   </div>
   <?php include"footer.php";?>
  </body>
<html>

