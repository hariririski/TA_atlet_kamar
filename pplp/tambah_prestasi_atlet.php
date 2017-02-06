<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 
$no_database_atlet=$_GET['id'];
 ?> 
 
 
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Prestasi</h4>
		  
        </div>
        <div class="modal-body">
		<form role="form" action="proses/proses_tambah_prestasi_atlet.php?id=<?php echo $no_database_atlet ?>" method="post" enctype="multipart/form-data">
	
    <label >Event</label>
    <input name="event" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Event" />
	
	 <label >Tahun</label>
    <input name="tahun" type="number" class="form-control" id="exampleInputEmail1" placeholder="Tahun" />
	
	<label >Tempat</label>
    <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tempat" />
	
	
	 <label >Tingkat</label>
    <input name="tingkat" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Tingkat" />
	
	 <label >Emas</label>
    <input name="emas" type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Emas" />
	
	 <label >Perunggu</label>
    <input name="perunggu" type="text" class="form-control" id="exampleInputEmail1"placeholder="Jumlah Perunggu" />
	
	 <label >Perak</label>
    <input name="perak" type="text" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Perak" />
 
			
	<br >
	<button class="btn btn-success btn-sm">Simpan</button>
				
				
</form>
 
  
		
  </div>
  </div>
  