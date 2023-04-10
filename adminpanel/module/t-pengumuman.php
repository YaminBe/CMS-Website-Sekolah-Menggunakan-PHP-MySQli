<h4 class="page-title">Tambah Pengumuman</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

<div class="card">
	<div class="card-header">
		<div class="card-title">Form Tambah Pengumuman</div>
	</div>
	<div class="card-body">
		<form action="?page=proses" method="post" accept-charset="utf-8">

				
				<div class="form-group">
					<label for="squareInput">Judul Pengumuman</label>
					<input type="hidden" name="id_user" name="id_user" value="<?php echo $data['id_user'] ?> ">
					<input type="text" name="judul" class="form-control input-square" id="squareInput" placeholder="Judul Pengumuman">
				</div>
				<div class="form-group">
					<label for="squareInput">Isi Pengumuman</label>
					<textarea id="ckedtor1" name="isi"></textarea>
				</div>										
				</div>
				<div class="card-action">
					<button type="submit" name="simpan-Pengumuman" class="btn btn-success">Simpan</button>
					
				</div>
				</div>
									
		</form>						
	</div>
</div>