<?php 
include '../inc/koneksi.php';
$id= $_GET['id'];
	mysqli_query($con,"DELETE FROM tb_profil WHERE id_profil='$id' ");
		echo "<script>
 	alert('Data Telah Dihapus  !!');
 	window.location='?page=profil';
 </script>";
 ?>