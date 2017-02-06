<?php
	include('../koneksi.php');
		$id_agama=$_GET["id_agama"];
		$nama_agama=$_POST["nama_agama"];


		
		
												
					$perintah="UPDATE `agama` SET `nama_agama`='$nama_agama' WHERE id_agama='$id_agama'";											
					$cek2=mysqli_query($con, $perintah);
							 if($cek2){
								echo "<script type='text/javascript'>alert('Data Berhasil diPerbaharui');</script>";
								echo "<script type='text/javascript'>window.location.href='../agama.php'</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal diPerbaharui');</script>";
								echo "<script type='text/javascript'>window.location.href='../agama.php'</script>";
							}
													
												
													
		
								
		



?>