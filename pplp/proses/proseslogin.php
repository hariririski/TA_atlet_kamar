<?php
session_start()
 ?> 
<?php
include('../koneksi.php');
								//tangkap data dari form login
								$user =$_POST['user'];
								$password =$_POST['password'];
								 if(!empty($user)&&!empty($password)){
										$mysqli=mysqli_query($con, "select * from admin where user='$user' and password='$password'");
										$cek=mysqli_num_rows($mysqli);
										
										if($cek>0){
											$level=0;
											
											$sql = mysqli_query($con,"select * from admin where user='$user' and password='$password'");
											  while($data = mysqli_fetch_array($sql))
											   {
												   $level=$data['level'];
											   }
											  
											   if($level==1){
												   $_SESSION['adm'] = $user;
												   echo '<script language="javascript">window.location.href = "../home.php"</script>';
											   }else if($level==2){
												   $sql11 = mysqli_query($con,"select * from login_petugas,petugas_piket where login_petugas.user='$user' and login_petugas.password='$password' and petugas_piket.id_petugas=login_petugas.id_petugas");
											  while($data11 = mysqli_fetch_array($sql11))
											   {
													//session_start();
												    $_SESSION['piket'] = $data11['id_petugas'];
													echo '<script language="javascript">window.location.href = "../petugas absen.php"</script>';
											   }
												  
												   
											   }
											
										}
										else{
										echo "<script type='text/javascript'>alert('Maaf User Atau Password Anda Salah}');</script>";
								echo '<script language="javascript">window.location.href = "../login.php"</script>';
										}
								}
								else{
									echo "<script type='text/javascript'>alert('Maaf User Atau Password Anda Salah');</script>";
								echo '<script language="javascript">window.location.href = "../login.php"</script>';
								}
?>