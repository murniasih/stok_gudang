
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
         <li class="active">Barang Masuk</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
		 <br>
		 <div class="container">
			<div class="row"></div>
				<div class="col-sm-12">
					<div class="page-header"><h1 align="left"> Tambah Barang</h1></div>
						<form class="form-horisontal" action="tambahguru.php" method="POST" role="form">
						<br>
						<div class="form-group">
							<label for="kode_kelas" class="control-label col-sm-2">Kode Barang</label>
							<div class="col-sm-7">
								<input type="text" name="kode_kelas"id="kode_kelas" class="form-control" placeholder="kode_kelas" required>
							</div>
						</div>
		
						<br>
						<br>
						<div class="form-group">
							<label for="nama" class="control-label col-sm-2">Nama Barang</label>
							<div class="col-sm-7">
								<input type="text" name="nama"id="nama" class="form-control" placeholder="input nama">
							</div>
						</div>
						<br><br>
						<div class="form-group">
							<label for="nama" class="control-label col-sm-2">Jumlah</label>
							<div class="col-sm-7">
								<input type="text" name="nama"id="nama" class="form-control" placeholder="input nama">
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="kelamin" class="control-label col-sm-2">Satuan</label>
							<div class="col-sm-2">
								<select class="form-control" name="kelamin" id="kelamin">
									<option value=""> - Pilih Satuan - </option>
									<option value=""> Liter </option>
									<option value=""> Pcs </option>
									<option value=""> Meter </option>
									<option value=""> Box</option>
								</select>
							</div>
						</div>
				</div>
			</div>
										
			<div class="col-md-12" style="padding:30px; padding-left:230;padding-right:0;">
            <a href="barang.php" class="btn btn-info">back</a>
			<a href="" class="btn btn-info">Send</a>
			<a href="" class="btn btn-info">Refresh</a>
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
