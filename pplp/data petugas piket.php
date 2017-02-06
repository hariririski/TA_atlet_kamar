<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Free Responsive Admin Theme - ZONTAL</title>
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
                        <h1 class="page-head-line">Forms </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3>Data Petugas Piket</h3>
                        </div>
                        <div class="panel-body">
                       <form>
 
     <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
	<center>
    <tr>
        <th>No</th>
        <th>Id Petugas</th>
        <th>Nama</th>
		<th>No.Hp</th>
		<th>Jam Masuk</th>
		<th>Jam Keluar</th>
		<th>Hapus</th>
       
        
    </tr>
	</center>
    </thead>
    <tbody>
	
    <?php
                  include'koneksi.php';
                  $i=0; 
                  $tampil = "SELECT * from petugas_piket";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
                
                   echo '
                   <tr>
                    <td width="30px">'.$i.'</td>
               
			
					<td class="center">'.$data['id_petugas'].'</td>
					<td class="center">'.$data['nama'].'</td>
					<td class="center">'.$data['jam_masuk'].'</td>
					<td class="center">'.$data['jam_keluar'].'</td>
					<td class="center">'.$data['no_handphone'].'</td>
				
					
                    ';
					
					echo "
					<td><a href='proses/proseshapuspetugaspiket.php?id_petugas=".$data['id_petugas']."'   onclick=\"return confirm('Apakah Anda ingin Menghapus Data Ini?') \" title='Detail Calon Siswa'     >
					<center><image width='20px' src='assets/img/1.PNG'></center></a></td>";
					
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
    <footer>
        <div class="container">
            <div class="row">
               
            </div>
        </div>
    </footer>
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
