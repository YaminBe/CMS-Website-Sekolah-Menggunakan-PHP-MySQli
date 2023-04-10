<h4 class="page-title">Edit Foto</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

<div class="card">
	<div class="card-header">
		<div class="card-title">Form Edit Foto</div>
	</div>
	<div class="card-body">
			<?php 
			$id = $_GET['id'];
			$result = mysqli_query($con,"SELECT * FROM tb_galery WHERE id_galery='$id' ");
			$data = mysqli_fetch_array($result);
			?>
		<form action="?page=proses" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="hidden" name="id" value="<?php echo $data['id_galery'] ?>">
					<label for="squareInput">Album Foto</label>
					<select name="album" class="form-control">
					<?php
					$sqlKelas=mysqli_query($con, "SELECT * FROM tb_album ORDER BY nama_album ASC");
					while($k=mysqli_fetch_array($sqlKelas)){
						if($k['id_album'] == $k['id_album']){
							$selected = "selected";
							}else{
							$selected = "";
						}

					echo "<option value='$k[id_album]'>$k[nama_album]</option>";
					}
					?>
					</select>
				</div>
				<div class="form-group">
					
					<label for="Tanggal"> File Foto</label>
					<img for="Tanggal" src="../assets/galery/<?php echo $data['foto'] ?>" class="img-thumbnail" width="100"> 
					<input type="file" name="foto" id="Tanggal" class="btn btn-info btn-xs">
				</div>
					<div class="form-group">
					<label for="Deskripsi"> Deskripsi</label>
					<input type="text" name="deskripsi" class="form-control input-squar" id="Deskripsi" value="<?php echo $data['deskripsi'] ?>">
				</div>										
				</div>
				<div class="card-action">
					<button type="submit" name="edit-Foto" class="btn btn-primary">Simpan Perubahan</button>
		
				</div>
	
				</div>

									
		</form>		



	</div>
</div>
</div>
</div>
