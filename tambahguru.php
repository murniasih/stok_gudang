<!doctype>
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
      <div class="col-md-12" style="padding:10px;"><center><img src="../assets/images/profil.jpg" alt="" height="100px" width="100px"></center></div>
      <div class="col-md-12" style="padding:5px;padding-bottom:10px;color:#fff;"><center>Heri Susanto</center></div>
         <?php include "menu.php"; ?>  
		
   </div>
   <div>
    
   </div>
      <div class="col-md-10" style="padding:0px">
      <ol class="breadcrumb" style="margin:0;border-radius:0;">
         <li><a href="#">Home</a></li>
         <li class="active">Siswa</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
		 <br>
		 <div class="container">
			<div class="row"></div>
				<div class="col-sm-12">
					<div class="page-header"><h1 align="left"> Tambah Data Guru</h1></div>
						<form class="form-horisontal" action="tambahguru.php" method="POST" role="form">
						<br>
						<div class="form-group">
							<label for="kode_guru" class="control-label col-sm-2">Kode Guru</label>
							<div class="col-sm-7">
								<input type="text" name="kode_siswa"id="kode_siswa" class="form-control" placeholder="kode_siswa" required>
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="nik" class="control-label col-sm-2">NIK</label>
							<div class="col-sm-7">
								<input type="text" name="nim"id="nim" class="form-control" placeholder="input nim">
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="nama" class="control-label col-sm-2">Nama Guru</label>
							<div class="col-sm-7">
								<input type="text" name="nama"id="nama" class="form-control" placeholder="input nama">
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="kelamin" class="control-label col-sm-2">jenis kelamin</label>
							<div class="col-sm-2">
								<select class="form-control" name="kelamin" id="kelamin">
									<option value=""> - Jenis Kelamin - </option>
									<option value=""> Laki - Laki </option>
									<option value=""> Perempuan </option>
								</select>
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="agama" class="control-label col-sm-2">Agama</label>
							<div class="col-sm-2">
								<select class="form-control" name="agama" id="jk">
									<option value=""> - Pilih Agama - </option>
									<option value=""> Islam</option>
									<option value=""> Kristen Katolik </option>
									<option value=""> Kristen Protestan</option>
									<option value=""> Hindu </option>
									<option value=""> Budha</option>
								</select>
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="alamat" class="control-label col-sm-2">Alamat</label>
							<div class="col-sm-7">
								<textarea class="form-control" rows="3" name="alamat" id="alamat"></textarea>
							</div>
						</div>
						<br><br><br><br>
						<div class="form-group">
							<label for="no_telp" class="control-label col-sm-2">No Telepon</label>
							<div class="col-sm-7">
								<input type="text" name="no_telp"id="no_telp" class="form-control" placeholder="input no telp">
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="status" class="control-label col-sm-2">Status</label>
							<div class="col-sm-2">
								<select class="form-control" name="status" id="status">
									<option value=""> - Pilih Status - </option>
									<option value=""> Aktif</option>
									<option value=""> Tidak Aktif</option>
								</select>
							</div>
						</div>
						<br><br>
						<div class="form-group">
							<label for="no_telp" class="control-label col-sm-2">Upload Foto</label>
							<div class="col-sm-7">
							</div>
						</div>
						
				</div>
			</div>
										
			<div class="col-md-12" style="padding:30px; padding-left:230;padding-right:0;">
            <a href="siswa.php" class="btn btn-info">back</a>
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
