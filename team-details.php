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
        <?= PageHeader('Tim Detail', 'team-details', 'Tim Detail') ?>
        <!-- content start -->

        <section class="team-author pt-130 pb-130">
            <div class="container">
                <div class="row author-wrap align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="author-img">
                            <img src="assets/img/team/author-img.png" alt="author">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="author-content">
                            <h2 class="name">John Smith <span>Founder & CEO</span></h2>
                            <p>John Smith memiliki keahlian yang kuat dalam bisnis dan teknologi informasi (IT). Selain pengalaman lebih dari 10 tahun di industri, ia juga menguasai manajemen bisnis, strategi pengembangan perusahaan, serta pemahaman mendalam tentang solusi IT seperti integrasi sistem dan optimasi proses bisnis. Kombinasi keahlian bisnis dan IT ini membuat John mampu membangun Sky Tech dengan fondasi yang kokoh, mengantarkannya menjadi perusahaan yang fokus pada inovasi dan kebutuhan klien, serta memberikan solusi teknologi yang relevan dan efektif.</p>
                            <div class="author-items">
                                <div class="author-item">
                                    <div class="icon"><i class="fa-solid fa-user"></i></div>
                                    <div class="content">
                                        <h4><span>Pengalaman</span>Lebih Dari 10 Tahun</h4>
                                    </div>
                                </div>
                                <div class="author-item">
                                    <div class="icon"><i class="fa-sharp fa-solid fa-envelope"></i></div>
                                    <div class="content">
                                        <h4><span>Email</span><a href="#">john@example.com</a></h4>
                                    </div>
                                </div>
                                <div class="author-item">
                                    <div class="icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                                    <div class="content">
                                        <h4><span>Telephone</span><a href="#">+(XX) XXX-XXXX-XXXX</a></h4>
                                    </div>
                                </div>
                                <div class="author-item">
                                    <div class="icon"><i class="fa-sharp fa-solid fa-fax"></i></div>
                                    <div class="content">
                                        <h4><span>Fax</span><a href="#">+XXXXXXXXXXXX</a></h4>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="rr-primary-btn">Hubungi Saya</a>        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ team-section -->

        <section class="expertise-area pb-130">
            <div class="container">
                <div class="row expert-wrap gy-lg-0 gy-4 align-items-center">
                    <div class="col-xl-6 col-lg-12">
                        <div class="expertise-content">
                            <div class="section-heading">
                                <h4 class="sub-heading after-none" data-text-animation="fade-in" data-duration="1.5">Keahlian Tim Kami</h4>
                                <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Kami mempunyai banyak pengalaman dan para profesional</h2>
                                <p>Tingkatkan bisnis anda dengan bekerja sama dengan para ahli kami!</p>
                            </div>
                            <ul class="details-progress">
                                <li class="skills-item">
                                    <h5 class="title">Web Development</h5>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" role="progressbar" style="width: 70%; visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: slideInLeft;">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="skills-item">
                                    <h5 class="title">Desain Aplikasi</h5>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="200ms" data-wow-duration="2000ms" role="progressbar" style="width: 90%; visibility: visible; animation-duration: 2000ms; animation-delay: 200ms; animation-name: slideInLeft;">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="skills-item">
                                    <h5 class="title">Digital Marketing</h5>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="300ms" data-wow-duration="2000ms" role="progressbar" style="width: 80%; visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: slideInLeft;">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="expertise-img-wrap">
                            <div class="bg-shape" data-background="assets/img/shapes/expert-bg-shape.png"></div>
                            <img class="exp-img img-1" src="assets/img/images/expert-1.png" alt="img">
                            <img class="exp-img img-2" src="assets/img/images/expert-2.png" alt="img">
                            <img class="exp-img img-3" src="assets/img/images/expert-3.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ expertise-section -->


        <!-- content end -->
         <?= $Footer ?>
    </body>
</html>