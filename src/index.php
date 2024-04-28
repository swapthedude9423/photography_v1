<?php
// Include the database configuration file
//require_once './db/config.php';

// Establish database connection
//$conn = db_connect();

// Fetch data from the database
// Your database queries go here...

// Close database connection
//db_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title -->
    <title>Alime - Photography HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css" />
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="./js/pannellum.js"></script>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i
                                class="ti-close"></i></button>
                        <!-- Form -->
                        <form action="index.php" method="post">
                            <input type="search" name="top-search-bar" class="form-control"
                                placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="./index.php"><img src="./img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./index.php">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./index.php">- Home</a></li>
                                            <li><a href="./about.php">- About</a></li>
                                            <li><a href="./gallery.php">- Gallery</a></li>
                                            <li><a href="./blog.php">- Blog</a></li>
                                            <li><a href="./single-blog.php">- Blog Details</a></li>
                                            <li><a href="./contact.php">- Contact</a></li>
                                            <li><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="./about.php">About</a></li>
                                    <li><a href="./gallery.php">Gallery</a></li>
                                    <li><a href="./blog.php">Blog</a></li>
                                    <li><a href="./contact.php">Contact</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i
                                        class="ti-search"></i></div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel owl-theme">

            <div class="single-welcome-slide bg-img bg-overlay">
                <div id="panorama1">
                    <script>
                    pannellum.viewer('panorama1', {
                        "type": "equirectangular",
                        "panorama": "./img/360view/pano_1.jpg",
                        "autoLoad": true,
                        "mouseZoom": false,
                        "showZoomCtrl": false,
                        "showFullscreenCtrl": false,
                        "border": false,
                        "autoRotate": 4,
                        "draggable": false,
                        "northOffset": 0,
                        "backgroundColor": ([0, 0, 0]),
                        "compass": false
                    });
                    </script>
                </div>
            </div>
            <div class="single-welcome-slide bg-img bg-overlay">
                <div id="panorama2">
                    <script>
                    pannellum.viewer('panorama2', {
                        "type": "equirectangular",
                        "panorama": "./img/360view/pano_3.jpg",
                        "autoLoad": true,
                        "showZoomCtrl": false,
                        "showFullscreenCtrl": false,
                        "border": false,
                        "mouseZoom": false,
                        "draggable": false,
                        "autoRotate": 4,
                        "northOffset": 0,
                        "backgroundColor": ([0, 0, 0]),
                        "compass": false
                    });
                    </script>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*">All</button>
                            <button class="btn" data-filter=".human">Human</button>
                            <button class="btn" data-filter=".nature">Nature</button>
                            <button class="btn" data-filter=".country">Country</button>
                            <button class="btn" data-filter=".video">Video</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row alime-portfolio">
                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp"
                    data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <a href="./360photo.php">
                            <img src="img/bg-img/3.jpg" alt="">
                            <!-- <div class="hover-content">
                            <a href="img/bg-img/3.jpg" class="portfolio-img">+</a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item video human mb-30 wow fadeInUp"
                    data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <a href="./360photo.php">
                            <img src="img/bg-img/4.jpg" alt="">
                            <!-- <div class="hover-content">
                            <a href="img/bg-img/4.jpg" class="portfolio-img">+</a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item country mb-30 wow fadeInUp"
                    data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <a href="./360photo.php">
                            <img src="img/bg-img/5.jpg" alt="">
                            <!-- <div class="hover-content">
                            <a href="img/bg-img/5.jpg" class="portfolio-img">+</a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp"
                    data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <a href="./360photo.php">
                            <img src="img/bg-img/6.jpg" alt="">
                            <!-- <div class="hover-content">
                            <a href="img/bg-img/6.jpg" class="portfolio-img">+</a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp"
                    data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <a href="./360photo.php">
                            <img src="img/bg-img/7.jpg" alt="">
                            <!-- <div class="hover-content">
                            <a href="img/bg-img/7.jpg" class="portfolio-img">+</a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item video country mb-30 wow fadeInUp"
                    data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <a href="./360photo.php">
                            <img src="img/bg-img/8.jpg" alt="">
                            <!-- <div class="hover-content">
                            <a href="img/bg-img/8.jpg" class="portfolio-img">+</a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp"
                    data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <a href="./360photo.php">
                            <img src="img/bg-img/10.jpg" alt="">
                            <!-- <div class="hover-content">
                            <a href="img/bg-img/10.jpg" class="portfolio-img">+</a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item nature mb-30 wow fadeInUp"
                    data-wow-delay="700ms">
                    <div class="single-portfolio-content">
                        <a href="./360photo.php">
                            <img src="img/bg-img/9.jpg" alt="">
                            <!-- <div class="hover-content">
                            <a href="img/bg-img/9.jpg" class="portfolio-img">+</a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-6 single_gallery_item video country mb-30 wow fadeInUp"
                    data-wow-delay="100ms">
                    <div class="single-portfolio-content">
                        <a href="./360photo.php">
                            <img src="img/bg-img/36.jpg" alt="">
                            <!-- <div class="hover-content">
                            <a href="img/bg-img/36.jpg" class="portfolio-img">+</a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item human mb-30 wow fadeInUp"
                    data-wow-delay="300ms">
                    <div class="single-portfolio-content">
                        <a href="./360photo.php">
                            <img src="img/bg-img/37.jpg" alt="">
                            <!-- <div class="hover-content">
                            <a href="img/bg-img/37.jpg" class="portfolio-img">+</a>
                        </div> -->
                    </div>
                </div>

                <!-- Single Gallery Item -->
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item country mb-30 wow fadeInUp"
                    data-wow-delay="500ms">
                    <div class="single-portfolio-content">
                        <a href="./360photo.php">
                            <img src="img/bg-img/5.jpg" alt="">
                            <!-- <div class="hover-content">
                            <a href="img/bg-img/5.jpg" class="portfolio-img">+</a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="700ms">
                    <a href="#" class="btn alime-btn btn-2 mt-15">View More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->

    <!-- Follow Area Start -->
    <section class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Follow Instagram</h2>
                        <p>@Alime_photographer</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Feed Area -->
        <div class="instragram-feed-area owl-carousel">
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/11.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/12.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/13.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/14.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/15.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/16.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Follow Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content d-flex align-items-center justify-content-between">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="ti-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-twitter-alt" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-pinterest" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/alime.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>