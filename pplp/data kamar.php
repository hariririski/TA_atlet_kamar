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
                           <h3>Data Kamar</h3>
                        </div>
                        <div class="panel-body">
                       <form>
 
     <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
	<center>
    <tr>
	
        <th>No</th>
		<th>Gedung</th>
	
		<th>No.Kamar</th>
		<th>Tempat Tidur</th>
		<th>Status</th>
		<th>Hapus</th>
		<th>Edit</th>
		
       
        
    </tr>
	</center>
    </thead>
    <tbody>
	<?php
				include'modala.php';
				?>
    <?php
                  include'koneksi.php';
                  $i=0; 
              $tampil = "SELECT * from kamar,tempat_tidur where tempat_tidur.id_kamar=kamar.id_kamar";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  echo' <tr>';
                  echo'<td width="30px">'.$i.'</td>';
					if($data['gedung']==1){
					echo'
					<td class="center">Putra</td>
					';
					}else if($data['gedung']==2){
					echo'
					<td class="center">Putri</td>
					';
					}
					
					
					
					if($data['no_kamar']==0){
					echo'
					<td class="center">Belum Ada Tempat Tidur</td>
					';
					}else if($data['no_kamar']!=0){
					
					echo '
                                     
                    <td class="center">'.$data['no_kamar'].'</td>
					';
					}
					
					
					
					
					if($data['id_tempat_tidur']==0){
					echo'
					<td class="center">Belum Ada Tempat Tidur</td>
					';
					}else if($data['id_tempat_tidur']!=0){
					
					echo '
                                     
                    <td class="center">'.$data['nama_tempat_tidur'].'</td>
					';
					}
                  
				  if($data['status']==0){
					echo '<td><span class="btn btn-success btn-sm">Kosong</span></td>';
					}else if($data['status']==1){
					
					echo '<td><span class="btn btn-danger btn-sm">Terisi</span></td>';
					}
                  
					
					
					echo "
					<td><a href='prosesedit.php?no_kamar=".$data['id_kamar']."'  data-toggle='modal' data-target='#myModal'   >
					<center><button type='button' class='btn btn-warning'>Edit</button></center></a></td>";
					echo "
					<td><a href='proseshapus.php?no_kamar=".$data['id_kamar']."'   onclick=\"return confirm('Apakah Anda ingin Melihat Data Ini?') \" title='Detail Calon Siswa'     >
					<center><button type='button' class='btn btn-danger'>Hapus</button></center></a></td>";
					
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
<script type="text/javascript">
			$('body').on('hidden.bs.modal', '.modal', function () { $(this).removeData('bs.modal'); });
			$.fn.modal.Constructor.prototype.enforceFocus = function() {};
		</script>
</body>
</html>
