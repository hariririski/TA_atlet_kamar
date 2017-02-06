<?php
	include('../koneksi.php');
		$no_database_atlet=$_GET['id'];
		
		$event=$_POST["event"];
		$tahun=$_POST["tahun"];
		$tempat=$_POST["tempat"];
		$tingkat=$_POST["tingkat"];
		$emas=$_POST["emas"];
		$perak=$_POST["perak"];
		$perunggu=$_POST["perunggu"];
		
		 $kode_prestasi=$no_database_atlet.date('Y').date('H').date('i').date('s');
		
		
													
					$perintah="INSERT INTO `prestasi`(`kode_prestasi`, `tingkat`, `event`, `tahun`, `emas`, `perunggu`, `perak`, `tempat`)
					VALUES ('$kode_prestasi','$tingkat','$event','$tahun','$emas','$perunggu','$perak','$tempat')";
					$perintah2="INSERT INTO `atlet_prestasi`(`no_database_atlet`, `kode_prestasi`) 
					VALUES ('$no_database_atlet','$kode_prestasi')";
					$cek1=mysqli_query($con, $perintah);
					$cek2=mysqli_query($con, $perintah2);
							 if($cek1&&$cek2){
								echo "<script type='text/javascript'>alert('Prestasi Berhasil Ditambahkan');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailatlet.php?no_database_atlet=$no_database_atlet';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Prestasi Gagal Ditambahkan');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailatlet.php?no_database_atlet=$no_database_atlet';</script>";
							}
													
													
													
		
								
		



?>