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
                         <h3>  Tambah Kamar</h3>
                        </div>
                        <div class="panel-body">
                      				<form role="form" action="proses/prosesdatakamar.php" method="post">
 
    <label ="exampleInputEmail1">No kamar</label>
    <input name="no_kamar" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter text" />
	

  
    <label> Gedung </label>
				<select name="gedung" class="form-control" required>
				<option>Pilih</option>
				<option value="1">Putra</option>
				<option value="2">Putri</option>
				</select>
				<br>
 
  
	
	<br>
	
	<button class="btn btn-success btn-sm">Simpan</button>
				
				
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
</body>
</html>
