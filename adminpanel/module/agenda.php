<h4 class="page-title">Pengaturan Agenda</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

		<!-- Tampil data -->
<div class="card">
	<div class="card-header">
		<div class="card-title">Data Halaman Agenda
			<a href="?page=t-agenda" class="btn btn-primary btn-xs pull-right"> <span class="la la-plus"></span>Add New Agenda</a>

		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Judul Agenda</th>
						<th>Tempat</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no=1;
					$sql = mysqli_query($con,"SELECT * FROM tb_agenda");
					while ($d = mysqli_fetch_array($sql)) { ?>
					<tr>
						<th scope="row"><?php echo $no++ ?>.</th>
						<td> <a href="?page=e-agenda&id=<?php echo $d['id_agenda'] ?> "><?php echo $d['judul'] ?></a></td>
						<td> <?php echo $d['tempat'] ?></td>
						<td>
							<a href="?page=e-agenda&id=<?php echo $d['id_agenda'] ?> " class="btn btn-info btn-xs"> <span class="la la-edit"></span> Edit</a>
							<a href="?page=d-agenda&id=<?php echo $d['id_agenda'] ?> " class="btn btn-danger btn-xs"><span class="la la-trash"></span> Del</a>
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
