<?php
	include('../koneksi.php');
		$no_database_atlet=$_GET['id2'];
		$gambar=$_GET['id'];
		$tanggal=date('Y-m-d H:i:s');
		
		
			$array = array();
			$array = explode('/', $gambar);

			$foto=$array[9];
		
		
		
		
												
					$perintah="INSERT INTO `absen`(`tanggal_absen`, `foto_absen`, `no_database_atlet`) 
					VALUES ('$tanggal','$foto','$no_database_atlet')";
					
					$cek1=mysqli_query($con, $perintah);
							 if($cek1){
								echo "<script type='text/javascript'>alert('Absen Berhasil');</script>";
								echo "<script type='text/javascript'>window.location.href='../absen.php'</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('absen Gagal silahkan ulangi')</script>";
								echo "<script type='text/javascript'>window.location.href='../absen.php'</script>";
							}
													
												
													
		
								
		



?>