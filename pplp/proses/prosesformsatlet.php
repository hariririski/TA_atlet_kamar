<?php
include('../koneksi.php');

 $nama_prestasi=$_POST["nama_prestasi"];
 $event=$_POST["event"];
 $tingkat=$_POST["tingkat"];
 $tahun=$_POST["tahun"];
 $tempat=$_POST["tempat"];
 $emas=$_POST["emas"];
 $perak=$_POST["emas"];
 $perunggu=$_POST["perunggu"];
 
 
 
 $no_database_atlet=$_POST["no_database_atlet"];
 $nama_atlet =$_POST["nama_atlet"];
 $alamat_atlet =$_POST["alamat"];
 $tempat_lahir =$_POST["tempat_lahir"];
 $tanggal_lahir =$_POST["tanggal_lahir"];
 $agama=$_POST["agama"];
 $umur =$_POST["umur"];
 $jenis_kelamin=$_POST["jenis_kelamin"];
 $no_handphone =$_POST["no_handphone"];
 $pekerjaan=$_POST["pekerjaan"];
 $kab_kota=$_POST["kab_kota"];
 $pendidikan_terakhir=$_POST["pendidikan_terakhir"];
 $club =$_POST["club"];
 $nama_sekolah =$_POST["nama_sekolah"];
 $alamat_sekolah =$_POST["alamat_sekolah"];
 //S$foto=$_POST["foto"];
 $nama_orangtua =$_POST["nama_orangtua"];
 $alamat_orangtua =$_POST["alamat"];
 $umur_orangtua =$_POST["umur_orangtua"];
 $kode_pos =$_POST["kode_pos"];
 $no_handphone_ortu=$_POST["no_handphone_ortu"];
 $pekerjaan_orangtua=$_POST["pekerjaan_orangtua"];
 $no_kamar=$_POST["no_kamar"];
 $jalur=$_POST["jalur"];
 $cabang=$_POST["cabang"];
 
$foto=upload("fileToUpload");

 $perintah2="INSERT INTO `atlet`(`no_database_atlet`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `agama`, `umur`, `jenis_kelamin`, `no_hp`, `pekerjaan`, `kab_kota`, `pendidikan_terakhir`, `foto`, `club`, `id_tempat_tidur`, `id_sekolah`, `id_orangtua`, `jalur`,`kode_cabang`)
 VALUES ('$no_database_atlet','$nama_atlet','$alamat_atlet','$tempat_lahir','$tanggal_lahir','$agama','$umur','$jenis_kelamin','$no_handphone','$pekerjaan','$kab_kota','$pendidikan_terakhir','$foto','$club','$no_kamar','$no_database_atlet','$no_database_atlet','$jalur','$cabang')";

 $perintahsekolah="INSERT INTO `sekolah`(`id_sekolah`, `nama_sekolah`, `alamat`) VALUES ('$no_database_atlet','$nama_sekolah','$alamat_sekolah')";
					$ceksekolah=mysqli_query($con, $perintahsekolah);
					
$perintahorangtua="INSERT INTO `orangtua`(`id_orangtua`, `nama`, `alamat`, `pekerjaan`, `umur`, `kode_pos`, `no_hp`) VALUES ('$no_database_atlet','$nama_orangtua','$alamat_orangtua','$pekerjaan_orangtua','$umur','$kode_pos','$no_handphone_ortu')";
					$cekorangtua=mysqli_query($con, $perintahorangtua);
$isi_tempat_tidur="UPDATE `tempat_tidur` SET `status`='1' WHERE id_tempat_tidur='$no_kamar'";
					$kosong=mysqli_query($con, $isi_tempat_tidur);
$panjang=count($nama_prestasi);
 for($i=0;$i<$panjang;$i++){
	 $nama_prestasi[$i];
	$event[$i];
	 $tingkat[$i];
	$tahun[$i];
	 $tempat[$i];
	$emas[$i];
	 $perak[$i];
	 $perunggu[$i];
	 $kode_prestasi=$no_database_atlet.$i;
	$q1="INSERT INTO `prestasi`(`kode_prestasi`, `tingkat`, `event`, `tahun`, `emas`, `perunggu`, `perak`, `tempat`)
	 VALUES ('$kode_prestasi','$tingkat[$i]','$event[$i]','$tahun[$i]','$emas[$i]','$perunggu[$i]','$perak[$i]','$tempat[$i]')";
					$cekorangtua=mysqli_query($con, $q1);
					echo"<br>";
	$q2="INSERT INTO `atlet_prestasi`(`no_database_atlet`, `kode_prestasi`) VALUES ('$no_database_atlet','$kode_prestasi')";
					$cekorangtua2=mysqli_query($con, $q2);
						echo"<br>";
	 
 }
 
					$cek2=mysqli_query($con, $perintah2);
							 if($cek2 && $ceksekolah && $cekorangtua){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../data atlet.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../data atlet.php';</script>";
							}

?>

<?php
function upload($name){
	$uploadDir = "uploads/";
	// Apabila ada file yang di-upload
	if(is_uploaded_file($_FILES[$name]['tmp_name'])){
		$uploadFile = $_FILES[$name];
		// Extract nama file
		$extractFile = pathinfo($uploadFile['name']);
		$size = $_FILES[$name]['size']; //untuk mengetahui ukuran file
		$tipe = $_FILES[$name]['type'];// untuk mengetahui tipe file
	$sameName = 0; // Menyimpan banyaknya file dengan nama yang sama dengan file yg diupload
	$handle = opendir($uploadDir);
	while(false !== ($file = readdir($handle))){ // Looping isi file pada directory tujuan
		// Apabila ada file dengan awalan yg sama dengan nama file di uplaod
		if(strpos($file,$extractFile['filename']) !== false)
		$sameName++; // Tambah data file yang sama
	}
	/* Apabila tidak ada file yang sama ($sameName masih '0') maka nama file pakai 
	* nama ketika diupload, jika $sameName > 0 maka pakai format "namafile($sameName).ext */
	$newName = empty($sameName) ? $uploadFile['name'] : $extractFile['filename'].'('.$sameName.').'.$extractFile['extension'];

	if(move_uploaded_file($uploadFile['tmp_name'],$uploadDir.$newName)){
		'File berhasil diupload dengan nama: '.$newName;
		return $newName;
	}
	else{
		echo 'File gagal diupload';
	}
	}
}

?>

