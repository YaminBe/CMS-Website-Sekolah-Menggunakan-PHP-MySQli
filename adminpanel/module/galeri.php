<h4 class="page-title"> Galeri Foto</h4>
<div class="row">
<div class="col-lg-12 col-md-12 col-xs-12">

		<!-- Tampil data -->
<div class="card">
	<div class="card-header">
		<div class="card-title">Data Album Galery

			<a href="?page=t-foto" class="btn btn-primary btn-xs pull-right"> <span class="la la-photo"></span> Tambah Foto</a>
			 <a data-toggle="modal" data-target="#album" class="btn btn-default btn-xs pull-right"> <span class="la la-folder-open"></span> Tambah Album</a>
			<!--  <button  data-toggle="modal" data-target="#album">
								<i class="la la-hand-pointer-o"></i>
								<p>Visit To Website</p>
							</button> -->

		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-condensed table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>Cover</th>
						<th>Nama Album</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no=1;
					$query ="SELECT * FROM tb_album";
						 $sql_ds = mysqli_query($con,$query) or die(mysqli_error($con)) ;
                        while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
					<tr>
						<th scope="row"><?php echo $no++ ?>.</th>
						<td><img src="../assets/galery/<?php echo $data['cover'] ?>" class="img-responsive" width="60"> </td>
						<td><?php echo $data['nama_album'] ?></td>
						<td>

							<a  data-toggle="modal" data-target="#edit=<?php echo $data['id_album'] ?>" class="btn btn-info btn-xs"> <span class="la la-edit"></span> Edit</a>


							<!-- Modal -->
	<div class="modal fade" id="edit=<?php echo $data['id_album'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h6 class="modal-title"><i class="la la-photo"></i> Tambah ALbum Galery</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<form method="post" action="" enctype="multipart/form-data">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama ALbum</label>
					     <input type="hidden" name="id"value="<?php echo $data['id_album'] ?>">
					    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?php echo $data['nama_album'] ?>">
					  </div>
					  <div class="form-group">
					  	<img src="../assets/galery/<?php echo $data['cover'] ?>" class="img-thumbnail" width="80"> <br>
					    <label for="exampleInputFile">Cover Album</label>
					    <input type="file" name="cover" id="exampleInputFile">
					    <p class="help-block">File Maksimal 2 MB</p>
					  </div>
					  <input type="submit" name="edit-Album" class="btn btn-primary" value="Simpan Perubahan">
					</form>
					<?php 
					if (isset($_POST['edit-Album'])) {
						$id = $_POST['id'];
						$nama = $_POST['nama'];

							$gambar = @$_FILES['cover']['name'];
							if (!empty($gambar)) {
							move_uploaded_file($_FILES['cover']['tmp_name'],"../assets/galery/$gambar");
							$ganti = mysqli_query($con,"UPDATE tb_album SET cover='$gambar' WHERE id_album='$id' ");
							}

							mysqli_query($con,"UPDATE tb_album set nama_album='$nama' WHERE id_album='$id' ");
								echo "<script>
								alert('Data Berhasil Diubah !!');
								window.location='?page=galery';
								</script>";
					
					}

					 ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>








							<a href="?page=d-album&id=<?php echo $data['id_album'] ?> " class="btn btn-danger btn-xs"><span class="la la-trash"></span> Del</a>
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
	<div class="modal fade" id="album" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h6 class="modal-title"><i class="la la-photo"></i> Tambah ALbum Galery</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<form method="post" action="" enctype="multipart/form-data">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama ALbum</label>
					    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" required>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputFile">Cover Album</label>
					    <input type="file" name="cover" id="exampleInputFile">
					    <p class="help-block">File Maksimal 2 MB</p>
					  </div>
					  <input type="submit" name="simpan-Album" class="btn btn-info" value="Simpan Album">
					</form>
					<?php 
					if (isset($_POST['simpan-Album'])) {
						$nama = $_POST['nama'];

						$sumber = @$_FILES['cover']['tmp_name'];
						$target = '../assets/galery/';
						$nama_gambar = @$_FILES['cover']['name'];

						$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
						if ($pindah) {

							mysqli_query($con,"INSERT INTO tb_album (id_album,nama_album,cover) VALUES (NULL,'$nama','$nama_gambar') ");
								echo "<script>
								alert('Data Berhasil Ditambahkan !!');
								window.location='?page=galery';
								</script>";
						}else{
							echo "Gagal Upload Gambar !!";
						}
					}

					 ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>