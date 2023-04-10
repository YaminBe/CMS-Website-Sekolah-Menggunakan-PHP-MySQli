<h4 class="page-title">Buku Tamu</h4>
<div class="row">
	<div class="col-lg-6 col-md-6 col-xs-12">

<div class="card">
	<div class="card-header">
		<div class="card-title">Form Edit Agenda</div>
	</div>
	<div class="card-body">
		<?php 
		$id = $_GET['id'];
		$result = mysqli_query($con,"SELECT * FROM buku_tamu WHERE id_tamu='$id' ");
		$data = mysqli_fetch_array($result);
		?>
			<form action="" method="post" accept-charset="utf-8">
				<input type="hidden" name="id" value="<?php echo $data['id_tamu'] ?>">
				<table class="table table-striped">
					<tr>
						<td>Tanggal Post</td>
						<td>:</td>
						<td><?php echo $data['tgl_post'] ?></td>
					</tr>
					<tr>
						<td>Nama User</td>
						<td>:</td>
						<td><?php echo $data['nama'] ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><?php echo $data['email'] ?></td>
					</tr>
					<tr>
						<td>Subjek</td>
						<td>:</td>
						<td><?php echo $data['subjek'] ?></td>
					</tr>
					<tr>
						<td>Pesan</td>
						<td>:</td>
						<td><?php echo $data['pesan'] ?></td>
					</tr>
					<tr>
						<td>Status Pesan</td>
						<td>:</td>
						<td>
								<?php if ($data['status']=='terima') {
										echo'<span class="badge badge-success"><b>Terima</b></span>';
									} else{
										echo'<span class="badge badge-danger"><b>Tolak</b></span>';
									}
									?>
						</td>
					</tr>
						<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="tolak" class="btn btn-danger" value="Tolak">
						</td>
					</tr>
			</table>
			</form>
			<?php 
			if (isset($_POST['tolak'])) {
				$id =$_POST['id'];
				// $status =$_POST['status'];
				mysqli_query($con,"UPDATE buku_tamu SET status='Tolak' WHERE id_tamu='$id' ");
				echo "<script>
				window.location='?page=buku';
				</script>";
				# code...
			}

			 ?>

	</div>
</div>
</div>
</div>
