 <?php
include('../koneksi.php');
 
 
 $atlet=$_POST["atlet"];
 $tingkat=$_POST["tingkat"];
 $event =$_POST["event"];
 $tempat =$_POST["tempat"];
 $tahun =$_POST["tahun"];
 $emas=$_POST["emas"];
 $perunggu=$_POST["perunggu"];
 $perak=$_POST["perak"];
 
 $kode_prestasi=0;
 
                   
                  $tampil = "SELECT max(kode_prestasi) from atlet_prestasi where no_database_atlet='$atlet'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   if($data["max(kode_prestasi)"]==null){
                  echo $kode_prestasi=$atlet."1";
				   }
				   else if($data["max(kode_prestasi)"]!=null)
				   {
					   $panjang=strlen($atlet);
					   $max=$data["max(kode_prestasi)"];
					   $max1=substr($max,$panjang);
					   $max1++;
					 echo  $kode_prestasi=$atlet.$max1;
				   }
                   }
  
 
 $perintah1="INSERT INTO `prestasi`(`kode_prestasi`, `tingkat`, `event`, `tahun`, `emas`, `perunggu`, `perak`, `tempat`) VALUES ('$kode_prestasi','$tingkat','$event','$tahun','$emas','$perunggu','$perak','$tempat')";
 $perintah2= "INSERT INTO `atlet_prestasi`(`no_database_atlet`, `kode_prestasi`) VALUES  ('$atlet','$kode_prestasi')";
					$cek1=mysqli_query($con, $perintah1);
					$cek2=mysqli_query($con, $perintah2);
 
  if($cek1 && $cek2 ){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../data prestasi.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../prestasi atlet.php';</script>";
							}
							}
							
 
 ?>