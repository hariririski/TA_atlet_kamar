<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 
<?php

	include('../koneksi.php');
 		  $no_database=$_POST['no_database_pelatih'];
 $nama_pelatih=$_POST["nama_pelatih"];
 $alamat =$_POST["alamat"];
 $tempat_lahir =$_POST["tempat_lahir"];
 $tanggal_lahir =$_POST["tanggal_lahir"];
 $agama=$_POST["agama"];
 $umur =$_POST["umur"];
 $jenis_kelamin=$_POST["jenis_kelamin"];
 $no_handphone =$_POST["no_handphone"];
 $pekerjaan=$_POST["pekerjaan"];
 $kab_kota=$_POST["kab_kota"];
 $pendidikan_terakhir=$_POST["pendidikan_terakhir"];
 $club=$_POST["club"];
 $kode_cabang=$_POST["kode_cabang"];
$nama_prestasi1=$_POST["nama_prestasi1"];
 $nama_prestasi2=$_POST["nama_prestasi2"];
 $nama_prestasi3=$_POST["nama_prestasi3"];
 $nama_prestasi4=$_POST["nama_prestasi4"];
 $event1=$_POST["event1"];
 $event2=$_POST["event2"];
 $event3=$_POST["event3"];
 $event4=$_POST["event4"];
 $tempat1=$_POST["tempat1"];
 $tempat2=$_POST["tempat2"];
 $tempat3=$_POST["tempat3"];
 $tempat4=$_POST["tempat4"];
 $tingkat1=$_POST["tingkat1"];
 $tingkat2=$_POST["tingkat2"];
 $tingkat3=$_POST["tingkat3"];
 $tingkat4=$_POST["tingkat4"];
 $tahun1=$_POST["tahun1"];
 $tahun2=$_POST["tahun2"];
 $tahun3=$_POST["tahun3"];
 $tahun4=$_POST["tahun4"];
 $emas1=$_POST["emas1"];
 $emas2=$_POST["emas2"];
 $emas3=$_POST["emas3"];
 $emas4=$_POST["emas4"];
 $perak1=$_POST["perak1"];
 $perak2=$_POST["perak2"];
 $perak3=$_POST["perak3"];
 $perak4=$_POST["perak4"];
 $perunggu1=$_POST["perunggu1"];
 $perunggu2=$_POST["perunggu2"];
 $perunggu3=$_POST["perunggu3"];
 $perunggu4=$_POST["perunggu4"];
		$foto= upload("fileToUpload");
		
		
					echo $perintah1="UPDATE `pelatih` SET `nama`='$nama_pelatih',`alamat`='$alamat',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`agama`='$agama',`umur`='$umur',`jenis_kelamin`='$jenis_kelamin',`no_hp`='$no_handphone',`pekerjaan`='$pekerjaan',`kab_kota`='$kab_kota',`pendidikan_terakhir`='$pendidikan_terakhir',`club`='$club',`foto`='$foto',`kode_cabang`='$kode_cabang' WHERE `no_database_pelatih`='$no_database_pelatih'";											
					$cek1=mysqli_query($con, $perintah1);
					$perintah2="UPDATE `riwayat_prestasi` SET `event`='$event1',`tahun`='$tahun1',`tingkat`='$tingkat1',`tempat`='$tempat1',`emas`='$emas1',`perak`='$perak1',`perunggu`='$perunggu1',`nama_prestasi`='$nama_prestasi1' WHERE `no_database_pelatih`='$no_database_pelatih'";											
					$cek2=mysqli_query($con, $perintah2);
					$perintah3="UPDATE `riwayat_prestasi` SET `event`='$event2',`tahun`='$tahun2',`tingkat`='$tingkat2',`tempat`='$tempat2',`emas`='$emas2',`perak`='$perak2',`perunggu`='$perunggu2',`nama_prestasi`='$nama_prestasi2' WHERE `no_database_pelatih`='$no_database_pelatih'";											
					$cek3=mysqli_query($con, $perintah3);
					$perintah4="UPDATE `riwayat_prestasi` SET `event`='$event3',`tahun`='$tahun3',`tingkat`='$tingkat3',`tempat`='$tempat3',`emas`='$emas3',`perak`='$perak3',`perunggu`='$perunggu3',`nama_prestasi`='$nama_prestasi3' WHERE `no_database_pelatih`='$no_database_pelatih'";											
					$cek4=mysqli_query($con, $perintah4);
					$perintah5="UPDATE `riwayat_prestasi` SET `event`='$event4',`tahun`='$tahun4',`tingkat`='$tingkat4',`tempat`='$tempat4',`emas`='$emas4',`perak`='$perak4',`perunggu`='$perunggu4',`nama_prestasi`='$nama_prestasi4' WHERE `no_database_pelatih`='$no_database_pelatih'";											
					$cek5=mysqli_query($con, $perintah5);
							 if($cek1 && $cek2 && $cek3 && $cek4 && $cek5){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailpelatih.php?no_database_pelatih='$no_database'';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../editpelatih.php';</script>";
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