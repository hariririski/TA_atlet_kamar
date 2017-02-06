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
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>info@yourdomain.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+90-897-678-44
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jhon Deo Alex </h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                Anim pariatur cliche reprehen derit.
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
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
                           Data Pelatih
                        </div>
                        <div class="panel-body">
                      <form role="form" action="proses/prosesdatapelatih.php" method="post">
 
    
	
	<?php
		   $no_database=$_GET['no_database_pelatih'];
		   include'koneksi.php';
                  $tampil = "SELECT * from pelatih";
    
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $no_database=$data['no_database_pelatih'];
                   $nama_pelatih=$data['nama'];
                   $alamat=$data['alamat'];
                   $tempat_lahir=$data['tempat_lahir'];
                   $agama=$data['agama'];
                   $jenis_kelamin=$data['jenis_kelamin'];
                   $no_handphone=$data['no_hp'];
                   $pekerjaan=$data['pekerjaan'];
                   $kab_kota=$data['kab_kota'];
                   $pendidikan_terakhir=$data['pendidikan_terakhir'];
                   $club=$data['club'];
                   
                   
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
		   <td> <?php echo $no_hp; ?> </td>
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
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
