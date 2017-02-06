<?php
session_start();
if (!isset($_SESSION['piket'])){ //ini gunanya jika yang mengakses halaman 1 belum login, maka akan redirect ke halaman login
header("Location:login.php");
}
?>
<?php
include('../koneksi.php');
$
$no_database_atlet=$_GET['no_database_atlet'];
 $tanggal=date('Y-m-d g:i:s');
             
					$perintah1="INSERT INTO `kamar`(`no_kamar`,`gedung`, `jumlah_kasur`) VALUES ('$no_kamar','$jumlah_kasur','$gedung')";
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