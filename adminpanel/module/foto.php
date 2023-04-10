<h4 class="page-title">Tambah Foto</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

<div class="card">
	<div class="card-header">
		<div class="card-title">Form Tambah Foto</div>
	</div>
	<div class="card-body">
		<form action="?page=proses" method="post" enctype="multipart/form-data">

				
				<div class="form-group">
					<label for="squareInput">Album Foto</label>
					<select name="album" class="form-control">
					<option value="" selected>- Pilih Album -</option>
					<?php
					$sqlKelas=mysqli_query($con, "SELECT * FROM tb_album ORDER BY nama_album ASC");
					while($k=mysqli_fetch_array($sqlKelas)){
					echo "<option value='$k[id_album]'>$k[nama_album]</option>";
					}
					?>
					</select>
				</div>
				<div class="form-group">
					
					<label for="Tanggal"> File Foto</label>
					<img for="Tanggal" src="../assets/gambar-berita/userk.png" class="img-thumbnail" width="100"> 
					<input type="file" name="foto" id="Tanggal" class="btn btn-info btn-xs">
				</div>
					<div class="form-group">
					<label for="Deskripsi"> Deskripsi</label>
					<input type="text" name="deskripsi" class="form-control input-squar" id="Deskripsi">
				</div>										
				</div>
				<div class="card-action">
					<button type="submit" name="simpan-Foto" class="btn btn-primary">Simpan</button>
					<hr>
							<b>Daftar Foto</b>
							<table class="table table-striped table-bordered table-condensed">
								<thead>
								<tr>
									<th>No.</th>
									<th>Foto</th>
									<th>Act</th>
								</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									$result = "SELECT * FROM tb_galery";
									$query = mysqli_query($con,$result);
									while ($data= mysqli_fetch_array($query)) { ?>
								<tr>
									<td><?php echo $no++ ?>.</td>
									<td><img src="../assets/galery/<?php echo $data['foto'] ?>" class="img-thumbnail" width="80"></td>
									<td>
										<a href="?page=e-foto&id= <?php echo $data['id_galery'] ?>" style="font-size: 30px;"> <span class="la la-edit"></span> </a>
										<a href="?page=d-foto&id= <?php echo $data['id_galery'] ?>" style="font-size: 30px;color: red;"> <span class="la la-trash"></span> </a>
									</td>
								</tr>
								<?php  } ?>

								</tbody>
							</table>
		
				</div>
	
				</div>

									
		</form>		



	</div>
</div>
</div>
</div>
