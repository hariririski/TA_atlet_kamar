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
                <div class="col-md-16">
                    <h4 class="page-head-line"> Selamat Datang </h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-16">
                    
                </div>

            </div>
            <div class="row">
			<a href="popatlet.php" data-toggle="modal" data-target="#myModal">
                 <div class="col-md-4 col-sm-3 col-xs-8">
                    <div class="dashboard-div-wrapper bk-clr-one">
                      <img src="image/atlet.png" width="100px">
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
  </div>
                           
</div>
                         <h5> Jumlah Atlet  </h5>
                    </div>
                </div>
				</a>
				<?php
				include 'modala.php'
				?>
				
				<a href="popprestasi.php" data-toggle="modal" data-target="#myModal">
                 <div class="col-md-4 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                         <img src="image/mendali.png"width="150px">
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
  </div>
                           
</div>
                         <h5>Prestasi </h5>
                    </div>
                </div>
				</a>
				<?php
				include'modala.php';
				?>
				
				<a href="popcabangolahraga.php" data-toggle="modal" data-target="#myModal">
                 <div class="col-md-4 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                         <img src="image/cabang.png"width="150px">
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
  </div>
                           
</div>
                         <h5>Cabang Olahraga</h5>
                    </div>
                </div>
				</a>
				<?php
				
				?>
				
				

            </div>
           </a>
		   <?php
			
			?>
            <div class="row">
                <div class="col-md-12">
                      <div class="notice-board">
                        
                    </div>
                    <hr />
                    
                    <hr />
                     <div class="table-responsive">
                               
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
