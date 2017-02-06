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
	<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(countryId) {		
		
		var strURL="findState.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;
						document.getElementById('citydiv').innerHTML='<select name="city" class="form-control">'+
						'<option>Pilih Tempat Tidur</option>'+
				        '</select>';						
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getCity(stateId) {		
		var strURL="findCity.php?country="+countryId+"&state="+stateId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>
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
                        <h1 class="page-head-line">Forms </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                         <h3>  Data Atlet</h3>
                        </div>
                        <div class="panel-body">
                      <form role="form" action="proses/prosesformsatlet.php" method="post" enctype="multipart/form-data">
 
 <?php
		   $no_database=$_GET['no_database_atlet'];
		   include'koneksi.php';
                  $tampil = "select * from atlet,tempat_tidur,sekolah,orangtua, cabang_olahraga, kamar where tempat_tidur.id_tempat_tidur=atlet.id_tempat_tidur and sekolah.id_sekolah=atlet.id_sekolah and orangtua.id_orangtua=atlet.id_orangtua and cabang_olahraga.kode_cabang=atlet.kode_cabang and tempat_tidur.id_kamar=kamar.id_kamar";
    
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $no_database=$data['no_database_atlet'];
                   $nama_atlet=$data['nama'];
                   $alamat_atlet=$data['alamat'];
                   $tempat_lahir=$data['tempat_lahir'];
                   $tanggal_lahir=$data['tanggal_lahir'];
                   $agama=$data['agama'];
                   $umur=$data['umur'];
                   $jenis_kelamin=$data['jenis_kelamin'];
                   $no_handphone=$data['no_hp'];
                   $pekerjaan=$data['pekerjaan'];
                   $kab_kota=$data['kab_kota'];
                   $pendidikan_terakhir=$data['pendidikan_terakhir'];
                   $club=$data['club'];
                   $jalur=$data['jalur'];
                   $cabang=$data['kode_cabang'];
                   $gedung=$data['gedung'];
                   $kamar=$data['no_kamar'];
                   $nama_sekolah=$data['nama_sekolah'];
                   $alamat_sekolah=$data['alamat'];
                   $foto=$data['foto'];
                   $nama_orangtua=$data['nama'];
                   $alamat_orangtua=$data['alamat'];
                   $umur_orangtua=$data['umur'];
                   $alamat_orangtua=$data['alamat'];
                   $no_handphone=$data['no_hp'];
                   $pekerjaan_orangtua=$data['pekerjaan'];
                   
                   
				   }
		   ?>
    <label ="exampleInputEmail1">No Database Atlet</label>
    <input value="<?php echo $no_database; ?>" name="no_database_atlet" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Id " />
 
  
  
    <label for="exampleInputPassword1">Nama</label>
    <input value="<?php echo $nama_atlet; ?>"name="nama_atlet" type="text" class="form-control" id="exampleInputPassword1" placeholder="Text input" />
 
  
 
    <label for="exampleInputEmail1">Alamat</label>
    <input value="<?php echo $alamat_atlet; ?>" name="alamat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
 
  
  
 <label> Tempat, Tanggal Lahir </label>
				<input value="<?php echo $tempat_lahir; ?>" name="tempat_lahir" type="text" class="form-control" placeholder="Text input" required>
				<br>
				<input value="<?php echo $tanggal_lahir; ?>" name="tanggal_lahir" type="date" class="form-control" placeholder="Text input" required>
				<p class="help-block"><font color="red">Example Tahun/Bulan/Tanggal, 1999/09/01).</font></p>
				<br>
  
    <label> Agama </label>
				<select value="<?php echo $agama; ?>" name="agama" class="form-control" required>
				<option>Pilih</option>
				<?php
                  include'koneksi.php';
                  $i=0; 
                  $tampil = "SELECT * from agama";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                  
                   echo '
				   <option value="'.$data['nama_agama'].'">'.$data['nama_agama'].'</option>
                  ';
                   }
  ?>
				
				</select>
  
    <label for="exampleInputEmail1">Umur</label>
    <input value="<?php echo $umur; ?>"name="umur" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Number" />
 
   <label> Jenis Kelamin </label>
				<select value="<?php echo $jenis_kelamin; ?>"name="jenis_kelamin" class="form-control" required>
				<option>Pilih</option>
				<option value ="Laki - Laki">Laki - Laki</option>
				<option value="Perempuan">Perempuan</option>
				</select>
				<br>
  
    <label for="exampleInputEmail1">No Handphone</label>
    <input value="<?php echo $no_handphone; ?>"name="no_handphone" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Number" />
  
    <label for="exampleInputEmail1">Pekerjaan</label>
    <input  value="<?php echo $pekerjaan; ?>"name="pekerjaan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
  
    <label for="exampleInputEmail1">kab/kota</label>
    <input value="<?php echo $kab_kota; ?>"name="kab_kota"type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
  
    <label for="exampleInputEmail1">Pendidikan terakhir</label>
    <input value="<?php echo $pendidikan_terakhir; ?>"name="pendidikan_terakhir" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
 
    <label for="exampleInputEmail1">Club</label>
    <input value="<?php echo $club; ?>"name="club" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
	
	<label> Jalur </label>
				<select value="<?php echo $jalur; ?>"name="jalur" class="form-control" required>
				<option>Pilih</option>
				<option value ="PPLP">PPLP</option>
				<option value="DIKLAT">DIKLAT</option>
				</select>
				<br>
  
 
   
  <label> Cabang </label>
				<select value="<?php echo $cabang; ?>" name="cabang" class="form-control">
				<option>Pilih</option>
				<?php
				include'koneksi.php';
                  $i=0; 
                  $tampil = "SELECT * from cabang_olahraga";
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $i++;
                   
                   echo '
				  <option value="'.$data['kode_cabang'].'">'.$data['nama_cabang'].'</option>
                  ';
                   }
				
				?>
				
				</select>
				
				
				 <label> Gedung </label>
				<select value="<?php echo $gedung; ?>"name="country" onChange="getState(this.value)" class="form-control">
	<option value="">Pilih Gedung</option>
	<?php $query="SELECT * FROM kamar";
$result=mysqli_query($con,$query); 
while ($row=mysqli_fetch_array($result)) { 
	echo"<option value='$row[gedung]'> $row[gedung] </option>";
}
?>
			 </select>
				 <label> Kamar </label>
				<div id="statediv"><select name="state" class="form-control" >
	<option>Pilih Kamar</option>
        </select></div>
				<label> Tempat Tidur </label>
				<div id="citydiv"><select name="no_kamar" class="form-control">
	<option>Pilih Tempat Tidur</option>
        </select></div>
				

    <label for="exampleInputEmail1">Nama Sekolah</label>
    <input value="<?php echo $nama_sekolah; ?>"name="nama_sekolah" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
 
    <label for="exampleInputEmail1">Alamat sekolah</label>
    <input value="<?php echo $alamat_sekolah; ?>"name="alamat_sekolah" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
  
 
 

   
  
   
	
	<div class="panel-heading">
                          <h3> Data Orang Tua</h3>
                        </div>
                        <div class="panel-body">
                       <form>
 
    
 
  
  
    <label for="exampleInputPassword1">Nama Orangtua</label>
    <input value="<?php echo $nama_orangtua; ?>"name="nama_orangtua" type="text" class="form-control" id="exampleInputPassword1" placeholder="Text input" />
 
  
 
    <label for="exampleInputEmail1">Alamat</label>
    <input value="<?php echo $alamat_orangtua; ?>" name="alamat_orangtua" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
 
 
  
  
    <label for="exampleInputEmail1">Umur</label>
    <input value="<?php echo $umur_orangtua; ?>"name="umur_orangtua" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Number" />
 
   
  
    <label for="exampleInputEmail1">No Handphone</label>
    <input value="<?php echo $no_handphone; ?>"name="no_handphone_ortu" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Number" />
  
    <label for="exampleInputEmail1">Pekerjaan</label>
    <input name="pekerjaan_orangtua" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
 
 
    
	<label for="exampleInputEmail1">Kode Pos</label>
    <input value="<?php echo $kode_pos; ?>"name="kode_pos" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Number" />
	
	
	
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
					
					<tr>
					<td> <input name="nama_prestasi1" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="event1" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="tingkat1" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="tahun1" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="tempat1" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="emas1" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="perak1" type="t1ext" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="perunggu1" type="text" class="form-control" placeholder="Text input" >  </td>
					</tr>
					
					<tr>
					<td> <input name="nama_prestasi2" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="event2" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="tingkat2" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="tahun2" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="tempat2" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="emas2" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="perak2" type="t1ext" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="perunggu2" type="text" class="form-control" placeholder="Text input" >  </td>
					</tr>
					
					<tr>
					<td> <input name="nama_prestasi3" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="event3" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="tingkat3" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="tahun3" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="tempat3" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="emas3" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="perak3" type="t1ext" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="perunggu3" type="text" class="form-control" placeholder="Text input" >  </td>
					</tr>
					
					<tr>
					<td> <input name="nama_prestasi4" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="event4" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="tingkat4" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="tahun4" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="tempat4" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="emas4" type="text" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="perak4" type="t1ext" class="form-control" placeholder="Text input" >  </td>
					<td> <input name="perunggu4" type="text" class="form-control" placeholder="Text input" >  </td>
					</tr>
					
					</table>
	 
  <label for="exampleInputFile">Foto</label>
    <input value="<?php echo $foto; ?>"name="fileToUpload" type="file" id="fileToUpload" />
	
	
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
