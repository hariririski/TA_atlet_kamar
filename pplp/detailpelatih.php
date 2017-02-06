<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 
<?php
				include 'modala.php'
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
</head>
<body>
    
    
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
                       <?php
		  
		   include'koneksi.php';
		    $no_database=$_GET['no_database_pelatih'];
                  $tampil = "select *from pelatih, cabang_olahraga where pelatih.kode_cabang=cabang_olahraga.kode_cabang and pelatih.no_database_pelatih='$no_database'";
    
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $no_database=$data['no_database_pelatih'];
                   $nama_pelatih=$data['nama'];
                   $alamat=$data['alamat'];
                   $tempat_lahir=$data['tempat_lahir'];
                   $tanggal_lahir=$data['tanggal_lahir'];
                   $agama=$data['agama'];
                   $jenis_kelamin=$data['jenis_kelamin'];
                   $no_handphone=$data['no_hp'];
                   $pekerjaan=$data['pekerjaan'];
                   $kab_kota=$data['kab_kota'];
                   $foto=$data['foto'];
                   $pendidikan_terakhir=$data['pendidikan_terakhir'];
                   $club=$data['club'];
                   
                   
				   }
		   ?>
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><center><label> IDENTITAS PELATIH STADION HARAPAN BANGSA </label></center></td>
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
		   <td width="300px"><label> Nama Pelatih </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $nama_pelatih; ?> </td>
		   </tr>
		   </table>
		   
		   <table width="100%" border="0">
		   <tr>
		   <td width="300px"><label> Alamat </label></td>
		   <td width="35px"> : </td>
		   <td> <?php echo $alamat; ?> </td>
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
		   <td> <?php echo $no_handphone; ?> </td>
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
		   
		   <a href="edit_pelatih.php?id=<?php echo $no_database; ?>" data-toggle='modal' data-target='#myModal'><p align="center"><button type="button" class="btn btn-warning">Edit Data Pelatih</button></p></a>
 
                    </div>
                </div>
				
				
				
				<div class="col-md-12">
                    <div class="alert alert-info">
                         <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Prestasi</th>
                                            <th>Event</th>
                                            <th>Tingkat</th>
                                            <th>Tahun</th>
                                            <th>Tempat</th>
                                            <th>Emas</th>
                                            <th>Perak</th>
                                            <th>Perunggu</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										$i=0;
					include 'koneksi.php';
					$tampil="select *from riwayat_prestasi where no_database_pelatih='$no_database'";
					 $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                  $i++;
					
					?>
					<tr>
					<td> <?php  echo $i?> </td>
					<td> <?php  echo $data{'nama_prestasi'}?> </td>
					<td> <?php  echo $data{'event'}?> </td>
					
					<td> <?php  echo $data{'tingkat'}?></td>
					<td> <?php  echo $data{'tahun'}?> </td>
					<td> <?php  echo $data{'tempat'}?> </td>
					<td> <?php  echo $data{'emas'}?> </td>
					<td> <?php  echo $data{'perak'}?> </td>
					<td> <?php  echo $data{'perunggu'}?> </td>
					
					<td><a href="edit_prestasi_pelatih.php?kode_prestasi=<?php echo$data['id_riwayat'] ?>&&id=<?php echo $no_database; ?>" data-toggle='modal' data-target='#myModal'     >
					<center><button type='button' class='btn btn-warning'>Edit</button></center></a></td>
					
					<td><a href="proses/proses_hapus_prestasi_pelatih.php?kode_prestasi=<?php echo$data['id_riwayat'] ?>&&id=<?php echo $no_database; ?>"      >
					<center><button type='button' class='btn btn-danger'>Hapus</button></center></a></td>
					
					
					</tr>
					
					
					
					<?php
				   }
				   ?>
			
		  
				 
                                    </tbody>
                            
							</table>
							<a href="tambah_prestasi_pelatih.php?id=<?php echo $no_database; ?>" data-toggle='modal' data-target='#myModal' ><p align="center"><button type="button" class="btn btn-success">Tambah Prestasi Pelatih</button></p></a>

                    </div>
                </div>

            </div>
        </div>
    </div>
	
	
	
	
	
	
	
	
    
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
