<?php
	include('../koneksi.php');
		$no_database_pelatih=$_GET["no_database_pelatih"];

		
		if(!empty($no_database_pelatih)){
													
					$perintah="DELETE FROM `pelatih` where no_database_pelatih='$no_database_pelatih'";											
					$cek2=mysqli_query($con, $perintah);
							 if($cek2){
								echo "<script type='text/javascript'>alert('Data Berhasil di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../data pelatih.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../data pelatih.php';</script>";
							}
													
													
													
		}
								
		



?>