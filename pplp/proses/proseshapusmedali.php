<?php
	include('../koneksi.php');
		$id_medali=$_GET["id_medali"];

		
		if(!empty($id_medali)){
													
					$perintah="DELETE FROM `jenis_medali` where id_medali='$id_medali'";											
					$cek2=mysqli_query($con, $perintah);
							 if($cek2){
								echo "<script type='text/javascript'>alert('Data Berhasil di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../jenis medali.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../jenis medali.php';</script>";
							}
													
													
													
		}
								
		



?>