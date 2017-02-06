
<?php 
$stateId=($_GET['country']);
 $state=($_GET['state']);
 include'koneksi.php';
$query="SELECT * FROM tempat_tidur WHERE id_kamar='$stateId'";
$result=mysqli_query($con,$query);

?>
<?php
				include 'modala.php'
				?>
<?php
	function draw_calendar($month,$year){
		$tanggal_awal='2016-08-1';
		$tanggal_akhir='2016-8-31';
		$b=($_GET['country']);
		$a=($_GET['state']);
		
		$hadir;
		$hadir2;
		
		include'koneksi.php';
                 $i=0;
				 $tampil1 = "SELECT distinct date_format(tanggal_absen, '%Y-%m-%d') as tanggal_absen FROM `absen` WHERE month(tanggal_absen)='$a' and YEAR(tanggal_absen)='$b'";
                  $sql1 = mysqli_query($con,$tampil1);
                  while($data = mysqli_fetch_array($sql1))
                   { 
					
					    $tahun=intval(substr($data['tanggal_absen'],0,4));
					    $bulan=(substr($data['tanggal_absen'],5,2));
					   $tanggal=intval(substr($data['tanggal_absen'],8,2));
					   $tanggal2=(substr($data['tanggal_absen'],8,2));
						$tampil2 = "SELECT count(id_absen) FROM `absen` WHERE DATE_FORMAT(tanggal_absen,'%d')='$tanggal2' and DATE_FORMAT(tanggal_absen,'%m')='$bulan' and DATE_FORMAT(tanggal_absen,'%Y')='$tahun'";
						  $sql2 = mysqli_query($con,$tampil2);
						  while($data2 = mysqli_fetch_array($sql2))
						   {
							
								$data['tanggal_absen'];
								
								$hadir[$tanggal]=$data2['count(id_absen)'];
								$hadir3[$tanggal]=$data['tanggal_absen'];
								$hadir2[$i]=$tanggal;
							$i++;
						   }
                   }
		
		
	
   
	
	$calendar = '<table cellpadding="0" cellspacing="0" class="calendar">';

	
	$headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';

	
	$running_day = date('w',mktime(0,0,0,$month,1,$year));
	$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();


	$calendar.= '<tr class="calendar-row">';


	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;


	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		$calendar.= '<td class="calendar-day">';
			
			$a=0;
			$cek=0;
			$jumlah=count($hadir2);
			for($a=0;$a<$jumlah;$a++){
				
			
				if($hadir2[$a]==$list_day){
					$cek=$list_day;
				}
			
			}
			
			if($cek>0){
				$calendar.= '<div class="day-number">'.$list_day.'</div>';
				//$calendar.= str_repeat('<p><img src="absen/take/images/'.$gambar[$list_day].'" width="100%"></p>',1);
				//$calendar.= str_repeat('<center><p><font size="5">'.$hadir[$list_day].'</font></p></center>',1);
				$calendar.= str_repeat('<p><center><table border="0" width="100%"><tr><td><font size="5"><center> &nbsp </center></font></td></tr><tr><td><font size="5"><center><a href="data_atlet_absen_pertanggal.php?tanggal='.$hadir3[$list_day].'" target="_blank"><button type="button" class="btn btn-info">'.$hadir[$list_day].'</button></a></center></font></td></tr></table></center></p>',1);
				
			}else{
				$calendar.= '<div class="day-number">'.$list_day.'</div>';
				$calendar.= str_repeat('<p><img src="absen/take/images/tidak_hadir.jpg" width="100%"></p>',1);
			}
			

			
			$calendar.= str_repeat('<p></p>',2);
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;


	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;


	$calendar.= '</tr>';


	$calendar.= '</table>';
	

	return $calendar;
	
	
}

/* sample usages */

$a=date('m');
$c=date(" F Y ");
$b=date('Y');

echo "<h2>$c</h2>";
echo draw_calendar($state,$stateId);

	
	
	
	?>
