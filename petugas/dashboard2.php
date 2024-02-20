<?php
  include 'header.php';
  session_start();
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
  }
?>
  <div class="container">
    <div class="row" style="margin-top: 5rem;">
      <div class="col-sm-7" style="margin-top: 5rem;">
        <h2><b>Selamat Datang</b></h2>
        <h3>di halaman Perpustakaan Digital</h3>
        <samp>Mari membaca, karena membaca adalah jendela dunia</samp>
      </div>
      <div class="container">
  <div class="row my-3">
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body text-white text-center bg-danger">
          <h2>Data Buku</h2>
          <h1><b>100</b></h1>
        </div>
        <a href="buku.php" class="btn btn-dark text-center btn-sm">Lihat Selengkapnya</a>
      </div>
    </div>
      <div class="col-sm-5">
        <img src="assets/img/Man-reading-pana.png" width="400" alt="">
      </div>
    </div>
  </div>
<?php
  include 'footer.php';
?>