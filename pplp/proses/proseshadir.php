<?php
session_start();
echo $id_petugas=$_SESSION['piket'];
echo "<br>";
echo $tanggal=date('Y-m-d g:i:s');
echo "<br>";
 ?> 
<?php
include('../koneksi.php');
								//tangkap data dari form login
echo $no_jadwal =$_GET['no_database_atlet'];

$perintah="UPDATE `atlet_petugas_piket` SET `id_petugas`='$id_petugas',`keterangan`='-',`kehadiran`='Hadir' WHERE no_jadwal='$no_jadwal'";
					$cek=mysqli_query($con, $perintah);
							 if($cek){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../petugas absen.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../petugas absen.php';</script>";
							}
?>