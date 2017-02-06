 <?php
include('../koneksi.php');
 
 
  $cabang=$_POST["cabang"];
 $tingkat=$_POST["tingkat"];
 $event =$_POST["event"];
 $tempat =$_POST["tempat"];
 $tahun =$_POST["tahun"];
 $emas=$_POST["emas"];
 $perunggu=$_POST["perunggu"];
 $perak=$_POST["perak"];
 
 $kode_prestasi=0;
 
                   
                  $tampil = "SELECT max(kode_prestasi) from prestasi_cabor where kode_cabang='$cabang'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   if($data["max(kode_prestasi)"]==null){
                  $kode_prestasi=$cabang."1";
				   }
				   else if($data["max(kode_prestasi)"]!=null)
				   {
					   $panjang=strlen($cabang);
					   $max=$data["max(kode_prestasi)"];
					   $max1=substr($max,$panjang);
					   $max1++;
					   $kode_prestasi=$cabang.$max1;
				   }
                   }
  
 
 $perintah1="INSERT INTO `prestasi`(`kode_prestasi`, `tingkat`, `event`, `tahun`, `emas`, `perunggu`, `perak`, `tempat`) VALUES ('$kode_prestasi','$tingkat','$event','$tahun','$emas','$perunggu','$perak','$tempat')";
$perintah2= "INSERT INTO `prestasi_cabor`(`kode_prestasi`, `kode_cabang`) VALUES ('$kode_prestasi','$cabang')";
					$cek1=mysqli_query($con, $perintah1);
					$cek2=mysqli_query($con, $perintah2);
 
  if($cek1 && $cek2 ){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../data prestasi.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../prestasi cabor.php';</script>";
							}
 
 ?>