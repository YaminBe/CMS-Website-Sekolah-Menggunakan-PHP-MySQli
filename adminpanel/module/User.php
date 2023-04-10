<h4 class="page-title">Tambah Agenda</h4>
<?php
if (@$_SESSION['login']) {
$sesi = @$_SESSION['id'];
}

$sql = mysqli_query($con,"select * from user where id_user = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?> 
<div class="row">
	<div class="col-lg-6 col-md-6 col-xs-12">	
			<div class="card">
				<div class="card-header">
					<div class="card-title">My Acount</div>
				</div>
				<div class="card-body">
				<center><img src="assets/img/<?php echo $data['foto']; ?>" width="90" height="90"class="img-thumbnail"></center>
				</div>
					<div class="table-responsive">
					<table class="table">
							<tr>
								<th>Nama Lengkap</th>
								<th>:</th>
								<th><?php echo $data['nama_lengkap']; ?></th>
							</tr>
							<tr>
								<th>Username</th>
								<th>:</th>
								<th><?php echo $data['username']; ?></th>
							</tr>
							<tr>
								<th>Password</th>
								<th>:</th>
								<th><?php echo $data['password']; ?></th>
							</tr>
							<tr>
								<th>Email</th>
								<th>:</th>
								<th><?php echo $data['email']; ?></th>
							</tr>
							<tr>
								<th>Level</th>
								<th>:</th>
								<th><?php echo $data['level']; ?></th>
							</tr>
							<tr>
								<th>Status</th>
								<th>:</th>
								<th><?php echo $data['aktif']; ?></th>
							</tr>
					</table>				
						
					</div>
				
				
            </div>
    </div>

    	<div class="col-lg-6 col-md-6 col-xs-12">	
			<div class="card">
				<div class="card-header">
					<div class="card-title">Form Ubah</div>
				</div>
				<div class="card-body">
					<form action="" method="post">				
						<div class="form-group">
							<label for="squareInput">Username</label>
							<input type="text" name="user" value="<?php echo $data['username'] ?> "class="form-control input-squar">
							<input type="hidden" name="id" class="form-control input-square" id="squareInput" value="<?php echo $data['id_user'] ?>">
						</div>
						<div class="form-group">
							<label for="Tanggal">Password Baru</label>
							<input type="password" name="pass" class="form-control input-squar" id="Tanggal" placeholder="********">
					    </div>										
						<div class="form-group">
							<button type="submit" name="update-user" class="btn btn-info">Simpan Perubahan</button>						
						</div>	
					</form>		
					<?php 
					if (isset($_POST['update-user'])) {
						$id = $_POST['id'];
						$username= $_POST['user'];
						$password = md5($_POST['pass']);
						mysqli_query($con,"UPDATE user SET username='$username',password='$password' WHERE id_user='$id' ");
						echo "<script>
	alert('Sukses !');
	window.location='index.php'
</script>";
					}

					 ?>				
				</div>
            </div>
    </div>










</div>




