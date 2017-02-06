<?php
										
										
include("../koneksi.php");

		   $no_database=$_GET['no_database_atlet'];
		   include'koneksi.php';
            $tampil = "select *,atlet.nama as nama_atlet from atlet,tempat_tidur,sekolah,orangtua, cabang_olahraga, kamar where tempat_tidur.id_tempat_tidur=atlet.id_tempat_tidur and sekolah.id_sekolah=atlet.id_sekolah and orangtua.id_orangtua=atlet.id_orangtua and cabang_olahraga.kode_cabang=atlet.kode_cabang and tempat_tidur.id_kamar=kamar.id_kamar and atlet.no_database_atlet='$no_database'";
    
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $no_database=$data['no_database_atlet'];
                   $nama_atlet=$data['nama_atlet'];
                   $alamat_atlet=$data['alamat'];
                   $tempat_lahir=$data['tempat_lahir'];
                   $tanggal_lahir=$data['tanggal_lahir'];
                   $agama=$data['agama'];
                   $umur=$data['umur'];
                   $jenis_kelamin=$data['jenis_kelamin'];
                   $no_handphone=$data['no_hp'];
                   $pekerjaan=$data['pekerjaan'];
                   $kab_kota=$data['kab_kota'];
                   $pendidikan_terakhir=$data['pendidikan_terakhir'];
                   $club=$data['club'];
                   $jalur=$data['jalur'];
                   $cabang=$data['kode_cabang'];
                   $gedung=$data['gedung'];
                   $kamar=$data['no_kamar'];
                   $nama_sekolah=$data['nama_sekolah'];
                   $alamat_sekolah=$data['alamat'];
                   $foto=$data['foto'];
                   $nama_orangtua=$data['nama'];
                   $alamat_orangtua=$data['alamat'];
                   $umur_orangtua=$data['umur'];
                   $alamat_orangtua=$data['alamat'];
                   $no_handphone=$data['no_hp'];
                   $pekerjaan_orangtua=$data['pekerjaan'];
                   
                   
				   }
	
	

$id=$_GET['id'];
$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";

									
								 $strhtml .= '
								 <table width="100%" border="0">
		   <tr>
		   <td width="300px"><center><label> IDENTITAS ATLET STADION HARAPAN BANGSA </label></center></td>
		   </tr>
		   </table>
		   
		   <p align="center"><img src="../proses/uploads/'.$foto.'" width="200px" align="center"></p>
		   <br>
		   
		   <table width="100%" border="">
		   <tr>
		   <td width="300px"><label> No Database </label></td>
		   <td width="35px"> : </td>
		   <td>'.$no_database.' </td>
		   </tr>
		   
		   <tr>
		   <td width="300px"><label> Nama Atlet</label></td>
		   <td width="35px"> : </td>
		   <td>'.$nama_atlet.'</td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="">
		   <tr>
		   <td width="300px"><label> Alamat </label></td>
		   <td width="35px"> : </td>
		   <td>'.$alamat_atlet.'</td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="">
		   <tr>
		   <td width="300px"><label> Tempat, Tgl Lahir </label></td>
		   <td width="35px"> : </td>
		   <td width="">'.$tempat_lahir.'</td>
		   <td width="10px"> , </td>
		   <td>'.$tanggal_lahir.'</td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Agama </label></td>
		   <td width="35px"> : </td>
		   <td>'.$agama.'</td>
		   </tr>
		   </table>
		   
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> jenis kelamin  </label></td>
		   <td width="35px"> : </td>
		   <td>'. $jenis_kelamin.'</td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label>No Handphone </label></td>
		   <td width="35px"> : </td>
		   <td>'.$no_handphone.'</td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Pekerjaan </label></td>
		   <td width="35px"> : </td>
		   <td>'. $pekerjaan.'</td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Kab/Kota </label></td>
		   <td width="35px"> : </td>
		   <td>'. $kab_kota.'</td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Pendidikan Terakhir </label></td>
		   <td width="35px"> : </td>
		   <td> '.$pendidikan_terakhir.'</td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Club </label></td>
		   <td width="35px"> : </td>
		   <td>'.$club.'</td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> jalur </label></td>
		   <td width="35px"> : </td>
		   <td>'. $jalur.'</td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Cabang </label></td>
		   <td width="35px"> : </td>
		   <td>'.$cabang.'</td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Gedung </label></td>
		   <td width="35px"> : </td>
		   <td>'.$gedung.'</td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Kamar </label></td>
		   <td width="35px"> : </td>
		   <td>'.$kamar.'</td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Nama Sekolah </label></td>
		   <td width="35px"> : </td>
		   <td>'.$nama_sekolah.'</td>
		   </tr>
		   </table>
		   
		   
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Alamat Sekolah </label></td>
		   <td width="35px"> : </td>
		   <td>'. $alamat_sekolah.'</td>
		   </tr>
		   </table>
		   
		   
		    
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Nama Orang Tua </label></td>
		   <td width="35px"> : </td>
		   <td>'.$nama_orangtua.'</td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Alamat Orang Tua </label></td>
		   <td width="35px"> : </td>
		   <td>'.$alamat_orangtua.' </td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> No Handphone </label></td>
		   <td width="35px"> : </td>
		   <td>'.$no_handphone.'</td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Pekerjaan </label></td>
		   <td width="35px"> : </td>
		   <td>'.$pekerjaan_orangtua.' </td>
		   </tr>
		   </table>
	
								 ';	
								 
								 $strhtml .="<br>";
								 $strhtml .="<br>";
			$strhtml .="<table border='1' width='100%'>
			<thead>
			<center>
			<tr>
				
				<th>No</th>
				<th>Nama Cabang</th>
				<th>Atlet</th>
				<th>Event</th>
				<th>Tahun</th>
				<th>Tingkat</th>
				<th>Emas</th>
				<th>Perunggu</th>
				<th>Perak</th>
				
			   
				
			</tr>
			</center>
			</thead>
			<tbody>";		
			
			
                  
                  $i=0;
				    $tampil = "SELECT *,atlet.nama as nama_atlet from atlet_prestasi, prestasi,atlet,cabang_olahraga where atlet_prestasi.no_database_atlet=atlet.no_database_atlet and prestasi.kode_prestasi=atlet_prestasi.kode_prestasi and atlet.kode_cabang=cabang_olahraga.kode_cabang and atlet.no_database_atlet=' $no_database'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
                
                  $strhtml .='
                   <tr>
                    <td width="30px">'.$i.'</td>
               
					<td class="center">'.$data['nama_cabang'].'</td>
					<td class="center">'.$data['nama_atlet'].'</td>
					<td class="center">'.$data['event'].'</td>
					<td class="center">'.$data['tahun'].'</td>
					<td class="center">'.$data['tingkat'].'</td>
					<td class="center">'.$data['emas'].'</td>
					<td class="center">'.$data['perunggu'].'</td>
					<td class="center">'.$data['perak'].'</td>
					
                    ';
					
					
					
                  echo'  
                  </tr>
                  ';
                   }
			$strhtml .=" <tbody></table >";		
									
	
			
			include("mpdf60/mpdf.php");

			$mpdf=new mPDF ('utf-8','A4-P');
			$stylesheet = file_get_contents('styles2.css');
			$mpdf ->SetMargins (25.4,25.4,0,25.4);
			$mpdf->WriteHTML($stylesheet,1);
			$mpdf->WriteHTML($strhtml);
			$mpdf->Output();
			
			
			
			


?>