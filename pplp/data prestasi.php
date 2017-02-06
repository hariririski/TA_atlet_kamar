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
</head>
<body>
    
    
    <!-- LOGO HEADER END-->
    <?php
	include"menu.php";
	?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">data prestasi stadion harapan bangsa </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3>Data Prestasi </h3>
                        </div>
                        <div class="panel-body">
                       
 
     <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
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
		<th>edit</th>
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
                  $tampil = "SELECT * from prestasi_cabor, prestasi,cabang_olahraga where prestasi_cabor.kode_cabang=cabang_olahraga.kode_cabang and prestasi.kode_prestasi=prestasi_cabor.kode_prestasi";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
                
                   echo '
                   <tr>
                    <td width="30px">'.$i.'</td>
               
					<td class="center">'.$data['nama_cabang'].'</td>
					<td class="center">Tim</td>
					<td class="center">'.$data['event'].'</td>
					<td class="center">'.$data['tahun'].'</td>
					
					<td class="center">'.$data['tingkat'].'</td>
					<td class="center">'.$data['emas'].'</td>
					<td class="center">'.$data['perunggu'].'</td>
					<td class="center">'.$data['perak'].'</td>
					
                    ';
					echo "
					<td><a href='edit_prestasi.php?kode_prestasi=".$data['kode_prestasi']."' data-toggle='modal' data-target='#myModal'     >
					<center><button type='button' class='btn btn-warning'>Edit</button></center></a></td>";
					echo "
					<td><a href='proses/proseshapusprestasi.php?kode_prestasi=".$data['kode_prestasi']."'   onclick=\"return confirm('Apakah Anda ingin Menghapus Data Ini?') \"    >
					<center><button type='button' class='btn btn-danger'>Hapus</button></center></a></td>";
					
                  echo'  
                  </tr>
                  ';
                   }
				    $tampil = "SELECT * from atlet_prestasi, prestasi,atlet,cabang_olahraga where atlet_prestasi.no_database_atlet=atlet.no_database_atlet and prestasi.kode_prestasi=atlet_prestasi.kode_prestasi and atlet.kode_cabang=cabang_olahraga.kode_cabang";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
                
                   echo '
                   <tr>
                    <td width="30px">'.$i.'</td>
               
					<td class="center">'.$data['nama_cabang'].'</td>
					<td class="center">'.$data['nama'].'</td>
					<td class="center">'.$data['event'].'</td>
					<td class="center">'.$data['tahun'].'</td>
					<td class="center">'.$data['tempat'].'</td>
					<td class="center">'.$data['tingkat'].'</td>
					<td class="center">'.$data['emas'].'</td>
					<td class="center">'.$data['perunggu'].'</td>
					<td class="center">'.$data['perak'].'</td>
					
                    ';
					
					echo "
					<td><a href='edit_data_prestasi.php?kode_prestasi=".$data['kode_prestasi']."' data-toggle='modal' data-target='#myModal'     >
					<center><button type='button' class='btn btn-warning'>Edit</button></center></a></td>";
					echo "
					<td><a href='proses/proseshapusprestasi.php?kode_prestasi=".$data['kode_prestasi']."'   onclick=\"return confirm('Apakah Anda ingin Menghapus Data Ini?') \"    >
					<center><button type='button' class='btn btn-danger'>Hapus</button></center></a></td>";
					
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
