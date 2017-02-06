<?php
	include('../koneksi.php');
		$prestasi=$_GET["kode_prestasi"];

		
		if(!empty($prestasi)){
													
					$perintah="DELETE FROM `prestasi` where kode_prestasi='$prestasi'";											
					$cek2=mysqli_query($con, $perintah);
							 if($cek2){
								echo "<script type='text/javascript'>alert('Data Berhasil di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../data prestasi.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../data prestasi.php';</script>";
							}
													
													
													
		}
								
		



?>