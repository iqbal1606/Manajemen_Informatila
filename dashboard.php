<?php
include "koneksi.php";
$sql = "SELECT * FROM profil";

$query = mysqli_query($conn, $sql);
$data_profil = mysqli_fetch_assoc($query);
// return var_dump($data);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
?>
<div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up"><?php echo $data_profil['nama_profil']; ?><br>Universitas Negeri Surabaya</h2>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="https://youtu.be/4Mo8vlnUNEY   " class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Profil Kami</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/LOGO_PRODI_MI.png" class="img-fluid" alt="" width="80%" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>