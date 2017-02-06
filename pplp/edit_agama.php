<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 
 
 <?php
                  include'koneksi.php';
                  $i=0;
				    $kode_agama=$_GET['kode_agama'];
				   $tampil = "SELECT * FROM `agama` WHERE id_agama='$kode_agama'";
				   $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   
                  
  ?>
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Agama</h4>
		  
        </div>
        <div class="modal-body">
		<form role="form" action="proses/proses_edit_agama.php?id_agama=<?php echo $data['id_agama']?>" method="post" enctype="multipart/form-data">
 
    <label>Nama Agama</label>
    <input name="nama_agama" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['nama_agama']?>" placeholder="Enter Id " />
 
  
  
				   <?php }?>
	<br >
	<button class="btn btn-success btn-sm">Simpan</button>
				
				
</form>
 
  
		
  </div>
  </div>
  