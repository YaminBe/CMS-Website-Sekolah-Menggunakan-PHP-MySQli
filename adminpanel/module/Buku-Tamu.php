<h4 class="page-title">Buku Tamu</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

		<!-- Tampil data -->
<div class="card">
	<div class="card-header">
		<div class="card-title">Data Buku Tamu
			<!-- <a href="?page=t-berita" class="btn btn-primary btn-xs pull-right"> <span class="la la-plus"></span>Add New Berita</a> -->

		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
					<table class="table table-condensed">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Tanggal</th>
								<th>Subjek</th>
								<th>Status</th>
								<th>Act</th>
							</tr>
						</thead>
						<tbody>
							<?php 
					$no=1;
					$query ="SELECT * FROM buku_tamu";
						 $sql_ds = mysqli_query($con,$query) or die(mysqli_error($con)) ;
                        while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $data['nama'] ?></td>
						       <td><?php echo $data['tgl_post'] ?></td>
								<td><?php echo $data['subjek'] ?></td>
								<td>
									<?php if ($data['status']=='terima') {
										echo'<span class="badge badge-success"><b>Terima</b></span>';
									} else{
										echo'<span class="badge badge-danger"><b>Tolak</b></span>';
									}
									?>
									
								</td>

								<td>
									 <a href="?page=pesan&id=<?php echo $data['id_tamu'] ?>" class="btn btn-default btn-xs"> <span class="la la-comments-o"></span> Lihat Pesan</a>
									 <a href="?page=d-pesan&id=<?php echo $data['id_tamu'] ?>" class="btn btn-danger btn-xs"> <span class="la la-trash"></a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
		</div>
	</div>
</div>
		</div>
		</div>
