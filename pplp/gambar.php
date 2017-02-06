<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form  action="proses/prosestidakhadir.php?id_jadwal=<?php echo $_GET['id_jadwal']?>" method="POST">
         
		 <label for="exampleInputPassword1">input</label>
			<input name="keterangan" type="text" class="form-control" id="exampleInputPassword1" placeholder="enter text" />
 
		  <button class="btn btn-success btn-sm">Simpan</button>
		  	</form>
        </div>
	
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
		
  </div>