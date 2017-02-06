<?php
include('../koneksi.php');

echo $no_database=$_POST["no_database"];
echo $nama_pelatih=$_POST["nama_pelatih"];
echo $event =$_POST["event"];
echo $tahun =$_POST["tahun"];
echo $tingkat =$_POST["tingkat"];
echo $perolehan=$_POST["perolehan"];
echo $tempat =$_POST["tempat"];




$perintah4="INSERT INTO `riwayat_prestasi`( `event`, `tahun`, `tingkat`, `perolehan`, `tempat`) VALUES ("$id_riwayat","$no_database","$event","$tahun","$tingkat","$perolehan","$tempat")";
				/*	$cek4=mysqli_query($con, $perintah4);
							 /*if($cek4){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../tambah prestasi pelatih.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../tambah prestasi pelatih.php';</script>";
							}*/




?>