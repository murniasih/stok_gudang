<!doctype>
<?php
session_start();
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
   <title>Aplikasi Persedian Barang</title>
</head>
<body>
   <div class="col-md-2 colmenu" style="padding:0;"><h4></h4>
      <div class="col-md-12" style="padding:5px;"></div>
      <div class="col-md-12" style="padding:9px;padding-bottom:10px;color:#fff;"></div>
	  <tr>
			</tr>
         <?php include "menukaryawan.php"; ?>  	
   </div>
    <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
          <li class="">Home</li><br>
		  </ol> 
   </div>
   <div class="col-md-10" style="min-height:500px">
	<h3><b>Halaman Dashboard</b></h3>
	<h5>Hai, Selamat Datang 
	<?php echo "<b><u>".$_SESSION['username']."</u></b>";?> di Aplikasi Persediaan Barang</h5>
	<hr>
	<p>
		<section class="content">     
			<div class="col-md-3 col-sm-12 col-xs-12">                            
                <div class="panel panel-primary text-center no-boder bg-color-red">
                    <div class="panel-body">
						 <i class="fa fa-edit fa-5x"></i>
						 <h3>Master Data </h3>
                     </div>
                     <div class="panel-footer back-footer-red">
						 <a href="#" class="small-box-footer">
						  4 <i class="fa fa-arrow-circle-right"></i>
						 </a>
                     </div>
                </div>          
			</div>		
		</section>
	</p>
	<p>
		<section class="content">     
			<div class="col-md-3 col-sm-12 col-xs-12">                            
                <div class="panel panel-primary text-center no-boder bg-color-red">
                    <div class="panel-body" style="color:red">
						 <i class="fa fa-database fa-5x"></i>
						 <h3>Transaksi </h3>
                     </div>
                     <div class="panel-footer back-footer-red" >
						 <a href="#" class="small-box-footer" style="color:red">
						 3 <i class="fa fa-arrow-circle-right"></i>
						 </a>
                     </div>
                </div>          
			</div>		
		</section>
	</p>
	
	</div>
     <?php include"footer.php";?>
	 </div>
</body>
<html>
