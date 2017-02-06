<?php
	include('../koneksi.php');
		 $no_database_pelatih=$_GET['id'];
		 $id_riwayat=$_GET['id_riwayat'];
		
		$event=$_POST["event"];
		$nama_prestasi=$_POST["nama_prestasi"];
		$tahun=$_POST["tahun"];
		$tempat=$_POST["tempat"];
		$tingkat=$_POST["tingkat"];
		$emas=$_POST["emas"];
		$perak=$_POST["perak"];
		$perunggu=$_POST["perunggu"];
		
		
		
	
													
					$perintah="UPDATE `riwayat_prestasi` SET `event`='$event',`tahun`='$tahun',`tingkat`='$tingkat',
					`tempat`='$tempat',`emas`='$emas',`perak`='$perak',`perunggu`='$perunggu',`nama_prestasi`='$nama_prestasi' WHERE id_riwayat='$id_riwayat'";
					
			
					$cek1=mysqli_query($con, $perintah);
							 if($cek1){
								echo "<script type='text/javascript'>alert('Prestasi Berhasil Diperbaharui');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailpelatih.php?no_database_pelatih=$no_database_pelatih';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Prestasi Gagal Diperbaharui');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailpelatih.php?no_database_pelatih=$no_database_pelatih';</script>";
							}
													
											
		
								
	



?>