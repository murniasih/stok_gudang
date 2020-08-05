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
         <li class="active">Siswa</li>
      </ol>
   </div>
 <div class="col-md-10" style="min-height:600px">
         <div class="col-md-12" style="padding:10px; padding-left:0;padding-right:0;">
            <a href="tambahsiswa.php" class="btn btn-info">Tambah</a>
         </div>
            <table class="table table-striped">
               <tr>
                  <th class="info"><center>Kode Siswa</center></th>
                  <th class="info"><center>NIS</center></th>
                  <th class="info"><center>Nama Siswa</center></th>
				  <th class="info"><center>Jenis Kelamin</center></th>
                  <th class="info"><center>Agama</center></th>
                  <th class="info"><center>Tempat Lahir</center></th>
				  <th class="info"><center>Tanggal lahir</center></th>
                  <th class="info"><center>Alamat</center></th>
				  <th class="info"><center>No Telepon</center></th>
                  <th class="info"><center>Tahun Ajaran</center></th>
				  <th class="info"><center>Status Aktif</center></th>
				  <th class="info"><center>Foto</center></th>
                  <th class="info" colspan="2"><center>Action</center></th>
               </tr>
			   <tr>
			   <?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "nilai";

						// Create connection
						$conn = mysqli_connect($servername, $username, $password, $dbname);
						// Check connection
						if (!$conn) {
							die("Connection failed: " . mysqli_connect_error());
						}

						//$sql = "SELECT id, firstname, lastname FROM account";
						$sql = "SELECT * FROM siswa";

						$result = mysqli_query($conn, $sql);

						?>
						<?php
						
						if (mysqli_num_rows($result) > 0) {
			
							// output data of each row
							while($row = mysqli_fetch_array($result)) {
								echo "<tr>";
								echo "<td>$row[0]</td>";
								echo "<td>$row[1]</td>";
								echo "<td>$row[2]</td>";
								echo "<td>$row[3]</td>";
								echo "<td>$row[4]</td>";
								echo "<td>$row[5]</td>";
								echo "<td>$row[6]</td>";
								echo "<td>$row[7]</td>";
								echo "<td>$row[8]</td>";
								echo "<td>$row[9]</td>";
								echo "<td>$row[10]</td>";
								echo "<td>$row[11]</td>";
								echo "<td><a href=\"edit.php?id=$row[0]\">Edit</a></td>";
								echo "<td><a href=\"hapus.php?id=$row[0]\">Hapus</a></td>";
								echo "</tr>";
							}
							echo "</table>";
						} else {
							echo "0 results";
						}

						mysqli_close($conn);
						?>
                  
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
