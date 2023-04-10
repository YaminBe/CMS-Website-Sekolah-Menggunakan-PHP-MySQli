<?php 
include '../inc/koneksi.php';
$id= $_GET['id'];
	mysqli_query($con,"DELETE FROM tb_berita WHERE id_berita='$id' ");
		echo "<script>
 	alert('Data Telah Dihapus  !!');
 	window.location='?page=berita';
 </script>";
 ?>