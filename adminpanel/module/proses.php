<?php 

include '../inc/koneksi.php';
if (isset($_POST['simpan-profil'])) {
		$tgl= date("Y-m-d");
		$judul= $_POST['judul'];
		$isi_profil= $_POST['isi_profil'];
		$posisi= $_POST['posisi'];

		mysqli_query($con,"INSERT INTO tb_profil (id_profil,judul_profil,isi_profil,tg_input,posisi) VALUES(NULL,'$judul','$isi_profil','$tgl','$posisi') ");
		echo "<script>
 	alert('Data Berhasil Ditambahkan !!');
 	window.location='?page=profil';
 </script>";

}elseif (isset($_POST['edit-profil'])) {
			$id= $_POST['id'];
			$tgl= date("Y-m-d");
			$judul= $_POST['judul'];
			$isi_profil= $_POST['isi_profil'];
			$posisi= $_POST['posisi'];

		mysqli_query($con,"UPDATE tb_profil SET judul_profil='$judul',isi_profil='$isi_profil',tg_input='$tgl',posisi='$posisi' WHERE id_profil='$id' ");
		echo "<script>
 	alert('Data Berhasil Diubah !!');
 	window.location='?page=profil';
 </script>";

}elseif (isset($_POST['simpan-Agenda'])) {
	$id_user= $_POST['id_user'];
		$tgl= $_POST['tgl'];
		$judul= $_POST['judul'];
		$isi_agenda= $_POST['isi_agenda'];
		$tempat= $_POST['tempat'];

		mysqli_query($con,"INSERT INTO tb_agenda (id_agenda,judul,isi_agenda,tempat,tgl_agenda,id_user)
		 VALUES(NULL,'$judul','$isi_agenda','$tempat','$tgl','$id_user') ");
		echo "<script>
 	alert('Data Berhasil Ditambahkan !!');
 	window.location='?page=agenda';
 </script>";

}elseif (isset($_POST['edit-Agenda'])) {
	    $id= $_POST['id'];
	    // $id_user= $_POST['id_user'];
		$tgl= $_POST['tgl'];
		$judul= $_POST['judul'];
		$isi_agenda= $_POST['isi_agenda'];
		$tempat= $_POST['tempat'];

		mysqli_query($con,"UPDATE tb_agenda SET judul='$judul',isi_agenda='$isi_agenda',tempat='$tempat',tgl_agenda='$tgl' WHERE id_agenda='$id' ");
		echo "<script>
 	alert('Data Berhasil Dubah !!');
 	window.location='?page=agenda';
 </script>";

}elseif (isset($_POST['simpan-Berita'])) {
		$kategori= $_POST['kategori'];
			$judul= $_POST['judul'];
		$isi= $_POST['isi'];
		$tgl= date("Y-m-d");
		$id_user= $_POST['id_user'];

		$sumber = @$_FILES['foto']['tmp_name'];
		$target = '../assets/gambar-berita/';
		$nama_gambar = @$_FILES['foto']['name'];

		$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
		if ($pindah) {


		mysqli_query($con,"INSERT INTO tb_berita (id_berita,id_kategori,judul,isi,tgl_post,foto,id_user)
		 VALUES(NULL,'$kategori','$judul','$isi','$tgl','$nama_gambar','$id_user') ");
		echo "<script>
		alert('Data Berhasil Ditambahkan !!');
		window.location='?page=berita';
		</script>";
			# code...
		}else{
			echo "Gagal DiUpload !!";
		}
		


}elseif (isset($_POST['edit-Berita'])) {
	$id= $_POST['id'];
		$kategori= $_POST['kategori'];
			$judul= $_POST['judul'];
		$isi= $_POST['isi'];
		$tgl= date("Y-m-d");
		$id_user= $_POST['id_user'];

			$gambar = @$_FILES['foto']['name'];
			if (!empty($gambar)) {
			move_uploaded_file($_FILES['foto']['tmp_name'],"../assets/gambar-berita/$gambar");
			$ganti = mysqli_query($con,"UPDATE tb_berita SET foto='$gambar' WHERE id_berita='$id' ");
			}

		// $sumber = @$_FILES['foto']['tmp_name'];
		// $target = '../assets/gambar-berita/';
		// $nama_gambar = @$_FILES['foto']['name'];

		// $pindah = move_uploaded_file($sumber, $target.$nama_gambar);
		// if ($pindah) {


		mysqli_query($con,"UPDATE tb_berita SET id_kategori='$kategori',judul='$judul',isi='$isi',tgl_post='$tgl' WHERE id_berita='$id' ");
		echo "<script>
		alert('Data Berhasil Dubah !!');
		window.location='?page=berita';
		</script>";
			# code...
}elseif (isset($_POST['simpan-Pengumuman'])) {
	$id_user= $_POST['id_user'];
		$tgl= date("Y-m-d");
		$judul= $_POST['judul'];
		$isi= $_POST['isi'];

		mysqli_query($con,"INSERT INTO tb_pengumuman (id_peng,judul_peng,isi_peng,tgl_post,id_user)
		 VALUES(NULL,'$judul','$isi','$tgl','$id_user') ");
		echo "<script>
 	alert('Data Berhasil Ditambahkan !!');
 	window.location='?page=peng';
 </script>";

}elseif (isset($_POST['edit-Pengumuman'])) {
	$id= $_POST['id'];
		$tgl= date("Y-m-d");
		$judul= $_POST['judul'];
		$isi= $_POST['isi'];

		mysqli_query($con,"UPDATE tb_pengumuman SET judul_peng='$judul',isi_peng='$isi',tgl_post='$tgl' WHERE id_peng='$id' ");
		echo "<script>
 	alert('Data Berhasil DiUbah !!');
 	window.location='?page=peng';
 </script>";

 // Simpan Foto ke album
}elseif (isset($_POST['simpan-Foto'])) {
		$album= $_POST['album'];
		$deskripsi= $_POST['deskripsi'];
		$tgl= date("Y-m-d");

		$sumber = @$_FILES['foto']['tmp_name'];
		$target = '../assets/galery/';
		$nama_gambar = @$_FILES['foto']['name'];

		$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
		if ($pindah) {


		mysqli_query($con,"INSERT INTO tb_galery (id_galery,id_album,foto,tgl_post,deskripsi)
		 VALUES(NULL,'$album','$nama_gambar','$tgl','$deskripsi') ");
		echo "<script>
		alert('Data Berhasil Ditambahkan !!');
		window.location='?page=galery';
		</script>";
			# code...
		}else{
			echo "Gagal DiUpload !!";
		}
		


}elseif (isset($_POST['edit-Foto'])) {
	$id= $_POST['id'];
	$album= $_POST['album'];
	$deskripsi= $_POST['deskripsi'];
	$tgl= date("Y-m-d");


	$gambar = @$_FILES['foto']['name'];
	if (!empty($gambar)) {
	move_uploaded_file($_FILES['foto']['tmp_name'],"../assets/galery/$gambar");
	$ganti = mysqli_query($con,"UPDATE tb_galery SET foto='$gambar' WHERE id_galery='$id' ");
	}

	mysqli_query($con,"UPDATE tb_galery SET id_album='$album',tgl_post='$tgl',deskripsi='$deskripsi' WHERE id_galery='$id' ");
	echo "<script>
	alert('Data Berhasil Dubah !!');
	window.location='?page=t-foto';
	</script>";
	}


 ?>
