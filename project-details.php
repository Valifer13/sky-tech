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
    <?= PageHeader('Pengembangan Aplikasi Mobile untuk Startup Teknologi', 'project-details', 'Project Detail') ?>
    <!-- content start -->

    <section class="project-details pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-details-content">
                        <div class="project-details-img">
                            <img src="assets/img/project/project-img-1.jpg" alt="project">
                        </div>
                        <div class="project-details-items">
                            <div class="project-details-item">
                                <div class="icon"><i class="fa-solid fa-user"></i></div>
                                <div class="content">
                                    <span>Klien:</span>
                                    <h4 class="item-title">Josefin H. Smith</h4>
                                </div>
                            </div>
                            <div class="project-details-item">
                                <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                                <div class="content">
                                    <span>Kategory:</span>
                                    <h4 class="item-title">App Development</h4>
                                </div>
                            </div>
                            <div class="project-details-item">
                                <div class="icon"><i class="fa-solid fa-calendar-days"></i></div>
                                <div class="content">
                                    <span>Tanggal:</span>
                                    <h4 class="item-title">25 Maret, 2023</h4>
                                </div>
                            </div>
                            <div class="project-details-item">
                                <div class="icon"><i class="fa-sharp fa-solid fa-location-dot"></i></div>
                                <div class="content">
                                    <span>Alamat:</span>
                                    <h4 class="item-title">258 Ciledug Raya, Jakarta</h4>
                                </div>
                            </div>
                        </div>
                        <h3 class="details-title mb-30">Mobile Application Development</h3>
                        <p class="mb-30">Mendesain dan mengembangkan aplikasi mobile canggih untuk startup teknologi guna mendukung pertumbuhan bisnis dan meningkatkan keterlibatan pengguna.</p>
                        <div class="row project-details-wrap">
                            <div class="col-lg-8 col-md-12">
                                <div class="project-details-left">
                                    <div class="details-item">
                                        <h3 class="details-title">01. Tantangan</h3>
                                        <p>Mengintegrasikan fitur-fitur inovatif dalam aplikasi yang sesuai dengan kebutuhan spesifik startup dan memastikan performa yang optimal pada berbagai perangkat.</p>
                                    </div>
                                    <div class="details-item">
                                        <h3 class="details-title">02. Solusi</h3>
                                        <p class="desc mb-30">Menggunakan teknologi terbaru untuk menciptakan antarmuka pengguna yang intuitif, serta fitur-fitur seperti notifikasi push dan integrasi dengan media sosial untuk meningkatkan keterlibatan.</p>
                                    </div>
                                    <div class="details-item">
                                        <blockquote>
                                            <div class="icon"><i class="fa-light fa-quote-right"></i></div>
                                            <div class="content">
                                                <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam modi ea tenetur at reprehenderit! Eveniet sint nesciunt delectus fugit, beatae iusto libero incidunt fugiat quod?”</p>
                                                <h4 class="author">Monalisa Saisha</h4>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <div class="details-item">
                                        <h3 class="details-title">03. Hasil</h3>
                                        <p>Aplikasi sukses diluncurkan dengan rating pengguna 4.8/5 di toko aplikasi, meningkatkan keterlibatan pengguna sebesar 40% dalam tiga bulan pertama.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="project-details-thumb">
                                    <div class="details-thumb">
                                        <img src="assets/img/project/project-thumb-1.png" alt="project">
                                    </div>
                                    <div class="details-thumb">
                                        <img src="assets/img/project/project-thumb-2.png" alt="project">
                                    </div>
                                    <div class="details-thumb">
                                        <img src="assets/img/project/project-thumb-3.png" alt="project">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tags">
                            <div class="tag-left">
                                <ul class="tag-list">
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Repair</a></li>
                                    <li><a href="#">Services</a></li>
                                </ul>
                            </div>
                            <div class="social-list-wrap">
                                <h4 class="follow">Follow Us:</h4>
                                <ul class="social-list">
                                    <li>
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="next-prev-wrap">
                            <h4 class="post-btn"><a href="#"><span class="icon"><i class="fa-regular fa-chevron-left"></i></span>Previous post</a></h4>
                            <h4 class="post-btn"><a href="#">Next post <span class="icon"><i class="fa-regular fa-chevron-right"></i></span></a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ project-details -->

    <section class="case-study pb-130">
        <div class="container">
            <div class="section-heading">
                <h4 class="sub-heading after-none" data-text-animation="fade-in" data-duration="1.5">Case Studies</h4>
                <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Check Related Projects</h2>
            </div>
            <div class="row gy-lg-0 gy-4">
                <div class="col-lg-6">
                    <div class="cs-item">
                        <div class="cs-thumb">
                            <img src="assets/img/images/cs-img-1.png" alt="img">
                            <a class="cs-btn" href="#"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                        <div class="cs-content">
                            <span class="number">01</span>
                            <h3 class="title"><a href="#">Medical Application Design</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs-item">
                        <div class="cs-thumb">
                            <img src="assets/img/images/cs-img-2.png" alt="img">
                            <a class="cs-btn" href="#"><i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                        <div class="cs-content">
                            <span class="number">02</span>
                            <h3 class="title"><a href="#">Dashboard App Design</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ case-study -->

    <div class="comments-area">
        <div class="container">
            <div class="section-heading">
                <h4 class="sub-heading after-none" data-text-animation="fade-in" data-duration="1.5">Proses Kerja</h4>
                <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Komen (3)</h2>
            </div>
            <div class="comment-item">
                <div class="comment-thumb">
                    <img src="assets/img/blog/comment-thumb-1.jpg" alt="author">
                </div>
                <div class="comment-info">
                    <div class="comments-meta">
                        <span><i class="fa-light fa-circle-user"></i>10 Dec, 2023 </span>
                    </div>
                    <h3 class="author">Daniel Adam </h3>
                    <p>
                        Wah, setuju banget! Teknologi memang kunci buat bisnis maju sekarang. Tapi semoga UMKM juga bisa ikutan, ya. Jangan cuma perusahaan besar yang menikmati manfaatnya. Kira-kira ada solusi atau subsidi dari pemerintah buat bantu UMKM adopsi teknologi ini?
                    </p>
                    <button class="reply">Balas<i class="fa-solid fa-reply"></i></button>
                </div>
            </div>
            <div class="comment-item item-2">
                <div class="comment-thumb">
                    <img src="assets/img/blog/comment-thumb-2.jpg" alt="author">
                </div>
                <div class="comment-info">
                    <div class="comments-meta">
                        <span><i class="fa-light fa-circle-user"></i>10 Dec, 2023 </span>
                    </div>
                    <h3 class="author">Sara </h3>
                    <p>
                        Kalau ada sih membantu banget!
                    </p>
                    <button class="reply">Balas<i class="fa-solid fa-reply"></i></button>
                </div>
            </div>
            <div class="comment-item">
                <div class="comment-thumb">
                    <img src="assets/img/blog/comment-thumb-3.jpg" alt="author">
                </div>
                <div class="comment-info">
                    <div class="comments-meta">
                        <span><i class="fa-light fa-circle-user"></i>10 Dec, 2023 </span>
                    </div>
                    <h3 class="author">Zenelia Lozhe </h3>
                    <p>
                        Project yang menarik! Tapi jangan lupa, teknologi canggih tanpa SDM yang mumpuni juga percuma. Menurut saya, fokus utama harus di pendidikan dan pelatihan karyawan biar bisa mengoperasikan teknologi terbaru dengan maksimal.
                    </p>
                    <button class="reply">Balas<i class="fa-solid fa-reply"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ comments-area -->

    <div class="form-wrap pt-70 pb-130">
        <div class="container">
            <div class="blog-contact-form">
                <h2 class="title">Tinggalkan Balasan</h2>
                <p>Alamat email mu tidak akan dipublish. Area yang dibutuhkan ditandai *</p>
                <div class="request-form">
                    <form action="https://html.rrdevs.net/runok/contact.php" method="post" id="ajax_contact" class="form-horizontal">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-item">
                                    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Nama Anda">
                                    <div class="icon"><i class="fa-regular fa-user"></i></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-item">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email Anda">
                                    <div class="icon"><i class="fa-sharp fa-regular fa-envelope"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-item message-item">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Pesan"></textarea>
                                    <div class="icon"><i class="fa-light fa-messages"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-btn">
                            <button id="submit" class="rr-primary-btn" type="submit">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ form-wrap -->

    <!-- content end -->
    <?= $Footer ?>
</body>

</html>