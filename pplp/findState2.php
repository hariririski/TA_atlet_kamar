

<?php $country=($_GET['country']);
 include'koneksi.php';
$query="SELECT  DISTINCT YEAR(tanggal_absen) FROM `absen` where month(tanggal_absen)='$country'";
$result=mysqli_query($con,$query);
	
?>
<select name="no_kamar" onchange="getCity( this.value,<?php echo $country?>)" class="form-control">
<option>Pilih Tahun</option>
<?php while ($row=mysqli_fetch_array($result)) { ?>
<option value=<?php echo $row['YEAR(tanggal_absen)']?>> <?php echo $row['YEAR(tanggal_absen)']?></option>
<?php }  ?>
</select>
