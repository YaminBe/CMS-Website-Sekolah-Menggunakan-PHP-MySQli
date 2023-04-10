<?php 
include '../inc/koneksi.php';
$id= $_GET['id'];
	mysqli_query($con,"DELETE FROM tb_galery WHERE id_galery='$id' ");
		echo "<script>
 	alert('Data Telah Dihapus  !!');
 	window.location='?page=t-foto';
 </script>";
 ?>