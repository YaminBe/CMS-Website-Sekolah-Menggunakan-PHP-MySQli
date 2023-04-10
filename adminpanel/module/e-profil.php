<h4 class="page-title">Edit Profil</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

<div class="card">
	<div class="card-header">
		<div class="card-title">Form Edit Profil</div>
	</div>
	<div class="card-body">
		<?php 
		$id = $_GET['id'];
		$result = mysqli_query($con,"SELECT * FROM tb_profil WHERE id_profil='$id' ");
		$data = mysqli_fetch_array($result);
		?>
		<form action="?page=proses" method="post" accept-charset="utf-8">
				<div class="form-group">
					<label for="solidInput">ID Profil</label>
					<input type="text" class="form-control input-solid" id="solidInput" name="id" value="<?php echo $data['id_profil'] ?>">
				</div>
				<div class="form-group">
					<label for="squareInput">Judul Profil</label>
					<input type="text" name="judul" class="form-control input-square" id="squareInput" value="<?php echo $data['judul_profil'] ?>">
				</div>
				<div class="form-group">
					<label for="squareInput">Isi Profil</label>
					<textarea id="ckedtor1" name="isi_profil"><?php echo $data['isi_profil'] ?></textarea>
				</div>	
				<div class="form-group">
					<label>Posisi Menu</label>
						<select name="posisi" class="form-control">
						<option value="">--Pilih Posisi--</option>
						<option value="1"> Profil Sekolah</option>
						<option value="2"> Warga Sekolah</option>
						</select>					
				</div>									
				</div>
				<div class="card-action">
					<button type="submit" name="edit-profil" class="btn btn-success">Simpan Perubahan</button>
				
				</div>
				</div>
									
		</form>						
	</div>
</div>