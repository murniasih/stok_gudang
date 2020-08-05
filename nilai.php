<!doctype html>
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
         <li class="active">Nilai</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
            <a href="tambahsiswa.php" class="btn btn-info">Tambah</a>
         </div>
		 
            <table class="table table-striped">
               <tr>
                  <th class="info"><center>id</center></th>
                  <th class="info"><center>Semester</center></th>
                  <th class="info"><center>Kode Pelajaran</center></th>
				  <th class="info"><center>Kode Guru</center></th>
                  <th class="info"><center>Kode Kelas</center></th>
                  <th class="info"><center>Kode Siswa</center></th>
				  <th class="info"><center>Nilai Tugas 1</center></th>
                  <th class="info"><center>Nilai Tugas 2</center></th>
				  <th class="info"><center>Nilai UTS</center></th>
                  <th class="info"><center>Nilai UAS</center></th>
				  <th class="info"><center>Keterangan</center></th>
                  <th class="info" colspan="2"><center>Action</center></th>
               </tr>
			   <tr>
               <tr>
				<td></td>
                  <td></td>
                  <td></td>
				  <td></td>
                  <td></td>
                  <td></td>
				  <td></td>
                  <td></td>
                  <td></td>
				  <td></td>
				  <td></td>
                  <td><a href="">edit</a></td>
                  <td><a href="">delete</a></td>
               </tr>
               <tr>
                  <td></td>
                  <td></td>
                  <td></td>
				  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
				  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="">edit</a></td>
                  <td><a href="">delete</a></td>
               </tr>
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
