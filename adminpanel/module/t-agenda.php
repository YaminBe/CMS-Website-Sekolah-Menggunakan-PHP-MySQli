<h4 class="page-title">Tambah Agenda</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

<div class="card">
	<div class="card-header">
		<div class="card-title">Form Tambah Agenda</div>
	</div>
	<div class="card-body">
		<form action="?page=proses" method="post" accept-charset="utf-8">

				
				<div class="form-group">
					<label for="squareInput">Judul Agenda</label>
					<input type="hidden" name="id_user" name="id_user" value="<?php echo $data['id_user'] ?> ">
					<input type="text" name="judul" class="form-control input-square" id="squareInput" placeholder="Judul Agenda">
				</div>
				<div class="form-group">
					<label for="squareInput">Isi Agenda</label>
					<textarea id="ckedtor1" name="isi_agenda"></textarea>
				</div>	
				<div class="form-group">
					<label for="Tanggal">Tanggal Agenda</label>
					<input type="date" name="tgl" class="form-control input-squar" id="Tanggal">
				</div>
					<div class="form-group">
					<label for="Tanggal">Tempat Agenda</label>
					<input type="text" name="tempat" class="form-control input-squar" id="Tanggal">
				</div>										
				</div>
				<div class="card-action">
					<button type="submit" name="simpan-Agenda" class="btn btn-success">Simpan</button>
					
				</div>
				</div>
									
		</form>						
	</div>
</div>