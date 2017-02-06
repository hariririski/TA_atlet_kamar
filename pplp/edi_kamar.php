<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 
 
 <?php
                  include'koneksi.php';
                  $i=0;
				    $kode_prestasi=$_GET['no_kamar'];
				   $tampil = "SELECT *,atlet.nama as nama_atlet from atlet_prestasi, prestasi,atlet,cabang_olahraga where atlet_prestasi.no_database_atlet=atlet.no_database_atlet and prestasi.kode_prestasi=atlet_prestasi.kode_prestasi and atlet.kode_cabang=cabang_olahraga.kode_cabang and prestasi.kode_prestasi='$kode_prestasi'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   
                  
  ?>
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Data Atlet</h4>
		  
        </div>
        <div class="modal-body">
		<form role="form" action="proses/prosesformsatlet.php" method="post" enctype="multipart/form-data">
 
    <label>Nama Atlet</label>
    <input name="no_database_atlet" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['nama_atlet']?>" placeholder="Enter Id " />
 
  
  
    <label >Nama Cabang Olahraga</label>
    <input name="nama_atlet" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data['nama_cabang']?>" placeholder="Text input" />
 
  
 
    <label >Event</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['event']?>" placeholder="Text input" />
	
	 <label >Tahun</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['tahun']?>" placeholder="Text input" />
	
	 <label >Tingkat</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['tingkat']?>" placeholder="Text input" />
	
	 <label >Emas</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1"  value="<?php echo $data['emas']?>"placeholder="Text input" />
	
	 <label >Perunggu</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1"  value="<?php echo $data['perunggu']?>"placeholder="Text input" />
	
	 <label >Perak</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['perak']?>"placeholder="Text input" />
 
				   <?php }?>
	<br >
	<button class="btn btn-success btn-sm">Simpan</button>
				
				
</form>
 
  
		
  </div>
  </div>
  