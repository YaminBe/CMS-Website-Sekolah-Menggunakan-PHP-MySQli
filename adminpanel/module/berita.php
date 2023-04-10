<h4 class="page-title">Pengaturan Berita</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

		<!-- Tampil data -->
<div class="card">
	<div class="card-header">
		<div class="card-title">Data Halaman Berita
			<button data-toggle="modal" data-target="#modalUpdate" class="btn btn-success btn-xs pull-right"> <span class="la la-plus"></span>Add Kategori</button>
			<a href="?page=t-berita" class="btn btn-primary btn-xs pull-right"> <span class="la la-plus"></span>Add New Berita</a>

		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Judul Berita</th>
						<th>Tgl Post</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no=1;
					$query ="SELECT * FROM tb_berita";
						 $sql_ds = mysqli_query($con,$query) or die(mysqli_error($con)) ;
                        while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
					<tr>
						<th scope="row"><?php echo $no++ ?>.</th>
						<td> <a href="?page=e-berita&id=<?php echo $data['id_berita'] ?> "><?php echo $data['judul'] ?></a></td>
						<td><?php echo $data['tgl_post'] ?></td>
						<td>

							<a href="?page=e-berita&id=<?php echo $data['id_berita'] ?> " class="btn btn-info btn-xs"> <span class="la la-edit"></span> Edit</a>
							<a href="?page=d-berita&id=<?php echo $data['id_berita'] ?> " class="btn btn-danger btn-xs"><span class="la la-trash"></span> Del</a>
						</td>
					</tr>
					<?php
					 }
					  ?>

				</tbody>
			</table>
		</div>
	</div>
</div>
		<!-- end tampil data -->
		
	</div>

</div>
	<!-- Modal -->
	<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h6 class="modal-title"><i class="la la-edit"></i> Pangaturan Kategori Berita</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- form  -->
					 <form action="" method="post" accept-charset="utf-8">
					 	<div class="form-group">
					 		<label>Nama Kategori</label>
					 		<input type="text" name="kategori" class="form-control" placeholder="Nama Kategori" required>	
					 	</div>
					 	<div class="form-group">
					 		<input type="submit" name="save-kat" class="btn btn-danger">	
					 	</div>
					 </form>
					 <?php 
					 if (isset($_POST['save-kat'])) {
					 	$kategori= $_POST['kategori'];
					 	  mysqli_query($con,"INSERT INTO tb_kat_berita (id_kategori,kategori) VALUES (NULL,'$kategori') ");
					 	  echo "
<script>
	alert('Berhasil Ditambahkan !!');
</script>";
					 }

					  ?>
					<!-- end form -->



					<!-- Tampil Kategori -->
					<b>Data Kategori</b>
					<hr>
					<table class="table table-condensed">
						<thead>
							<tr>
								<th>No</th>
								<th>Kategori</th>
								<th>Act</th>
							</tr>
						</thead>
						<tbody>
							<?php 
					$no=1;
					$query ="SELECT * FROM tb_kat_berita";
						 $sql_ds = mysqli_query($con,$query) or die(mysqli_error($con)) ;
                        while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $data['kategori'] ?></td>
								<td>
									<a href="?page=d-kat&id=<?php echo $data['id_kategori']; ?>" style="font-size: 23px;"> <span class="la la-trash"></span></a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
					<!-- end tampil -->
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>