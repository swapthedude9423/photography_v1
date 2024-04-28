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
    <!-- Template Main CSS Files -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    <script type="text/javascript" src="./js/pannellum.js"></script>
    <!-- Image slider JS file -->
    <script src="./js/script.js" defer></script>

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

        <div class="welcome-slides owl-carousel">


            <div class="single-welcome-slide bg-img bg-overlay" style="height: 600px;">

                <div id="panorama1">
                    <script>
                    pannellum.viewer('panorama1', {
                        "type": "equirectangular",
                        "panorama": "./img/360view/360-panorana-of-empty-modern-interior-room-3d-rend-2023-11-27-04-53-12-utc.jpg",
                        "autoLoad": true,
                        "border": false,
                        "autoRotate": 4,
                        "northOffset": 0,
                        "backgroundColor": ([0, 0, 0]),
                        "compass": false
                    });
                    </script>
                </div>


            </div>


            <div class="single-welcome-slide bg-img bg-overlay" style="height: 600px;">


                <div id="panorama2">
                    <script>
                    pannellum.viewer('panorama2', {
                        "type": "equirectangular",
                        "panorama": "./img/360view/360 Pano 02.jpg",
                        "autoLoad": true,
                        "border": false,
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
    <section>
        <div class="container">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    chevron_left
                </button>
                <ul class="image-list">
                    <a href="./360photo.php" class="image-link"><img class="image-item" src="./img/images/nature.png"
                            alt="img-1" /></a>
                    <a href="./360photo.php" class="image-link"><img class="image-item" src="./img/images/nature1.png"
                            alt="img-2" /></a>
                    <a href="./360photo.php" class="image-link"><img class="image-item" src="./img/images/nature2.jpg"
                            alt="img-3" /></a>
                    <a href="./360photo.php" class="image-link"><img class="image-item" src="./img/images/nature3.jpg"
                            alt="img-4" /></a>
                    <a href="./360photo.php" class="image-link"><img class="image-item" src="./img/images/nature4.png"
                            alt="img-5" /></a>
                    <a href="./360photo.php" class="image-link"><img class="image-item" src="./img/images/nature.png"
                            alt="img-6" /></a>
                    <a href="./360photo.php" class="image-link"><img class="image-item" src="./img/images/nature1.png"
                            alt="img-7" /></a>
                    <a href="./360photo.php" class="image-link"><img class="image-item" src="./img/images/nature2.jpg"
                            alt="img-8" /></a>
                    <a href="./360photo.php" class="image-link"><img class="image-item" src="./img/images/nature3.jpg"
                            alt="img-9" /></a>
                    <a href="./360photo.php" class="image-link"><img class="image-item" src="./img/images/nature4.png"
                            alt="img-10" /></a>
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    chevron_right
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
        </div>
    </section>


    <main id="main">

        <section class="single-post-content" style="margin: 150px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 post-content" data-aos="fade-up">

                        <!-- ======= Single Post Content ======= -->
                        <div class="single-post">
                        </div>
                        <h1 class="mb-5">13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h1>
                        <div class="post-meta"><span class="date">Business</span> <span
                                class="mx-1">&bullet;</span><span>Jul 5th '22</span>
                            <figure class="my-4">
                                <img src="./img/images/nature4.png" alt="" class="img-fluid">
                                <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit?
                                </figcaption>
                            </figure>
                            <p>Sunt reprehenderit, hic vel optio odit est dolore, distinctio iure itaque enim pariatur
                                ducimus. Rerum soluta, perspiciatis voluptatum cupiditate praesentium repellendus quas
                                expedita exercitationem tempora aliquam quaerat in eligendi adipisci harum non omnis
                                reprehenderit quidem beatae modi. Ea fugiat enim libero, ipsam dicta explicabo nihil,
                                tempore, nulla repellendus eos necessitatibus eligendi corporis cum? Eaque harum,
                                eligendi itaque numquam aliquam soluta.</p>

                            <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="#">View
                                More</a>
                        </div><!-- End Single Post Content -->

                    </div>
                    <div class="col-md-3">
                        <!-- ======= Sidebar ======= -->
                        <div class="aside-block">


                            <div class="tab-content" id="pills-tabContent">

                                <!-- Popular -->
                                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                                    aria-labelledby="pills-popular-tab">
                                    <div class="single-post-area wow fadeInUpBig" data-wow-delay="700ms">
                                        <!-- Post Thumbnail -->
                                        <a href="./360photo.php" class="post-thumbnail"
                                            style="width: 270px; height: 250px;"><img
                                                style="width: 270px; height: 250px;" src="./img/images/nature4.png"
                                                alt=""></a>
                                        <div class="post-content">
                                            <a href="./360photo.php" class="post-title">Vietnam's largest art
                                                community</a>
                                        </div>
                                    </div>
                                    <div class="single-post-area wow fadeInUpBig" data-wow-delay="700ms">
                                        <!-- Post Thumbnail -->
                                        <a href="./360photo.php" class="post-thumbnail"
                                            style="width: 270px; height: 250px;"><img
                                                style="width: 270px; height: 250px;" src="./img/images/nature4.png"
                                                alt=""></a>
                                        <div class="post-content">
                                            <a href="./360photo.php" class="post-title">Vietnam's largest art
                                                community</a>
                                        </div>
                                    </div>
                                    <div class="single-post-area wow fadeInUpBig" data-wow-delay="700ms">
                                        <!-- Post Thumbnail -->
                                        <a href="./360photo.php" class="post-thumbnail"
                                            style="width: 270px; height: 250px;"><img
                                                style="width: 270px; height: 250px;" src="./img/images/nature4.png"
                                                alt=""></a>
                                        <div class="post-content">
                                            <a href="./360photo.php" class="post-title">Vietnam's largest art
                                                community</a>
                                        </div>
                                    </div>
                                    <div class="single-post-area wow fadeInUpBig" data-wow-delay="700ms">
                                        <!-- Post Thumbnail -->
                                        <a href="./360photo.php" class="post-thumbnail"
                                            style="width: 270px; height: 250px;"><img
                                                style="width: 270px; height: 250px;" src="./img/images/nature4.png"
                                                alt=""></a>
                                        <div class="post-content">
                                            <a href="./360photo.php" class="post-title">Vietnam's largest art
                                                community</a>
                                        </div>
                                    </div>

                                    <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms"
                                        href="#">View More</a>

                                </div> <!-- End Popular -->

                            </div>
                        </div>

                    </div>
                </div>
                <!-- ======= Comments ======= -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- ======= Comments Form ======= -->
                        <div class="row justify-content-center mt-5">

                            <div class="col-lg-12">
                                <h5 class="comment-title">Leave a Comment</h5>
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <label for="comment-name">Name</label>
                                        <input type="text" class="form-control" id="comment-name"
                                            placeholder="Enter your name">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="comment-email">Email</label>
                                        <input type="text" class="form-control" id="comment-email"
                                            placeholder="Enter your email">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="comment-message">Message</label>

                                        <textarea class="form-control" id="comment-message"
                                            placeholder="Enter your message" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms"
                                            href="#">Post Comment</a>
                                        <!-- <input type="submit" class="btn btn-primary" value="Post comment"> -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Comments Form -->
                    </div>
                    <div class="col-md-6 comment-section">
                        <div class="comments">
                            <h5 class="comment-title py-4">2 Comments</h5>
                            <div class="comment d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm rounded-circle">
                                        <img class="avatar-img" src="assets/img/person-5.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-2 ms-sm-3">
                                    <div class="comment-meta d-flex align-items-baseline">
                                        <h6 class="me-2">Jordan Singer</h6>
                                        <span class="text-muted">2d</span>
                                    </div>
                                    <div class="comment-body">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non minima
                                        ipsum at amet doloremque qui magni, placeat deserunt pariatur itaque
                                        laudantium impedit aliquam eligendi repellendus excepturi quibusdam
                                        nobis esse accusantium.
                                    </div>

                                    <div class="comment-replies bg-light p-3 mt-3 rounded">
                                        <h6 class="comment-replies-title mb-4 text-muted text-uppercase">2
                                            replies</h6>

                                        <div class="reply d-flex mb-4">
                                            <div class="flex-shrink-0">
                                                <div class="avatar avatar-sm rounded-circle">
                                                    <img class="avatar-img" src="assets/img/person-4.jpg" alt=""
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2 ms-sm-3">
                                                <div class="reply-meta d-flex align-items-baseline">
                                                    <h6 class="mb-0 me-2">Brandon Smith</h6>
                                                    <span class="text-muted">2d</span>
                                                </div>
                                                <div class="reply-body">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reply d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar avatar-sm rounded-circle">
                                                    <img class="avatar-img" src="assets/img/person-3.jpg" alt=""
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-2 ms-sm-3">
                                                <div class="reply-meta d-flex align-items-baseline">
                                                    <h6 class="mb-0 me-2">James Parsons</h6>
                                                    <span class="text-muted">1d</span>
                                                </div>
                                                <div class="reply-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Distinctio dolore sed eos sapiente, praesentium.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment d-flex">
                                <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm rounded-circle">
                                        <img class="avatar-img" src="assets/img/person-2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="flex-shrink-1 ms-2 ms-sm-3">
                                    <div class="comment-meta d-flex">
                                        <h6 class="me-2">Santiago Roberts</h6>
                                        <span class="text-muted">4d</span>
                                    </div>
                                    <div class="comment-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum
                                        in corrupti dolorum, quas delectus nobis porro accusantium molestias
                                        sequi.
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Comments -->
                    </div>

                </div>
            </div>
        </section>
    </main><!-- End #main -->

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