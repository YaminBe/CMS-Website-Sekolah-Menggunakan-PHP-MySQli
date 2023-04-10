<?php 
$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM tb_agenda WHERE id_agenda='$id' ");
$data = mysqli_fetch_array($result);
?>

<ul class="breadcrumb">
<li><a href="?page=">Home</a></li>
<li class="active"> Agenda Sekolah</li>
<li class="active"> <?php echo $data['judul'] ?></li>
</ul>

   <?php 
$berita = "SELECT * FROM tb_agenda
	INNER JOIN user ON tb_agenda.id_user=user.id_user WHERE tb_agenda.id_agenda ='$data[id_agenda]' ";
	$sql = mysqli_query($con,$berita) or die(mysqli_error($con)) ;

while ($data = mysqli_fetch_array($sql) ) { 
	?>
      <h2><a href="javascript:;"><?php echo $data['judul'] ?></a></h2>
                  <p><?php echo $data['isi_agenda'] ?></p>
                  <blockquote>
                    <p>Tempat : <?php echo $data['tempat'] ?> <br>
                    Waktu Pelaksanaan : <?php echo $data['tgl_agenda'] ?> </p>
                  </blockquote> 
                  <ul class="blog-info">
                    <li><i class="fa fa-user"></i> By <?php echo $data['nama_lengkap'] ?></li>
                    <li><i class="fa fa-calendar"></i> Date : <?php echo date('d F Y')?></li>
                   <!--  <li><i class="fa fa-comments"></i> 17</li> -->
                    <li><i class="fa fa-home"></i> SMAN 1 X KOTO</li>
                  </ul>
                  <?php } ?>