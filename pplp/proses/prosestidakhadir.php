
<?php
include('../koneksi.php');

session_start();
$id_petugas=$_SESSION['piket'];
$id_jadwal=$_GET['id_jadwal'];
$keterangan=$_POST["keterangan"];
$kehadiran='Tidak Hadir';


					echo $perintah1="UPDATE `atlet_petugas_piket` SET `id_petugas`='$id_petugas',`keterangan`='$keterangan',`kehadiran`='$kehadiran' WHERE no_jadwal='$id_jadwal'";
					$cek1=mysqli_query($con, $perintah1);
							 if($cek1){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../tambah kamar.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../tambah kamar.php';</script>";
							}



?>