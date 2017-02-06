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
 $nama_prestasi=$_POST["nama_prestasi"];
 $event=$_POST["event"];
 $tingkat=$_POST["tingkat"];
 $tahun=$_POST["tahun"];
 $tempat=$_POST["tempat"];
 $emas=$_POST["emas"];
 $perak=$_POST["emas"];
 $perunggu=$_POST["perunggu"];
 
 
$foto=upload("fileToUpload");


$perintah1="INSERT INTO  `pelatih` (  `no_database_pelatih` ,  `nama` ,  `alamat` ,  `tempat_lahir` ,  `tanggal_lahir` ,  `agama` ,  `umur` ,  `jenis_kelamin` ,  `no_hp` ,  `pekerjaan` ,  `kab_kota` , `pendidikan_terakhir` ,  `club` ,  `foto` ,  `kode_cabang` ) 
VALUES (
'$no_database_pelatih',  '$nama_pelatih',  '$alamat',  '$tempat_lahir',  '$tanggal_lahir',  '$agama',  '$umur',  '$jenis_kelamin', '$no_handphone',  '$pekerjaan',  '$kab_kota',  '$pendidikan_terakhir',  '$club',  '$foto',  '$kode_cabang'
)";
					$cek1=mysqli_query($con, $perintah1);

							
$panjang=count($nama_prestasi);
					for($i=0;$i<$panjang;$i++){
	 echo $nama_prestasi[$i];
	 echo $event[$i];
	 echo $tingkat[$i];
	 echo $tahun[$i];
	 echo $tempat[$i];
	 echo $emas[$i];
	 echo $perak[$i];
	 echo $perunggu[$i];
	 $kode_prestasi=$no_database_pelatih.$i;
	$q1="INSERT INTO `riwayat_prestasi`(`id_riwayat`, `event`, `tahun`, `tingkat`, `tempat`, `emas`, `perak`, `perunggu`, `nama_prestasi`, `no_database_pelatih`)
	VALUES ('$kode_prestasi','$event[$i]','$tahun[$i]','$tingkat[$i]','$tempat[$i]','$emas[$i]','$perak[$i]','$perunggu[$i]','$nama_prestasi[$i]','$no_database_pelatih')";
					$cekorangtua=mysqli_query($con, $q1);
					
	 
 }
					
							 if($cek1 ){
								echo "<script type='text/javascript'>alert('Data Berhasil di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../forms pelatih.php';</script>";
							}
							else{
								echo "<script type='text/javascript'>alert('Data gagal di Input');</script>";
								echo "<script type='text/javascript'>window.location.href='../forms pelatih.php';</script>";
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
