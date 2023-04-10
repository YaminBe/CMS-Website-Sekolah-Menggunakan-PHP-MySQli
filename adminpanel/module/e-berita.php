<h4 class="page-title">Tambah Berita</h4>
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12">

<div class="card">
	<div class="card-header">
		<div class="card-title">Form Tambah Berita</div>
	</div>
	<div class="card-body">
				<?php 
		$id = $_GET['id'];
		$result = mysqli_query($con,"SELECT * FROM tb_berita WHERE id_berita='$id' ");
		$data = mysqli_fetch_array($result);
		?>
		<form action="?page=proses" method="post" enctype="multipart/form-data">
			   <div class="form-group">
					<label for="squareInput"> Kategori Berita</label>
					<select name="kategori" class="form-control">
					<!-- <option value="" selected>- Pilih Kategori -</option> -->
					<?php
					$sqlKelas=mysqli_query($con, "SELECT * FROM tb_kat_berita ORDER BY kategori ASC");
					while($k=mysqli_fetch_array($sqlKelas)){
							if($k['id_kategori'] == $k['id_kategori']){
							$selected = "selected";
							}else{
							$selected = "";
							}
							echo "<option value='$k[id_kategori]'>$k[kategori]</option>";
							}

						
					?>
					</select>
				</div>
				
				<div class="form-group">
					<label for="squareInput">Judul Berita</label>
					<input type="hidden" name="id" name="id_user" value="<?php echo $data['id_berita'] ?> ">
					<input type="hidden" name="id_user" name="id_user" value="<?php echo $data['id_user'] ?> ">
					<input type="text" name="judul" class="form-control input-square" id="squareInput" value="<?php echo $data['judul'] ?> ">
				</div>
				<div class="form-group">
					<label for="squareInput">Isi Berita</label>
					<textarea id="ckedtor1" name="isi"><?php echo $data['isi'] ?></textarea>
				</div>	
					<div class="form-group">
						<img src="../assets/gambar-berita/<?php echo $data['foto'] ?>" class="img-thumbnail" width="100">
					<label for="Tanggal">Cover Berita</label>
					<input type="file" name="foto" id="Tanggal" value="<?php echo $data['foto'] ?>">
				</div>										
				</div>
				<div class="card-action">
					<button type="submit" name="edit-Berita" class="btn btn-success">Simpan Perubahan</button>
					
				</div>
				</div>
									
		</form>						
	</div>
</div>