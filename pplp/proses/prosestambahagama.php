<?php
session_start();
if (!isset($_SESSION['adm'])){ //ini gunanya jika yang mengakses halaman 1 belum login, maka akan redirect ke halaman login
header("Location:index.php");
}
?>
<?php
	include('../koneksi.php');
		$nama_agama=$_POST["nama_agama"];
				
					$perintah="INSERT INTO `agama`(`nama_agama`) VALUES ('$nama_agama')";
					$cek=mysqli_query($con, $perintah);
							 if($cek){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../agama.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../agama.php';</script>";
							}
					
?>