<?php
    $sejarah = $this->db->get('struktur')->row();
    

?>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Struktur Organisasi Desa</h2>
          <ol>
            <li><a href="home/index">Home</a></li>
            <li>Struktur Organisasi Desa</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
      <div class="section-title" data-aos="fade-up">
          <h2>Struktur Organisasi Desa</h2>
        </div>

      <div class="card">
  <div class="card-body">
    <center>
    <h4><?php echo $sejarah->judul ?></h4>
    <br>
    <br>
      <img src="image/<?php echo $sejarah->gambar ?>" alt="" class="img img-fluid">
  <p><?php echo $sejarah->ket ?></p>
    </center>
  </div>
</div>
      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->