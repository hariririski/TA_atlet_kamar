<?php
	include('../koneksi.php');
		$kode_cabang=$_GET["id"];
		$nama_cabang=$_POST["nama_cabang"];


		
		
												
					$perintah="UPDATE `cabang_olahraga` SET `nama_cabang`='$nama_cabang' WHERE  kode_cabang='$kode_cabang'";											
					$cek2=mysqli_query($con, $perintah);
							 if($cek2){
								echo "<script type='text/javascript'>alert('Data Berhasil diPerbaharui');</script>";
								echo "<script type='text/javascript'>window.location.href='../cabang%20olahraga.php'</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal diPerbaharui');</script>";
								echo "<script type='text/javascript'>window.location.href='../cabang%20olahraga.php'</script>";
							}
													
												
													
		
								
		



?>