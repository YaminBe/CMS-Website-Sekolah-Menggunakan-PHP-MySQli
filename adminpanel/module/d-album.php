<?php 
include '../inc/koneksi.php';
$id= $_GET['id'];
	mysqli_query($con,"DELETE FROM tb_album WHERE id_album='$id' ");
		echo "<script>
 	alert('Data Telah Dihapus  !!');
 	window.location='?page=galery';
 </script>";
 ?>