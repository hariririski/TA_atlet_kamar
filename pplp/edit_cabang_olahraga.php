<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 
 
 <?php
                  include'koneksi.php';
                  $i=0;
				    $kode_cabang=$_GET['kode_cabang'];
				   $tampil = "SELECT * FROM `cabang_olahraga` WHERE kode_cabang='$kode_cabang'";
				   $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   
                  
  ?>
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Cabang Olahraga</h4>
		  
        </div>
        <div class="modal-body">
		<form role="form" action="proses/proses_edit_cabang_olahraga.php?id=<?php echo $data['kode_cabang']?>" method="post" enctype="multipart/form-data">
 
    <label>Nama Cabang</label>
    <input name="nama_cabang" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['nama_cabang']?>" placeholder="Enter Id " />
 
  
  
				   <?php }?>
	<br >
	<button class="btn btn-success btn-sm">Simpan</button>
				
				
</form>
 
  
		
  </div>
  </div>
  