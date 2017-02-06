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
    
    <!-- HEADER END-->
    
    <!-- LOGO HEADER END-->
    <?php
	include"menu.php";
	?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Atlet Satdion Harapan Bangsa </h1>
                    </div>
                </div>
                <div class="row">
				<!-- 
				<div class="col-md-4 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                         <img src="image/mendali.png"width="150px">
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
  </div>
                           
</div>
                         <h5>Cetak Data Atlet Percabang Olahraga</h5>
                    </div>
                </div>
				
				<div class="col-md-4 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                         <img src="image/mendali.png"width="150px">
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
  </div>
                           
</div>
                         <h5>Cetak Atlet Berdasarkan Jalur </h5>
                    </div>
                </div>
				
				
				<div class="col-md-4 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                         <img src="image/mendali.png"width="150px">
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
  </div>
                           
</div>
                         <h5>Cetak Semua Data Atlet</h5>
                    </div>
                </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Data Atlet
                        </div>
                        <div class="panel-body">
                       <form>
 -->
     <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
	<center>
    <tr>
        <th>No</th>
        <th>No.Database</th>
        <th>Nama</th>
		<th>No.Hp</th>
		<th>Cabang Olahraga</th>
		
		<th>Cetak</th>
       
        
    </tr>
	</center>
    </thead>
    <tbody>
	
    <?php
                  include'koneksi.php';
                  $i=0; 
                  $tampil = "select *,atlet.nama as nama_atlet from atlet,tempat_tidur,sekolah,orangtua, cabang_olahraga where tempat_tidur.id_tempat_tidur=atlet.id_tempat_tidur and sekolah.id_sekolah=atlet.id_sekolah and orangtua.id_orangtua=atlet.id_orangtua and cabang_olahraga.kode_cabang=atlet.kode_cabang ";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
                
                   echo '
                   <tr>
                    <td width="30px">'.$i.'</td>
                    <td class="center">'.$data['no_database_atlet'].'</td>
					<td class="center">'.$data['nama_atlet'].'</td>
					<td class="center">'.$data['no_hp'].'</td>
					<td class="center">'.$data['nama_cabang'].'</td>
				
					
                    ';
					
					
										echo "
					<td><a href='cetak/laporanperorang.php?no_database_atlet=".$data['no_database_atlet']."'   onclick=\"return confirm('Apakah Anda ingin Melihat Menghapus Data Ini?')\"      >
					<center><button type='button' class='btn btn-success'>Cetak</button></center></a></td>";
					
                  echo'  
                  </tr>
                  ';
                   }
  ?>
    
    
    </tbody>
    </table>
				
</form>
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
</body>
</html>
