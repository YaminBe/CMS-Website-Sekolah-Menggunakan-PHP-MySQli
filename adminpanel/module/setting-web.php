<h4 class="page-title">Pengaturan Website</h4>
<?php 
if (isset($_POST['update'])) {
$id = $_POST['id'];
$nm_sekolah = $_POST['nm_sekolah'];
$tagline = $_POST['tagline'];
$status = $_POST['status'];
$footer = $_POST['footer'];

$gambar = @$_FILES['logo']['name'];
if (!empty($gambar)) {
move_uploaded_file($_FILES['logo']['tmp_name'],"../assets/img/$gambar");
$ganti = mysqli_query($con,"UPDATE tb_setting SET logo='$gambar' WHERE id_set='$id' ");
}


mysqli_query($con,"UPDATE tb_setting SET nm_sekolah='$nm_sekolah',tagline='$tagline',footer='$footer',status='$status' WHERE id_set='$id'  ");

echo '
<div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Sukses!</strong> Data berhasil DiUbah !!
</div>';
# code...
}


?>	
						<div class="row">

							<div class="col-lg-8 col-md-8 col-xs-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Form Setting Website</div>
									</div>

									<div class="card-body">
										<?php 
										$id = $_GET['id'];
										$sql = mysqli_query($con,"SELECT * FROM tb_setting WHERE id_set='$id' ");
										$data = mysqli_fetch_array($sql);
										 ?>
										<form action="" method="POST" enctype="multipart/form-data">
													<div class="form-group">
											<label for="email">Nama Sekolah *</label>
												<input type="hidden" name="id" class="form-control" id="email" value="<?php echo $data['id_set'] ?>">

											<input type="text" name="nm_sekolah" class="form-control" id="email" value="<?php echo $data['nm_sekolah'] ?>">
											<small id="emailHelp" class="form-text text-muted">Maksimal Karakter 20</small>
										</div>
										<div class="form-group">
											<label for="password">Judul Website</label>
											<input name="tagline" type="text" class="form-control" id="password" value="<?php echo $data['tagline'] ?>">
											<small id="emailHelp" class="form-text text-muted">Maksimal Karakter 30</small>
										</div>
										<div class="form-group">
												<label for="exampleFormControlFile1"><img src="../assets/img/<?php echo $data['logo'] ?>" class="img-thumbnail" width="100" height="100"> Logo Sekolah</label>
												<br>
												<br>
												<input type="file" class="form-control-file" id="exampleFormControlFile1" name="logo">
										</div>
										<div class="form-group">
											<label for="password">Footer</label>
											<input name="footer" type="text" class="form-control" id="password" value="<?php echo $data['footer'] ?>">
											<small id="emailHelp" class="form-text text-muted">Maksimal Karakter 30</small>
										</div>
										
										<div class="form-check">
											<label>Status</label><br/>
											<label class="form-radio-label">
												<input name="status" class="form-radio-input" type="radio" name="optionsRadios" value="Aktif" <?php if ($data['status']=='Aktif'){ echo "checked";} ?>>
												<span class="form-radio-sign">Aktif</span>
											</label>
											<label class="form-radio-label ml-3">
												<input name="status" class="form-radio-input" type="radio" name="optionsRadios" value="Non-Aktif" <?php if ($data['status']=='Non-Aktif'){ echo "checked";} ?>>
												<span class="form-radio-sign">Non-Aktif</span>
											</label>
										</div>
											
										</div>
										<div class="card-action">
											<input type="submit" name="update" value="Update Website" class="btn btn-success">
										</div>
										</form>
							
									</div>
								</div>
</div>

				