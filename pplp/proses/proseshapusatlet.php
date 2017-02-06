<?php
	include('../koneksi.php');
		$no_database_atlet=$_GET["no_database_atlet"];
	
	$tampil = " select *from prestasi, atlet_prestasi, atlet where atlet.no_database_atlet='123' and prestasi.kode_prestasi=atlet_prestasi.kode_prestasi and atlet.no_database_atlet=atlet_prestasi.no_database_atlet and atlet.no_database_atlet='$no_database_atlet'";
             $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
					 $perintah="DELETE FROM `atlet_prestasi` WHERE kode_atlet_prestasi='".$data['kode_atlet_prestasi']."'";											
					mysqli_query($con, $perintah);
					 $perintah2="DELETE FROM `prestasi` WHERE kode_prestasi='".$data['kode_prestasi']."'";											
					mysqli_query($con, $perintah2);
					  
					 
				   }
		
		
		$tampil = "select *,atlet.nama as nama_atlet, atlet.no_hp as hp_atlet, orangtua.no_hp as hp_orang_tua from atlet,tempat_tidur,sekolah,orangtua, cabang_olahraga, kamar where tempat_tidur.id_tempat_tidur=atlet.id_tempat_tidur and sekolah.id_sekolah=atlet.id_sekolah and orangtua.id_orangtua=atlet.id_orangtua and cabang_olahraga.kode_cabang=atlet.kode_cabang and tempat_tidur.id_kamar=kamar.id_kamar and atlet.no_database_atlet='$no_database_atlet'";
             $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
					  
					$perintah3="DELETE FROM `orangtua` WHERE id_orangtua='".$data['id_orangtua']."'";											
					mysqli_query($con, $perintah3);
					$perintah4="DELETE FROM `sekolah` WHERE id_sekolah='".$data['id_sekolah']."'";											
					mysqli_query($con, $perintah4);
					$perintah5="DELETE FROM `atlet` WHERE `no_database_atlet`='".$data['no_database_atlet']."'";											
					mysqli_query($con, $perintah5);   					
					$perintah6="UPDATE `tempat_tidur` SET `status`='0' WHERE id_tempat_tidur='".$data['id_tempat_tidur']."'";											
					mysqli_query($con, $perintah6);
					$perintah7="DELETE FROM `absen` WHERE no_database_atlet='".$data['no_database_atlet']."'";											
					mysqli_query($con, $perintah7);  					
                
	
													
					
							 
								echo "<script type='text/javascript'>alert('Data Berhasil di hapus');</script>";
								echo "<script type='text/javascript'>window.location.href='../data atlet.php';</script>";
							
													
													
													
		
									
			

			}



?>