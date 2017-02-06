<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 
 
 <?php
                  include'koneksi.php';
                  $i=0;
				    $kode_prestasi=$_GET['kode_prestasi'];
				   $tampil = "SELECT *,atlet.nama as nama_atlet from atlet_prestasi, prestasi,atlet,cabang_olahraga where atlet_prestasi.no_database_atlet=atlet.no_database_atlet and prestasi.kode_prestasi=atlet_prestasi.kode_prestasi and atlet.kode_cabang=cabang_olahraga.kode_cabang and prestasi.kode_prestasi='$kode_prestasi'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   
                  
  ?>
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Prestasi Atlet</h4>
		  
        </div>
        <div class="modal-body">
		<form role="form" action="proses/proses_edit_prestasi_atlet.php?id=<?php echo $data['no_database_atlet']?>&&kode_prestasi=<?php echo $kode_prestasi?>" method="post" enctype="multipart/form-data">
 
   
    <label >Event</label>
    <input name="event" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['event']?>" placeholder="Text input" />
	
	 <label >Tahun</label>
    <input name="tahun" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['tahun']?>" placeholder="Text input" />
	
	 <label >Tingkat</label>
    <input name="tingkat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['tingkat']?>" placeholder="Text input" />
	
	<label >Tempat</label>
    <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['tempat']?>" placeholder="Text input" />
	
	 <label >Emas</label>
    <input name="emas" type="text" class="form-control" id="exampleInputEmail1"  value="<?php echo $data['emas']?>"placeholder="Text input" />
	
	 <label >Perunggu</label>
    <input name="perunggu" type="text" class="form-control" id="exampleInputEmail1"  value="<?php echo $data['perunggu']?>"placeholder="Text input" />
	
	 <label >Perak</label>
    <input name="perak" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['perak']?>"placeholder="Text input" />
 
				   <?php }?>
	<br >
	<button class="btn btn-success btn-sm">Simpan</button>
				
				
</form>
 
  
		
  </div>
  </div>
  