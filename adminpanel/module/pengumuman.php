<h4 class="page-title">Pengaturan Pengumuman</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

		<!-- Tampil data -->
<div class="card">
	<div class="card-header">
		<div class="card-title">Data Halaman Pengumuman
			<a href="?page=t-peng" class="btn btn-primary btn-xs pull-right"> <span class="la la-plus"></span>Add New Pengumuman</a>

		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Judul Pengumuman</th>
						<th>Isi</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no=1;
					$sql = mysqli_query($con,"SELECT * FROM tb_pengumuman");
					while ($d = mysqli_fetch_array($sql)) { ?>
					<tr>
						<th scope="row"><?php echo $no++ ?>.</th>
						<td> <a href="?page=e-peng&id=<?php echo $d['id_peng'] ?> "><?php echo $d['judul_peng'] ?></a></td>
						<td> <?php echo $d['isi_peng'] ?></td>
						<td>
							<a href="?page=e-peng&id=<?php echo $d['id_peng'] ?> " class="btn btn-info btn-xs"> <span class="la la-edit"></span> Edit</a>
							<a href="?page=d-peng&id=<?php echo $d['id_peng'] ?> " class="btn btn-danger btn-xs"><span class="la la-trash"></span> Del</a>
						</td>
					</tr>
					<?php } ?>

				</tbody>
			</table>
		</div>
	</div>
</div>
		<!-- end tampil data -->
		
	</div>

</div>
