<?php
	include('../koneksi.php');
		$kode_cabang=$_GET["kode_cabang"];

		
		if(!empty($kode_cabang)){
													
					$perintah="DELETE FROM `cabang_olahraga` WHERE kode_cabang='$kode_cabang'";											
					$cek2=mysqli_query($con, $perintah);
							 if($cek2){
								echo "<script type='text/javascript'>alert('Data Berhasil di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../cabang olahraga.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../cabang olahraga.php';</script>";
							}
													
													
													
		}
								
		



?>