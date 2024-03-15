<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vebby Tour&Travel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Vebby Tour & Travel</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Pilihan Paket Wisata</a></li>
          <li><a class="nav-link scrollto" href="#team">Testimonial</a></li>
          
          
          <li><a class="getstarted scrollto" href="{{route('pelanggan.create')}}">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Welcome to Vebby Tour and Travel</h1>
          <h2>Explore your holiday with us</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{route('pelanggan.create')}}" class="btn-get-started scrollto">Get Started</a>
            <a href="https://youtu.be/aKtb7Y3qOck" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <!-- <div class="col-lg-6"> -->
            <p>
            Vebby Tour and Travel berdiri sejak tahun 2017. Vebby Tour and Travel bergerak dalam bidang Tour & Travel untuk mengakomodasi kegiatan wisata dengan destinasi seluruh Indonesia maupun mancanegara. Awal mula bergerak dibidang pariwisata, Vebby Tour and Travel menjadi agen yang menjual produk perjalan dari biro dan agen travel (reseller) yang sudah eksis di dunia tour dan travel. Sejalan dengan kemajuan yang dihasilkan, saat ini Vebby Tour and Travel mampu berdiri diatas kaki sendiri dengan menciptakan paket liburan yang sesuai dengan keinginan konsumen dan tetap berkolaborasi dengan biro dan agen tour dan travel untuk memajukan dunia pariwisata Indonesia hingga ke mancanegara.
            </p>
            
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Liburan Seru dan Berkesan bersama <strong>Vebby Tour n Travel</strong></h3></h3>
              <p>
                Vebby Tour and Travel sangat mengedepankan kepuasan pelanggan dengan Visi, Misi dan Nilai perusahaan milik kami.
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> VISI <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                    Menjadi salah satu perusahaan Tour & Travel terbaik pilihan konsumen dengan paket layanan yang unik, menarik dan berkesan baik Domestik dan Internasional.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> MISI <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Membangun hubungan jangka panjang dengan pelayanan terbaik kepada semua klien kami, serta memanjukan Wisata Domestik dan memperkenalkan Wisata Internasional yang unggulan.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> NILAI PERUSAHAAN <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      <ol>
                        <li>
                          Profesionalisme
                        </li>
                        <li>
                          Ramah
                        </li>
                        <li>
                          Integritas
                        </li>
                        <li>
                          Optimisme
                        </li>
                        <li>
                          Religius
                        </li>
                      </ol>
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Tour & Travel</a></h4>
              <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Paket Wisata</a></h4>
              <!-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p> -->
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Atraksi & Hiburan</a></h4>
              <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p> -->
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Hotel & Homestay</a></h4>
              <!-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p> -->
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>What are you waiting for?</h3>
            <p> Let's explore & enjoy your holiday with us! </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{route('pelanggan.create')}}">Reservation Now</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pilihan Paket Wisata</h2>
          <p>Destinasi Domestik</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-jakarta">Jakarta</li>
          <li data-filter=".filter-rajaampat">Raja Ampat</li>
          <li data-filter=".filter-labuanbajo">Labuan Bajo</li>
          <li data-filter=".filter-yogyakarta">Yogyakarta</li>
          <!-- <li data-filter=".filter-bali">Bali</li> -->
        </ul>

        <!-- Jakarta  -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-jakarta">
            <div class="portfolio-img"><img src="assets/img/portfolio/jakarta1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Jakarta</h4>
              <p>2 Days 1 Night</p>
              <a href="assets/img/portfolio/jakarta1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Jakarta"><i class="bx bx-plus"></i></a>
              <a href="jakarta.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jakarta">
              <div class="portfolio-img"><img src="assets/img/portfolio/jakarta2.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Jakarta</h4>
                <p>2 Days 1 Night</p>
                <a href="assets/img/portfolio/jakarta1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Jakarta"><i class="bx bx-plus"></i></a>
                <a href="jakarta.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-jakarta">
            <div class="portfolio-img"><img src="assets/img/portfolio/jakarta3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Jakarta</h4>
              <p>2 Days 1 Night</p>
              <a href="assets/img/portfolio/jakarta1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Jakarta"><i class="bx bx-plus"></i></a>
              <a href="jakarta.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-jakarta">
            <div class="portfolio-img"><img src="assets/img/portfolio/jakarta4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Jakarta</h4>
              <p>2 Days 1 Night</p>
              <a href="assets/img/portfolio/jakarta1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Jakarta"><i class="bx bx-plus"></i></a>
              <a href="jakarta.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <!-- end jakarta -->

            <!-- jogja -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-yogyakarta">
            <div class="portfolio-img"><img src="assets/img/portfolio/yogyakarta1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Yogyakarta</h4>
              <p>2 Days 1 Night</p>
              <a href="assets/img/portfolio/yogyakarta1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Yogyakarta"><i class="bx bx-plus"></i></a>
              <a href="yogyakarta.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-yogyakarta">
            <div class="portfolio-img"><img src="assets/img/portfolio/yogyakarta2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Yogyakarta</h4>
              <p>2 Days 1 Night</p>
              <a href="assets/img/portfolio/yogyakarta2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Yogyakarta"><i class="bx bx-plus"></i></a>
              <a href="yogyakarta.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-yogyakarta">
            <div class="portfolio-img"><img src="assets/img/portfolio/yogyakarta3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Yogyakarta</h4>
              <p>2 Days 1 Night</p>
              <a href="assets/img/portfolio/yogyakarta3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Yogyakarta"><i class="bx bx-plus"></i></a>
              <a href="yogyakarta.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-yogyakarta">
            <div class="portfolio-img"><img src="assets/img/portfolio/yogyakarta4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Yogyakarta</h4>
              <p>2 Days 1 Night</p>
              <a href="assets/img/portfolio/yogyakarta4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Yogyakarta"><i class="bx bx-plus"></i></a>
              <a href="yogyakarta.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <!-- end jogja -->

          <!-- Raja Ampat -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-rajaampat">
            <div class="portfolio-img"><img src="assets/img/portfolio/rajaampat1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Raja Ampat</h4>
              <p>4 Day 3 Night</p>
              <a href="assets/img/portfolio/rajaampat1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Raja Ampat"><i class="bx bx-plus"></i></a>
              <a href="rajaampat.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-rajaampat">
            <div class="portfolio-img"><img src="assets/img/portfolio/rajaampat2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Raja Ampat</h4>
              <p>4 Day 3 Night</p>
              <a href="assets/img/portfolio/rajaampat2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Raja Ampat"><i class="bx bx-plus"></i></a>
              <a href="rajaampat.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-rajaampat">
            <div class="portfolio-img"><img src="assets/img/portfolio/rajaampat3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Raja Ampat</h4>
              <p>4 Day 3 Night</p>
              <a href="assets/img/portfolio/rajaampat3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Raja Ampat"><i class="bx bx-plus"></i></a>
              <a href="rajaampat.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-rajaampat">
            <div class="portfolio-img"><img src="assets/img/portfolio/rajaampat4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Raja Ampat</h4>
              <p>4 Day 3 Night</p>
              <a href="assets/img/portfolio/rajaampat4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Raja Ampat"><i class="bx bx-plus"></i></a>
              <a href="rajaampat.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <!-- end raja ampat -->

          <!-- labuan bajo -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-labuanbajo">
            <div class="portfolio-img"><img src="assets/img/portfolio/labuanbajo1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Labuan Bajo</h4>
              <p>4 Days Night</p>
              <a href="assets/img/portfolio/labuanbajo1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Labuan Bajo"><i class="bx bx-plus"></i></a>
              <a href="labuanbajo.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-labuanbajo">
            <div class="portfolio-img"><img src="assets/img/portfolio/labuanbajo2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Labuan Bajo</h4>
              <p>4 Days Night</p>
              <a href="assets/img/portfolio/labuanbajo2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Labuan Bajo"><i class="bx bx-plus"></i></a>
              <a href="labuanbajo.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-labuanbajo">
            <div class="portfolio-img"><img src="assets/img/portfolio/labuanbajo3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Labuan Bajo</h4>
              <p>4 Days 3 Night</p>
              <a href="assets/img/portfolio/labuanbajo3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Labuan Bajo"><i class="bx bx-plus"></i></a>
              <a href="labuanbajo.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-labuanbajo">
            <div class="portfolio-img"><img src="assets/img/portfolio/labuanbajo4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Labuan Bajo</h4>
              <p>3 Days 2 Night</p>
              <a href="assets/img/portfolio/labuanbajo4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Labuan Bajo"><i class="bx bx-plus"></i></a>
              <a href="labuanbajo.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <!-- end labuan bajo -->

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/bali1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Bali</h4>
              <p>Bali</p>
              <a href="assets/img/portfolio/bali1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Bali"><i class="bx bx-plus"></i></a>
              <a href="bali.blade.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonial</h2>
          <p>Apa kata mereka tentang Vebby Tour n Travel?</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Bertha Agustina</h4>
                <span>Jakarta 2D1N</span>
                <p>Terima kasih buat pelayanannya.. teman2 puas..</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Rifa</h4>
                <span>Raja Ampat 4D3N</span>
                <p>Terima kasih Vebby TnT atas pelayanannya sangat memuaskan baik hotel makanan dan tour guidenya semoga tambah maju ya sukses buat vebby TnT, bisa saya rekomendasikan ke teman teman lain yg mau berlibur ke raja ampat.</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Rudi Sunarno</h4>
                <span>Labuan Bajo 3D2N</span>
                <p>Dear Vebby Tour and Trave;, Alhamdulillah sudah sampai dirumah. terima kasih atas akomodasi dan pelayanan guidenya yg telah berjalan dengan baik. 3 hari 2 malam yg sangat seru di labuan bajo.</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Labuan Bajo</span>
                <p>SUPER DUPER SERU, aku dan teman temanku sangat senang dengan Vebby Tour and Travel karena pelayanannya super duper bagus. mulai dari penginapan, transportasi, makan dan juga tempat wisatanya bagus bangeeeeeeeetttttttt. suka banget. next time bakal pakai vebby tnt lagi kalau mau jalan jalan. thank youuuuuuuu!</p>
                
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apa itu vebbytourandtravel.com? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  vebbytourandtravel.com adalah website resmi milik Vebby Tour and Travel yang bisa digunakan sebagai media informasi dan destinasi tujuan wisata indonesia dengan tujuan vebbytourandtravel.com menjadi referensi [erjalanan wisata anda lebih efektif dan efisien selain itu vebbytourandtravel.com juga digunakan oleh customer untuk melakukan pemesanan paket tour.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Saya ingin memesan tour, tour apa saja yang dijual di vebbytourandtravel.com <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Paket tour yang dijual di vebbytourandtravel.com adalah paket Individual Tour dan Group Tour
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Apa bedanya Individual Tour dengan Group Tour? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Paket Individual Tour biasanya antara 2-8 orang yang berangkat, sedangkan Group Tour biasanya minimal 15 orang yang akan berangkat.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Bagaimana caranya membatalkan tour yang sudah saya pesan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Silahkan anda menghubungi langsung helpdesk kami di 081290412972 atau via e-mail di helpdesk@vebbytourandtravel.com
                </p>
              </div>
            </li>

            

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Vebby TnT</h3>
            <p>
              B035 Sija Street <br>
              Bogor, West Java<br>
              Indonesia<br><br>
              <strong>Phone:</strong> 0812 9041 2972<br>
              <strong>Email:</strong> helpdesk@vebbytourandtravel.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portofolio">Pilihan Paket Wisata</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Testimonial</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Tour & Travel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Paket Wisata</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Atraksi & Hiburan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Hotel & Homestay</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Vebby Tour and Travel</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>