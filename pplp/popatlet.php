<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Data Atlet</h4>
		  
        </div>
        <div class="modal-body">
		
		<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    
	
    <?php
                  include'koneksi.php';
                  $i=0; 
                  $tampil = "SELECT jenis_kelamin , count(jenis_kelamin)from atlet group by jenis_kelamin";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                  
                
                   echo '
				   <thead>
	<center>
    <tr>
	
       
        <th>'.$data['jenis_kelamin'].'</th>
		
        
		
       
        
    </tr>
	</center>
    </thead>
    <tbody>
                   <tr>			
                  <td>'.$data['count(jenis_kelamin)'].' </td>
                  
					
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
  