  <!-- navbar -->
  <?php include "tamplate/navbar.php"; ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/cupang.jpg')" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs mb-2">
            <span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span>Tentang <i class="ion-ios-arrow-forward"></i></span>
          </p>
          <h1 class="mb-0 bread">Tentang</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row mb-5 pb-5">

        <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
          <div class="d-block services text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <img src="assets/images/cupang1.png" style="width: 50%" />
            </div>
            <div class="media-body p-4">
              <h3 class="heading">Budidaya Ikan Cupang</h3>
              <p>
                Budidaya ikan cupang adalah proses memelihara dan membiakkan
                ikan cupang, juga dikenal sebagai Betta fish, baik untuk
                tujuan hobi pribadi atau komersial. Ini melibatkan pemilihan
                induk yang sehat, pemijahan, perawatan larva, pemeliharaan
                muda-muda, pemilihan ikan yang menarik, dan perawatan umum
                dalam akuarium. Budidaya ikan cupang membutuhkan perhatian
                khusus terhadap kualitas air, makanan, dan kondisi lingkungan
                untuk memastikan keberhasilan dalam memelihara dan membiakkan
                ikan cupang.
              </p>
              <p>
                Anda Bisa melihat video bagaimana cara budidaya ikan cupang dengan menekan tombol video dibawah.</p>
              <a href="https://youtu.be/cx98Jiskb24?si=rOzQa1uKRlmNxHuR" target="_blank" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-video-camera"></span><i class="sr-only">Read more</i></a>
            </div>
          </div>
        </div>

        <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
          <div class="d-block services text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <img src="assets/images/cupang2.png" style="width: 50%" />
            </div>
            <div class="media-body p-4">
              <h3 class="heading">Perawatan Ikan Cupang</h3>
              <p>
                Perawatan ikan cupang melibatkan serangkaian langkah untuk
                menjaga kesehatan dan kualitas hidup ikan cupang dalam
                akuarium. Ini mencakup suhu air yang sesuai (24-28°C),
                pembersihan rutin untuk menjaga kualitas air, pemberian
                makanan berkualitas dengan porsi yang tepat, penyediaan tempat
                persembunyian, pemantauan kesehatan ikan, dan pemisahan jika
                ada agresi antar-jantan. Perawatan yang baik akan memastikan
                ikan cupang tetap sehat dan bahagia.
              </p>
              <p>
                Anda Bisa melihat video bagaimana cara Perawatan ikan cupang dengan menekan tombol video dibawah.</p>
              <a href="https://youtu.be/he0EQBbIb3E?si=Atmr9Xld7fUgAT7I" target="_blank" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-video-camera"></span><i class="sr-only">Read more</i></a>
            </div>
          </div>
        </div>

        <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
          <div class="d-block services text-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <img src="assets/images/cupang3.png" style="width: 50%" />
            </div>
            <div class="media-body p-4">
              <h3 class="heading">Penyakit Ikan Cupang</h3>
              <p>
                Penyakit pada ikan cupang adalah masalah kesehatan di akuarium. Ini melibatkan infeksi bakteri, parasit, atau masalah lain yang menyebabkan gejala seperti perubahan perilaku, fisik, dan penurunan kesehatan. Mulai dari jamur hingga parasit seperti Ich, serta gangguan pencernaan, penyakit ini sering disebabkan oleh lingkungan atau perawatan yang buruk. Perawatan dan pengobatan yang tepat diperlukan untuk mengatasi penyakit ini dan memulihkan kesehatan ikan cupang.
              </p>
              <p>Anda Bisa melihat video bagaimana cara mengetahui jenis-jenis penyakit ikan cupang dengan menekan tombol video dibawah.</p>
              <a href="https://youtu.be/SsJsZ_5mZys?si=PERyQdEqYmgqoN54" target="_blank" class="btn-custom d-flex align-items-center justify-content-center">
                <span class="fa fa-video-camera"></span><i class="sr-only">Read more</i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="ftco-section ftco-faqs">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-md-last">
          <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image: url(assets/images/cupang7.png); background-size: contain; background-repeat: no-repeat;">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="heading-section mb-5 mt-5 mt-lg-0">
            <h2 class="mb-3">Penyakit Ikan Cupang</h2>
            <p>
              Berikut Beberapa Penyakit Yang Ada Pada Aplikasi Sistem Pakar Ikan Cupang Ini.
            </p>
          </div>
          <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
            <?php
            include 'databases/koneksi.php';
            $sql = "SELECT * FROM tb_penyakit ORDER BY kdpenyakit";
            $qry = mysqli_query($koneksi, $sql) or die("SQL Error" . mysqli_error($koneksi));

            while ($data = mysqli_fetch_array($qry)) {
              $id_penyakit = $data['kdpenyakit'];
            ?>
              <div class="card">
                <div class="card-header p-0" id="heading_<?php echo $id_penyakit; ?>" role="tab">
                  <h2 class="mb-0">
                    <button href="#collapse_<?php echo $id_penyakit; ?>" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapse_<?php echo $id_penyakit; ?>">
                      <p class="mb-0"><?php echo $data['nama_penyakit']; ?></p>
                      <i class="fa" aria-hidden="true"></i>
                    </button>
                  </h2>
                </div>
                <div class="collapse" id="collapse_<?php echo $id_penyakit; ?>" role="tabpanel" aria-labelledby="heading_<?php echo $id_penyakit; ?>">
                  <div class="card-body py-3 px-0">
                    <ul>
                      <li>
                        <label>Definisi Penyakit :</label>
                        <p class="text-info"><?php echo $data['definisi']; ?></p>
                      </li>
                      <li>
                        <label>Saran :</label>
                        <p class="warning"><?php echo $data['solusi']; ?></p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light ftco-faqs">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image: url(assets/images/cupang6.png); background-size: contain; background-repeat: no-repeat;">
          </div>
        </div>

        <div class="col-lg-6 order-md-last">
          <div class="heading-section mb-5 mt-5 mt-lg-0">
            <h2 class="mb-3">Gejala-gejala Penyakit Ikan Cupang</h2>
            <p>
              Berikut Beberapa Gejala Penyakit Yang Ada Pada Aplikasi Sistem Pakar Ikan Cupang Ini.
            </p>
          </div>
          <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
            <div class="card">
              <div class="card-header p-0" id="headingThree" role="tab">
                <h2 class="mb-0">
                  <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                    <p class="mb-0">
                      Lihat Gejala-gejala Penyakit Ikan Cupang
                    </p>
                    <i class="fa" aria-hidden="true"></i>
                  </button>
                </h2>
              </div>
              <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                <div class="card-body py-3 px-0">
                  <?php
                  include 'databases/koneksi.php';
                  $sql = "SELECT * FROM tb_gejala ORDER BY id ASC";
                  $qry = mysqli_query($koneksi, $sql) or die("SQL Error" . mysqli_error($koneksi));

                  while ($data = mysqli_fetch_array($qry)) {
                  ?>
                    <ul>
                      <li><?php echo $data['gejala']; ?></li>
                    </ul>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <?php include "tamplate/footer.php"; ?>