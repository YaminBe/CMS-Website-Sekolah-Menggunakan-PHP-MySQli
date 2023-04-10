<h4 class="page-title">Edit Agenda</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

<div class="card">
	<div class="card-header">
		<div class="card-title">Form Edit Agenda</div>
	</div>
	<div class="card-body">
			<?php 
		$id = $_GET['id'];
		$result = mysqli_query($con,"SELECT * FROM tb_agenda WHERE id_agenda='$id' ");
		$data = mysqli_fetch_array($result);
		?>
		<form action="?page=proses" method="post" accept-charset="utf-8">
				<div class="form-group">
					<label for="squareInput">Judul Agenda</label>
					<!-- <input type="hidden" name="id_user" name="id_user" value="<?php echo $data['id_user'] ?> "> -->
					<input type="hidden" name="id" value="<?php echo $data['id_agenda'] ?>">
					<input type="text" name="judul" class="form-control input-square" id="squareInput"value="<?php echo $data['judul'] ?>">
				</div>
				<div class="form-group">
					<label for="squareInput">Isi Agenda</label>
					<textarea id="ckedtor1" name="isi_agenda"><?php echo $data['isi_agenda'] ?></textarea>
				</div>	
				<div class="form-group">
					<label for="Tanggal">Tanggal Agenda</label>
					<input type="date" name="tgl" class="form-control input-squar" id="Tanggal" value="<?php echo $data['tgl_agenda'] ?>">
				</div>
					<div class="form-group">
					<label for="Tempat">Tempat Agenda</label>
					<input type="text" name="tempat" class="form-control input-squar" id="Tempat" value="<?php echo $data['tempat'] ?>">
				</div>										
				</div>
				<div class="card-action">
					<button type="submit" name="edit-Agenda" class="btn btn-success">Simpan Perubahan</button>
					
				</div>
				</div>
									
		</form>						
	</div>
</div>