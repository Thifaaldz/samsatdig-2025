<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Samsat Digital</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset ('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset ('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset ('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset ('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('front/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bell
  * Template URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  @livewireStyles
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Samsat Digital</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
        
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
<!-- Hero Section SAMSAT Digital -->
<section id="hero" class="hero section dark-background relative overflow-hidden">

    <img src="{{ asset('front/assets/img/hero-bg.jpg') }}" alt="SAMSAT Digital Background" class="absolute inset-0 object-cover w-full h-full opacity-40">

    <div class="container relative z-10 text-white py-24">
        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-xl-8">
                <h1 class="display-4 fw-bold text-uppercase text-white mb-4">Selamat Datang di SAMSAT Digital</h1>
                <p class="lead text-white-50">Layanan digital pendaftaran SIM cepat, transparan, dan modern untuk masyarakat Indonesia.</p>
                <a href="{{ route('pendaftaran.sim') }}"
                class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition duration-300 border-2 border-white hover:border-blue-300">
                <button
                class="border-2 border-blue-600 text-blue-600 bg-blue-600 bg-opacity-0 
                       hover:bg-blue-600 hover:bg-opacity-100 hover:text-white 
                       font-semibold py-3 px-6 rounded-lg shadow-lg 
                       transition duration-300 cursor-pointer">
                Daftar Sekarang
            </button>
             </a>
             
             <a href="{{ route('cek.nilai') }}"
                class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition duration-300 border-2 border-white hover:border-blue-300">
                <button
                class="border-2 border-blue-600 text-blue-600 bg-blue-600 bg-opacity-0 
                       hover:bg-blue-600 hover:bg-opacity-100 hover:text-white 
                       font-semibold py-3 px-6 rounded-lg shadow-lg 
                       transition duration-300 cursor-pointer">
                Cek Nilai Anda
            </button>
             </a>
             
            </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-xl-2 col-md-4">
                <div class="icon-box text-center">
                    <i class="bi bi-credit-card text-light fs-2 mb-2"></i>
                    <h5 class="text-white">Pendaftaran Online</h5>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box text-center">
                    <i class="bi bi-clock-history text-light fs-2 mb-2"></i>
                    <h5 class="text-white">Layanan Efisien</h5>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box text-center">
                    <i class="bi bi-shield-check text-light fs-2 mb-2"></i>
                    <h5 class="text-white">Data Aman</h5>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box text-center">
                    <i class="bi bi-laptop text-light fs-2 mb-2"></i>
                    <h5 class="text-white">Digitalisasi SIM</h5>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box text-center">
                    <i class="bi bi-globe text-light fs-2 mb-2"></i>
                    <h5 class="text-white">Terintegrasi Nasional</h5>
                </div>
            </div>
        </div>
    </div>

</section>


  <!-- About Section SAMSAT Digital -->
<section id="about" class="about section py-5 bg-light">
    <div class="container">
        <div class="row gy-4 align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-5">
                <img src="{{ asset('front/assets/img/about.jpg') }}" class="img-fluid rounded shadow" alt="Tentang SAMSAT Digital">
            </div>
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h2 class="fw-bold text-primary mb-3">Tentang SAMSAT Digital</h2>
                    <p class="text-muted">
                        SAMSAT Digital adalah inisiatif pelayanan publik berbasis teknologi yang bertujuan untuk mempermudah masyarakat dalam mengakses layanan pendaftaran Surat Izin Mengemudi (SIM) secara online. Dengan integrasi sistem modern, kami menghadirkan kecepatan, efisiensi, dan transparansi dalam setiap prosesnya.
                    </p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Layanan pendaftaran SIM baru dan perpanjangan secara daring.</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Terintegrasi dengan data Samsat dan Kepolisian secara nasional.</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Aman, cepat, dan efisien tanpa harus antre panjang.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Featured Services Section SAMSAT Digital -->
<section id="featured-services" class="featured-services section py-5 bg-white">

    <!-- Section Title -->
    <div class="container section-title text-center mb-5" data-aos="fade-up">
      <h2 class="text-primary fw-bold">Layanan Unggulan</h2>
      <p class="text-muted">Layanan digital unggulan yang kami hadirkan demi kemudahan masyarakat</p>
    </div>
    <!-- End Section Title -->
  
    <div class="container">
      <div class="row gy-4">
  
        <!-- Pendaftaran SIM Baru -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item shadow rounded-4 overflow-hidden">
            <div class="row g-0">
              <div class="col-xl-5">
                <div class="card-bg">
                  <img src="{{ asset('front/assets/img/cards-1.jpg') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Pendaftaran SIM Baru">
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title text-primary">Pendaftaran SIM Baru</h4>
                  <p class="text-muted">Daftarkan SIM Anda dengan proses yang mudah dan cepat melalui layanan digital tanpa harus mengantre di kantor.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Perpanjangan SIM -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card-item shadow rounded-4 overflow-hidden">
            <div class="row g-0">
              <div class="col-xl-5">
                <div class="card-bg">
                  <img src="{{ asset('front/assets/img/cards-5.jpg') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Perpanjangan SIM">
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title text-primary">Perpanjangan SIM</h4>
                  <p class="text-muted">Lakukan perpanjangan SIM secara daring kapan saja tanpa harus datang ke kantor SAMSAT secara langsung.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Tes Teori dan Video Pembelajaran -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="card-item shadow rounded-4 overflow-hidden">
            <div class="row g-0">
              <div class="col-xl-5">
                <div class="card-bg">
                  <img src="{{ asset('front/assets/img/cards-3.jpg') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Tes Teori Online">
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title text-primary">Tes Teori Online</h4>
                  <p class="text-muted">Latihan dan uji teori secara online lengkap dengan video pembelajaran sesuai standar nasional.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Informasi dan Notifikasi Jadwal -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="card-item shadow rounded-4 overflow-hidden">
            <div class="row g-0">
              <div class="col-xl-5">
                <div class="card-bg">
                  <img src="{{ asset('front/assets/img/cards-4.jpg') }}" class="img-fluid w-100 h-100 object-fit-cover" alt="Informasi dan Notifikasi">
                </div>
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <h4 class="card-title text-primary">Notifikasi Jadwal Ujian</h4>
                  <p class="text-muted">Dapatkan notifikasi dan informasi terbaru seputar jadwal ujian dan proses penerbitan SIM langsung ke perangkat Anda.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </section>
  
<!-- Features Section - SAMSAT Digital -->
<section id="features" class="features section py-5 bg-light">

    <div class="container">
  
      <!-- Title -->
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="text-primary fw-bold">Fitur Unggulan</h2>
        <p class="text-muted">Inovasi layanan kami untuk meningkatkan kemudahan dan kenyamanan Anda</p>
      </div>
  
      <!-- Feature Grid -->
      <div class="row gy-4">
  
        <!-- Pendaftaran Online -->
        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="features-item text-center shadow-sm rounded-3 p-4 bg-white">
            <i class="bi bi-person-check-fill fs-2 mb-2 text-primary"></i>
            <h5>Pendaftaran Online</h5>
          </div>
        </div>
  
        <!-- Verifikasi Identitas Digital -->
        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="features-item text-center shadow-sm rounded-3 p-4 bg-white">
            <i class="bi bi-shield-check fs-2 mb-2 text-primary"></i>
            <h5>Verifikasi Digital</h5>
          </div>
        </div>
  
        <!-- Ujian Teori SIM -->
        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="features-item text-center shadow-sm rounded-3 p-4 bg-white">
            <i class="bi bi-journal-check fs-2 mb-2 text-primary"></i>
            <h5>Ujian Teori SIM</h5>
          </div>
        </div>
  
        <!-- Notifikasi Jadwal -->
        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="features-item text-center shadow-sm rounded-3 p-4 bg-white">
            <i class="bi bi-bell-fill fs-2 mb-2 text-primary"></i>
            <h5>Notifikasi Jadwal</h5>
          </div>
        </div>
  
        <!-- Layanan Customer Service -->
        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
          <div class="features-item text-center shadow-sm rounded-3 p-4 bg-white">
            <i class="bi bi-headset fs-2 mb-2 text-primary"></i>
            <h5>Layanan Bantuan</h5>
          </div>
        </div>
  
        <!-- Integrasi Data Kependudukan -->
        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
          <div class="features-item text-center shadow-sm rounded-3 p-4 bg-white">
            <i class="bi bi-diagram-3-fill fs-2 mb-2 text-primary"></i>
            <h5>Integrasi Dukcapil</h5>
          </div>
        </div>
  
        <!-- Cek Status Pendaftaran -->
        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
          <div class="features-item text-center shadow-sm rounded-3 p-4 bg-white">
            <i class="bi bi-search fs-2 mb-2 text-primary"></i>
            <h5>Cek Status SIM</h5>
          </div>
        </div>
  
        <!-- Sistem Antrian Online -->
        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
          <div class="features-item text-center shadow-sm rounded-3 p-4 bg-white">
            <i class="bi bi-ui-checks fs-2 mb-2 text-primary"></i>
            <h5>Antrian Online</h5>
          </div>
        </div>
  
      </div>
    </div>
  </section>
  <!-- /Features Section -->
  

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Layanan Digital SAMSAT</h2>
          <p>Meningkatkan transparansi dan kemudahan dalam proses pendaftaran dan penilaian SIM secara online</p>
        </div><!-- End Section Title -->
      
        <div class="container">
      
          <div class="row gy-4">
      
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="icon flex-shrink-0"><i class="bi bi-pencil-square"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Pendaftaran SIM Online</a></h4>
                <p class="description">Isi formulir digital, unggah dokumen, dan jadwalkan ujian tanpa perlu antre di kantor Samsat.</p>
              </div>
            </div>
      
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <div class="icon flex-shrink-0"><i class="bi bi-file-earmark-text"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Materi Ujian Interaktif</a></h4>
                <p class="description">Akses materi pembelajaran teori, etika, dan praktek langsung dari portal resmi.</p>
              </div>
            </div>
      
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart-line"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Penilaian Transparan</a></h4>
                <p class="description">Lihat hasil nilai ujian langsung secara online tanpa manipulasi atau perantara.</p>
              </div>
            </div>
      
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <div class="icon flex-shrink-0"><i class="bi bi-printer"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Cetak Kartu Ujian</a></h4>
                <p class="description">Kartu peserta dapat dicetak mandiri dengan format resmi dan kode QR verifikasi.</p>
              </div>
            </div>
      
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <div class="icon flex-shrink-0"><i class="bi bi-geo-alt"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Pilih Lokasi Samsat</a></h4>
                <p class="description">Tentukan lokasi ujian sesuai domisili, lengkap dengan jadwal yang tersedia.</p>
              </div>
            </div>
      
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
              <div class="icon flex-shrink-0"><i class="bi bi-shield-lock"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Keamanan Data</a></h4>
                <p class="description">Seluruh data pengguna dilindungi oleh sistem autentikasi dan enkripsi API modern.</p>
              </div>
            </div>
      
          </div>
      
        </div>
      
      </section><!-- /Services Section -->
      


 <!-- Contact Section - SAMSAT Digital -->
<section id="contact" class="contact section py-5 bg-white">
    

    <!-- Section Title -->
    <div class="container text-center mb-5" data-aos="fade-up">
      <h2 class="text-primary fw-bold">Kontak Kami</h2>
      <p class="text-muted">Silakan hubungi kami untuk pertanyaan, bantuan, atau informasi lebih lanjut.</p>
    </div>
  
    <div class="container" data-aos="fade-up" data-aos-delay="100">
  
      <div class="row gy-4 justify-content-center mb-4" data-aos="fade-up" data-aos-delay="200">
  
        <!-- Address -->
        <div class="col-lg-4">
          <div class="info-item text-center p-4 shadow-sm rounded-3 bg-light h-100">
            <i class="bi bi-geo-alt fs-2 text-primary mb-2"></i>
            <h5 class="fw-bold">Alamat</h5>
            <p class="mb-0">Jl. Polisi No. 108, Jakarta, Indonesia</p>
          </div>
        </div>
  
        <!-- Phone -->
        <div class="col-lg-4">
          <div class="info-item text-center p-4 shadow-sm rounded-3 bg-light h-100">
            <i class="bi bi-telephone fs-2 text-primary mb-2"></i>
            <h5 class="fw-bold">Telepon</h5>
            <p class="mb-0">+62 812-3456-7890</p>
          </div>
        </div>
  
        <!-- Email -->
        <div class="col-lg-4">
          <div class="info-item text-center p-4 shadow-sm rounded-3 bg-light h-100">
            <i class="bi bi-envelope fs-2 text-primary mb-2"></i>
            <h5 class="fw-bold">Email</h5>
            <p class="mb-0">samsatdigital@example.com</p>
          </div>
        </div>
  
      </div>
  
      <!-- Contact Form -->
      <form action="#" method="post" class="php-email-form shadow p-4 bg-light rounded-4" data-aos="fade-up" data-aos-delay="300">
        @csrf
        <div class="row gy-3">
          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
          </div>
          <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Email Anda" required>
          </div>
          <div class="col-md-12">
            <input type="text" name="subject" class="form-control" placeholder="Subjek" required>
          </div>
          <div class="col-md-12">
            <textarea name="message" rows="5" class="form-control" placeholder="Pesan Anda" required></textarea>
          </div>
          <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary px-4">Kirim Pesan</button>
          </div>
        </div>
      </form><!-- End Contact Form -->
  
    </div>
  </section>
  

  </main>
  <footer id="footer" class="footer bg-dark text-light py-5">

    <div class="container">
      <div class="row gy-4">
  
        <!-- Alamat -->
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon text-primary fs-3 me-3"></i>
          <div>
            <h5 class="text-white fw-bold">Alamat</h5>
            <p class="mb-1">Jl. Polisi No. 108</p>
            <p class="mb-0">Jakarta, Indonesia</p>
          </div>
        </div>
  
        <!-- Kontak -->
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon text-primary fs-3 me-3"></i>
          <div>
            <h5 class="text-white fw-bold">Kontak</h5>
            <p class="mb-1"><strong>Telp:</strong> +62 812-3456-7890</p>
            <p class="mb-0"><strong>Email:</strong> samsatdigital@example.com</p>
          </div>
        </div>
  
        <!-- Jam Operasional -->
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon text-primary fs-3 me-3"></i>
          <div>
            <h5 class="text-white fw-bold">Jam Operasional</h5>
            <p class="mb-1"><strong>Senin - Sabtu:</strong> 08.00 - 17.00</p>
            <p class="mb-0"><strong>Minggu:</strong> Tutup</p>
          </div>
        </div>
  
        <!-- Sosial Media -->
        <div class="col-lg-3 col-md-6">
          <h5 class="text-white fw-bold">Ikuti Kami</h5>
          <div class="social-links d-flex gap-3 mt-2">
            <a href="#" class="text-light fs-4"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="text-light fs-4"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-light fs-4"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-light fs-4"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
  
      </div>
    </div>
  
    <!-- Copyright -->
    <div class="container text-center mt-4">
      <p class="mb-1">© {{ now()->year }} <strong class="text-primary">SAMSAT Digital</strong>. Semua Hak Dilindungi.</p>
      <div class="credits small text-muted">
        Designed by <a href="https://bootstrapmade.com/" class="text-decoration-underline text-light">BootstrapMade</a>
      </div>
    </div>
    
  </footer>
  

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('front/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset ('front/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset ('front/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset ('front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset ('front/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset ('front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset ('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset ('front/assets/js/main.js') }}"></script>

  @livewireScripts
</body>


</html>