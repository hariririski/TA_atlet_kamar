<?php
	include('../koneksi.php');
		$id_agama=$_GET["id_agama"];

		
		if(!empty($id_agama)){
													
					$perintah="DELETE FROM `agama` where id_agama='$id_agama'";											
					$cek2=mysqli_query($con, $perintah);
							 if($cek2){
								echo "<script type='text/javascript'>alert('Data Berhasil di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../agama.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../agama.php';</script>";
							}
													
													
													
		}
								
		



?>