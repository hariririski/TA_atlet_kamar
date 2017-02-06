<?php
session_start();
if (!isset($_SESSION['adm'])){ //ini gunanya jika yang mengakses halaman 1 belum login, maka akan redirect ke halaman login
header("Location:index.php");
}
?>
<?php
	include('../koneksi.php');
		$nama_medali=$_POST["nama_medali"];
				
					$perintah="INSERT INTO `jenis_medali`(`nama_medali`) VALUES ('$nama_medali')";
					$cek=mysqli_query($con, $perintah);
							 if($cek){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../jenis medali.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../jenis medali.php';</script>";
							}
					
?>