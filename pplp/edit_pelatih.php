<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 
<?php
		   $no_database=$_GET['id'];
		   include'koneksi.php';
        $tampil="SELECT * FROM `pelatih`, cabang_olahraga WHERE pelatih.kode_cabang=cabang_olahraga.kode_cabang and no_database_pelatih='$no_database'";
                  $sql = mysqli_query($con,$tampil);
                  while($data2= mysqli_fetch_array($sql))
                   {
                   
		   ?>
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Data Atlet</h4>
		  
        </div>
        <div class="modal-body">
		 <form role="form" action="proses/proses_edit_pelatih.php" method="post" enctype="multipart/form-data">
 
    <label ="exampleInputEmail1">No Database</label>
    <input name="no_database_pelatih" class="form-control" id="exampleInputEmail1" value="<?php echo $data2['no_database_pelatih'];?>" placeholder="Enter id" />
 
  
  
    <label for="exampleInputPassword1">Nama</label>
    <input name="nama_pelatih" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data2['nama'];?>" placeholder="Text input" />
 
  
 
    <label for="exampleInputEmail1">Alamat</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data2['alamat'];?>" placeholder="Text input" />
 
  
  
 <label> Tempat, Tanggal Lahir </label>
				<input name="tempat_lahir" type="text" class="form-control" placeholder="Text input" required value="<?php echo $data2['tempat_lahir'];?>">
				<br>
				<input name="tanggal_lahir" type="date" class="form-control" placeholder="Text input" required value="<?php echo $data2['tanggal_lahir'];?>">
				<p class="help-block"><font color="red">Example Tahun/Bulan/Tanggal, 1999/09/01).</font></p>
				<br>
  
    <label> Agama </label>
				<select name="agama" class="form-control" required>
				
				<?php
				echo '
				   <option value="'.$data2['agama'].'">'.$data2['agama'].'</option>
                  ';
                  include'koneksi.php';
                  $i=0; 
                  $tampil = "SELECT * from agama";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                  if($data2['nama_agama']!=$data['nama_agama']){
                   echo '
				   <option value="'.$data['nama_agama'].'">'.$data['nama_agama'].'</option>
                  ';
				  }
                   }
  ?>
				
				</select>
  
    <label for="exampleInputEmail1">Umur</label>
    <input name="umur" type="number" class="form-control" id="exampleInputEmail1"  value="<?php echo $data2['umur'];?>" placeholder="Enter number" />
 
   <label> Jenis Kelamin </label>
				<select name="jenis_kelamin" class="form-control" required>
				<?php
				if($data2['jenis_kelamin']=="Laki - Laki"){
					echo'<option value ="Laki - Laki">Laki - Laki</option>
				<option value="Perempuan">Perempuan</option>';
				}else if($data2['jenis_kelamin']=="Perempuan"){
				
					echo'
					<option value="Perempuan">Perempuan</option>
					<option value ="Laki - Laki">Laki - Laki</option>
				';
				}?>
				</select>
				<br>
  
    <label for="exampleInputEmail1">No Handphone</label>
    <input name="no_handphone"type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter number" value="<?php echo $data2['no_hp'];?>" />
  
    <label for="exampleInputEmail1">Pekerjaan</label>
    <input name="pekerjaan"type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" value="<?php echo $data2['pekerjaan'];?>"/>
  
    <label for="exampleInputEmail1">kab/kota</label>
    <input name="kab_kota"type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" value="<?php echo $data2['kab_kota'];?>" />
  
    <label for="exampleInputEmail1">Pendidikan terakhir</label>
    <input name="pendidikan_terakhir"type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" value="<?php echo $data2['pendidikan_terakhir'];?>" />
 
    <label for="exampleInputEmail1">Club</label>
    <input name="club" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" value="<?php echo $data2['club'];?>"/>
 
   
  <label> Cabang </label>
				<select name="kode_cabang"class="form-control">
				
				<?php
				 echo '
				  <option value="'.$data2['kode_cabang'].'">'.$data2['nama_cabang'].'</option>
                  ';
                   
				include'koneksi.php';
                  $i=0; 
                  $tampil = "SELECT * from cabang_olahraga";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   if($data2['kode_cabang']!=$data['kode_cabang']){
                   echo '
				  <option value="'.$data['kode_cabang'].'">'.$data['nama_cabang'].'</option>
                  ';
				   }
                   }
				
				?>
				</select>

    
 
  <br>
   
  	<img src="proses/uploads/<?php echo $data2['foto'];?>" width="100%">
    <label for="exampleInputFile">Foto</label>
    <input name="fileToUpload" type="file" id="fileToUpload" />
	
	<br>
				   <?php }?>
	<button class="btn btn-success btn-sm">Simpan</button>
				
				
</form>
	<br>
					

 
  
		
  </div>
  </div>
  