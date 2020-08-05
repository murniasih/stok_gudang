<?php
  # host untuk database, biasanya 'localhost'
 $servername = 'localhost';
 
 # username untuk mengakses database, jika dilokal biasanya 'root'
 $username= 'root';

 # password untuk mengakses databae, jika dilokal biasanya kosong
 $password = '';

 # nama database yang akan digunakan
 $dbname = 'gudang';
 
 # koneksi Database
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 
 # Check koneksi, berhasil atau tidak
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 ?>
