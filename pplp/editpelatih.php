<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Free Responsive Admin Theme - ZONTAL</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> 
    <![endif]-->
</head>
<body>
    
    <?php
	include"menu.php";
	?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Biodata Pelatih</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Data Pelatih
                        </div>
                        <div class="panel-body">
                      <form role="form" action="proses/proseseditpelatih.php" method="post" enctype="multipart/form-data">
 <?php
		   $no_database=$_GET['no_database_pelatih'];
		   include'koneksi.php';
                  $tampil = "select *from pelatih, cabang_olahraga where pelatih.kode_cabang=cabang_olahraga.kode_cabang and pelatih.no_database_pelatih='$no_database'";
    
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $no_database=$data['no_database_pelatih'];
                   $nama_pelatih=$data['nama'];
                   $alamat=$data['alamat'];
                   $tempat_lahir=$data['tempat_lahir'];
                   $tanggal_lahir=$data['tanggal_lahir'];
                   $agama=$data['agama'];
                   $jenis_kelamin=$data['jenis_kelamin'];
                   $no_handphone=$data['no_hp'];
                   $pekerjaan=$data['pekerjaan'];
                   $kab_kota=$data['kab_kota'];
                   $foto=$data['foto'];
                   $pendidikan_terakhir=$data['pendidikan_terakhir'];
                   $club=$data['club'];
                   $cabang=$data['nama_cabang'];
                   $umur=$data['umur'];
                   
				   }
		   ?>
    <label ="exampleInputEmail1">No Database</label>
    <input value="<?php echo $no_database; ?>" name="no_database_pelatih"type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter id" / readonl>
 
  
  
    <label for="exampleInputPassword1">Nama</label>
    <input value="<?php echo $nama_pelatih; ?>" name="nama_pelatih" type="text" class="form-control" id="exampleInputPassword1" placeholder="Text input" />
 
  
 
    <label for="exampleInputEmail1">Alamat</label>
    <input value="<?php echo $alamat; ?>" name="alamat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
 
  
  
 <label> Tempat, Tanggal Lahir </label>
				<input value="<?php echo $tempat_lahir; ?>"name="tempat_lahir" type="text" class="form-control" placeholder="Text input" required>
				<br>
				<input value="<?php echo $tanggal_lahir; ?>" name="tanggal_lahir" type="date" class="form-control" placeholder="Text input" required>
				<p class="help-block"><font color="red">Example Tahun/Bulan/Tanggal, 1999/09/01).</font></p>
				<br>
  
    <label> Agama </label>
				<select name="agama" class="form-control" required>
				<?php
                  include'koneksi.php';
				   echo '
				   <option value="'.$agama.'">'.$agama.'</option>
                  ';
                  $i=0; 
                  $tampil = "SELECT * from agama";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                  if($data['nama_agama']!=$agama){
					
                   echo '
				   <option value="'.$data['nama_agama'].'">'.$data['nama_agama'].'</option>
                  ';
                   }
				   }
  ?>
				
				</select>
  
    <label for="exampleInputEmail1">Umur</label>
    <input value="<?php echo $umur; ?>"name="umur" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter number" />
 
   <label> Jenis Kelamin </label>
				<select value="<?php echo $jenis_kelamin; ?>"name="jenis_kelamin" class="form-control" required>
				<?php if($jenis_kelamin=="Laki - Laki"){
						echo '<option value ="Laki - Laki">Laki - Laki</option>
				<option value="Perempuan">Perempuan</option>';
				}
				
				else{
					echo '<option value ="Perempuan">Perempuan</option>
				<option value="Laki - Laki">Laki - Laki</option>';
				}
				?>
				</select>
				<br>
  
    <label for="exampleInputEmail1">No Handphone</label>
    <input value="<?php echo $no_handphone; ?>" name="no_handphone"type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter number" />
  
    <label for="exampleInputEmail1">Pekerjaan</label>
    <input value="<?php echo $pekerjaan; ?>"name="pekerjaan"type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
  
    <label for="exampleInputEmail1">kab/kota</label>
    <input value="<?php echo $kab_kota; ?>"name="kab_kota"type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
  
    <label for="exampleInputEmail1">Pendidikan terakhir</label>
    <input value="<?php echo $pendidikan_terakhir; ?>"name="pendidikan_terakhir"type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
 
    <label for="exampleInputEmail1">Club</label>
    <input  value="<?php echo $club; ?>"name="club" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
 
   
  <label> Cabang </label>
				<select value="<?php echo $cabang; ?>"name="kode_cabang"class="form-control">
				<?php
                  include'koneksi.php';
				   echo '
				   <option value="'.$cabang.'">'.$cabang.'</option>
                  ';
                  $i=0; 
                  $tampil = "SELECT * from cabang_olahraga";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                  if($data['nama_cabang']!=$cabang){
					
                   echo '
				   <option value="'.$data['nama_cabang'].'">'.$data['nama_cabang'].'</option>
                  ';
                   }
				   }
  ?>
				</select>

    
 
 <h3>CATATAN PRESTASI</h3>
				<table>
					<tr>
					<td> <label>Nama Prestasi</label> </td>
					<td> <label>Event </label></td>
					<td> <label>Tingkat </label></td>
					<td> <label>Tahun </label></td>
					<td> <label>Tempat </label></td>
					<td> <label>Emas </label></td>
					<td> <label>Perak</label></td>
					<td> <label>Perunggu</label></td>
					</tr>
					<?php
					$no_database=$_GET['no_database_pelatih'];
		   include'koneksi.php';
                  $tampil = "SELECT * from riwayat_prestasi where no_database_pelatih='$no_database'";
					$i=0;
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
					   $i++;
		   ?>
					<tr>
					<td> <input value="<?php echo $data['nama_prestasi'] ?>" name="<?php echo "nama_prestasi".$i; ?>" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input value="<?php echo $data['event'] ?>" name="<?php echo "event".$i; ?>" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input value="<?php echo $data['tingkat'] ?>" name="<?php echo "tingkat".$i; ?>" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input value="<?php echo $data['tahun'] ?>" name="<?php echo "tahun".$i; ?>" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input value="<?php echo $data['tempat'] ?>" name="<?php echo "tempat".$i; ?>" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input value="<?php echo $data['emas'] ?>" name="<?php echo "emas".$i; ?>" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input value="<?php echo $data['perak'] ?>" name="<?php echo "perak".$i; ?>" type="t1ext" class="form-control" placeholder="Text input" >  </td>
					<td> <input value="<?php echo $data['perunggu'] ?>" name="<?php echo "perunggu".$i; ?>" type="text" class="form-control" placeholder="Text input" >  </td>
					</tr>
				   <?php } ?>
					
					
				</table>
   
    <label for="exampleInputFile">Foto</label>
	<br>
    <img src="proses/uploads/<?php echo $foto; ?>" width="200px" align="center">
				<br>
				<br>
				<input value="<?php echo $foto; ?>"  name="fileToUpload" type="file" id="fileToUpload">
				<br>
	<br>
	
	<button class="btn btn-success btn-sm">Simpan</button>
				
				
</form>
                            </div>
                            </div>
                    </div>
                   
                </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
