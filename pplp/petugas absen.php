<?php
session_start();
if (!isset($_SESSION['piket'])){
header("location:login.php");
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
    
    <!-- HEADER END-->
    
        </div>
    </div>
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
                           Data 
                        </div>
                        <div class="panel-body">
                      
 
     <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
	<center>
    <tr>
        <th>No</th>
        <th>Tanggal-Jam</th>
        <th>Kamar</th>
		<th>Nama</th>
		<th>Hadir</th>
		<th>Tidak Hadir</th>
       
        
    </tr>
	</center>
    </thead>
    <tbody>
	<?php
		include'modala.php';
	?>
	
    <?php
	include'koneksi.php';
	$a;
	$tanggal=date('Y-m-d');
	$tampil2 = "SELECT count(tanggal) FROM `atlet_petugas_piket` WHERE tanggal='$tanggal'";
	$sql2 = mysqli_query($con,$tampil2);
    while($data2 = mysqli_fetch_array($sql2))
    {
	$a=$data2['count(tanggal)'];
	}
			if($a==0){
					$tampil2 = "select * from atlet,kamar,tempat_tidur where kamar.id_kamar=tempat_tidur.id_kamar and tempat_tidur.id_tempat_tidur=atlet.id_tempat_tidur ";
					$sql2 = mysqli_query($con,$tampil2);
                  while($data2 = mysqli_fetch_array($sql2))
                   {
					$no_database_atlet=$data2['no_database_atlet'];
					$perintah12="INSERT INTO `atlet_petugas_piket`(`tanggal`, `no_database_atlet`) VALUES ('$tanggal','$no_database_atlet')";
					$cek=mysqli_query($con, $perintah12);
				   }
			}
                  
                  $i=0; 
                  $tampil = "SELECT * FROM `atlet_petugas_piket` ,atlet,kamar,tempat_tidur WHERE atlet_petugas_piket.tanggal='$tanggal' and atlet_petugas_piket.id_petugas='0' and kamar.id_kamar=tempat_tidur.id_kamar and tempat_tidur.id_tempat_tidur=atlet.id_tempat_tidur and atlet_petugas_piket.no_database_atlet=atlet.no_database_atlet";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
				   
                   echo '
                   <tr>
                    <td width="30px">'.$i.'</td>
                    <td class="center">'.$tanggal.'</td>
					<td class="center">'.$data['no_kamar'].'</td>
					<td class="center">'.$data['nama'].'</td>
					
					
                    ';
					
					
					
					echo "
					<td><a href='proses/proseshadir.php?no_database_atlet=".$data['no_jadwal']."'   onclick=\ \"  >
					<center><image width='20px' src='assets/img/hadir.PNG'></center></a></td> 
					
					
					";
					echo'
					<td class="center"><a href="gambar.php?id_jadwal='.$data['no_jadwal'].'"  data-toggle="modal" data-target="#myModal" ><button  type="button" class="btn btn-primary" >Foto</button></a></td>
					';				
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
