<?php 
include '../inc/koneksi.php';
$id= $_GET['id'];
	mysqli_query($con,"DELETE FROM tb_agenda WHERE id_agenda='$id' ");
		echo "<script>
 	alert('Data Telah Dihapus  !!');
 	window.location='?page=agenda';
 </script>";
 ?>