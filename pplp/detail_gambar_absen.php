<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 
$gambar=$_GET['id'];
 ?> 
 
 
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Foto Absen</h4>
		  
        </div>
        <div class="modal-body">
		<center><img src="<?php echo $gambar;?>" width="100%"></center>
 
  
		
  </div>
  </div>
  