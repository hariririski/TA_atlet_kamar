<?php
include('../koneksi.php');

 $id_petugas=$_POST["id_petugas"];
 $jam_masuk =$_POST["jam_masuk"];
 $jam_keluar =$_POST["jam_keluar"];
 
 
 
 $perintah1="INSERT INTO `atlet_petugas_piket`(`jam_masuk`, `jam_keluar`, `no_database_atlet`, `id_petugas`, `no_jadwal`) VALUES ()";
 
 $cek1=mysqli_query($con, $perintah1);
 							 if($cek1 ){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../tambah petugas piket.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../tambah petugas pikket.php';</script>";
							}

 
 
 
 ?>
 