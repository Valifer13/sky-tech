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
    <?= PageHeader('Kontak Kami', 'contact', 'contact') ?>
    <!-- content start -->

    <section class="contact-section pt-130 pb-130">
        <div class="container">
            <div class="row gy-lg-0 gy-5">
                <div class="col-lg-5 col-md-12">
                    <div class="contact-content">
                        <div class="section-heading">
                            <h4 class="sub-heading after-none" data-text-animation="fade-in" data-duration="1.5">Kontak Kami</h4>
                            <h2 class="section-title" data-text-animation data-split="word" data-duration="1">Mari Bekerja Sama</h2>
                            <p>Terima kasih atas minat Anda pada lampiran web agensi. Kami senang mendengar kabar dari Anda dan berdiskusi...</p>
                        </div>
                        <div class="contact-list">
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-light fa-location-dot"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Alamat Kami</h4>
                                    <p>Jl. Ratna No 68 G, Tonja, Denpasar Utara, Denpasar - Bali . 80239</p>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-light fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Nomor Telepon</h4>
                                    <span><a href="tel:+6281138010808">(+62) 831 1958 7745</a></span>
                                    <span><a href="mailto:info@redsystem.id">info@redsystem.id</a></span>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="icon">
                                    <i class="fa-light fa-clock"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Jam Beroperasi</h4>
                                    <span>Senin - Jumat: 09:00 - 18:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="blog-contact-form form-2">
                        <div class="request-form">
                            <form action="https://html.rrdevs.net/runok/mail.php" method="post" id="ajax_contact" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Nama Awal">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Nama Akhir">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" id="email" name="email" class="form-control" placeholder="Alamat Email*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-item">
                                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Nomor Telephone*">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-item">
                                            <div class="nice-select select-control form-control country" tabindex="0"><span class="current"></span>
                                                <ul class="list">
                                                    <li data-value="" class="option selected focus">Pilih Topik</li>
                                                    <li data-value="vdt" class="option">Website Development</li>
                                                    <li data-value="can" class="option">Konsultasi Bisnis</li>
                                                    <li data-value="uk" class="option">Integrasi Sistem</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-item message-item">
                                            <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Pesan"></textarea>
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
        </div>
    </section>
    <!-- ./ contact-section -->

    <div class="map-wrapper pb-130">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.536563976963!2d115.22573747589546!3d-8.640409091406195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f9abc13c59f%3A0x4fad65985410b402!2sBali%20Business%20Consultant%20RED%20GROUP!5e0!3m2!1sid!2sid!4v1730439918479!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- ./ map-wrapper -->

    <!-- content end -->
    <?= $Footer ?>
</body>

</html>