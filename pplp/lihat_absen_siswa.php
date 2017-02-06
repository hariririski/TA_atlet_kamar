<?php
session_start();
if (!isset($_SESSION['adm'])){
	header ("location:login.php");
}
 

 ?> 
 
 
<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Absen </h4>
		  
        </div>
        <div class="modal-body">
		<div class="alert alert-success"><center>
							<?php
	function draw_calendar($month,$year){
		$tanggal_awal='2016-08-1';
		$tanggal_akhir='2016-8-31';
		$a=$_GET['bulan'];
	
		$b=$_GET['tahun'];
		$no_database=$_GET['no_database_atlet'];
		$hadir;
		$gambar;
		$tanggal_hadir;
		include'koneksi.php';
                  $i=0;
				   $tampil1 = "SELECT * FROM `absen` WHERE month(tanggal_absen)='$a' and YEAR(tanggal_absen)='$b' ";
                  $sql1 = mysqli_query($con,$tampil1);
                  while($data = mysqli_fetch_array($sql1))
                   {
                    $cek_tanggal=$data['tanggal_absen'];
                   
					$tanggal=intval(substr("$cek_tanggal",8,2));
					
					$gambar[$tanggal]=$data['foto_absen'];
					$tanggal_hadir[$tanggal]=$data['tanggal_absen'];
					$hadir[$i]=$tanggal;
					$i++;
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
			$jumlh=count($hadir);
			for($a=0;$a<$jumlh;$a++){
				if($hadir[$a]==$list_day){
					$cek=$list_day;
				}
			}
			
			if($cek>0){
				$calendar.= '<div class="day-number"><button type="button" class="btn btn-success">'.$list_day.'</button></div>';
				$calendar.= str_repeat('<p><img src="absen/take/images/'.$gambar[$list_day].'" width="100%"></p>',1);
				$calendar.= str_repeat('<p>'.$tanggal_hadir[$list_day].'</p>',1);
				
			}else{
				$calendar.= '<div class="day-number">'.$list_day.'</div>';
				//$calendar.= str_repeat('<p><img src="absen/take/images/tidak_hadir.jpg" width="100%"></p>',1);
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
echo draw_calendar($a,$b);

	
	
	
	?>
					
					
					
		</div>
					
		</div>
					