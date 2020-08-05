
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
		 <li class="active">Tambah User</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
		 <br>
		 <div class="container">
			<div class="row"></div>
				<div class="col-sm-12">
					<div class="page-header"><h1 align="left"> Tambah User</h1></div>
						<form class="form-horisontal" action="tambah_proses_user.php" method="POST" role="form">
						<br>
						<br>
						<div class="form-group">
							<label for="nama" class="control-label col-sm-2">Nama </label>
							<div class="col-sm-7">
								<input type="text" name="nama"id="nama" class="form-control" placeholder="Masukan Nama " required>
							</div>
						</div>
						<br><br>
						<div class="form-group">
							<label for="username" class="control-label col-sm-2">User Name</label>
							<div class="col-sm-7">
								<input type="text" name="username" id="username" class="form-control" placeholder="Masukan username" required>
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="pasword" class="control-label col-sm-2">Pasword</label>
							<div class="col-sm-7">
								<input type="password" name="pasword" id="pasword" class="form-control" placeholder="Masukan pasword" required>
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="hak_akses" class="control-label col-sm-2">Hak Akses</label>
							<div class="col-sm-2"> 
								<select name="hak_akses" id="hak_akses" onchange="changeValue(this.value)" class="form-control" >
									<option value=0>-Pilih-</option>
									<?php 
										$result = mysql_query("select * from tabel_user");    
										$jsArray = "var dtMhs = new Array();\n";        
										while ($row = mysql_fetch_array($result)) {    
											echo '<option value="' . $row['hak_akses'] . '">' . $row['hak_akses'] . '</option>';  
    
										}      
										?> 										
								</select>		
							</div>

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
