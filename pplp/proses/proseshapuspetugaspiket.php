<?php
	include('../koneksi.php');
		$id_petugas=$_GET["id_petugas"];

		
		if(!empty($id_petugas)){
													
					$perintah="DELETE FROM `petugas_piket` where id_petugas='$id_petugas'";											
					$cek2=mysqli_query($con, $perintah);
							 if($cek2){
								echo "<script type='text/javascript'>alert('Data Berhasil di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../data petugas piket.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../data petugas piket.php';</script>";
							}
													
													
													
		}
								
		



?>