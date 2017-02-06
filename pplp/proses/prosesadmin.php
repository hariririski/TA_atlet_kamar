<?php
session_start()
 ?> 
<?php
include('../koneksi.php');
								//tangkap data dari form login
								$username =$_POST['user'];
								$password =$_POST['password'];
								 if(!empty($username)&&!empty($password)){
										$mysqli=mysqli_query($con, "select * from admin where nip='$username' and password='$password'");
										$cek=mysqli_num_rows($mysqli);
										
										if($cek>0){
											$_SESSION['adm'] = $username;
											echo '<script language="javascript">window.location.href = "../home.php"</script>';
										}
										else{
										echo "<script type='text/javascript'>alert('Maaf User Atau Password Anda Salah}');</script>";
								echo '<script language="javascript">window.location.href = "../home.php"</script>';
										}
								}
								else{
									echo "<script type='text/javascript'>alert('Maaf User Atau Password Anda Salah');</script>";
								echo '<script language="javascript">window.location.href = "../home.php"</script>';
								}
?>