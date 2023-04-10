<?php 
include '../inc/koneksi.php';
$id= $_GET['id'];
	mysqli_query($con,"DELETE FROM buku_tamu WHERE id_tamu='$id' ");
		echo "<script>
 	alert('Data Telah Dihapus  !!');
 	window.location='?page=buku';
 </script>";
 ?>