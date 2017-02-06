<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Acme | Home</title>

    <!-- Bootstrap core CSS -->
    <style>
	/* calendar */
table.calendar		{ border-left:1px solid #999; }
tr.calendar-row	{  }
td.calendar-day	{ min-height:80px; font-size:11px; position:relative; } * html div.calendar-day { height:80px; }
td.calendar-day:hover	{ background:#eceff5; }
td.calendar-day-np	{ background:#eee; min-height:80px; } * html div.calendar-day-np { height:80px; }
td.calendar-day-head { background:#ccc; font-weight:bold; text-align:center; width:120px; padding:5px; border-bottom:1px solid #999; border-top:1px solid #999; border-right:1px solid #999; }
div.day-number		{ background:#999; padding:5px; color:#fff; font-weight:bold; float:right; margin:-5px -5px 0 0; width:20px; text-align:center; }
/* shared */
td.calendar-day, td.calendar-day-np { width:120px; padding:5px; border-bottom:1px solid #999; border-right:1px solid #999; }
	
    </style>


  </head>

  <body>
    <!--header start-->
    <?php
	function draw_calendar($month,$year){
		$tanggal_awal='2016-08-1';
		$tanggal_akhir='2016-8-31';
		$no_database=12;
		$hadir;
		$gambar;
		$tanggal_hadir;
		include'koneksi.php';
                  $i=0;
				   $tampil1 = "SELECT * FROM `absen` WHERE no_database_atlet='$no_database'";
                  $sql1 = mysqli_query($con,$tampil1);
                  while($data = mysqli_fetch_array($sql1))
                   {
                    $cek_tanggal=$data['tanggal_absen'];
                   
					$tanggal=substr("$cek_tanggal",8,2);
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
				$calendar.= '<div class="day-number"><button>'.$list_day.'</button></div>';
				$calendar.= str_repeat('<p><img src="absen/take/images/'.$gambar[$list_day].'" width="100%"></p>',1);
				$calendar.= str_repeat('<p>'.$tanggal_hadir[$list_day].'</p>',1);
				
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
echo '<h2>July 2009</h2>';
echo draw_calendar(8,2009);

//echo '<h2>August 2009</h2>';
//echo draw_calendar(8,2009);
	
	
	
	
	?>
   
  </body>
</html>
