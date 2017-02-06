
<?php
include('../koneksi.php');

$no_kamar=$_POST["no_kamar"];
$tempat_tidur=$_POST["tempat_tidur"];

					$perintah1="INSERT INTO `tempat_tidur`(`nama_tempat_tidur`, `id_kamar`) VALUES ('$tempat_tidur','$no_kamar')";
					$cek1=mysqli_query($con, $perintah1);
							 if($cek1){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../tambahtempattidur.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../tambahtrempattidur.php';</script>";
							}



?>