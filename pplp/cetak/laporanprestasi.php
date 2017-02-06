<?php
										
		$strhtml .="<br>";
$strhtml .="<br>";
$strhtml .="<br>";								
include("../koneksi.php");

		  $strhtml .="<table border='1' width='100%'>
			<thead>
			<center>
			<tr>
				
				<th>No</th>
				<th>Nama Cabang</th>
				<th>Atlet</th>
				<th>Event</th>
				<th>Tahun</th>
				<th>Tingkat</th>
				<th>Emas</th>
				<th>Perunggu</th>
				<th>Perak</th>
				
			   
				
			</tr>
			</center>
			</thead>
			<tbody>";		
		   include'koneksi.php';
            $tampil = "SELECT *,atlet.nama as nama_atlet from atlet_prestasi, prestasi,atlet,cabang_olahraga where atlet_prestasi.no_database_atlet=atlet.no_database_atlet and prestasi.kode_prestasi=atlet_prestasi.kode_prestasi and atlet.kode_cabang=cabang_olahraga.kode_cabang ";
                       $i=1;
                  $sql = mysqli_query($con,$tampil);
                  while($data = mysqli_fetch_array($sql))
                   {
                   $strhtml .='
                   <tr>
                    <td width="30px">'.$i.'</td>
               
					<td class="center">'.$data['nama_cabang'].'</td>
					<td class="center">'.$data['nama_atlet'].'</td>
					<td class="center">'.$data['event'].'</td>
					<td class="center">'.$data['tahun'].'</td>
					<td class="center">'.$data['tingkat'].'</td>
					<td class="center">'.$data['emas'].'</td>
					<td class="center">'.$data['perunggu'].'</td>
					<td class="center">'.$data['perak'].'</td>
					
                    ';
					
					
					$i++;
                  echo'  
                  </tr>
                  ';
	
	



				   }
				   
				   $strhtml .=" <tbody></table >";		
			include("mpdf60/mpdf.php");

			$mpdf=new mPDF ('utf-8','A4-P');
			$stylesheet = file_get_contents('styles2.css');
			$mpdf ->SetMargins (25.4,25.4,0,25.4);
			$mpdf->WriteHTML($stylesheet,1);
			$mpdf->WriteHTML($strhtml);
			$mpdf->Output();
			
			
			
			


?>