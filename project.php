
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
        <title>Sky Tech | Portofolio</title>

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
        <?= PageHeader('Project Kami', 'project', 'Portofolio') ?>
        <!-- content start -->

        <section class="case-study pt-130 pb-130 fade-wrapper">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="cs-item fade-top">
                            <div class="cs-thumb">
                                <img src="assets/img/images/cs-img-1.png" alt="img">
                                <a class="cs-btn" href="project-details.php"><i class="fa-light fa-arrow-right-long"></i></a>
                            </div>
                            <div class="cs-content">
                                <span class="number">01</span>
                                <h3 class="title"><a href="project-details.php">E-Commerce Platform</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cs-item fade-top">
                            <div class="cs-thumb">
                                <img src="assets/img/images/cs-img-2.png" alt="img">
                                <a class="cs-btn" href="project-details.php"><i class="fa-light fa-arrow-right-long"></i></a>
                            </div>
                            <div class="cs-content">
                                <span class="number">02</span>
                                <h3 class="title"><a href="project-details.php">Business Intelligence Dashboard</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cs-item fade-top">
                            <div class="cs-thumb">
                                <img src="assets/img/images/cs-img-3.png" alt="img">
                                <a class="cs-btn" href="project-details.php"><i class="fa-light fa-arrow-right-long"></i></a>
                            </div>
                            <div class="cs-content">
                                <span class="number">03</span>
                                <h3 class="title"><a href="project-details.php">Corporate Website Redesign</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cs-item fade-top">
                            <div class="cs-thumb">
                                <img src="assets/img/images/cs-img-4.png" alt="img">
                                <a class="cs-btn" href="project-details.php"><i class="fa-light fa-arrow-right-long"></i></a>
                            </div>
                            <div class="cs-content">
                                <span class="number">04</span>
                                <h3 class="title"><a href="project-details.php">System Integration for Manufacturing</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cs-item fade-top">
                            <div class="cs-thumb">
                                <img src="assets/img/images/cs-img-5.png" alt="img">
                                <a class="cs-btn" href="project-details.php"><i class="fa-light fa-arrow-right-long"></i></a>
                            </div>
                            <div class="cs-content">
                                <span class="number">05</span>
                                <h3 class="title"><a href="project-details.php">Digital Marketing Campaign for Retail Brand</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cs-item fade-top">
                            <div class="cs-thumb">
                                <img src="assets/img/images/cs-img-6.png" alt="img">
                                <a class="cs-btn" href="project-details.php"><i class="fa-light fa-arrow-right-long"></i></a>
                            </div>
                            <div class="cs-content">
                                <span class="number">06</span>
                            <h3 class="title"><a href="project-details.php">Risk Assessment & Cybersecurity Implementation</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ case-study -->

        <!-- content end -->
         <?= $Footer ?>
    </body>
</html>