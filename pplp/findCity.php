
<?php 
$stateId=($_GET['country']);
 include'koneksi.php';
$query="SELECT * FROM tempat_tidur WHERE id_kamar='$stateId' and status='0'";
$result=mysqli_query($con,$query);

?>
<select name="no_kamar" class="form-control">
<option>Pilih Tempat Tidur</option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option value=<?php echo $row['id_tempat_tidur']?>>Tempat Tidur <?php echo $row['nama_tempat_tidur']?></option>
<?php } ?>
</select>
