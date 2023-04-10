<div class="post-comment padding-top-40">
    <h3>Buku Tamu</h3>
    <p>Silahkan Mengisi Buku Tamu Pada Form dibawah ini untuk memberikan kriktik maupun saran kepada kami, setiap buku tamu yang masuk kami akan sangat mengharganya !!</p>
    <br>
        <?php
    if (isset($_POST['kirim'])) {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $subjek = $_POST['subjek'];
      $pesan = $_POST['pesan'];
      $tgl= date("Y-m-d");
      mysqli_query($con,"INSERT INTO buku_tamu (id_tamu,nama,email,subjek,pesan,tgl_post,status) VALUES(NULL,'$nama','$email','$subjek','$pesan','$tgl','terima') ");

      echo '<div class="alert alert-success alert-dismissible" role="alert" style="background-color:#99ff33;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Sukses !!</strong> Pesan Anda Telah Terkirim, Terimakasih !!
</div>';

    }
     ?>
    <form role="form" action="" method="post">
      <div class="form-group">
        <label>Name <span class="color-red">*</span></label>
        <input name="nama" class="form-control" type="text" required>
      </div>

      <div class="form-group">
        <label>Email <span class="color-red">*</span></label>
        <input name="email" class="form-control" type="email" required>
      </div>
      <div class="form-group">
        <label>Subjek <span class="color-red">*</span></label>
        <input name="subjek" class="form-control" type="text">
      </div>

      <div class="form-group">
        <label>Pesan </label>
        <textarea class="form-control" rows="8" name="pesan"></textarea>
      </div>
      <p><input name="kirim" class="btn btn-primary" type="submit" value="Kirim"></p>
    </form>

  </div> 
  