<?php
//koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "gudang";
 
$conn = mysql_connect($host, $user, $pass);
if ($conn) {
	$open = mysql_select_db($dbnm);
	if (!$open) {
		die ("Database tidak dapat dibuka karena ".mysql_error());
	}
} else {
	die ("Server MySQL tidak terhubung karena ".mysql_error());
}
//akhir koneksi
 
#ambil data di tabel dan masukkan ke array
$query = "SELECT no_faktur,tanggal_masuk,nama_suplier,kode_barang,nama_barang,jumlah_masuk from barang_masuk";

$sql = mysql_query ($query);
$data = array();
while ($row = mysql_fetch_assoc($sql)) {
	array_push($data, $row);
}
 
#setting judul laporan dan header tabel
$judul = "Laporan Data Suplay Barang";
$header = array(
		
		array("label"=>"No Faktur", "length"=>27, "align"=>"C"),
		array("label"=>"Tanggal", "length"=>27, "align"=>"C"),
		array("label"=>"Nama Suplier", "length"=>40, "align"=>"C"),
		array("label"=>"Kode Barang", "length"=>27, "align"=>"C"),
		array("label"=>"Nama Barang", "length"=>40, "align"=>"C"),
		array("label"=>"Jumlah Masuk", "length"=>27, "align"=>"C"),
		

	);
 
#sertakan library FPDF dan bentuk objek
require_once ("fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();
 
#tampilkan judul laporan
$pdf->SetFont('Arial','B','16');
$pdf->Cell(0,10, $judul,'0', 3, 'C');
$pdf->Cell(0,10,'PT Sinar Alum Sarana ','0',3,'C');
$pdf->SetFont('Arial','','10');
$pdf->Cell(0,5,'Jl. Harapan Raya lot EE Kawasan Industri KIIC Karawang','0',3,'C');
$pdf->Cell(0,5,'','0',3,'C');
#buat header tabel
$pdf->SetFont('Arial','','12');
$pdf->SetFillColor(60, 100, 100);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(60,100,100);
foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 10, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();
 
#tampilkan data tabelnya
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('Arial','','10');
$fill=false;
foreach ($data as $baris) {
	$i = 0;
	foreach ($baris as $cell) {
		$pdf->Cell($header[$i]['length'], 7, $cell, 3, '0', $kolom['align'], $fill);
		$i++;
	}
	$fill = !$fill;
	$pdf->Ln();
}
 
#output file PDF
$pdf->Output();
?>