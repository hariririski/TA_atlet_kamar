<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Acme | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">
    <link href="../css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/flexslider.css"/>
    <link href="../assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


      <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
<script src="jquery-1.9.1.min.js"></script>
    <script src="html5-qrcode.min.js"></script>
  
<script type="text/javascript">

$(document).ready(function(){
	$('#reader').html5_qrcode(function(data){
			
			
			var hasil= data;
			window.location.href = 'take/take.php?id='+hasil;
		},
		function(error){
			$('#read_error').html(error);
		}, function(videoError){
			$('#vid_error').html(videoError);
		}
	);
});

</script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!--header start-->
    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top container">
          <div class="navbar-header">
              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"
              type="button"><span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span></button> <a class="navbar-brand" href="index.html">
              <span>Asrama Atlet Stadion Harapan Bangsa</span></a>
          </div>

          
      </div>
    </header>
    <!--header end-->

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Scan Barcode</h1>
                </div>
               
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="login-bg">
        <div class="container">
<br>
<a href="../login.php"><button type="button" class="btn-lg btn-primary">Login Admin</button></a>
<a href="../login_siswa.php"><button type="button" class="btn-lg btn-success">Login Siswa</button></a>


		<br>
            <div class="form-wrapper">
            <div id="main_content_wrap" class="outer">
      <section id="main_content" class="inner center">
       



<p align="center"><div  id="reader" style="width:100%;height:500px; "></div></p>



</script>
<br>



</div>
          </div>
        </div>
    </div>
    <!--container end-->

     <!--footer start-->
     <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                     <h1>contact info</h1>
                     <address>
                         <p><i class="fa fa-home pr-10"></i>Address: No.XXXXXX street</p>
                         <p><i class="fa fa-globe pr-10"></i>Mars city, Country</p>
                         <p><i class="fa fa-mobile pr-10"></i>Mobile : (123) 456-7890</p>
                         <p><i class="fa fa-phone pr-10"></i>Phone : (123) 456-7890</p>
                         <p><i class="fa fa-envelope pr-10"></i>Email : <a href="javascript:;">support@example.com</a></p>
                     </address>
                 </div>
                
                </div>
                
                

            </div>

        </div>
    </footer>
    <!-- footer end -->
    

  <!-- js placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="../text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="../js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="../assets/bxslider/jquery.bxslider.js"></script>

    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/link-hover.js"></script>


     <!--common script for all pages-->
    <script src="../js/common-scripts.js"></script>


    <script src="../js/wow.min.js"></script>
    <script>
        wow = new WOW(
          {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0          // default
          }
        )
        wow.init();
    </script>

  </body>
</html>
