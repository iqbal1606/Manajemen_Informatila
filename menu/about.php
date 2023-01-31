<!-- ======= abou me Section ======= -->
<section id="aboutme" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tentang Kami</h2>
          <p>Tentang Kami</p>
        </div>

        <div class="mb-3">
            <p class="text-center"><?php echo $data_profil['deskripsi_profil']; ?></p>
          <iframe style="border:0; width: 100%; height: 350px;" src="<?php echo $data_profil['link_map']; ?>" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Alamat kami</h3>
                <p><?php echo $data_profil['alamat_profil']; ?></p>
              </div>
            </div>
          </div><!-- End Info Item -->


          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Hubungi Kami</h3>
                <p><?php echo $data_profil['nomer_profil']; ?></p>
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            
          </div><!-- End Info Item -->
          </div><!-- End Info Item -->

        </div>


      </div>
    </section><!-- End Contact Section -->
