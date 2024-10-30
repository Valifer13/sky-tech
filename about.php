<?php 

require_once 'assets/inc/Navbar.php';
require_once 'assets/inc/PageHeader.php';
require_once 'assets/inc/Footer.php';

?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <!-- site title -->
        <title>Sky Tech | Tentang</title>

        <!-- place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <!-- css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/css/venobox.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/keyframe-animation.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/swiper.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>

    <body>
        <?= $Navbar ?>
        <?= PageHeader('Tentang Perusahaan Kami', 'about', 'Tentang Kami') ?>
        <!-- content start -->

        <section class="about-section-2 pt-130 pb-130">
            <div class="container">
                <div class="row about-wrap-2 gy-lg-0 gy-4 align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="about-img-box">
                            <div class="shapes">
                                <img class="shape shape-1" src="assets/img/shapes/about-shape-1.png" alt="about">
                                <img class="shape shape-2" src="assets/img/shapes/about-shape-2.png" alt="about">
                            </div>
                            <div class="img-1 reveal">
                                <img src="assets/img/images/about-img-2.jpg" alt="about">
                            </div>
                            <div class="img-2 reveal">
                                <img src="assets/img/images/about-img-3.jpg" alt="about">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="about-content-2">
                            <div class="section-heading">
                                <h4 class="sub-heading after-none" data-text-animation="fade-in" data-duration="1.5">Tentang Perusahaan Kami</h4>
                                <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Kami memberikan solusi teknologi terbaik di kota</h2>
                                <p>Red Company adalah perusahaan teknologi yang berfokus pada solusi inovatif untuk meningkatkan efisiensi bisnis. Kami hadir untuk membantu klien mencapai kesuksesan melalui layanan berkualitas tinggi.</p>
                            </div>
                            <div class="about-items">
                                <div class="about-item">
                                    <div class="icon"><img src="assets/img/icon/about-1.png" alt="icon"></div>
                                    <div class="content"><h4 class="title">Menjadi pemimpin global dalam solusi teknologi inovatif.</h4></div>
                                </div>
                                <div class="about-item">
                                    <div class="icon"><img src="assets/img/icon/about-2.png" alt="icon"></div>
                                    <div class="content"><h4 class="title">Memberikan nilai tambah kepada klien dengan layanan teknologi terdepan dan pendekatan yang disesuaikan.</h4></div>
                                </div>
                            </div>
                            <a href="#" class="rr-primary-btn">Mulai Sekarang<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ about-section -->

        <section class="process-section-2 fade-wrapper">
            <div class="container">
                <div class="section-heading text-center">
                    <span class="bg-text">Studio</span>
                    <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5">Layanan Kami</h4>
                    <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Layanan Berkualitas Untuk Menumbuhkan <br> Identitas Branding Anda</h2>
                </div>
                <div class="row gy-lg-0 gy-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="process-box fade-top">
                            <span class="number">01</span>
                            <h3 class="title">Konsultasi Bisnis</h3>
                            <p>Layanan konsultasi untuk membantu perusahaan merancang strategi bisnis, meningkatkan efisiensi operasional, dan mencapai tujuan jangka panjang.</p>
                            <a href="about.php" class="read-more">Baca Lebih<i class="fa-sharp fa-regular fa-chevrons-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="process-box fade-top">
                            <span class="number">02</span>
                            <h3 class="title">Pengembangan Perangkat Lunak</h3>
                            <p>Pengembangan aplikasi dan perangkat lunak yang inovatif untuk mendukung operasi bisnis dan memenuhi kebutuhan teknologi modern.</p>
                            <a href="about.php" class="read-more">Baca Lebih<i class="fa-sharp fa-regular fa-chevrons-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="process-box fade-top">
                            <span class="number">03</span>
                            <h3 class="title">Solusi Digital</h3>
                            <p>Layanan digital termasuk desain web, pemasaran digital, dan pengelolaan media sosial untuk meningkatkan kehadiran online dan engagement klien.</p>
                            <a href="about.php" class="read-more">Baca Lebih<i class="fa-sharp fa-regular fa-chevrons-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ process-section-2 -->

        <section class="counter-section counter-2">
            <div class="container">
                <div class="row gy-lg-0 gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item">
                            <h3 class="title"><span class="odometer" data-count="10">0</span></h3>
                            <p>Tahun <br>Pengalaman</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item">
                            <h3 class="title"><span class="odometer" data-count="18">0</span></h3>
                            <p>Kinerja <br> Terampil</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item">
                            <h3 class="title"><span class="odometer" data-count="32">0</span></h3>
                            <p>Mengunjungi <br> Konferensi</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item">
                            <h3 class="title"><span class="odometer" data-count="1">0</span>k</h3>
                            <p>Klien <br>Puas</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ counter-section -->

        <div class="running-text running-3">
            <div class="bg-img" data-background="assets/img/bg-img/running-bg.jpg"></div>
            <div class="carouselTicker carouselTicker-nav" data-speed="fast">
                <ul class="text-anim carouselTicker__list scroller__inner inner-3">
                    <li>Project Terbaru</li>
                    <li class="stroke-text">Web Development</li>
                    <li>Project Terbaru</li>
                    <li class="stroke-text">Design UI/UX</li>
                    <li>Project Terbaru</li>
                    <li class="stroke-text">Integrasi Sistem</li>
                    <li>Project Terbaru</li>
                    <li class="stroke-text">Design System</li>
                </ul>
            </div>
        </div>
        <!-- ./ running-text -->

        <section class="about-section-5 pt-130 pb-130">
            <div class="container">
                <div class="row gy-lg-0 gy-4">
                    <div class="col-lg-6">
                        <div class="about-content-5">
                            <div class="section-heading">
                                <h4 class="sub-heading after-none" data-text-animation="fade-in" data-duration="1.5">Tentang Perusahaan</h4>
                                <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Tujuan utama kami adalah untuk memuaskan klien lokal dan global</h2>
                            </div>
                            <div class="about-tab">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Misi Kami</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Visi Kami</button>
                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Tujuan Kami</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <h3 class="title">Misi Kami</h3>
                                        <p class="mb-20">Memberikan nilai tambah kepada klien dengan layanan teknologi terdepan dan pendekatan yang disesuaikan.</p>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <h3 class="title">Visi Kami</h3>
                                        <p class="mb-20">Menjadi pemimpin global dalam solusi teknologi inovatif</p>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <h3 class="title">Tujuan Kami</h3>
                                        <p class="mb-20">Membawa dunia menuju ke tempat yang lebih baik dengan dukungan teknologi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img-wrap-5">
                            <div class="shapes">
                                <div class="shape shape-1"><img src="assets/img/shapes/about-shape-4.png" alt="shape"></div>
                                <div class="shape shape-2"><img src="assets/img/shapes/about-shape-5.png" alt="shape"></div>
                            </div>
                            <div class="about-img reveal">
                                <img class="img-1" src="assets/img/images/about-img-8.png" alt="img">
                            </div>
                            <div class="about-img-2 reveal">
                                <img class="img-2" src="assets/img/images/about-img-9.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ about-section -->

        <section class="team-section fade-wrapper">
            <div class="container">
                <div class="section-heading text-center">
                    <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5">Anggota Tim</h4>
                    <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Tim Ahli Kami Ingin Mendengar Pendapat Anda!</h2>
                </div>
                <div class="row gy-lg-0 gy-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item fade-top">
                            <div class="team-thumb">
                                <div class="gradient-color"></div>
                                <img src="assets/img/team/team-1.png" alt="team">
                                <ul class="team-social-2">
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.php">John Smith</a></h3>
                                <span>Ui/Ux Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item fade-top">
                            <div class="team-thumb">
                                <div class="gradient-color"></div>
                                <img src="assets/img/team/team-9.png" alt="team">
                                <ul class="team-social-2">
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.php">William Edward</a></h3>
                                <span>Project Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item fade-top">
                            <div class="team-thumb">
                                <div class="gradient-color"></div>
                                <img src="assets/img/team/team-10.png" alt="team">
                                <ul class="team-social-2">
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.php">John Doe</a></h3>
                                <span>Product Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item fade-top">
                            <div class="team-thumb">
                                <div class="gradient-color"></div>
                                <img src="assets/img/team/team-11.png" alt="team">
                                <ul class="team-social-2">
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><a href="team-details.php">Michael Brown</a></h3>
                                <span>Web Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ team-section -->

        <section class="testimonial-section pt-130 pb-130 fade-wrapper">
            <div class="container">
                <div class="section-heading heading-3 text-center">
                    <h4 class="sub-heading" data-text-animation="fade-in" data-duration="1.5">Testimonial</h4>
                    <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Ulasan Klien</h2>
                </div>
                <div class="row gy-lg-0 gy-4 testi-wrap justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="testi-item item-3 text-center fade-top">
                            <div class="testi-thumb">
                                <img src="assets/img/testi/testi-author-1.png" alt="img">
                            </div>
                            <div class="testi-content">
                                <h3 class="author">Daniel Joseph <span>Writter</span></h3>
                                <p>Desain website yang diberikan Red Company benar-benar mencerminkan brand kami. Tim mereka memahami visi kami dan menerjemahkannya ke dalam desain yang modern dan fungsional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="testi-item item-3 text-center fade-top">
                            <div class="testi-thumb">
                                <img src="assets/img/testi/testi-author-3.png" alt="img">
                            </div>
                            <div class="testi-content">
                                <h3 class="author">Victoria Madison <span>Writter</span></h3>
                                <p>Red Company menciptakan website yang tidak hanya estetis, tetapi juga mudah digunakan oleh pelanggan kami. Perubahan ini langsung berdampak pada peningkatan konversi di bisnis kami.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="testi-item item-3 mb-0 text-center fade-top">
                            <div class="testi-thumb">
                                <img src="assets/img/testi/testi-author-2.png" alt="img">
                            </div>
                            <div class="testi-content">
                                <h3 class="author">Nicholas Thomas <span>Writter</span></h3>
                                <p>Bekerja dengan tim Red Company sangat menyenangkan. Mereka sangat responsif dan proaktif dalam memberikan saran serta solusi yang tepat. Website baru kami sekarang lebih cepat, responsif, dan profesional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ testimonial-section -->

        <!-- content end -->
         <?= $Footer ?>
    </body>
</html>