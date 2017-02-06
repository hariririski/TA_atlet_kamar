<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cabang Olahraga</h4>
        </div>
        <div class="modal-body">
		
		
		
		<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
	<center>
    <tr>
	
        <th>No</th>
        <th>No Tempat Tidur</th>
        <th>Edit</th>
        <th>Hapus</th>
		
        
		
       
        
    </tr>
	</center>
    </thead>
    <tbody>
	
    <?php
                  include'koneksi.php';
                  $i=0; 
				  $id_kamar=$_GET['no_kamar'];
				 $tampil = "SELECT * FROM `tempat_tidur` where id_kamar='$id_kamar'";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
                
                   echo '
                   <tr>
                    <td width="30px">'.$i.'</td>
                    <td class="center">'.$data['nama_tempat_tidur'].'</td>
					
					
                    ';
					
					echo "
					<td><a href='detailatlet.php?no_database_atlet=".$data['id_tempat_tidur']."'   onclick=\"return confirm('Apakah Anda ingin Melihat Data Ini?') \"     >
					<center><image width='20px' src='assets/img/2.PNG'></center></a></td>";
										echo "
					<td><a href='proses/proseshapusatlet.php?no_database_atlet=".$data['id_tempat_tidur']."'   onclick=\"return confirm('Apakah Anda ingin Melihat Menghapus Data Ini?')\"      >
					<center><image width='20px' src='assets/img/1.PNG'></center></a></td>";
					
                  echo'  
                  </tr>
                  ';
                   }
  ?>
    
    
    </tbody>
    </table>
		
        

	
        <div class="modal-footer">
          <button onclick="window.locatioan.reload(true);" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
		
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
	</div>
  </div>
  </div>
  </div>