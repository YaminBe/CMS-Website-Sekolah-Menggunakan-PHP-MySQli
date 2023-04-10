<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header('location:../login.php');
}
include '../inc/koneksi.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Admin / Web SMAN X Koto</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
	<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
<?php
if (@$_SESSION['login']) {
$sesi = @$_SESSION['id'];
}

$sql = mysqli_query($con,"select * from user where id_user = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?> 
			<div class="logo-header">
				<a href="index.php" class="logo">
					<!-- <img src="../assets/img/logo.png" width="40"> --> <b>ADMIN PANEL</b> <!-- SMAN 1 X KOTO -->
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg"style="border-bottom: 3px solid;border-top: 3px solid #00e676;background-color: #00e676; ">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">				
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-bell"></i>
								<span class="notification">1</span>
							</a>
							<ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
								<li>
									<div class="dropdown-title">Hai Admin ! Anda Punya Pesan Dari Pengunjung Website</div>
								</li>
								<li>
									<div class="notif-center">
										<?php 
										$pesan = mysqli_query($con,"SELECT * FROM buku_tamu");
										while ($d = mysqli_fetch_array($pesan)) { ?>
												<a href="?page=pesan&id=<?php echo $d['id_tamu'] ?>">
											<div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													<?php echo $d['nama'] ?>
												</span>
												<p>"<?php echo $d['pesan'] ?>"</p>
												<span class="time"><?php echo $d['tgl_post'] ?></span> 
											</div>
										</a>
										<?php } ?>
									
									</div>
								</li>
								<li>
									<a class="see-all" href="?page=buku"> <strong>See all Message</strong> <i class="la la-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> 
								<!-- <img src="assets/img/profile.jpg" alt="user-img" width="36" class="img-circle"> -->
								<span >Selamat Datang <b><?php echo $data['nama_lengkap']; ?></b></span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="assets/img/<?php echo $data['foto']; ?>" alt="user"></div>
										<div class="u-text">
											<h4><?php echo $data['nama_lengkap']; ?></h4>
										 	<p class="text-muted"><?php echo $data['email']; ?></p>
										 <a href="#" class="btn btn-rounded btn-danger btn-sm"><?php echo $data['level']; ?></a> 
										</div>
										</div>
									</li>
											<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="?page=e-user&id=<?php echo $data['id_user'] ?> "><i class="ti-settings"></i> Pengaturan Akun</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="assets/img/<?php echo $data['foto']; ?>">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo $data['nama_lengkap']; ?>
									<span class="user-level">Administrator</span>
									<!-- <span class="caret"></span> -->
								</span>
							</a>
					
							<hr>							
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
							<a href="index.php">
								<i class="la la-home"></i>
								<p>Dashboard</p>
								<!-- <span class="badge badge-count">5</span> -->
							</a>
						</li>
						<li class="nav-item">
							<a href="?page=profil">
								<i class="la la-graduation-cap"></i>
								<p>Setting Profil</p>
								<!-- <span class="badge badge-count">14</span> -->
							</a>
						</li>
						<li class="nav-item">
							<a href="?page=agenda">
								<i class="la la-calendar"></i>
								<p>Setting Agenda</p>
								<!-- <span class="badge badge-count">50</span> -->
							</a>
						</li>
						<li class="nav-item">
							<a href="?page=berita">
								<i class="la la-pencil-square-o"></i>
								<p>Setting Berita</p>
								<!-- <span class="badge badge-count">6</span> -->
							</a>
						</li>
						<li class="nav-item">
							<a href="?page=peng">
								<i class="la la-bell"></i>
								<p>Pengumuman</p>
								<!-- <span class="badge badge-success">3</span> -->
							</a>
						</li>
						<li class="nav-item">
							<a href="?page=galery">
								<i class="la la-photo"></i>
								<p>Galeri Photo</p>
								<!-- <span class="badge badge-danger">25</span> -->
							</a>
						</li>  
						<li class="nav-item">
							<a href="?page=buku">
								<i class="la la-comments"></i>
								<p> Buku Tamu</p>
								<!-- <span class="badge badge-danger">25</span> -->
							</a>
						</li> 
						<li class="nav-item">
							<?php 
							$sql = mysqli_query($con,"SELECT * FROM tb_setting");
							while ($data= mysqli_fetch_array($sql)) {
							 ?>
							<a href="?page=setweb&id=<?php echo $data['id_set'] ?>">
								<i class="la la-wordpress"></i>
								<p> Setting Website</p>
								<!-- <span class="badge badge-danger">25</span> -->
							</a>
						<?php } ?>
						</li> 
					<!-- 	<li class="nav-item">
							<a href="icons.html">
								<i class="la la-fonticons"></i>
								<p>Icons</p>
							</a>
						</li> -->
					
						<!-- <li class="nav-item update-pro">
							<button  data-toggle="modal" data-target="#modalUpdate">
								<i class="la la-hand-pointer-o"></i>
								<p>Visit To Website</p>
							</button>
						</li> -->
					</ul>
				</div>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<!-- konten -->
						<?php 
						error_reporting();
						$page= @$_GET['page'];
						// profil
						if ($page=='profil') {
							include 'module/profil.php';
						}elseif ($page=='t-profil') {
							include 'module/t-profil.php';
						}elseif ($page=='e-profil') {
							include 'module/e-profil.php';
						}elseif ($page=='d-profil') {
							include 'module/d-profil.php';
							// agenda
						}elseif ($page=='agenda') {
							include 'module/agenda.php';
						}elseif ($page=='t-agenda') {
							include 'module/t-agenda.php';
						}elseif ($page=='e-agenda') {
							include 'module/e-agenda.php';
						}elseif ($page=='d-agenda') {
							include 'module/d-agenda.php';

							// berita
						}elseif ($page=='berita') {
							include 'module/berita.php';
						}elseif ($page=='t-berita') {
							include 'module/t-berita.php';
						}elseif ($page=='e-berita') {
							include 'module/e-berita.php';
						}elseif ($page=='d-kat') {
							include 'module/d-kat.php';
						}elseif ($page=='d-berita') {
							include 'module/d-berita.php';
							// Pengumuman
						}elseif ($page=='peng') {
							include 'module/pengumuman.php';
						}elseif ($page=='t-peng') {
							include 'module/t-pengumuman.php';
						}elseif ($page=='e-peng') {
							include 'module/e-pengumuman.php';
						}elseif ($page=='d-peng') {
							include 'module/d-pengumuman.php';
							// galery
						}elseif ($page=='galery') {
							include 'module/galeri.php';
							// Foto
						}elseif ($page=='t-foto') {
							include 'module/foto.php';
						}elseif ($page=='e-foto') {
							include 'module/e-foto.php';
						}elseif ($page=='d-foto') {
							include 'module/d-foto.php';
							// album
						}elseif ($page=='d-album') {
							include 'module/d-album.php';

							// buku tamu							
						}elseif ($page=='buku') {
							include 'module/Buku-Tamu.php';							
						}elseif ($page=='pesan') {
							include 'module/pesan.php';							
						}elseif ($page=='d-pesan') {
							include 'module/d-pesan.php';
							
						}elseif ($page=='proses') {
							include 'module/proses.php';
							// setting website
						}elseif ($page=='setweb') {
							include 'module/setting-web.php';
							// set User
							
						}elseif ($page=='e-user') {
							include 'module/User.php';
							
						}elseif ($page=='') {
							include 'module/dashboard.php';
							
						}else{
							echo "Halaman Tidak Ada Bossku";
						}


						 ?>
						<!-- end kontent -->
					</div>
				</div>
				<!-- <footer class="footer">
					<div class="container-fluid">
						<nav class="pull-left">
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link" href="http://www.themekita.com">
										ThemeKita
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">
										Help
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="https://themewagon.com/license/#free-item">
										Licenses
									</a>
								</li>
							</ul>
						</nav>
						<div class="copyright ml-auto">
							2018, made with <i class="la la-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a>
						</div>				
					</div>
				</footer> -->
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">									
					<p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
					<p>
						<b>We'll let you know when it's done</b></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<!-- <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>
<!-- <script>
 CKEDITOR.replace('editor1' ,{
        filebrowserImageBrowseUrl : 'kcfinder'
    });
</script> -->
    <script>
        CKEDITOR.replace('ckedtor1',{
            // uiColor:'#40c4ff'
            filebrowserImageBrowseUrl : 'assets/kcfinder'
        });
    </script>
</html>