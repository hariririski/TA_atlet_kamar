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
    
    <?php
	include"menu.php";
	?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Medali
                        </div>
                        <div class="panel-body">
                       <form role="form" action="proses/prosestambahmedali.php" method="post">
               <h3> Tambah Medali</h3>
		<label> Medali </label>
		<input name="nama_medali" type="text" class="form-control" placeholder="Text input" required> 
		<br> 
		<button> Simpan </button>
		</form>
 
     <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
	<center>
    <tr>
        <th>No</th>
        <th>Medali</th>
        <th>Edit</th>
        <th>Hapus</th>
        
    </tr>
	</center>
    </thead>
    <tbody>
	
    <?php
                  include'koneksi.php';
                  $i=0; 
                  $tampil = "SELECT * from jenis_medali";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
               
                   echo '
                   <tr>
                    <td width="30px">'.$i.'</td>
                    <td class="center">'.$data['nama_medali'].'</td>
                    ';
					echo "
					<td><a href='proses/proseshapusmedali.php?id_medali=".$data['id_medali']."'   onclick=\"return confirm('Apakah Anda ingin Melihat Data Ini?') \" title='Detail Agama'     >
					<center><button type='button' class='btn btn-warning'>Edit</button></center></center></a></td>";
					echo "
					<td><a href='proses/proseshapusmedali.php?id_medali=".$data['id_medali']."'   onclick=\"return confirm('Apakah Anda ingin Melihat Data Ini?') \" title='Detail Agama'     >
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
</body>
</html>
