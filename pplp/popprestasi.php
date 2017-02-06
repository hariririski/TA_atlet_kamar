<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Prestasi</h4>
        </div>
        <div class="modal-body">
		
		
		<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
	<center>
    <tr>
	
        <th>No</th>
        <th>Cabang Olahraga</th>
        <th>Nama</th>
        <th>Tahun</th>
        <th>Event</th>
        <th>Tingkat</th>
		<th>Emas</th>
		<th>Perak</th>
		<th>Perunggu</th>
		
       
        
    </tr>
	</center>
    </thead>
    <tbody>
	
   <?php
                  include'koneksi.php';
                  $i=0; 
                  $tampil = "SELECT * from prestasi_cabor, prestasi,cabang_olahraga where prestasi_cabor.kode_cabang=cabang_olahraga.kode_cabang and prestasi.kode_prestasi=prestasi_cabor.kode_prestasi";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
                
                   echo '
                   <tr>
                    <td width="30px">'.$i.'</td>
               
					<td class="center">'.$data['nama_cabang'].'</td>
					<td class="center">Tim</td>
				
					<td class="center">'.$data['tahun'].'</td>
					<td class="center">'.$data['event'].'</td>
					<td class="center">'.$data['tingkat'].'</td>
					<td class="center">'.$data['emas'].'</td>
					<td class="center">'.$data['perunggu'].'</td>
					<td class="center">'.$data['perak'].'</td>
					
                    ';
					
					
                   }
				    $tampil = "SELECT * from atlet_prestasi, prestasi,atlet,cabang_olahraga where atlet_prestasi.no_database_atlet=atlet.no_database_atlet and prestasi.kode_prestasi=atlet_prestasi.kode_prestasi and atlet.kode_cabang=cabang_olahraga.kode_cabang";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
                
                   echo '
                   <tr>
                    <td width="30px">'.$i.'</td>
               
					<td class="center">'.$data['nama_cabang'].'</td>
					<td class="center">'.$data['nama'].'</td>
					<td class="center">'.$data['event'].'</td>
					<td class="center">'.$data['tahun'].'</td>
					<td class="center">'.$data['tingkat'].'</td>
					<td class="center">'.$data['emas'].'</td>
					<td class="center">'.$data['perunggu'].'</td>
					<td class="center">'.$data['perak'].'</td>
					
                    ';
					
					
					
                  echo'  
                  </tr>
                  ';
                   }
  ?>
    
    
    </tbody>
    </table>
		
       

	
        <div class="modal-footer">
          <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
		
 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
	</div>
  </div>
  </div>
  </div>