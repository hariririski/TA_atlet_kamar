<?php
session_start()
 ?> 
<?php
include('../koneksi.php');
								//tangkap data dari form login
								$no_database_atlet=$_POST['no_database_atlet'];
								$cek=0;
									
									  $tampil = "SELECT no_database_atlet FROM `atlet` WHERE no_database_atlet='$no_database_atlet'";
									  $sql = mysqli_query($con,$tampil);
									  while($data = mysqli_fetch_array($sql))
									   {
									  $cek=$data['no_database_atlet'];
										
										
										
									   }
									 
										if($cek>0){
											$cek_tanggal=0;
											  $tampil = "SELECT * FROM `absen` WHERE no_database_atlet='$no_database_atlet'";
											  $sql = mysqli_query($con,$tampil);
											  while($data = mysqli_fetch_array($sql))
											   {
												   $cek_tanggal=$data['tanggal_absen'];
												   
											   }
											   $tanggal_hari_ini=date('Y-m-d');
											$ambil_tanggal=substr("$cek_tanggal",0,10);
											if($ambil_tanggal== $tanggal_hari_ini){
												echo "<script type='text/javascript'>alert('Anda Sudah Absen Hari ini');</script>";
												echo '<script language="javascript">window.location.href = "../absen.php"</script>';
												
											}else{
												echo '<script language="javascript">window.location.href = "../absen/take/take.php?id='.$no_database_atlet.'"</script>';
											}   
											
											
										}
										else{
										echo "<script type='text/javascript'>alert('Maaf Databases Atlet Tidak Terdaftar');</script>";
										echo '<script language="javascript">window.location.href = "../absen.php"</script>';
										}
?>