<?php
session_start();
if (!isset($_SESSION['adm'])){ //ini gunanya jika yang mengakses halaman 1 belum login, maka akan redirect ke halaman login
header("Location:index.php");
}
?>
<?php
	include('../koneksi.php');
		$nama_admin=$_POST["nama_admin"];
		$password_admin=$_POST["password_admin"];
		$user_admin=$_POST["user_admin"];
				
					$perintah="INSERT INTO `admin`(`nama`, `password`, `user`) VALUES ('$nama_admin','$password_admin','$user_admin')";
					$cek=mysqli_query($con, $perintah);
							 if($cek){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../tambah admin.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../tambah admin.php';</script>";
							}
					
?>