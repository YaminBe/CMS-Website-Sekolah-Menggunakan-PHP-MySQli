<h4 class="page-title">Pengaturan Profil</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

		<!-- Tampil data -->
		<div class="card">
									<div class="card-header">
										<div class="card-title">Data Halaman Profil
											<a href="?page=t-profil" class="btn btn-success btn-xs pull-right"> <span class="la la-plus"></span>Add New Profil</a>

										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-striped table-hover">
												<thead>
													<tr>
														<th>No.</th>
														<th>Judul Informasi Profil</th>
														<th>Posisi Menu</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													$no=1;
													$sql = mysqli_query($con,"SELECT * FROM tb_profil");
													while ($d = mysqli_fetch_array($sql)) { ?>
													<tr>
														<th scope="row"><?php echo $no++ ?>.</th>
														<td> <a href="?page=e-profil&id=<?php echo $d['id_profil'] ?> "><?php echo $d['judul_profil'] ?></a></td>
														<td>
															<?php if ($d['posisi']=='1') {
																echo "Profil Sekolah";
															}else{
																echo "Warga Sekolah";
															}
																 ?>
														</td>
														<td>
															<a href="?page=e-profil&id=<?php echo $d['id_profil'] ?> " class="btn btn-info btn-xs"> <span class="la la-edit"></span> Edit</a>
															<a href="?page=d-profil&id=<?php echo $d['id_profil'] ?> " class="btn btn-danger btn-xs"><span class="la la-trash"></span> Del</a>
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
