<?php 
$id = $_GET['id'];


$berita = "SELECT * FROM tb_berita 
	INNER JOIN user ON tb_berita.id_user=user.id_user WHERE tb_berita.id_berita ='$id' ";
	$sql = mysqli_query($con,$berita) or die(mysqli_error($con)) ;

$data = mysqli_fetch_array($sql);
?>

<ul class="breadcrumb">
<li><a href="?page=">Home</a></li>
<li class="active"> Berita</li>
<li class="active"> <?php echo $data['judul'] ?></li>
</ul>


<h2><a href="javascript:;"><?php echo $data['judul'] ?></a></h2>
<!-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui sint blanditiis prae sentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing condimentum eleifend enim a feugiat.</p> -->
<blockquote>

  <img class="img-responsive" alt="" src="assets/gambar-berita/<?php echo $data['foto']; ?>" width="200">
</blockquote>                
<p><?php echo $data['isi'] ?></p>
<ul class="blog-info">
<li><i class="fa fa-user"></i> By <?php echo $data['nama_lengkap'] ?></li>
<li><i class="fa fa-calendar"></i> <?php echo $data['tgl_post'] ?></li>
<!-- <li><i class="fa fa-comments"></i> 17</li>
<li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li> -->
</ul>