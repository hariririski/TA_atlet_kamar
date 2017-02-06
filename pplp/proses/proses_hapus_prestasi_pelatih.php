<?php
	include('../koneksi.php');
		$id_riwayat=$_GET["kode_prestasi"];
		$no_database_pelatih=$_GET["id"];

		
		
												
					$perintah="DELETE FROM `riwayat_prestasi` WHERE id_riwayat='$id_riwayat'";											
					$cek2=mysqli_query($con, $perintah);
							 if($cek2){
								echo "<script type='text/javascript'>alert('Data Berhasil di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailpelatih.php?no_database_pelatih=$no_database_pelatih';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailpelatih.php?no_database_pelatih=$no_database_pelatih';</script>";
							}
													
												
													
		
								
		



?>