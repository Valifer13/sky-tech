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
    <?= PageHeader('Blog Kami', 'blog', 'blog') ?>
    <!-- content start -->

    <section class="blog-section pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="grid-post-wrap-2">
                        <div class="post-card-2 card-3 inner-blog-2">
                            <div class="post-thumb">
                                <img src="assets/img/blog/grid-post-4.png" alt="post">
                            </div>
                            <div class="post-content-wrap">
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li><i class="fa-sharp fa-regular fa-clock"></i>25 June, 2024</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-details.php">Keamanan Siber untuk Bisnis: 7 Langkah Perlindungan Data yang Efektif</a></h3>
                                    <p>Menyajikan tren teknologi terkini yang dapat membantu bisnis tetap kompetitif, seperti kecerdasan buatan, automasi, dan analitik data. Artikel ini memberikan wawasan tentang bagaimana bisnis dapat memanfaatkan teknologi untuk meningkatkan efisiensi dan inovasi.</p>
                                    <a href="blog-details.php" class="rr-primary-btn">Baca Lebih <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="post-card-2 card-3 inner-blog-2">
                            <div class="post-thumb">
                                <img src="assets/img/blog/grid-post-5.png" alt="post">
                            </div>
                            <div class="post-content-wrap">
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li><i class="fa-sharp fa-regular fa-clock"></i>25 June, 2024</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-details.php">Meningkatkan Efisiensi dengan Teknologi Baru</a></h3>
                                    <p>Temukan bagaimana teknologi terbaru dapat meningkatkan efisiensi operasional perusahaan Anda dan memberikan keunggulan kompetitif.</p>
                                    <a href="blog-details.php" class="rr-primary-btn">Baca Lebih <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="post-card-2 card-3 inner-blog-2">
                            <div class="post-thumb">
                                <img src="assets/img/blog/grid-post-6.png" alt="post">
                            </div>
                            <div class="post-content-wrap">
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li><i class="fa-sharp fa-regular fa-clock"></i>25 June, 2024</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-details.php">Strategi Pemasaran Digital yang Efektif di 2024</a></h3>
                                    <p>Pelajari strategi pemasaran digital yang terbukti efektif dan bagaimana menerapkannya untuk meningkatkan visibilitas dan konversi bisnis Anda.</p>
                                    <a href="blog-details.php" class="rr-primary-btn">Baca Lebih <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="post-card-2 card-3 inner-blog-2">
                            <div class="post-thumb">
                                <img src="assets/img/blog/grid-post-7.png" alt="post">
                            </div>
                            <div class="post-content-wrap">
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li><i class="fa-sharp fa-regular fa-clock"></i>25 June, 2024</li>
                                        <li><i class="fa-light fa-user"></i>Post by: Admin</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-details.php">Mengoptimalkan Data untuk Keputusan Bisnis</a></h3>
                                    <p>Pelajari bagaimana analitik data dapat membantu Anda membuat keputusan bisnis yang lebih informatif dan strategis.</p>
                                    <a href="blog-details.php" class="rr-primary-btn">Baca Lebih <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- content end -->
    <?= $Footer ?>
</body>

</html>