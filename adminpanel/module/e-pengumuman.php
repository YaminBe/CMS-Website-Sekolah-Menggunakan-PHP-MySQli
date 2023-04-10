<h4 class="page-title">Edit Pengumuman</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

<div class="card">
	<div class="card-header">
		<div class="card-title">Form Edit Pengumuman</div>
	</div>
	<div class="card-body">
			<?php 
		$id = $_GET['id'];
		$result = mysqli_query($con,"SELECT * FROM tb_pengumuman WHERE id_peng='$id' ");
		$data = mysqli_fetch_array($result);
		?>
		<form action="?page=proses" method="post" accept-charset="utf-8">
				<div class="form-group">
					<label for="squareInput">Judul Pengumuman</label>
					<input type="hidden" name="id_user" name="id_user" value="<?php echo $data['id_user'] ?> ">
					<input type="hidden" name="id" name="id_user" value="<?php echo $data['id_peng'] ?> ">
					<input type="text" name="judul" class="form-control input-square" id="squareInput"value="<?php echo $data['judul_peng'] ?> ">
				</div>
				<div class="form-group">
					<label for="squareInput">Isi Pengumuman</label>
					<textarea id="ckedtor1" name="isi"><?php echo $data['isi_peng'] ?></textarea>
				</div>										
				</div>
				<div class="card-action">
					<button type="submit" name="edit-Pengumuman" class="btn btn-success">Simpan Perubahan</button>
					
				</div>
				</div>
									
		</form>						
	</div>
</div>