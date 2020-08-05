<div id='cssmenu'>
<li style="padding-left:25">
<span><i class="fa fa-user fa-fw">
<?php 
include "auth.php";
?>
</i></span>
</li>
<br><br>
<marquee> <li style="padding-left:25px">&nbsp <?php
			 $tgl=date('l, d-m-Y');
			 echo $tgl;
			 ?>
		 
		 </li></marquee><br>
<ul>
   <li><a href="supervisor.php"><i class="fa fa-home fa-2x"></i>&nbsp; Home</a></li>
   <li class='has-sub'><a href='#'><i class="fa fa-bars fa-2x"></i>&nbsp; Laporan</i></a>
            <ul>
			   <li><a href="laporanbarangmasuk_spv.php"><span><i class="fa fa-share fa-fw"></i>&nbsp; Barang Masuk</span></a></li>
			   <li><a href="laporanbarangkelur.php"><span><i class="fa fa-reply fa-fw"></i>&nbsp; Barang Keluar</span></a></li>
			   <li><a href="laporanstok.php"><span><i class="fa fa-shield fa-fw"></i>&nbsp; Stok</span></a></li>
            </ul>
         </li>
   <li class='last'><a href='index.php'><i class="fa fa-sign-out fa-2x"></i>&nbsp; Logout</a></li>
</ul>
<br>

</div>
