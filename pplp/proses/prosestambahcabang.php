<?php
session_start();
if (!isset($_SESSION['adm'])){ //ini gunanya jika yang mengakses halaman 1 belum login, maka akan redirect ke halaman login
header("Location:index.php");
}
?>
<?php
$kode=$_SESSION['adm'];
	include('../koneksi.php');
		$Nama_cabang=$_POST["Nama_cabang"];
				
					$perintah="INSERT INTO `cabang_olahraga`(`nama_cabang`) VALUES ('$Nama_cabang')";
					$cek=mysqli_query($con, $perintah);
							 if($cek){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../cabang olahraga.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../cabang olahraga.php';</script>";
							}
					
?>