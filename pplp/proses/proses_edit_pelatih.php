<?php
include('../koneksi.php');


 
 $no_database_pelatih=$_POST["no_database_pelatih"];
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
 
  $foto_pelatih=basename($_FILES["fileToUpload"]["name"]);
 if($foto_pelatih==null){
  $perintah="UPDATE `pelatih` SET `nama`='$nama_pelatih',
 `alamat`='$alamat',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`agama`='$agama',
 `umur`='$umur',`jenis_kelamin`='$jenis_kelamin',`no_hp`='$no_handphone',`pekerjaan`='$pekerjaan',
 `kab_kota`='$kab_kota',`pendidikan_terakhir`='$pendidikan_terakhir',`club`='$club',`kode_cabang`='$kode_cabang'
 WHERE `no_database_pelatih`='$no_database_pelatih'";
 

 $hasil=mysqli_query($con, $perintah);

 }else{ 
 upload("fileToUpload");
	 
	  $perintah="UPDATE `pelatih` SET `nama`='$nama_pelatih',
 `alamat`='$alamat',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`agama`='$agama',
 `umur`='$umur',`jenis_kelamin`='$jenis_kelamin',`no_hp`='$no_handphone',`pekerjaan`='$pekerjaan',
 `kab_kota`='$kab_kota',`pendidikan_terakhir`='$pendidikan_terakhir',`club`='$club',`kode_cabang`='$kode_cabang', foto='$foto_pelatih'
 WHERE `no_database_pelatih`='$no_database_pelatih'";
 

 $hasil=mysqli_query($con, $perintah);
 }
					
							 if($hasil){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailpelatih.php?no_database_pelatih=$no_database_pelatih';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../detailpelatih.php?no_database_pelatih=$no_database_pelatih';</script>";
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

