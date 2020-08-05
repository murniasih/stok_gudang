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

	$id_user=$_GET["id_user"];
	
	$SQL="select * from tabel_user where id_user=$id_user";
	
	$hasil=mysqli_query($conn, $SQL) 
	or die ("Gagal Memproses Query");
	
	$row=mysqli_fetch_array($hasil);

	$id_user= $row["id_user"];
	$nama= $row["nama"];
	$username= $row["username"];
	$pasword= $row["pasword"];
	$hak_akses= $row["hak_akses"];
	
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
         <li class="active">Edit User</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
		 <br>
		 <div class="container">
			<div class="row"></div>
				<div class="col-sm-12">
					<div class="page-header"><h1 align="left"> Edit User</h1></div>
						<form class="form-horisontal" action="edit_proses_user.php" method="GET" role="form">
						<br>
						<br>
						<div class="form-group">
							<label for="id_user" class="control-label col-sm-2">ID User</label>
							<div class="col-sm-1">
								<input type="text" name="id_user"  class="form-control" value="<?php echo $row['id_user'];?>" readonly="readonly">
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="nama" class="control-label col-sm-2">Nama</label>
							<div class="col-sm-1">
								<input type="text" name="nama"  class="form-control" value="<?php echo $row['nama'];?>" readonly="readonly">
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="username" class="control-label col-sm-2">Username</label>
							<div class="col-sm-4">
								<input type="text" name="username"  class="form-control" value="<?php echo $row['username']; ?>">
								
							</div>
					
						</div>
						<br><br>
						<div class="form-group">
							<label for="pasword" class="control-label col-sm-2">Pasword</label>
							<div class="col-sm-1">
								<input type="password" name="pasword"  class="form-control" value="<?php echo $row['pasword']; ?>">
								
							</div>
						</div>
						<br><br>
						<div class="form-group">
							<label for="hak_akses" class="control-label col-sm-2">Hak Akses</label>
							<div class="col-sm-2"> 
								<select name="hak_akses" id="hak_akses" onchange="changeValue(this.value)" class="form-control" >
									<option value=0>-Pilih-</option>
									<option value=0>karyawan</option>
									<option value=0>admin</option>
									<option value=0>supervisor</option>
																	
								</select>		
							</div>
						</div>
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
