<?php
	include('../koneksi.php');
		$no_database_pelatih=$_GET['id'];
		
		echo $event=$_POST["event"];
		$nama_prestasi=$_POST["nama_prestasi"];
		$tahun=$_POST["tahun"];
		$tempat=$_POST["tempat"];
		$tingkat=$_POST["tingkat"];
		$emas=$_POST["emas"];
		$perak=$_POST["perak"];
		$perunggu=$_POST["perunggu"];
		
		
		
		
													
					echo $perintah="INSERT INTO `riwayat_prestasi`(`event`, `tahun`, `tingkat`, `tempat`, `emas`, `perak`, `perunggu`, `nama_prestasi`, `no_database_pelatih`) 
					VALUES ('$event','$tahun','$tingkat','$tempat','$emas','$perak','$perunggu','$nama_prestasi','$no_database_pelatih')";
					
					$cek1=mysqli_query($con, $perintah);
							 if($cek1){
								echo "<script type='text/javascript'>alert('Prestasi Berhasil Ditambahkan');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailpelatih.php?no_database_pelatih=$no_database_pelatih';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Prestasi Gagal Ditambahkan');</script>";
								//echo "<script type='text/javascript'>window.location.href='../detailpelatih.php?no_database_pelatih=$no_database_pelatih';</script>";
							}
													
													
													
		
								
		



?>