    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>atletaceh@gmail.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>(+651) 2332 3222
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
		<img src="image/stadion.jpg" width="100%">
    
    <!-- LOGO HEADER END-->
<section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
						<?php
									if (isset($_SESSION['adm']) && !isset($_SESSION['piket'])){ //ini gunanya jika yang mengakses halaman 1 belum login, maka akan redirect ke halaman login
									echo'
                            <li><a href="home.php">HOME</a></li>
                
                            <li class="dropdown">
								<a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown" data-toggle="dropdown" href="#">
								Data Atlet<i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
								
								
									<li>
										<a href="data atlet.php"><font color="black">Data Atlet</font></a>
									</li>
									
									<li>
										<a href="data pelatih.php"><font color="black">Data Pelatih </font></a>
									</li>
									
									
									
									<li>
										<a href="data prestasi.php"><font color="black"> Data prestasi </font></a>
									</li>
									
									<li>
										<a href="data kamar.php"><font color="black">Data Kamar </font></a>
									</li>
									<li>
										<a href="absen admin.php"><font color="black">Data Absesi Atlet </font></a>
									</li>
									
									
									
								</ul>
							</li>
							
							<li class="dropdown">
								<a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown" data-toggle="dropdown" href="#">
								Input Data<i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li>
										<a href="forms atlet.php"><font color="black">Tambah Atlet</font></a>
									</li>
									
									<li>
										<a href="forms pelatih.php"><font color="black">Tambah Pelatih </font></a>
									</li>
									<li>
										<a href="tambah kamar.php"><font color="black">Tambah Kamar </font></a>
									</li>
									<li>
										<a href="tambahtempattidur.php"><font color="black">Tambah Tempat Tidur </font></a>
									</li>
									
									
									
									 
								</ul>
							</li>
							
							<li class="dropdown">
								<a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown" data-toggle="dropdown" href="#">
								Setting<i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
								<li>
										<a href="cabang olahraga.php"><font color="black">cabang olahraga</font></a>
									</li>
									
									<li>
										<a href="agama.php"><font color="black">Agama</font></a>
									</li>
									<li>
										<a href="tambah admin.php"><font color="black"> Tambah Admin</font></a>
									</li>
									
									
							
									
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown" data-toggle="dropdown" href="#">
								Cetak<i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
								<li>
										<a href="cetak_data_atlet.php"><font color="black">Cetak Data Atlet</font></a>
									</li>
									
									<li>
										<a href="cetak/laporanprestasi.php"><font color="black">Cetak Laporan Prestasi</font></a>
									</li>
									<li>
										<a href="cetak_kehadiran_atlet.php"><font color="black"> Cetak Kehadiran Atlet</font></a>
									</li>
									
									
							
									
								</ul>
							</li>
                            ';
									}
								?>
								<?php
				  if (isset($_SESSION['piket']) || isset($_SESSION['adm'])){ //ini gunanya jika yang mengakses halaman 1 belum login, maka akan redirect ke halaman login
					echo'
					<li>
                      <a href="logout.php">Logout</a>
                  </li>
				  ';
				  }
				 
?>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>