<?php
	include('../koneksi.php');
		$prestasi=$_GET["kode_prestasi"];
		$no_database_atlet=$_GET["no_database_atlet"];

		
		if(!empty($prestasi)){
													
					$perintah="DELETE FROM `prestasi` where kode_prestasi='$prestasi'";											
					$cek2=mysqli_query($con, $perintah);
							 if($cek2){
								echo "<script type='text/javascript'>alert('Data Berhasil di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailatlet.php?no_database_atlet=$no_database_atlet';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailatlet.php?no_database_atlet=$no_database_atlet';</script>";
							}
													
													
													
		}
								
		



?>