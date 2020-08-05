<div id='cssmenu'>
<li style="padding-left:25">
	<span>	<i class="fa fa-user fa-3x" color="red"></i><br>
			<i <?php 
				include "auth.php";
				?>
			</i>
	</span>
</li>
<br><br>
<marquee> <li style="padding-left:25px">&nbsp <?php
			 $tgl=date('l, d-m-Y');
			 echo $tgl;
			 ?>
		 
		 </li></marquee><br>
<ul>
   <li><a href="home.php"><i class="fa fa-home fa-2x"></i>&nbsp; Home</a></li>
   <li class='has-sub'><a href='#'><i class="fa fa-bars fa-2x"></i>&nbsp; Master</i></a>
            <ul>
               <li><a href="barang_karyawan.php"><span><i class="fa fa-shield fa-fw"></i>&nbsp; Data Barang</span></a></li>
			   <li><a href="suplier_karyawan.php"><span><i class="fa fa-users fa-fw"></i>&nbsp; Data Suplier</span></a></li>
			   <li><a href="departemen_karyawan.php"><span><i class="fa fa-industry"></i>&nbsp; Data Departemen</span></a></li>
			   <li><a href="satuan_karyawan.php"><span><i class="fa fa-cogs"></i>&nbsp; Data Satuan</span></a></li>
			 
            </ul>
         </li>
   
         <li class='has-sub'><a href='#'><i class="fa fa-database fa-2x"></i>&nbsp; Transaksi</a>
            <ul>
               <li><a href="barang_masuk_karyawan.php"><i class="fa fa-share fa-fw"></i><span>&nbsp; Barang Masuk</span></a></li>
			   <li><a href="barang_keluar_karyawan.php"><i class="fa fa-reply fa-fw"></i><span>&nbsp; Barang Keluar</span></a></li>
            </ul>
         </li>
		 <li class='has-sub'><a href="laporan.php"><i class="fa fa-clipboard fa-2x"></i>&nbsp; Laporan</a>
		 <ul>
				<li><a href="laporanbarang.php"><span><i class="fa fa-shield fa-fw"></i>&nbsp; Data Barang</span></a></li>
			   <li><a href="laporansuplier.php"><span><i class="fa fa-users fa-fw"></i>&nbsp; Data Suplier</span></a></li>
               <li><a href="laporanbarangmasuk.php"><i class="fa fa-share fa-fw"></i><span>&nbsp; Barang Masuk</span></a></li>
			   <li><a href="laporanbarangkeluar.php"><i class="fa fa-reply fa-fw"></i><span>&nbsp; Barang Keluar</span></a></li>
			   <li><a href="laporanstok.php"><i class="fa fa-book fa-fw"></i><span>&nbsp; Stok</span></a></li>
            </ul>
		 </li>
   <li class='last'><a href='index.php'><i class="fa fa-sign-out fa-2x"></i>&nbsp; Logout</a></li>
</ul>
<br>

</div>
