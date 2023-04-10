<?php 
$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM tb_album WHERE id_album='$id' ");
$data = mysqli_fetch_array($result);
?>

    <h3> <span class="fa fa-photo"></span> List Foto Pada Album <b><?php echo $data['nama_album'] ?></b></h3>
    <hr>


<div class="row mix-grid thumbnails">
<?php 
$sql = mysqli_query($con,"SELECT * FROM tb_galery WHERE id_album='$data[id_album]' ");
while ($data1= mysqli_fetch_array($sql)) { ?>
	<div class="col-md-3 col-sm-4 mix category_1 mix_all" style="display: block; opacity: 1; ">
		<div class="mix-inner">
		<img alt="" src="assets/galery/<?php echo $data1['foto'] ?>" class="img-responsive">
			<div class="mix-details">
			<h4><?php echo $data1['deskripsi'] ?></h4>
			<a class="mix-link"><i class="fa fa-link"></i></a>
			<a data-rel="fancybox-button" title="<?php echo $data1['deskripsi'] ?>" href="assets/galery/<?php echo $data1['foto'] ?>" class="mix-preview fancybox-button"><i class="fa fa-search"></i></a>
			</div>           
		</div>                       
	</div>  
                       
<?php } ?>

</div>