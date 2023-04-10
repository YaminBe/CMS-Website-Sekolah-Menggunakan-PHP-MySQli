<?php 
$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM tb_kat_berita WHERE id_kategori='$id' ");
$data = mysqli_fetch_array($result);
?>

<ul class="breadcrumb">
<li><a href="?page=">Home</a></li>
<li class="active"> Berita</li>
<li class="active"> <?php echo $data['kategori'] ?></li>
</ul>
<!-- $query ="SELECT * FROM tb_berita";
						 $sql_ds = mysqli_query($con,$query) or die(mysqli_error($con)) ;
                        while ( $data= mysqli_fetch_array($sql_ds) ) { ?> -->
<?php 
$berita = "SELECT * FROM tb_berita 
	INNER JOIN user ON tb_berita.id_user=user.id_user WHERE tb_berita.id_kategori ='$data[id_kategori]' ";
	$sql = mysqli_query($con,$berita) or die(mysqli_error($con)) ;

while ($data = mysqli_fetch_array($sql) ) { 
	?>

<div class="row">
<div class="col-md- col-sm-4">
  <img class="img-responsive" alt="" src="assets/gambar-berita/<?php echo $data['foto']; ?>" width="200">
</div>
<div class="col-md-8 col-sm-8">
  <h2><a href="?page=detail-berita&id= <?php echo $data['id_berita']; ?>"><?php echo $data['judul']; ?></a></h2>
  <ul class="blog-info">
    <li><i class="fa fa-calendar"></i> <?php echo $data['tgl_post']; ?></li>
<!--     <li><i class="fa fa-comments"></i> 17</li> -->
    <li><i class="fa fa-user"></i> Diposting Oleh : <?php echo $data['nama_lengkap'] ?></li>
  </ul>
  <p><?php echo $data['isi']; ?></p>
  <a href="?page=detail-berita&id= <?php echo $data['id_berita']; ?>" class="more">Read more <i class="icon-angle-right"></i></a>
</div>
</div>

<?php } ?>


