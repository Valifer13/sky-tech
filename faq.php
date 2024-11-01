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
    <title>Sky Tech</title>

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
    <?= PageHeader('FaQ', 'faq') ?>
    <!-- content start -->

    <section class="faq-section pt-130 pb-130">
        <div class="container">
            <div class="row gy-lg-0 gy-4">
                <div class="col-lg-8 col-md-12">
                    <div class="faq-content-2">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        01. Apa yang termasuk dalam layanan konsultasi bisnis?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Layanan konsultasi bisnis kami mencakup analisis pasar, pemetaan resiko, dan perumusan strategi untuk membantu bisnis meningkatkan efisiensi dan mencapai tujuan jangka panjang.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        02. Apakah Sky Tech menyediakan desain website untuk semua jenis bisnis?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Ya, kami menyediakan layanan desain website yang dapat disesuaikan untuk berbagai jenis bisnis, baik itu perusahaan besar, UKM, hingga bisnis baru. Kami merancang website sesuai dengan identitas brand dan kebutuhan audiens Anda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        03. Berapa lama waktu yang dibutuhkan untuk mengembangkan perangkat lunak kustom?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Waktu pengembangan perangkat lunak kustom bervariasi tergantung pada kompleksitas proyek dan kebutuhan fitur. Secara umum, proyek dapat berlangsung antara beberapa minggu hingga beberapa bulan, dan kami akan memberikan estimasi waktu yang lebih spesifik setelah analisis kebutuhan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        04. Apakah layanan Analitik Data mencakup pembuatan laporan?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Ya, layanan Analitik Data kami mencakup pembuatan laporan yang mudah dipahami dan insight yang dapat membantu dalam pengambilan keputusan bisnis. Kami juga menyajikan data dalam bentuk visualisasi untuk memberikan gambaran yang lebih jelas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        05. Bagaimana Sky Tech mengamankan data klien selama proyek?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Kami menggunakan protokol keamanan yang ketat, termasuk enkripsi dan sistem akses terbatas, untuk melindungi data klien selama proyek berlangsung. Kami juga dapat memberikan rekomendasi keamanan tambahan jika diperlukan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        06. Apa manfaat dari Integrasi Sistem untuk perusahaan saya?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Integrasi Sistem memungkinkan berbagai aplikasi dan perangkat dalam perusahaan Anda bekerja lebih efisien, meningkatkan produktivitas, dan memungkinkan aliran data yang lancar. Hasilnya, proses kerja lebih cepat dan respons lebih baik terhadap perubahan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        07. Apakah Sky Tech menyediakan dukungan pasca-implementasi?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Ya, kami menyediakan dukungan teknis pasca-implementasi sesuai paket yang dipilih. Anda dapat memilih dari dukungan dasar, standar, atau premium yang mencakup pembaruan dan pemeliharaan berkala, serta bantuan teknis jika diperlukan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="faq-widget mb-40">
                        <div class="search-box">
                            <form action="" class="search-form">
                                <input type="text" class="form-control" placeholder="Ketik Kata Kunci">
                                <button class="search-btn" type="button">
                                    <i class="fa-light fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="faq-sponsor">
                        <img src="assets/img/images/sponsor-img.png" alt="img">
                        <h4 class="sponsor-text">Iklan</h4>
                        <h4 class="sponsor-text-2">424X350</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ faq-section -->

    <div class="running-text running-3">
        <div class="bg-img" data-background="assets/img/bg-img/running-bg.jpg"></div>
        <div class="carouselTicker carouselTicker-nav" data-speed="fast">
            <ul class="text-anim carouselTicker__list scroller__inner inner-3">
                <li>Berita Terbaru</li>
                <li class="stroke-text">Web Development</li>
                <li>Berita Terbaru</li>
                <li class="stroke-text">Web Development</li>
                <li>Berita Terbaru</li>
                <li class="stroke-text">Web Development</li>
                <li>Berita Terbaru</li>
                <li class="stroke-text">Web Development</li>
            </ul>
        </div>
    </div>
    <!-- ./ running-text -->

    <section class="blog-section-3 pt-130 pb-130">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading">BERITA & UPDATE TERBARU</h4>
                <h2 class="section-title">Periksa Kisah Dalam Perusahaan Kami</h2>
            </div>
            <div class="row gy-lg-0 gy-5 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="post-card-2 card-3">
                        <div class="post-thumb">
                            <img src="assets/img/blog/post-6.png" alt="post">
                        </div>
                        <div class="post-content-wrap">
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li><i class="fa-sharp fa-regular fa-clock"></i>25 June, 2024</li>
                                </ul>
                                <h3 class="title"><a href="blog-details.php">Inovasi Teknologi Dalam Tahun 2024</a></h3>
                                <a href="blog-details.php" class="rr-primary-btn">Baca Lebih <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="post-card-2 card-3">
                        <div class="post-thumb">
                            <img src="assets/img/blog/post-7.png" alt="post">
                        </div>
                        <div class="post-content-wrap">
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li><i class="fa-sharp fa-regular fa-clock"></i>25 June, 2024</li>
                                </ul>
                                <h3 class="title"><a href="blog-details.php">Cara Meningkatkan Efisiensi Bisnis Anda Dengan Solusi Digital </a></h3>
                                <a href="blog-details.php" class="rr-primary-btn">Baca lebih <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="post-card-2 card-3">
                        <div class="post-thumb">
                            <img src="assets/img/blog/post-8.png" alt="post">
                        </div>
                        <div class="post-content-wrap">
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li><i class="fa-sharp fa-regular fa-clock"></i>25 June, 2024</li>
                                </ul>
                                <h3 class="title"><a href="blog-details.php">Kesuksesan Proyek Terbaru Kami. Redesign Platform E-commerce</a></h3>
                                <a href="blog-details.php" class="rr-primary-btn">Baca Lebih<i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ blog-section -->

    <!-- content end -->
    <?= $Footer ?>
</body>

</html>