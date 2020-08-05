<html>
<head><title>PUROLATOR</title></head>
<body>
	<?php
			session_start(); 
			include 'config1.php';
			mysql_select_db("gudang") or die ("Gagal Pilih DataBase");
			$username = $_POST['username'];
			$password = $_POST['pasword']; 
			$op = $_GET['op']; 
			if($op=="in")
			{ 
					$cek = mysql_query("SELECT * FROM tabel_user WHERE username='$username' and pasword='$password'") or die ("Gagal Tabel"); 
					if(mysql_num_rows($cek) == 1)
						{
							$c = mysql_fetch_array($cek); 
							$_SESSION['username'] = $c['username']; 
							$_SESSION['hak_akses'] = $c['hak_akses']; 
					
							if($c['hak_akses']=="karyawan")
								{header("location:karyawan.php"); }
						
					
							else if($c['hak_akses']=="supervisor")
							
								{header("location:supervisor.php"); } 
								
							else if($c['hak_akses']=="admin")
								{header("location:home.php"); } 
						}
					else
						{header("location:index.php"); } 
						
			
			}
			else if($op=="out")
			{
				unset($_SESSION['username']);
				unset($_SESSION['hak_akses']); 
				header('location:index.php');
			}
	?>
</body>
</html> 
