<?php
include('../koneksi.php');

 $id_petugas=$_POST["id_petugas"];
 $nama=$_POST["nama"];
 $no_handphone =$_POST["no_handphone"];
 $jam_masuk =$_POST["jam_masuk"];
 $jam_keluar =$_POST["jam_keluar"];
 
 
 
 $perintah1="INSERT INTO `petugas_piket`(`id_petugas`, `nama`, `no_handphone`, `jam_masuk`, `jam_keluar`) VALUES ('$id_petugas','$nama','$no_handphone','$jam_masuk','$jam_keluar')";
 
 $cek1=mysqli_query($con, $perintah1);
 							 if($cek1 ){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../tambah petugas piket.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../tambah petugas piket.php';</script>";
							}

 
 
 
 ?>
 