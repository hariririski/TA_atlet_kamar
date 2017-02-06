

<?php $country=($_GET['country']);
 include'koneksi.php';
$query="SELECT *from  kamar WHERE gedung='$country'";
$result=mysqli_query($con,$query);
	
?>
<select name="no_kamar" onchange="getCity( this.value)" class="form-control">
<option>Pilih Kamar</option>
<?php while ($row=mysqli_fetch_array($result)) { ?>
<option value=<?php echo $row['id_kamar']?>>Kamar <?php echo $row['no_kamar']?></option>
<?php }  ?>
</select>
