<?php 
$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM tb_profil WHERE id_profil='$id' ");
$data = mysqli_fetch_array($result);
?>

<ul class="breadcrumb">
<li><a href="?page=">Home</a></li>
<li class="active">Profil Sekolah</li>
<li class="active"> <?php echo $data['judul_profil'] ?></li>
</ul>
<div class="panel panel-default">
  <div class="panel-heading" style="background-color:#18ffff;"> <h5><b><span class="fa fa-angle-double-right"></span> <?php echo $data['judul_profil'] ?></b></h5> </div>
  <div class="panel-body">
     <?php echo $data['isi_profil'] ?>
  </div>
</div>