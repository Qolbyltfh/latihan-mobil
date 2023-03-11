@extends('layouts.template')

@section('main')
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Perusahaan kami memang kecil, tapi jasa kami luar biasa!</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Pelatihan Sangat Detail</h3>
            <img src="{{ asset('assets/img/biaya-kursus-mobil-2.jpg')}}" class="img-fluid rounded-4 mb-4" alt="">
            <p>Disini kami mempunyai kompetensi dasar (KD) seperti kurikulum sendiri yang akan disampaikan kepada pembelajar. </p>
            <p>Setelah selesai materi dan praktik maka akan ada ujian seperti pada film kartun spongebob, jika gagal maka WAJIB mengulangi dan belum bisa ke tahap selanjutnya.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Mengapa berlatih di MATIR?
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Anda dapat memilih pelatih sendiri.</li>
                <li><i class="bi bi-check-circle-fill"></i> Anda dapat memilih mobil sendiri sesuai dengan ketersediaan mobil.</li>
                <li><i class="bi bi-check-circle-fill"></i> Anda dapat memilih jadwal sendiri dengan batasan waktu jam 8 pagi sampai 5 sore.</li>
                <li><i class="bi bi-check-circle-fill"></i> Anda dapat menentukan mobil yang mendatangi lokasi Anda atau sebaliknya, dengan ketentuan jarak max 7 kilometer dari lokasi kami.</li>
                <li><i class="bi bi-check-circle-fill"></i> Anda dapat snack dan minuman selama kegiatan latihan.</li>
                <li><i class="bi bi-check-circle-fill"></i> Anda dapat dibantu dalam proses pembuatan SIM A (S&K berlaku).</li>
              </ul>

              <div class="position-relative mt-4">
                <img src="{{ asset('assets/img/handling-mobil-2.jpg')}}" class="img-fluid rounded-4" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="{{ asset('assets/img/stats-img.svg')}}" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> </p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="121" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Profesional Trainer</strong> </p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong></p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p>Berikut pelayanan kami, masih ragu?</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-arrow-repeat"></i>
              </div>
              <h3>Mobil Nyaman dan Aman</h3>
              <p>Mobil dibersihkan setiap habis digunakan demi kenyamanan menyetir dan diservice rutin.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bucket"></i>
              </div>
              <h3>Makan Dan Minum</h3>
              <p>Perut tidak boleh kosong ketika akan menyetir.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-file-text"></i>
              </div>
              <h3>Sertifikat</h3>
              <p>Sertifikat mengembudi sebagi bukti sudah layak mengemudi.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Package Section ======= -->
    <section id="package" class="pricing sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Package</h2>
          <p>Paket yang kita tawarkan sangat bersahabat loh!</p>
        </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Silver</h3>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>
              <h4><sup>Rp</sup>700.000<span> / hari</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Makan & Minum</li>
                <li><i class="bi bi-check"></i> Sertifikat</li>
                <li><i class="bi bi-check"></i> Mobil Matic/Manual</li>
                <li class="na"><i class="bi bi-x"></i> <span>Bensin</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Pembuatan SIM A</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Pesan Sekarang</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Gold</h3>
              <div class="icon">
                <i class="bi bi-airplane"></i>
              </div>

              <h4><sup>Rp</sup>1.000.000<span> / hari</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Makan & Minum</li>
                <li><i class="bi bi-check"></i> Sertifikat</li>
                <li><i class="bi bi-check"></i> Mobil Matic/Manual</li>
                <li><i class="bi bi-check"></i> Bensin</li>
                <li class="na"><i class="bi bi-x"></i> <span>Pembuatan SIM A</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Pesan Sekarang</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Platinum</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4><sup>Rp</sup>1.200.000<span> / hari</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Makan & Minum</li>
                <li><i class="bi bi-check"></i> Sertifikat</li>
                <li><i class="bi bi-check"></i> Mobil Matic/Manual</li>
                <li><i class="bi bi-check"></i> Bensin</li>
                <li><i class="bi bi-check"></i> Pembuatan SIM A</li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Pesan Sekarang</a></div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Package Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>
          <p>Inilah pelatih terbaik kami</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{ asset('assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
              <h4>Walter White</h4>
              <span>48 tahun</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{ asset('assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
              <h4>Sarah Jhinson</h4>
              <span>38 tahun</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="{{ asset('assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
              <h4>William Anderson</h4>
              <span>32 tahun</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="{{ asset('assets/img/team/team-4.jpg')}}" class="img-fluid" alt="">
              <h4>Amanda Jepson</h4>
              <span>42 tahun</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Vehicle Section ======= -->
    <section id="vehicle" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Vehicle</h2>
          <p>Mobil yang akan dipakai oleh anda.</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Manual</li>
              <li data-filter=".filter-product">Matic</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets/img/portfolio/manual_1.jpeg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img/portfolio/manual_1.jpeg')}}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Honda Avanza</a></h4>
                  <p>Tahun 2020</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets/img/portfolio/matic_1.jpg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img/portfolio/matic_1.jpg')}}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Honda Brio</a></h4>
                  <p>Tahun 2020</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets/img/portfolio/manual_2.jpg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img/portfolio/manual_2.jpg')}}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Daihatsu Xenia</a></h4>
                  <p>Tahun 2020</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets/img/portfolio/matic_2.jpeg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img/portfolio/matic_2.jpeg')}}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Picanto</a></h4>
                  <p>Tahun 2020</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="{{ asset('assets/img/portfolio/matic_3.jpeg')}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img/portfolio/matic_3.jpeg')}}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Honda Jazz</a></h4>
                  <p>Tahun 2020</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Vehicle Section -->
@endsection