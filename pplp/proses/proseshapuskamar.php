<?php
	include('../koneksi.php');
		$no_kamar=$_GET["no_kamar"];

		 
		if(!empty($id_kamar)){
													
					$perintah="DELETE FROM `kamar` where no_kamar='$no_kamar'";											
					$cek2=mysqli_query($con, $perintah);
							 if($cek2){
								echo "<script type='text/javascript'>alert('Data Berhasil di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../kamar.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../kamar.php';</script>";
							}
													
													
													
		}
								
		



?>