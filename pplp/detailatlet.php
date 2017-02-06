<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
	include"header.php";
	?>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> 
    <![endif]-->
	<style>
	/* calendar */
table.calendar		{ border-left:1px solid #999; }
tr.calendar-row	{  }
td.calendar-day	{ min-height:80px; font-size:11px; position:relative; } * html div.calendar-day { height:80px; }
td.calendar-day:hover	{ background:#eceff5; }
td.calendar-day-np	{ background:#eee; min-height:80px; } * html div.calendar-day-np { height:80px; }
td.calendar-day-head { background:#ccc; font-weight:bold; text-align:center; width:120px; padding:5px; border-bottom:1px solid #999; border-top:1px solid #999; border-right:1px solid #999; }
div.day-number		{ background:#999; padding:5px; color:#fff; font-weight:bold; float:right; margin:-5px -5px 0 0; width:20px; text-align:center; }
/* shared */
td.calendar-day, td.calendar-day-np { width:120px; padding:5px; border-bottom:1px solid #999; border-right:1px solid #999; }
	
    </style>
</head>
<body>
    
    <!-- HEADER END-->
  
    <!-- LOGO HEADER END-->
    <?php
	include"menu.php";
	?>
    <!-- MENU SECTION END-->
	<div class="content-wrapper">
        <div class="container">
            <div class="row">
               

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-warning">
                         <form role="form" action="proses/prosesdataatlet.php" method="post">
 
    
	
	<?php
		   $no_database=$_GET['no_database_atlet'];
		   include'koneksi.php';
            $tampil = "select *,atlet.nama as nama_atlet, atlet.no_hp as hp_atlet, orangtua.no_hp as hp_orang_tua from atlet,tempat_tidur,sekolah,orangtua, cabang_olahraga, kamar where tempat_tidur.id_tempat_tidur=atlet.id_tempat_tidur and sekolah.id_sekolah=atlet.id_sekolah and orangtua.id_orangtua=atlet.id_orangtua and cabang_olahraga.kode_cabang=atlet.kode_cabang and tempat_tidur.id_kamar=kamar.id_kamar and atlet.no_database_atlet='$no_database'";
    
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
				   $no_handphone_atlet=$data['hp_atlet'];
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
                   $no_handphone=$data['hp_orang_tua'];
                   $pekerjaan_orangtua=$data['pekerjaan'];
                   
                   
				   }
		   ?>
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><center><label> IDENTITAS ATLET STADION HARAPAN BANGSA </label></center></td>
		   </tr>
		   </table>
		   
		   <p align="center"><img src="proses/uploads/<?php echo $foto; ?>" width="200px" align="center"></p>
		   <br>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> No Database </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $no_database; ?> </td>
		   </tr>
		   
		   <tr>
		   <td width="300px"><label> Nama Atlet</label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $nama_atlet; ?> </td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Alamat </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $alamat_atlet; ?> </td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Tempat, Tgl Lahir </label></td>
		   <td width="35px"> : </td>
		   <td width="300px"> <?php echo $tempat_lahir; ?> </td>
		   <td width="10px"> , </td>
		   <td> <?php echo $tanggal_lahir; ?> </td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Agama </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $agama; ?> </td>
		   </tr>
		   </table>
		   
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> jenis kelamin  </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $jenis_kelamin; ?> </td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label>No Handphone </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $no_handphone_atlet; ?> </td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Pekerjaan </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $pekerjaan; ?> </td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Kab/Kota </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $kab_kota; ?> </td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Pendidikan Terakhir </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $pendidikan_terakhir; ?> </td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Club </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $club; ?> </td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> jalur </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $jalur; ?> </td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Cabang </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $cabang; ?> </td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Gedung </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $gedung; ?> </td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Kamar </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $kamar; ?> </td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Nama Sekolah </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $nama_sekolah; ?> </td>
		   </tr>
		   </table>
		   
		   
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Alamat Sekolah </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $alamat_sekolah; ?> </td>
		   </tr>
		   </table>
		   
		   
		    
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Nama Orang Tua </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $nama_orangtua; ?> </td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Alamat Orang Tua </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $alamat_orangtua; ?> </td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> No Handphone </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $no_handphone; ?> </td>
		   </tr>
		   </table>
		   
		    <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Pekerjaan </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $pekerjaan_orangtua; ?> </td>
		   </tr>
		   </table>
		   <a href="edit_atlet.php?id=<?php echo $no_database; ?>" data-toggle='modal' data-target='#myModal'><p align="center"><button type="button" class="btn btn-warning">Edit Data Atlet</button></p></a>
</form>
                  
                    </div>
					
					<div class="alert alert-info">
					<center><label>Prestasi</label></center>
                       <table  class="table table-striped table-bordered bootstrap-datatable datatable responsive ">
    <thead>
	<center>
    <tr>
        
        <th>No</th>
        <th>Nama Cabang</th>
        <th>Atlet</th>
		<th>Event</th>
		<th>Tahun</th>
		<th>Tempat</th>
		<th>Tingkat</th>
		<th>Emas</th>
		<th>Perunggu</th>
		<th>Perak</th>
		<th>Edit</th>
		<th>Hapus</th>
       
        
    </tr>
	</center>
    </thead>
    <tbody>
	<?php
				include 'modala.php'
				?>
    <?php
                  include'koneksi.php';
                  $i=0;
				    $tampil = "SELECT *,atlet.nama as nama_atlet from atlet_prestasi, prestasi,atlet,cabang_olahraga where atlet_prestasi.no_database_atlet=atlet.no_database_atlet and prestasi.kode_prestasi=atlet_prestasi.kode_prestasi and atlet.kode_cabang=cabang_olahraga.kode_cabang and atlet.no_database_atlet=' $no_database'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
                
                   echo '
                   <tr>
                    <td width="30px">'.$i.'</td>
               
					<td class="center">'.$data['nama_cabang'].'</td>
					<td class="center">'.$data['nama_atlet'].'</td>
					<td class="center">'.$data['event'].'</td>
					<td class="center">'.$data['tahun'].'</td>
					<td class="center">'.$data['tempat'].'</td>
					<td class="center">'.$data['tingkat'].'</td>
					<td class="center">'.$data['emas'].'</td>
					<td class="center">'.$data['perunggu'].'</td>
					<td class="center">'.$data['perak'].'</td>
					
                    ';
					
					
					echo "
					<td><a href='edit_prestasi.php?kode_prestasi=".$data['kode_prestasi']."&&no_database_atlet=".$no_database."' data-toggle='modal' data-target='#myModal'     >
					<center><button type='button' class='btn btn-warning'>Edit</button></center></a></td>";
					echo "
					<td><a href='proses/proseshapusprestasidetail.php?kode_prestasi=".$data['kode_prestasi']."&&no_database_atlet=".$no_database."'   onclick=\"return confirm('Apakah Anda ingin Menghapus Data Ini?') \"    >
					<center><button type='button' class='btn btn-danger'>Hapus</button></center></a></td>";
					
                  echo'  
                  </tr>
                  ';
                   }
  ?>
    
    
    </tbody>
    </table>
	<a href="tambah_prestasi_atlet.php?id=<?php echo $no_database; ?>" data-toggle='modal' data-target='#myModal' ><p align="center"><button type="button" class="btn btn-success">Tambah Prestasi Atlet</button></p></a>
				</center>	
                    </div>
					
					
					
					
					
					<div class="alert alert-success"><center>
							<?php
							error_reporting(0);
	function draw_calendar($month,$year){
		$tanggal_awal='2016-08-1';
		$tanggal_akhir='2016-8-31';
		$a=date('m');
	
		$b=date('Y');
		$no_database=$_GET['no_database_atlet'];
		$hadir;
		$gambar;
		$tanggal_hadir;
		
		include'koneksi.php';
                  $i=0;
				   $tampil1 = "SELECT * FROM `absen` WHERE month(tanggal_absen)='$a' and YEAR(tanggal_absen)='$b' and no_database_atlet='$no_database'";
                  $sql1 = mysqli_query($con,$tampil1);
                  while($data = mysqli_fetch_array($sql1))
                   {
                    $cek_tanggal=$data['tanggal_absen'];
                   
					$tanggal=substr("$cek_tanggal",8,2);
					$gambar[$tanggal]=$data['foto_absen'];
					$tanggal_hadir[$tanggal]=$data['tanggal_absen'];
					$hadir[$i]=$tanggal;
					$i++;
                   }
		
		
	
   
	
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	
	$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();


	$calendar.= '<tr class="calendar-row">';


	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;


	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';
	
			$a=0;
			$cek=0;
			$jumlh=count($hadir);
			for($a=0;$a<$jumlh;$a++){
				if($hadir[$a]==$list_day){
					$cek=$list_day;
				}
			}
			
			if($cek>0){
				$calendar.= '<div class="day-number"><button type="button" class="btn btn-success">'.$list_day.'</button></div>';
				$calendar.= str_repeat('<p><a href="detail_gambar_absen.php?id=absen/take/images/'.$gambar[$list_day].'" data-toggle="modal" data-target="#myModal"><img src="absen/take/images/'.$gambar[$list_day].'" width="100%"></a></p>',1);
				$calendar.= str_repeat('<p>'.$tanggal_hadir[$list_day].'</p>',1);
				
			}else{
				$calendar.= '<div class="day-number">'.$list_day.'</div>';
				//$calendar.= str_repeat('<p><img src="absen/take/images/tidak_hadir.jpg" width="100%"></p>',1);
			}
			

			
			$calendar.= str_repeat('<p></p>',2);
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;


	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;


	$calendar.= '</tr>';


	$calendar.= '</table>';
	

	return $calendar;
	
	
}

/* sample usages */

$a=date('m');
$c=date(" F Y ");
$b=date('Y');

echo "<h2>$c</h2>";
echo draw_calendar($a,$b);

	
	
	
	?>
					
					
					
					
					<div >
					</center>
					
					
					<br>
					<div class="alert alert-warning">
					<center><label>Lihat Absen Bulan Lain</label></center>
                       <table  class="table table-striped table-bordered bootstrap-datatable datatable responsive ">
    <thead>
	<center>
    <tr>
        
        <th>No</th>
        <th>Bulan </th>
        <th>Tahun</th>
        <th>Lihat Absen</th>
		
       
        
    </tr>
	</center>
    </thead>
    <tbody>
	<?php
				include 'modala.php'
				?>
    <?php
                  include'koneksi.php';
                  $i=0;
				    $tampil = "SELECT DISTINCT MONTH(tanggal_absen) AS bulan,YEAR(tanggal_absen) as tahun from absen where no_database_atlet='$no_database'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
                
                   echo '
                   <tr>
                    <td width="30px">'.$i.'</td>
               
					<td class="center">'.$data['bulan'].'</td>
					<td class="center">'.$data['tahun'].'</td>
					
                    ';
					
					
					echo "
					<td><a href='lihat_absen_siswa.php?bulan=".$data['bulan']."&&tahun=".$data['tahun']."&&no_database_atlet=".$no_database."' data-toggle='modal' data-target='#myModal'     >
					<center><button type='button' class='btn btn-warning'>Lihat</button></center></a></td>";
					
					
                  echo'  
                  </tr>
                  ';
                   }
  ?>
    
    
    </tbody>
    </table>
	
                    </div>
					
					
                </div>

            </div>
        </div>
    </div>
	
	
</div>
	
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php
	include"footer.php";
	?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
   <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
	<script src="table/abower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="table/js/jquery.cookie.js"></script>
<!-- calender plugin -->

<!-- data table plugin -->
<script src='table/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="table/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="table/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="table/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="table/bower_components/responsive-tables/responsive-tables.js"></script>

<!-- star rating plugin -->
<script src="table/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="table/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="table/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="table/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="table/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="table/js/charisma.js"></script>
	<script type="text/javascript">
			$('body').on('hidden.bs.modal', '.modal', function () { $(this).removeData('bs.modal'); });
			$.fn.modal.Constructor.prototype.enforceFocus = function() {};
		</script>
</body>
</html>
