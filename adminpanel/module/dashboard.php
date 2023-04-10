<h4 class="page-title">Dashboard</h4>
<div class="row">
<?php 
// include '../koneksi.php';
// 2007
$profil =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_profil"));
$agenda =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_agenda"));
$berita =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_berita"));
$album =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_album"));
// $jurnal =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_jurnal"));
?>

<div class="col-md-3">
	<a href="?page=profil" style="text-decoration: none;">
	<div class="card card-stats card-warning">
		<div class="card-body ">
			<div class="row">
				<div class="col-5">
					<div class="icon-big text-center">
						<i class="la la-users"></i>
					</div>
				</div>
				<div class="col-7 d-flex align-items-center">
					<div class="numbers">
						<p class="card-category">Page Profil</p>
						<h4 class="card-title"><?php echo $profil ?></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	</a>
</div>

<div class="col-md-3">
	<a href="?page=agenda"style="text-decoration: none;">
	<div class="card card-stats card-success">
		<div class="card-body ">
			<div class="row">
				<div class="col-5">
					<div class="icon-big text-center">
						<i class="la la-calendar"></i>
					</div>
				</div>
				<div class="col-7 d-flex align-items-center">
					<div class="numbers">
						<p class="card-category">Page Agenda</p>
						<h4 class="card-title"><?php echo $agenda ?></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</a>
</div>

<div class="col-md-3">
	<a href="?page=berita"style="text-decoration: none;">
	<div class="card card-stats card-danger">
		<div class="card-body">
			<div class="row">
				<div class="col-5">
					<div class="icon-big text-center">
						<i class="la la-newspaper-o"></i>
					</div>
				</div>
				<div class="col-7 d-flex align-items-center">
					<div class="numbers">
						<p class="card-category">Page Berita</p>
						<h4 class="card-title"><?php echo $berita ?></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</a>
</div>

<div class="col-md-3">
	<a href="?page=galery"style="text-decoration: none;">
	<div class="card card-stats card-primary">
		<div class="card-body ">
			<div class="row">
				<div class="col-5">
					<div class="icon-big text-center">
						<i class="la la-photo"></i>
					</div>
				</div>
				<div class="col-7 d-flex align-items-center">
					<div class="numbers">
						<p class="card-category">Galery</p>
						<h4 class="card-title"><?php echo $album ?></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</a>
</div>
</div>

<div class="row">
	<div class="col-md-12">
	<div class="card">
<!-- 	<div class="card-header">
		<div class="card-title">Data Buku Tamu
			<a href="?page=t-berita" class="btn btn-primary btn-xs pull-right"> <span class="la la-plus"></span>Add New Berita</a>

		</div>
	</div> -->
	<div class="card-body">
		<img src="../assets/img/hm.png" width="100%" style="height: 250px;">
	</div>
</div>
</div>
	
</div>
	
</div>



<!-- end -->