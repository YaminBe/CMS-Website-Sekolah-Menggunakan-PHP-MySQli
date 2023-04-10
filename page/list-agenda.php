<ul class="breadcrumb">
<li><a href="?page=">Home</a></li>
<li class="active"> Daftar Agenda</li>
</ul>

<div class="panel panel-default">
  <div class="panel-body">

<?php 
$berita = "SELECT * FROM tb_agenda";
	$sql = mysqli_query($con,$berita) or die(mysqli_error($con)) ;

while ($data = mysqli_fetch_array($sql) ) { 
	?>


<a href="?page=agenda&id=<?php echo $data['id_agenda'] ?>">
	<div class="col-md-6">
  <div class="service-box-v1">
    <div><i class="fa fa-calendar color-grey" style="color:#18ffff;"></i></div>
    <h2><?php echo $data['judul'] ?></h2>
    <p><?php echo $data['tempat'] ?></p>
    <p>Waktu Pelaksanaan <b><?php echo $data['tgl_agenda'] ?></b></p>
  </div>
</div>
</a>

<?php } ?>



  </div>
</div>