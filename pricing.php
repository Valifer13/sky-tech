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
        <title>Sky Tech | Pricing Plan</title>

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
        <?= PageHeader('Paket Harga', 'pricing') ?>
        <!-- content start -->

        <section class="pricing-section pt-130 pb-130">
            <div class="container">
                <div class="pricing-tab wow fade-in-bottom" data-wow-delay="500ms">
                    <nav class="nav-wrap">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Per-bulan</button>
                            <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Per-tahun <span>20%</span></button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row gy-lg-0 gy-4 justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-item">
                                        <h4 class="plan">Rencana Dasar</h4>
                                        <h2 class="price">$100</h2>
                                        <span>Fitur dasar untuk hingga 10 pengguna</span>
                                        <div class="pricing-btn-wrap">
                                            <a href="contact.php" class="rr-primary-btn pricing-btn">Hubungi Kami<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            <a href="pricing.php" class="rr-primary-btn pricing-btn">Tampilkan Detail<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                        </div>
                                        <h3 class="feature">Fitur:</h3>
                                        <ul>
                                            <li>Desain website dasar hingga 5 halaman</li>
                                            <li>Integrasi media sosial</li>
                                            <li>Hosting & domain gratis</li>
                                            <li>Dukungan teknis dasar</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-item">
                                        <h4 class="plan">Rencana Standar</h4>
                                        <h2 class="price">$250</h2>
                                        <span>Fitur menengah untuk hingga 50 pengguna</span>
                                        <div class="pricing-btn-wrap">
                                            <a href="contact.php" class="rr-primary-btn pricing-btn">Hubungi Kami<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            <a href="pricing.php" class="rr-primary-btn pricing-btn">Tampilkan Detail<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                        </div>
                                        <h3 class="feature">Fitur:</h3>
                                        <ul>
                                            <li>Desain website responsif hingga 10 halaman</li>
                                            <li>Optimasi SEO dasar blog</li>
                                            <li>Integrasi e-commerce dasar (jika diperlukan)</li>
                                            <li>Hosting & domain gratis</li>
                                            <li>Dukungan teknis dan pemeliharaan</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-item">
                                        <h4 class="plan">Rencana Premium</h4>
                                        <h2 class="price">$500</h2>
                                        <span>Premium fitur untuk hingga 100 pengguna</span>
                                        <div class="pricing-btn-wrap">
                                            <a href="contact.php" class="rr-primary-btn pricing-btn">Hubungi Kami<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            <a href="pricing.php" class="rr-primary-btn pricing-btn">Tampilkan Detail<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                        </div>
                                        <h3 class="feature">Fitur:</h3>
                                        <ul>
                                            <li>Desain Website kustom hingga 20 halaman</li>
                                            <li>Strategi dan optimasi SEO lanjutan</li>
                                            <li>Integrasi e-commerce lengkap dan sistem pembayaran</li>
                                            <li>Pengembangan fitur khusus (misalnya: booking system)</li>
                                            <li>Hosting & domain gratis</li>
                                            <li>Dukungan teknis dan pemeliharaan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row gy-lg-0 gy-4 justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-item">
                                        <h4 class="plan">Rencana Dasar</h4>
                                        <h2 class="price">$1.000</h2>
                                        <span>Fitur dasar untuk hingga 10 pengguna</span>
                                        <div class="pricing-btn-wrap">
                                            <a href="contact.php" class="rr-primary-btn pricing-btn">Hubungi Kami<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            <a href="pricing.php" class="rr-primary-btn pricing-btn">Tampilkan Detail<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                        </div>
                                        <h3 class="feature">Fitur:</h3>
                                        <ul>
                                            <li>Desain website dasar hingga 5 halaman</li>
                                            <li>Integrasi media sosial</li>
                                            <li>Hosting & domain gratis</li>
                                            <li>Dukungan teknis dasar</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-item">
                                        <h4 class="plan">Rencana Standar</h4>
                                        <h2 class="price">$2.500</h2>
                                        <span>Fitur menengah untuk hingga 50 pengguna</span>
                                        <div class="pricing-btn-wrap">
                                            <a href="contact.php" class="rr-primary-btn pricing-btn">Hubungi Kami<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            <a href="pricing.php" class="rr-primary-btn pricing-btn">Tampilkan Detail<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                        </div>
                                        <h3 class="feature">Fitur:</h3>
                                        <ul>
                                            <li>Desain website responsif hingga 10 halaman</li>
                                            <li>Optimasi SEO dasar blog</li>
                                            <li>Integrasi e-commerce dasar (jika diperlukan)</li>
                                            <li>Hosting & domain gratis</li>
                                            <li>Dukungan teknis dan pemeliharaan</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-item">
                                        <h4 class="plan">Rencana Premium</h4>
                                        <h2 class="price">$5.000</h2>
                                        <span>Premium fitur untuk hingga 100 pengguna</span>
                                        <div class="pricing-btn-wrap">
                                            <a href="contact.php" class="rr-primary-btn pricing-btn">Hubungi Kami<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                            <a href="pricing.php" class="rr-primary-btn pricing-btn">Tampilkan Detail<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                        </div>
                                        <h3 class="feature">Fitur:</h3>
                                        <ul>
                                            <li>Desain Website kustom hingga 20 halaman</li>
                                            <li>Strategi dan optimasi SEO lanjutan</li>
                                            <li>Integrasi e-commerce lengkap dan sistem pembayaran</li>
                                            <li>Pengembangan fitur khusus (misalnya: booking system)</li>
                                            <li>Hosting & domain gratis</li>
                                            <li>Dukungan teknis dan pemeliharaan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ pricing-section -->

        <div class="running-text running-3">
            <div class="bg-img" data-background="assets/img/bg-img/running-bg.jpg"></div>
            <div class="carouselTicker carouselTicker-nav" data-speed="fast">
                <ul class="text-anim carouselTicker__list scroller__inner inner-3">
                    <li>Project Terbaru</li>
                    <li class="stroke-text">Web Development</li>
                    <li>Project Terbaru</li>
                    <li class="stroke-text">Web Development</li>
                    <li>Project Terbaru</li>
                    <li class="stroke-text">Web Development</li>
                    <li>Project Terbaru</li>
                    <li class="stroke-text">Web Development</li>
                </ul>
            </div>
        </div>
        <!-- ./ running-text -->

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
                                <p>Desain website yang diberikan Sky Tech benar-benar mencerminkan brand kami. Tim mereka memahami visi kami dan menerjemahkannya ke dalam desain yang modern dan fungsional.</p>
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
                                <p>Sky Tech menciptakan website yang tidak hanya estetis, tetapi juga mudah digunakan oleh pelanggan kami. Perubahan ini langsung berdampak pada peningkatan konversi di bisnis kami.</p>
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
                                <p>Bekerja dengan tim Sky Tech sangat menyenangkan. Mereka sangat responsif dan proaktif dalam memberikan saran serta solusi yang tepat. Website baru kami sekarang lebih cepat, responsif, dan profesional.</p>
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