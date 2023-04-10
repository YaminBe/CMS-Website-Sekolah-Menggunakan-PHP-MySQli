<h4 class="page-title">Tambah Profil</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

<div class="card">
	<div class="card-header">
		<div class="card-title">Form Tambah Profil</div>
	</div>
	<div class="card-body">
		<form action="?page=proses" method="post" accept-charset="utf-8">

				<div class="form-group">
					<label for="solidInput">Tanggal Input</label>
					<input type="text" class="form-control input-solid" id="solidInput" placeholder="<?php echo date('d F Y') ?>">
				</div>
				<div class="form-group">
					<label for="squareInput">Judul Profil</label>
					<input type="text" name="judul" class="form-control input-square" id="squareInput" placeholder="Judul Profil">
				</div>
				<div class="form-group">
					<label for="squareInput">Isi Profil</label>
					<textarea id="ckedtor1" name="isi_profil"></textarea>
				</div>										
				</div>
				<div class="form-group">
					<label>Posisi Menu</label>
						<select name="posisi" class="form-control">
						<option value="">--Pilih Posisi--</option>
						<option value="1"> Profil Sekolah</option>
						<option value="2"> Warga Sekolah</option>
						</select>					
				</div>
				<div class="card-action">
					<button type="submit" name="simpan-profil" class="btn btn-success">Simpan</button>
					<button class="btn btn-danger">Cancel</button>
				</div>
				</div>
									
		</form>						
	</div>
</div>