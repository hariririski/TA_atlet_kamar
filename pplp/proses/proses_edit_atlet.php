<?php
include('../koneksi.php');


 
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
 $id_sekolah =$_POST["id_sekolah"];
 $alamat_sekolah =$_POST["alamat_sekolah"];
 //S$foto=$_POST["foto"];
 $nama_orangtua =$_POST["nama_orangtua"];
 $id_orangtua =$_POST["id_orangtua"];
 $alamat_orangtua =$_POST["alamat"];
 $umur_orangtua =$_POST["umur_orangtua"];
 $kode_pos =$_POST["kode_pos"];
 $no_handphone_ortu=$_POST["no_handphone_ortu"];
 $pekerjaan_orangtua=$_POST["pekerjaan_orangtua"];
 $no_kamar=$_POST["no_kamar"];
 $jalur=$_POST["jalur"];
 $cabang=$_POST["cabang"];
 $foto_atlet=basename($_FILES["fileToUpload"]["name"]);
 if($foto_atlet==null){
 

 $perintah="UPDATE `atlet` set `nama`='$nama_atlet',`alamat`='$alamat_atlet',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',
 `agama`='$agama',`umur`='$umur',`jenis_kelamin`='$jenis_kelamin',`no_hp`='$no_handphone',`pekerjaan`='$pekerjaan',`kab_kota`='$kab_kota',
 `pendidikan_terakhir`='$pendidikan_terakhir',`club`='$club',
 `jalur`='$jalur',`id_tempat_tidur`='$no_kamar',`kode_cabang`='$cabang'
 WHERE  `no_database_atlet`='$no_database_atlet'";
 
 $perintah2="UPDATE `sekolah` SET `nama_sekolah`='$nama_sekolah',`alamat`='$alamat_orangtua' WHERE `id_sekolah`='$id_sekolah'";
 
 $perintah3="UPDATE `orangtua` SET `nama`='$nama_orangtua',`alamat`='$alamat_atlet',
 `pekerjaan`='$pekerjaan_orangtua',`umur`='$umur_orangtua',`kode_pos`='$kode_pos',`no_hp`='$no_handphone_ortu' WHERE `id_orangtua`='$id_orangtua'";
 
 $hasil=mysqli_query($con, $perintah);
 $hasil2=mysqli_query($con, $perintah2);
 $hasil3=mysqli_query($con, $perintah3);
 }else{
	 $foto=upload("fileToUpload");
	  $perintah="UPDATE `atlet` set `nama`='$nama_atlet',`alamat`='$alamat_atlet',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',
 `agama`='$agama',`umur`='$umur',`jenis_kelamin`='$jenis_kelamin',`no_hp`='$no_handphone',`pekerjaan`='$pekerjaan',`kab_kota`='$kab_kota',
 `pendidikan_terakhir`='$pendidikan_terakhir',`club`='$club',
 `jalur`='$jalur',`id_tempat_tidur`='$no_kamar',`kode_cabang`='$cabang', foto='$foto'
 WHERE  `no_database_atlet`='$no_database_atlet'";
 
 $perintah2="UPDATE `sekolah` SET `nama_sekolah`='$nama_sekolah',`alamat`='$alamat_orangtua' WHERE `id_sekolah`='$id_sekolah'";
 
 $perintah3="UPDATE `orangtua` SET `nama`='$nama_orangtua',`alamat`='$alamat_atlet',
 `pekerjaan`='$pekerjaan_orangtua',`umur`='$umur_orangtua',`kode_pos`='$kode_pos',`no_hp`='$no_handphone_ortu' WHERE `id_orangtua`='$id_orangtua'";
 
 $hasil=mysqli_query($con, $perintah);
 $hasil2=mysqli_query($con, $perintah2);
 $hasil3=mysqli_query($con, $perintah3);
 }
					
							 if($hasil&&$hasil2&&$hasil3){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailatlet.php?no_database_atlet=$no_database_atlet';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailatlet.php?no_database_atlet=$no_database_atlet';</script>";
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

