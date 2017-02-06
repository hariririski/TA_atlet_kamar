<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 
<?php
		   $no_database=$_GET['id'];
		   include'koneksi.php';
        $tampil = "select *,atlet.nama as nama_atlet, atlet.no_hp as hp_atlet, orangtua.no_hp as hp_orang_tua , atlet.umur as umur_atlet , orangtua.umur as umur_orangtua from atlet,tempat_tidur,sekolah,orangtua, cabang_olahraga, kamar where tempat_tidur.id_tempat_tidur=atlet.id_tempat_tidur and sekolah.id_sekolah=atlet.id_sekolah and orangtua.id_orangtua=atlet.id_orangtua and cabang_olahraga.kode_cabang=atlet.kode_cabang and tempat_tidur.id_kamar=kamar.id_kamar and atlet.no_database_atlet='$no_database'";
    
                  $sql = mysqli_query($con,$tampil);
                  while($data2= mysqli_fetch_array($sql))
                   {
                   $no_database=$data2['no_database_atlet'];
                   $nama_atlet=$data2['nama_atlet'];
                   $alamat_atlet=$data2['alamat'];
                   $tempat_lahir=$data2['tempat_lahir'];
                   $tanggal_lahir=$data2['tanggal_lahir'];
                   $agama=$data2['agama'];
                   $umur_atlet=$data2['umur_atlet'];
                   $jenis_kelamin=$data2['jenis_kelamin'];
				 $no_handphone_atlet=$data2['hp_atlet'];
                   $pekerjaan=$data2['pekerjaan'];
                   $kab_kota=$data2['kab_kota'];
                   $pendidikan_terakhir=$data2['pendidikan_terakhir'];
                   $club=$data2['club'];
                   $jalur=$data2['jalur'];
                   $cabang=$data2['kode_cabang'];
                   $gedung=$data2['gedung'];
                   $kamar=$data2['no_kamar'];
                   $nama_sekolah=$data2['nama_sekolah'];
                   $alamat_sekolah=$data2['alamat'];
                   $foto=$data2['foto'];
                   $nama_orangtua=$data2['nama'];
                   $alamat_orangtua=$data2['alamat'];
                   $umur_orangtua=$data2['umur_orangtua'];
                   $alamat_orangtua=$data2['alamat'];
                   $no_handphone=$data2['hp_orang_tua'];
                   $pekerjaan_orangtua=$data2['pekerjaan'];
                   
                   
				   
		   ?>
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Data Atlet</h4>
		  
        </div>
        <div class="modal-body">
		<form role="form" action="proses/proses_edit_atlet.php" method="post" enctype="multipart/form-data">
 
    <label>No Database Atlet</label>
    <input name="no_database_atlet" type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $no_database; ?>" placeholder="Enter Id " />
 
  
  
    <label >Nama</label>
    <input name="nama_atlet" type="text" class="form-control" id="exampleInputPassword1"value=" <?php echo $nama_atlet; ?>" placeholder="Text input" />
 
  
 
    <label >Alamat</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $alamat_atlet; ?>"placeholder="Text input" />
 
  
  
 <label> Tempat, Tanggal Lahir </label>
				<input name="tempat_lahir" type="text" class="form-control" value="<?php echo $tempat_lahir; ?> "placeholder="Text input" required>
				<br>
				<input name="tanggal_lahir" type="date" class="form-control" value="<?php echo $tanggal_lahir; ?>"placeholder="Text input" required>
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
  
    <label >Umur</label>
    <input name="umur" type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $umur_atlet; ?>"placeholder="Enter Number" />
 
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
  
    <label >No Handphone</label>
    <input name="no_handphone"  class="form-control" id="exampleInputEmail1" value="<?php echo $no_handphone_atlet; ?> "placeholder="Enter Number" />
  
    <label >Pekerjaan</label>
    <input name="pekerjaan" type="text" class="form-control" id="exampleInputEmail1"value="<?php echo $pekerjaan; ?>" placeholder="Text input" />
  
    <label >kab/kota</label>
    <input name="kab_kota"type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $kab_kota; ?>"placeholder="Text input" />
  
    <label >Pendidikan terakhir</label>
    <input name="pendidikan_terakhir" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $pendidikan_terakhir; ?>"placeholder="Text input" />
 
    <label >Club</label>
    <input name="club" type="text" class="form-control" id="exampleInputEmail1"value="<?php echo $club; ?> " placeholder="Text input" />
	
	<label> Jalur </label>
				<select name="jalur" class="form-control" required>
				<?php
				if($data2['jalur']=="PPLP"){
					echo'<option value ="PPLP">PPLP</option>
				<option value="DIKLAT">DIKLAT</option>';
				}else if($data2['jalur']=="DIKLAT"){
				
					echo'
					<option value="DIKLAT">DIKLAT</option>
					<option value ="PPLP">PPLP</option>
				
				';
				}?>
				
				</select>
				<br>
  
 
   
  <label> Cabang </label>
				<select name="cabang" class="form-control">
				
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
				
				
				 <label> Gedung </label>
				<select name="country" onChange="getState(this.value)" value="<?php echo $no_database; ?>" class="form-control">
	<option value=""><?php if($data2['gedung']==1){echo "Putra";}else if($data2['gedung']==2){echo"Putri";}?></option>
	
	<?php $query="sELECT DISTINCT gedung FROM kamar";
	
	$result=mysqli_query($con,$query); while ($row=mysqli_fetch_array($result)) { ?>
	<option value=<?php echo $row['gedung']?>>
	<?php if($row['gedung']==1)
	{echo "Putra";}
	else if($row['gedung']==2)
	{echo"Putri";}?></option>
	<?php } ?>
	</select>
				
				<label>Kamar</label>
				<select name="kamar" class="form-control">
				
				<?php
				echo '
				  <option value="'.$data2['no_kamar'].'">'.$data2['no_kamar'].'</option>
                  ';
				include'koneksi.php';
                  $i=0; 
                  $tampil = "SELECT * from kamar";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   if($data['no_kamar']!=$data2['no_kamar'])
                   echo '
				  <option value="'.$data['no_kamar'].'">'.$data['no_kamar'].'</option>
                  ';
                   }
				
				?>
				
				</select>
				<label>Tempat Tidur</label>
				<select name="no_kamar" class="form-control">
		
				<?php
				include'koneksi.php';
				 echo '
				  <option value="'.$data2['id_tempat_tidur'].'">'.$data2['nama_tempat_tidur'].'</option>
                  ';
                  $i=0; 
                  $tampil = "SELECT * from tempat_tidur";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                   echo '
				  <option value="'.$data['id_tempat_tidur'].'">'.$data['nama_tempat_tidur'].'</option>
                  ';
                   }
				
				?>
				
				</select>
	 <label >id Sekolah</label>
    <input name="id_sekolah" type="text" class="form-control" value="<?php echo $data2['id_sekolah']; ?>" id="exampleInputEmail1" placeholder="Text input" />
 
    <label >Nama Sekolah</label>
    <input name="nama_sekolah" type="text" class="form-control" value="<?php echo $nama_sekolah; ?>" id="exampleInputEmail1" placeholder="Text input" />
 
    <label >Alamat sekolah</label>
    <input name="alamat_sekolah" type="text" class="form-control" value="<?php echo $alamat_sekolah; ?>"id="exampleInputEmail1" placeholder="Text input" />
  
 
 

   
  
   
	
	<div class="panel-heading">
                          <h3> Data Orang Tua</h3>
                        </div>
                        <div class="panel-body">
                       
 
    
 
  
   <label >id Orangtua</label>
    <input name="id_orangtua" type="text" class="form-control" value="<?php echo $data2['id_orangtua']; ?>"id="exampleInputPassword1" placeholder="Text input" />
 
    <label >Nama Orangtua</label>
    <input name="nama_orangtua" type="text" class="form-control" value="<?php echo $nama_orangtua; ?>"id="exampleInputPassword1" placeholder="Text input" />
 
  
 
    <label >Alamat</label>
    <input name="alamat_orangtua" type="text" class="form-control" value="<?php echo $alamat_orangtua; ?>" id="exampleInputEmail1" placeholder="Text input" />
 
 
  
  
    <label >Umur</label>
    <input name="umur_orangtua" type="number" class="form-control" value="<?php echo $umur_orangtua?>"id="exampleInputEmail1" placeholder="Enter Number" />
 
   
  
    <label >No Handphone</label>
    <input name="no_handphone_ortu"  class="form-control" value=" <?php echo $no_handphone; ?> "id="exampleInputEmail1" placeholder="Enter Number" />
  
    <label >Pekerjaan</label>
    <input name="pekerjaan_orangtua" type="text" class="form-control"value="<?php echo $pekerjaan_orangtua; ?>" id="exampleInputEmail1" placeholder="Text input" />
 
 
    
	<label >Kode Pos</label>
    <input name="kode_pos" type="number" class="form-control" value="<?php echo $no_database; ?>"id="exampleInputEmail1" placeholder="Enter Number" />
	
	
	
	<br>
					
	<img src="proses/uploads/<?php echo $foto; ?>" width="100%">
  <label for="exampleInputFile">Foto</label>
    <input name="fileToUpload" type="file" id="fileToUpload" />
	
	<?php }?>
	<button class="btn btn-success btn-sm">Simpan</button>
				
				
</form>
 
  
		
  </div>
  </div>
  