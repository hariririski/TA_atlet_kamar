 <?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include"header.php";
	?>
<script language="JavaScript" type="text/JavaScript">
        counter=0;
        function action(){
            counterNext=counter+1;
            document.getElementById("input"+counter).innerHTML = 
			"<table><tr>"
					
					+"<td> <input name='nama_prestasi[]' type='text' class='form-control' placeholder='Nama Prestasi' / required></td>"
					+"<td> <input name='event[]' type='text' class='form-control' placeholder='Nama Event' / required></td>"
					+"<td> <input name='tingkat[]' type='text' class='form-control' placeholder='tingkat' / required></td>"
					+"<td width='90px'> <input name='tahun[]' type='text' class='form-control' placeholder='Tahun' / required></td>"
					+"<td> <input name='tempat[]' type='text' class='form-control' placeholder='Tempat' / required></td>"
					+"<td width='130px'> <input name='emas[]' type='text' class='form-control' placeholder='Jumlah Emas'/ required></td>"
					+"<td> <input name='perak[]' type='t1ext' class='form-control' placeholder='Jumlah perak' / required></td>"
					+"<td> <input name='perunggu[]' type='text' class='form-control' placeholder='Jumlah Perunggu'/ required></td>"
			+"</tr></table>" 
			+"<div id=\"input"+counterNext+"\"></div>";// perhatikan tanda petiknya, sama seperti pemrograman java yang lainnya
           
            counter++;
        }
    </script>
    
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
						document.getElementById('citydiv').innerHTML='<select name="no_kamar" class="form-control">'+
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
	function getCity(countryId,stateId) {		
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
 
    <label>No Database Atlet</label>
    <input name="no_database_atlet" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Id " />
 
  
  
    <label >Nama</label>
    <input name="nama_atlet" type="text" class="form-control" id="exampleInputPassword1" placeholder="Text input" />
 
  
 
    <label >Alamat</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
 
  
  
 <label> Tempat, Tanggal Lahir </label>
				<input name="tempat_lahir" type="text" class="form-control" placeholder="Text input" required>
				<br>
				<input name="tanggal_lahir" type="date" class="form-control" placeholder="Text input" required>
				<p class="help-block"><font color="red">Example Tahun/Bulan/Tanggal, 1999/09/01).</font></p>
				<br>
  
    <label> Agama </label>
				<select name="agama" class="form-control" required>
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
  
    <label >Umur</label>
    <input name="umur" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Number" />
 
   <label> Jenis Kelamin </label>
				<select name="jenis_kelamin" class="form-control" required>
				<option>Pilih</option>
				<option value ="Laki - Laki">Laki - Laki</option>
				<option value="Perempuan">Perempuan</option>
				</select>
				<br>
  
    <label >No Handphone</label>
    <input name="no_handphone" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Number" />
  
    <label >Pekerjaan</label>
    <input name="pekerjaan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
  
    <label >kab/kota</label>
    <input name="kab_kota"type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
  
    <label >Pendidikan terakhir</label>
    <input name="pendidikan_terakhir" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
 
    <label >Club</label>
    <input name="club" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
	
	<label> Jalur </label>
				<select name="jalur" class="form-control" required>
				<option>Pilih</option>
				<option value ="PPLP">PPLP</option>
				<option value="DIKLAT">DIKLAT</option>
				</select>
				<br>
  
 
   
  <label> Cabang </label>
				<select name="cabang" class="form-control">
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
				<select name="country" onChange="getState(this.value)" class="form-control">
	<option value="">Pilih Gedung</option>
	<?php $query="sELECT DISTINCT gedung FROM kamar";
$result=mysqli_query($con,$query); while ($row=mysqli_fetch_array($result)) { ?>
	<option value=<?php echo $row['gedung']?>><?php if($row['gedung']==1){echo "Putra";}else{echo"Putri";}?></option>
	<?php } ?>
	</select>
				
				 <label> Kamar </label>
				<div id="statediv"><select name="state" class="form-control" >
	<option>Pilih Kamar</option>
        </select></div>
				<label> Tempat Tidur </label>
				<div id="citydiv"><select name="no_kamar" class="form-control">
	<option>Pilih Tempat Tidur</option>
        </select></div>

    <label >Nama Sekolah</label>
    <input name="nama_sekolah" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
 
    <label >Alamat sekolah</label>
    <input name="alamat_sekolah" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
  
 
 

   
  
   
	
	<div class="panel-heading">
                          <h3> Data Orang Tua</h3>
                        </div>
                        <div class="panel-body">
                       <form>
 
    
 
  
  
    <label >Nama Orangtua</label>
    <input name="nama_orangtua" type="text" class="form-control" id="exampleInputPassword1" placeholder="Text input" />
 
  
 
    <label >Alamat</label>
    <input name="alamat_orangtua" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
 
 
  
  
    <label >Umur</label>
    <input name="umur_orangtua" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Number" />
 
   
  
    <label >No Handphone</label>
    <input name="no_handphone_ortu" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Number" />
  
    <label >Pekerjaan</label>
    <input name="pekerjaan_orangtua" type="text" class="form-control" id="exampleInputEmail1" placeholder="Text input" />
 
 
    
	<label >Kode Pos</label>
    <input name="kode_pos" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Number" />
	
	
	
	 <h3>CATATAN PRESTASI</h3>
				<table>
					<tr>
					<th> <label>Nama Prestasi</label> </td>
					<th> <label>Event </label></td>
					<th> <label>Tingkat </label></td>
					<th width="90px"> <label>Tahun </label></td>
					<th> <label>Tempat </label></td>
					<th width="130px">Emas </label></td>
					<th> <label>Perak</label></td>
					<th> <label>Perunggu</label></td>
					</tr>
					
					
					
					<tr>
					
					<td> <input name="nama_prestasi[]" type="text" class="form-control" placeholder="Nama Prestasi" required>  </td>
					<td> <input name="event[]" type="text" class="form-control" placeholder="Nama Event" required>  </td>
					<td> <input name="tingkat[]" type="text" class="form-control" placeholder="Tingkat" required>  </td>
					<td> <input name="tahun[]" type="text" class="form-control" placeholder="Tahun" required>  </td>
					<td> <input name="tempat[]" type="text" class="form-control" placeholder="Tempat" required>  </td>
					<td> <input name="emas[]" type="text" class="form-control" placeholder="Jumlah Emas" required>  </td>
					<td> <input name="perak[]" type="t1ext" class="form-control" placeholder="Jumlah Perak" required >  </td>
					<td> <input name="perunggu[]" type="text" class="form-control" placeholder="Jumlah Perunggu" required>  </td>
					
					</tr>
					
					
					</table>
					
					<div id="input0"></div>
					<font color="red">Isikan dengan "-" jika tidak ingin diisi</font>
					<br>
					<a href="javascript:action();"><input  class="btn btn-success btn-sm"value="Tambah"></a>
					<br>
					<br>
  <label for="exampleInputFile">Foto</label>
    <input name="fileToUpload" type="file" id="fileToUpload" />
	
	
	<button class="btn btn-success btn-sm">Simpan</button>
				
				
</form>
                            </div>
                            </div>
                    </div>
                   
                </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php
	include"footer.php";
	?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
