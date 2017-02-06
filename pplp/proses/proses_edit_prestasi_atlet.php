<?php
	include('../koneksi.php');
		$no_database_atlet=$_GET['id'];
		$kode_prestasi=$_GET['kode_prestasi'];
		
		$event=$_POST["event"];
		$tahun=$_POST["tahun"];
		$tempat=$_POST["tempat"];
		$tingkat=$_POST["tingkat"];
		$emas=$_POST["emas"];
		$perak=$_POST["perak"];
		$perunggu=$_POST["perunggu"];
		
		 
		
	
													
					$perintah="UPDATE `prestasi` SET `tingkat`='$tingkat',`event`='$event',`tahun`='$tahun',
					`emas`='$emas',`perunggu`='$perunggu',`perak`='$perak',`tempat`='$tempat' WHERE kode_prestasi='$kode_prestasi'";
						$cek1=mysqli_query($con, $perintah);
					
							 if($cek1){
								echo "<script type='text/javascript'>alert('Prestasi Berhasil diperbaharui');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailatlet.php?no_database_atlet=$no_database_atlet';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Prestasi Gagal diperbaharui');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailatlet.php?no_database_atlet=$no_database_atlet';</script>";
							}
													
													
													
		
								
		



?>