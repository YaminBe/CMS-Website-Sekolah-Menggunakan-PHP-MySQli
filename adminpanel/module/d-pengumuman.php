<?php 
include '../inc/koneksi.php';
$id= $_GET['id'];
	mysqli_query($con,"DELETE FROM tb_pengumuman WHERE id_peng='$id' ");
		echo "<script>
 	alert('Data Telah Dihapus  !!');
 	window.location='?page=peng';
 </script>";
 ?>