<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nilai_raport";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$kode_siswa=$_GET['kode_siswa'];
$nis=$_GET['nis'];
$nama=$_GET['nama'];
$kelamin=$_GET['kelamin'];
$agama=$_GET['agama'];
$tempat_lahir=$_GET['tempat_lahir'];
$tanggal_lahir=$_GET['tanggal_lahir'];
$alamat=$_GET['alamat'];
$no_telepon=$_GET['no_telepon'];
$tahun_ajaran=$_GET['tahun_ajaran'];
$status=$_GET['status'];
$foto=$_GET['foto'];

$sql = "INSERT INTO t_siswa (kode_siswa, nis, nama,kelamin,agama,tempat_lahir,tanggal_lahir,alamat,no_telepon,tahun_ajaran,status,foto)
VALUES ('$kode_siswa','$nis','$nama','$kelamin','$agama','$tempat_lahir','$tanggal_lahir','$alamat,'$no_telepon','$tahun_ajaran','$status','$foto')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location:siswa.php");
?>
