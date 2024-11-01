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
        <?= PageHeader('Software Development', 'service-details', 'Detail Layanan') ?>
        <!-- content start -->

        <section class="service-details pt-130 pb-130">
            <div class="container">
                <div class="row gy-lg-0 gy-5">
                    <div class="col-lg-8 col-md-12">
                        <div class="sidebar-content-wrap">
                            <div class="service-details-img">
                                <img src="assets/img/service/service-details-img.jpg" alt="service">
                            </div>
                            <div class="service-details-content">
                                <h2 class="title">Software Development</h2>
                                <p class="mb-30">Sky Tech menyediakan layanan pengembangan perangkat lunak kustom yang dirancang untuk memenuhi kebutuhan unik bisnis Anda. Kami membangun solusi yang aman dan dapat diskalakan, menggunakan teknologi mutakhir agar sesuai dengan tujuan bisnis jangka panjang Anda. Setiap proyek dimulai dengan analisis mendalam atas kebutuhan operasional perusahaan Anda, diikuti oleh desain perangkat lunak yang intuitif dan efisien, sehingga solusi yang kami hasilkan benar-benar selaras dengan target Anda.</p>
                                <p class="mb-50">Dengan pendekatan metodologi Agile, kami memastikan pengembangan perangkat lunak berlangsung secara iteratif dan adaptif. Pendekatan ini memfasilitasi pengembangan yang lebih cepat dan responsif, memungkinkan perbaikan di setiap tahapan proses. Hasilnya adalah perangkat lunak berkualitas tinggi yang tidak hanya memenuhi standar teknis, tetapi juga membantu bisnis Anda meningkatkan efisiensi, produktivitas, dan fleksibilitas operasional.</p>
                                <h2 class="title">4 langkah simple saat proses</h2>
                                <div class="details-box-wrap">
                                    <div class="details-box">
                                        <span class="number">01</span>
                                        <div class="content">
                                            <h4 class="title">Konsultasi & Analisis Kebutuhan:</h4>
                                            <p>Kami memulai dengan diskusi mendalam bersama tim Anda untuk memahami tantangan dan kebutuhan spesifik bisnis. Tahap ini melibatkan analisis operasional dan identifikasi area yang dapat ditingkatkan melalui perangkat lunak.</p>
                                        </div>
                                    </div>
                                    <div class="details-box">
                                        <span class="number">02</span>
                                        <div class="content">
                                            <h4 class="title">Desain & Perancangan Solusi:</h4>
                                            <p>Berdasarkan hasil analisis, kami merancang solusi yang mencakup fungsionalitas inti dan fitur tambahan yang mendukung tujuan bisnis Anda. Desain ini dibuat dengan mempertimbangkan antarmuka pengguna (UI) yang intuitif dan pengalaman pengguna (UX) yang efisien.</p>
                                        </div>
                                    </div>
                                    <div class="details-box">
                                        <span class="number">03</span>
                                        <div class="content">
                                            <h4 class="title">Pengembangan & Pengujian Iteratif</h4>
                                            <p>Menggunakan pendekatan Agile, kami membangun perangkat lunak secara bertahap dan menguji setiap komponen untuk memastikan kualitas dan performa. Feedback dari pengujian ini diterapkan pada setiap siklus untuk menghasilkan perangkat lunak yang optimal.</p>
                                        </div>
                                    </div>
                                    <div class="details-box">
                                        <span class="number">04</span>
                                        <div class="content">
                                            <h4 class="title">Implementasi & Pemeliharaan:</h4>
                                            <p>Setelah pengembangan selesai, kami membantu dalam implementasi perangkat lunak di lingkungan kerja Anda, termasuk pelatihan staf dan dukungan teknis. Kami juga menyediakan pemeliharaan berkelanjutan untuk memastikan perangkat lunak selalu berjalan optimal sesuai perkembangan kebutuhan bisnis.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-40">Penjelasan dan langkah ini menunjukkan betapa telitinya proses pengembangan perangkat lunak kami, sehingga klien dapat lebih memahami nilai tambah yang ditawarkan Sky Tech.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="service-widget">
                            <h3 class="widget-title">Kategori</h3>
                            <ul class="category-list">
                                <li class="active"><a href="#"><i class="fa-sharp fa-regular fa-arrow-right"></i>Desain User Experience</a></li>
                                <li><a href="#"><i class="fa-sharp fa-regular fa-arrow-right"></i> Solusi E-Commerce</a></li>
                                <li><a href="#"><i class="fa-sharp fa-regular fa-arrow-right"></i> Content Management Systems</a></li>
                                <li><a href="#"><i class="fa-sharp fa-regular fa-arrow-right"></i> Back-End Development</a></li>
                                <li><a href="#"><i class="fa-sharp fa-regular fa-arrow-right"></i> Search Engine Optimization</a></li>
                            </ul>
                        </div>
                        <div class="service-widget sticky-widget">
                            <h3 class="widget-title">Download</h3>
                            <div class="download-area">
                                <div class="download-item">
                                    <div class="left-item">
                                        <div class="icon">
                                            <img class="dark-img" src="assets/img/icon/download-icon-1.png" alt="icon">
                                            <img class="light-img" src="assets/img/icon/download-icon-1-light.png" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h3 class="title">Brosur Kami</h3>
                                            <a href="#">Download</a>
                                        </div>
                                    </div>
                                    <a href="#" class="download-btn"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                                <div class="download-item">
                                    <div class="left-item">
                                        <div class="icon">
                                            <img class="dark-img" src="assets/img/icon/download-icon-2.png" alt="icon">
                                            <img class="light-img" src="assets/img/icon/download-icon-2-light.png" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h3 class="title">Detail Perusahaan</h3>
                                            <a href="#">Download</a>
                                        </div>
                                    </div>
                                    <a href="#" class="download-btn"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ service-details -->

        <!-- content end -->
         <?= $Footer ?>
    </body>
</html>