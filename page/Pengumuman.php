<ul class="breadcrumb">
<li><a href="?page=">Home</a></li>
<li class="active"> Informasi</li>
<li class="active"> Pengumuman </li>
</ul>
<?php 
$no=1;
$result = mysqli_query($con,"SELECT * FROM tb_pengumuman INNER JOIN user ON tb_pengumuman.id_user=user.id_user ORDER BY tb_pengumuman.id_peng DESC");
while ($data3= mysqli_fetch_array($result)) { ?>

                  <h2><a href="javascript:;"><?php echo $data3['judul_peng']; ?></a></h2>
                  
                  <blockquote>
                   <p><?php echo $data3['isi_peng']; ?> </p>
                    <small>Diposting Pada :<cite title="Source Title"><b><?php echo $data3['tgl_post']; ?></b></cite></small>
                  </blockquote>
                  <ul class="blog-info">
                    <li><i class="fa fa-user"></i> By <?php echo $data3['nama_lengkap']; ?></li>
                    <li><i class="fa fa-calendar"></i><?php echo $data3['tgl_post']; ?></li>
                  
                  </ul>




<!-- 
<a href="?page=pengumuman&id=<?php echo $data3['id_peng']; ?> "><?php echo $no++; ?> .</a> 
<a href="" title=""><h4><span class="label label-info"><?php echo $data3['judul_peng']; ?> </span></h4></a>
<p><?php echo $data3['isi_peng']; ?> <br>
Tanggal Posting : <b><?php echo $data3['tgl_post']; ?></b> <br>
Oleh : [ <?php echo $data3['nama_lengkap']; ?> ]</p>
................. -->

<?php } ?>

<!-- <?php 
$berita = "SELECT * FROM tb_pengumuman";
	$sql = mysqli_query($con,$berita) or die(mysqli_error($con)) ;

while ($data = mysqli_fetch_array($sql) ) { 
	?>

<?php echo $data['judul_peng'] ?> <br>
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

<?php } ?> -->