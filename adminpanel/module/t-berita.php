<h4 class="page-title">Tambah Berita</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

<div class="card">
	<div class="card-header">
		<div class="card-title">Form Tambah Berita</div>
	</div>
	<div class="card-body">
		<form action="?page=proses" method="post" enctype="multipart/form-data">
			   <div class="form-group">
					<label for="squareInput"> Kategori Berita</label>
					<select name="kategori" class="form-control">
					<option value="" selected>- Pilih Kategori -</option>
					<?php
					$sqlKelas=mysqli_query($con, "SELECT * FROM tb_kat_berita ORDER BY kategori ASC");
					while($k=mysqli_fetch_array($sqlKelas)){
					echo "<option value='$k[id_kategori]'>$k[kategori]</option>";
					}
					?>
					</select>
				</div>
				
				<div class="form-group">
					<label for="squareInput">Judul Berita</label>
					<input type="hidden" name="id_user" name="id_user" value="<?php echo $data['id_user'] ?> ">
					<input type="text" name="judul" class="form-control input-square" id="squareInput" placeholder="Judul Berita">
				</div>
				<div class="form-group">
					<label for="squareInput">Isi Berita</label>
					<textarea id="ckedtor1" name="isi"></textarea>
				</div>	
					<div class="form-group">
					<label for="Tanggal">Cover Berita</label>
					<input type="file" name="foto" class="form-control input-squar" id="Tanggal">
				</div>										
				</div>
				<div class="card-action">
					<button type="submit" name="simpan-Berita" class="btn btn-success">Simpan</button>
					
				</div>
				</div>
									
		</form>						
	</div>
</div>