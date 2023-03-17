<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bunzo - Blog Bootstrap 5 HTML Template</title>
    <meta name="description" content="Bunzo is one of the most popular blog template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="#" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Bunzo - Blog HTML Template" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap.min.css') }}"> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Icofont CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/icofont.min.css') }}" />
    
    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/lightgallery.min.css') }}">

    <!-- Swiper bundle CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/swiper-bundle.min.css') }}" />

    <!-- AOS CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/aos.css') }}">


   

    <!-- Main Style CSS -->
    {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}

    
    
</head>




<body>

    <!--========  header area =========-->
    <header class="header">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 order-1 order-lg-1">
                        <ul class="header-top-menu-list">
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Status</a></li>
                            <li><a href="#">Writers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 order-3 order-lg-2">
                        <div class="header-top-contact-info">
                            <div class="header-top-single-contact-item">
                                <div class="header-top-contact-icon">
                                    <img src="{{ asset('assets/images/icons/contact-call.png') }}" alt="">
                                </div>
                                <div class="header-top-contact-text text-size-small">
                                    <a href="tel:3662914955">(+39) 366-291-4955</a>
                                </div>
                            </div>

                            <div class="header-top-single-contact-item">
                                <div class="header-top-contact-icon">
                                    <img src="{{ asset('assets/images/icons/contact-emaill.png') }}" alt="">
                                </div>
                                <div class="header-top-contact-text">
                                    <a href="mailto:davlettera@gmail.com">davlettera@gmail.com</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 order-2 order-lg-3">
                        <div class="header-top-right-side">
                            <p>Bangladesh</p>
                            <div class="wayder">
                                <span class="wayder-icon"><img src="{{ asset('assets/images/icons/wayder.png') }}" alt=""/></span>
                                <span class="wayder-text">28° C</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2 col-5">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-md-block d-none">
                        <div class="header-add-banner text-center">
                            <a href="#">
                                <img src="{{ asset('assets/images/banners/header-add-banner.jpg') }}" alt="" />
                                <h6 class="header-add-text">All Food Item
                                    <span>50% Off</span>
                                </h6>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-7">
                        <div class="header-mid-right-side">
                            <a href="javascript:void(0)" id="search-overlay-trigger" class="single-action-item">
                                <img src="{{ asset('assets/images/icons/search.png') }}" alt="">
                            </a>
                            <a href="#" class="single-action-item">
                                <img src="{{ asset('assets/images/icons/notification.png') }}" alt="">
                            </a>
                            <a href="#" class="single-action-item">
                                <img src="{{ asset('assets/images/icons/bookmark.png') }}" alt="">
                            </a>
                            <a href="register.html" class="single-action-item">
                                <img src="{{ asset('assets/images/icons/user.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-9">
                        <ul class="social-share-area mt-15 mb-15">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 col-3">
                        <div class="main-menu-area text-end">
                            <nav class="navigation-menu">
                                <ul>
                                    <li class="has-children">
                                        <a href="index.html"><span>Home <i class="fa-solid fa-chevron-down"></i></span></a>
                                        {{-- <ul class="submenu">
                                            <li><a href="index-2.html"><span>Home Two</span></a></li>
                                            <li><a href="index-3.html"><span>Home Three</span></a></li>
                                            <li><a href="index-4.html"><span>Home Four</span></a></li>
                                            <li><a href="index-5.html"><span>Home Five</span></a></li>
                                            <li><a href="index-6.html"><span>Home Six</span></a></li>
                                        </ul> --}}
                                    </li>
                                    <li>
                                        <a href="about-us.html"><span>About <i class="fa-solid fa-chevron-down"></i></span></a>
                                    </li>
                                    <li class="has-children"><a href="category.html"><span>Category <i class="fa-solid fa-chevron-down"></i></span></a>
                                        <ul class="submenu">
                                            <li><a href="category.html"><span>Category List</span></a> </li>
                                            <li><a href="category-grid.html"><span>Category Grid</span></a> </li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><span>Pages <i class="fa-solid fa-chevron-down"></i></span></a>
                                        <ul class="submenu">
                                            <li><a href="blog-details.html"><span>Blog Details</span></a> </li>
                                            <li><a href="blog-details-two.html"><span>Blog Details Two</span></a> </li>
                                            <li><a href="error-404.html"><span>Error 404</span></a> </li>
                                            <li><a href="faq.html"><span>FAQ's</span></a> </li>
                                            <li><a href="author-post.html"><span>Author post</span></a> </li>
                                            <li><a href="register.html"><span>Register</span></a> </li>
                                            <li><a href="write-post.html"><span>Write Post</span></a> </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html"><span>Contact <i class="fa-solid fa-chevron-down"></i></span></a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- mobile menu -->
                        <div class="mobile-menu-right">
                            <div class="mobile-navigation-icon d-block d-lg-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--======== End of header area  =========-->















    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!-- Hero Area Start -->
            <div class="hero-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-inner-area">
                                <!-- Hero Category Area Start -->
                                <div class="hero-category-area">
                                    <a href="category.html" class="single-hero-category-item" data-aos="fade-up">
                                        <img src="{{ asset('assets/images/catagory/technology.jpg') }}" alt="">
                                        <div class="hero-category-inner-box">
                                            <h3 class="title">Business</h3>
                                            <i class="fa-solid fa-arrow-right"></i>></i>
                                        </div>
                                    </a>
                                    <a href="category.html" class="single-hero-category-item" data-aos="fade-up">
                                        <img src="{{ asset('assets/images/catagory/travel.jpg') }}" alt="">
                                        <div class="hero-category-inner-box">
                                            <h3 class="title">Travel</h3>
                                            <i class="fa-solid fa-arrow-right"></i>></i>
                                        </div>
                                    </a>
                                    <a href="category.html" class="single-hero-category-item" data-aos="fade-up">
                                        <img src="{{ asset('assets/images/catagory/medical.jpg') }}" alt="">
                                        <div class="hero-category-inner-box">
                                            <h3 class="title">Food</h3>
                                            <i class="fa-solid fa-arrow-right"></i>></i>
                                        </div>
                                    </a>
                                    <a href="category.html" class="single-hero-category-item" data-aos="fade-up">
                                        <img src="{{ asset('assets/images/catagory/web.jpg') }}" alt="">
                                        <div class="hero-category-inner-box">
                                            <h3 class="title">Tech</h3>
                                            <i class="fa-solid fa-arrow-right"></i>></i>
                                        </div>
                                    </a>
                                </div><!-- Hero Category Area End -->

                                <!-- Hero Banner Area Start -->
                                <div class="hero-banner-area" data-aos="fade-up">
                                    <a href="blog-details.html">
                                        <img src="{{ asset('assets/images/hero/hero-01.jpg') }}" alt="">
                                    </a>
                                </div><!-- Hero Banner Area End -->

                                <div class="hero-blog-post">
                                    <!-- Single-hero-blog-post Start -->
                                    <div class="single-hero-blog-post" data-aos="fade-up">
                                        <div class="hero-blog-post-top">
                                            <div class="hero-blog-post-category">
                                                <a href="#" class="tech">Tech</a>
                                            </div>
                                            <div class="hero-blog-post-author">
                                                By <a href="#">Kathy Ramirez</a>
                                            </div>
                                        </div>
                                        <h3 class="hero-blog-post-title">
                                            <a href="blog-details.html">Make your store stand out
                                                from the others...
                                            </a>
                                        </h3>
                                        <p class="post-short-details">
                                            Lorem Ipsum has been them industr standard
                                            unknown printer took galley.
                                        </p>
                                        <div class="hero-blog-post-meta">
                                            <div class="post-meta-left-side">
                                                <span class="post-date">
                                                <i class="fa-regular fa-calendar-days"></i> 
                                                <a href="#">03 April, 2023</a>
                                            </span>
                                                <span>10 min read</span>
                                            </div>
                                            <div class="post-meta-right-side">
                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                            </div>
                                        </div>
                                    </div><!-- Single-hero-blog-post End -->
                                    <!-- Single-hero-blog-post Start -->
                                    <div class="single-hero-blog-post" data-aos="fade-up">
                                        <div class="hero-blog-post-top">
                                            <div class="hero-blog-post-category">
                                                <a href="#" class="marketing">Marketing</a>
                                            </div>
                                            <div class="hero-blog-post-author">
                                                By <a href="#">Kathy Ramirez</a>
                                            </div>
                                        </div>
                                        <h3 class="hero-blog-post-title">
                                            <a href="blog-details.html">WooCommerce comes with
                                                an intuitive drag-and-drop...
                                            </a>
                                        </h3>
                                        <p class="post-short-details">
                                            Lorem Ipsum has been them industr standard
                                            unknown printer took galley.
                                        </p>
                                        <div class="hero-blog-post-meta">
                                            <div class="post-meta-left-side">
                                                <span class="post-date">
                                                <i class="fa-regular fa-calendar-days"></i> 
                                                <a href="#">03 April, 2023</a>
                                            </span>
                                                <span>10 min read</span>
                                            </div>
                                            <div class="post-meta-right-side">
                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                            </div>
                                        </div>
                                    </div><!-- Single-hero-blog-post End -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- Hero Area End -->

            <!-- Trending Article Area Start -->
            <div class="trending-article-area section-space--ptb_80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-7">
                            <div class="section-title mb-40">
                                <h3>Trending Article</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-5">
                            <div class="trending-slider-navigation text-end">
                                <div class="trending-button-prev navigation-button"><i class="fa-solid fa-arrow-left"></i></div>
                                <div class="trending-button-next navigation-button"><i class="fa-solid fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">

                            <!-- Swiper -->
                            <div class="swiper-container trending-slider-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="trending-article-row">
                                            <!-- Trending Article Left Side Start -->
                                            <div class="trending-article-left-side">
                                                <!-- Trending Single Item Start -->
                                                <article class="trending-single-item" data-aos="fade-up">
                                                    <div class="trending-post-thum">
                                                        <a href="blog-details.html">
                                                            <img src="{{ asset('assets/images/trending/1-trending-img.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="trending-post-content">
                                                        <div class="trending-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="fashion">Fashion</a>
                                                            </div>
                                                            <div class="trending-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="trending-blog-post-title">
                                                            <a href="blog-details.html">Customize your WooCommerce
                                                                store with countless design
                                                            </a>
                                                        </h5>
                                                        <div class="trending-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article><!-- Trending Single Item End -->
                                                <!-- Trending Single Item Start -->
                                                <article class="trending-single-item" data-aos="fade-up">
                                                    <div class="trending-post-thum">
                                                        <a href="blog-details.html">
                                                            <img src="{{ asset('assets/images/trending/2-trending-img.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="trending-post-content">
                                                        <div class="trending-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="tech">Tech</a>
                                                            </div>
                                                            <div class="trending-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="trending-blog-post-title">
                                                            <a href="blog-details.html">All of these amazing features
                                                                come at an affordable price!
                                                            </a>
                                                        </h5>
                                                        <div class="trending-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article><!-- Trending Single Item End -->
                                                <!-- Trending Single Item Start -->
                                                <article class="trending-single-item" data-aos="fade-up">
                                                    <div class="trending-post-thum">
                                                        <a href="blog-details.html">
                                                            <img src="{{ asset('assets/images/trending/3-trending-img.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="trending-post-content">
                                                        <div class="trending-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="food">Food</a>
                                                            </div>
                                                            <div class="trending-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="trending-blog-post-title">
                                                            <a href="blog-details.html">Make your store stand out from
                                                                the others by converting..
                                                            </a>
                                                        </h5>
                                                        <div class="trending-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article><!-- Trending Single Item End -->
                                            </div><!-- Trending Article Left Side End -->

                                            <!-- Trending Article Right Side Start -->
                                            <div class="trending-article-right-side">
                                                <div class="large-banner-trending-article" data-aos="fade-up">
                                                    <div class="trending-large-post-thum">
                                                        <a href="blog-details.html">
                                                            <img src="{{ asset('assets/images/trending/4-trending-img.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="trending-large-post-content">
                                                        <!-- Trending Single Item Start -->
                                                        <article class="trending-single-item">
                                                            <div class="trending-post-content">
                                                                <div class="trending-blog-post-top">
                                                                    <div class="trending-blog-post-category">
                                                                        <a href="#" class="health">Health</a>
                                                                    </div>
                                                                    <div class="trending-blog-post-author">
                                                                        By <a href="#">Kathy Ramirez</a>
                                                                    </div>
                                                                </div>
                                                                <h5 class="trending-blog-post-title">
                                                                    <a href="blog-details.html">With WooLentor's drag-and-drop
                                                                        interface for creating custom...
                                                                    </a>
                                                                </h5>
                                                                <div class="trending-blog-post-meta">
                                                                    <div class="post-meta-left-side">
                                                                        <span class="post-date">
                                                                        <i class="fa-regular fa-calendar-days"></i> 
                                                                        <a href="#">03 April, 2023</a>
                                                                    </span>
                                                                        <span>10 min read</span>
                                                                    </div>
                                                                    <div class="post-meta-right-side">
                                                                        <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                        <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article><!-- Trending Single Item End -->

                                                        <!-- Trending Single Item Start -->
                                                        <article class="trending-single-item">
                                                            <div class="trending-post-content">
                                                                <div class="trending-blog-post-top">
                                                                    <div class="trending-blog-post-category">
                                                                        <a href="#" class="doctor">Doctor</a>
                                                                    </div>
                                                                    <div class="trending-blog-post-author">
                                                                        By <a href="#">Kathy Ramirez</a>
                                                                    </div>
                                                                </div>
                                                                <h5 class="trending-blog-post-title">
                                                                    <a href="blog-details.html">WooCommerce comes with an
                                                                        intuitive drag-and-drop...
                                                                    </a>
                                                                </h5>
                                                                <div class="trending-blog-post-meta">
                                                                    <div class="post-meta-left-side">
                                                                        <span class="post-date">
                                                                        <i class="fa-regular fa-calendar-days"></i> 
                                                                        <a href="#">03 April, 2023</a>
                                                                    </span>
                                                                        <span>10 min read</span>
                                                                    </div>
                                                                    <div class="post-meta-right-side">
                                                                        <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                        <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article><!-- Trending Single Item End -->
                                                    </div>
                                                </div>

                                                <!-- Trending Single Item Start -->
                                                <article class="trending-single-item" data-aos="fade-up">
                                                    <div class="trending-large-post-thum">
                                                        <a href="blog-details.html">
                                                            <img src="{{ asset('assets/images/trending/5-trending-img.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="trending-post-content">
                                                        <div class="trending-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="business">Business</a>
                                                            </div>
                                                            <div class="trending-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="trending-blog-post-title">
                                                            <a href="blog-details.html">Customize your WooCommerce
                                                                store with countless design
                                                            </a>
                                                        </h5>
                                                        <div class="trending-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article><!-- Trending Single Item End -->
                                            </div><!-- Trending Article Right Side End -->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="trending-article-row">
                                            <!-- Trending Article Left Side Start -->
                                            <div class="trending-article-left-side">
                                                <!-- Trending Single Item Start -->
                                                <article class="trending-single-item" data-aos="fade-up">
                                                    <div class="trending-post-thum">
                                                        <a href="blog-details.html">
                                                            <img src="{{ asset('assets/images/trending/1-trending-img.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="trending-post-content">
                                                        <div class="trending-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="fashion">Fashion</a>
                                                            </div>
                                                            <div class="trending-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="trending-blog-post-title">
                                                            <a href="blog-details.html">Customize your WooCommerce
                                                                store with countless design
                                                            </a>
                                                        </h5>
                                                        <div class="trending-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article><!-- Trending Single Item End -->
                                                <!-- Trending Single Item Start -->
                                                <article class="trending-single-item" data-aos="fade-up">
                                                    <div class="trending-post-thum">
                                                        <a href="blog-details.html">
                                                            <img src="{{ asset('assets/images/trending/2-trending-img.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="trending-post-content">
                                                        <div class="trending-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="tech">Tech</a>
                                                            </div>
                                                            <div class="trending-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="trending-blog-post-title">
                                                            <a href="blog-details.html">All of these amazing features
                                                                come at an affordable price!
                                                            </a>
                                                        </h5>
                                                        <div class="trending-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article><!-- Trending Single Item End -->
                                                <!-- Trending Single Item Start -->
                                                <article class="trending-single-item" data-aos="fade-up">
                                                    <div class="trending-post-thum">
                                                        <a href="blog-details.html">
                                                            <img src="{{ asset('assets/images/trending/3-trending-img.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="trending-post-content">
                                                        <div class="trending-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="food">Food</a>
                                                            </div>
                                                            <div class="trending-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="trending-blog-post-title">
                                                            <a href="blog-details.html">Make your store stand out from
                                                                the others by converting..
                                                            </a>
                                                        </h5>
                                                        <div class="trending-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article><!-- Trending Single Item End -->
                                            </div><!-- Trending Article Left Side End -->

                                            <!-- Trending Article Right Side Start -->
                                            <div class="trending-article-right-side">
                                                <div class="large-banner-trending-article" data-aos="fade-up">
                                                    <div class="trending-large-post-thum">
                                                        <a href="blog-details.html">
                                                            <img src="{{ asset('assets/images/trending/4-trending-img.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="trending-large-post-content">
                                                        <!-- Trending Single Item Start -->
                                                        <article class="trending-single-item">
                                                            <div class="trending-post-content">
                                                                <div class="trending-blog-post-top">
                                                                    <div class="trending-blog-post-category">
                                                                        <a href="#" class="health">Health</a>
                                                                    </div>
                                                                    <div class="trending-blog-post-author">
                                                                        By <a href="#">Kathy Ramirez</a>
                                                                    </div>
                                                                </div>
                                                                <h5 class="trending-blog-post-title">
                                                                    <a href="blog-details.html">With WooLentor's drag-and-drop
                                                                        interface for creating custom...
                                                                    </a>
                                                                </h5>
                                                                <div class="trending-blog-post-meta">
                                                                    <div class="post-meta-left-side">
                                                                        <span class="post-date">
                                                                        <i class="fa-regular fa-calendar-days"></i> 
                                                                        <a href="#">03 April, 2023</a>
                                                                    </span>
                                                                        <span>10 min read</span>
                                                                    </div>
                                                                    <div class="post-meta-right-side">
                                                                        <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                        <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article><!-- Trending Single Item End -->

                                                        <!-- Trending Single Item Start -->
                                                        <article class="trending-single-item">
                                                            <div class="trending-post-content">
                                                                <div class="trending-blog-post-top">
                                                                    <div class="trending-blog-post-category">
                                                                        <a href="#" class="doctor">Doctor</a>
                                                                    </div>
                                                                    <div class="trending-blog-post-author">
                                                                        By <a href="#">Kathy Ramirez</a>
                                                                    </div>
                                                                </div>
                                                                <h5 class="trending-blog-post-title">
                                                                    <a href="blog-details.html">WooCommerce comes with an
                                                                        intuitive drag-and-drop...
                                                                    </a>
                                                                </h5>
                                                                <div class="trending-blog-post-meta">
                                                                    <div class="post-meta-left-side">
                                                                        <span class="post-date">
                                                                        <i class="fa-regular fa-calendar-days"></i> 
                                                                        <a href="#">03 April, 2023</a>
                                                                    </span>
                                                                        <span>10 min read</span>
                                                                    </div>
                                                                    <div class="post-meta-right-side">
                                                                        <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                        <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article><!-- Trending Single Item End -->
                                                    </div>
                                                </div>

                                                <!-- Trending Single Item Start -->
                                                <article class="trending-single-item" data-aos="fade-up">
                                                    <div class="trending-large-post-thum">
                                                        <a href="blog-details.html">
                                                            <img src="{{ asset('assets/images/trending/5-trending-img.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="trending-post-content">
                                                        <div class="trending-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="business">Business</a>
                                                            </div>
                                                            <div class="trending-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="trending-blog-post-title">
                                                            <a href="blog-details.html">Customize your WooCommerce
                                                                store with countless design
                                                            </a>
                                                        </h5>
                                                        <div class="trending-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article><!-- Trending Single Item End -->
                                            </div><!-- Trending Article Right Side End -->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Swiper End -->


                        </div>
                    </div>
                </div>
            </div>
            <!-- Trending Article Area End -->

            <!-- From Following Area Start -->
            <div class="from-following-area  section-space--ptb_80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="from-following-hader-area" data-aos="fade-up">
                                <div class="section-title">
                                    <h3>From Following</h3>
                                </div>

                                <div class="following-slider-navigation text-end">
                                    <div class="following-button-prev navigation-button"><i class="fa-solid fa-arrow-left"></i></div>
                                    <div class="following-button-next navigation-button"><i class="fa-solid fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Swiper -->
                    <div class="swiper-container following-slider-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row row--17">
                                    <div class="from-following-left-side col">
                                        <div class="row row--17">
                                            <div class="col-md-6 col-sm-6">
                                                <!-- Single Following Post Start -->
                                                <div class="single-following-post" data-aos="fade-up">
                                                    <div class="following-post-thum">
                                                        <img src="{{ asset('assets/images/blog/01.jpg') }}" alt="">
                                                    </div>
                                                    <div class="following-post-content">
                                                        <div class="following-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="health">Health</a>
                                                            </div>
                                                            <div class="following-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="following-blog-post-title">
                                                            <a href="blog-details.html">Customize your WooCommerce
                                                                store with countless design
                                                            </a>
                                                        </h5>
                                                        <div class="following-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- Single Following Post End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <!-- Single Following Post Start -->
                                                <div class="single-following-post" data-aos="fade-up">
                                                    <div class="following-post-thum">
                                                        <img src="{{ asset('assets/images/blog/02.jpg') }}" alt="">
                                                    </div>
                                                    <div class="following-post-content">
                                                        <div class="following-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="lifestyle">Lifestyle</a>
                                                            </div>
                                                            <div class="following-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="following-blog-post-title">
                                                            <a href="blog-details.html">WooCommerce comes with an intuitive
                                                                drag-and-drop interface.
                                                            </a>
                                                        </h5>
                                                        <div class="following-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- Single Following Post End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <!-- Single Following Post Start -->
                                                <div class="single-following-post" data-aos="fade-up">
                                                    <div class="following-post-thum">
                                                        <img src="{{ asset('assets/images/blog/03.jpg') }}" alt="">
                                                    </div>
                                                    <div class="following-post-content">
                                                        <div class="following-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="lifestyle">Lifestyle</a>
                                                            </div>
                                                            <div class="following-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="following-blog-post-title">
                                                            <a href="blog-details.html">All of these amazing features come at an
                                                                affordable price!
                                                            </a>
                                                        </h5>
                                                        <div class="following-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- Single Following Post End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <!-- Single Following Post Start -->
                                                <div class="single-following-post" data-aos="fade-up">
                                                    <div class="following-post-thum">
                                                        <img src="{{ asset('assets/images/blog/04.jpg') }}" alt="">
                                                    </div>
                                                    <div class="following-post-content">
                                                        <div class="following-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="health">Health</a>
                                                            </div>
                                                            <div class="following-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="following-blog-post-title">
                                                            <a href="blog-details.html">Make your store stand out from the others
                                                                by converting more shoppers into buyers!
                                                            </a>
                                                        </h5>
                                                        <div class="following-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- Single Following Post End -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="from-following-right-side col">
                                        <div class="following-author-area" data-aos="fade-up">
                                            <div class="author-image">
                                                <img src="{{ asset('assets/images/author/author-01.png') }}" alt="">
                                            </div>
                                            <div class="author-title">
                                                <h4><a href="#">Antonio Lucas</a></h4>
                                                <p>Author, Dingcode</p>
                                            </div>
                                            <div class="author-details">
                                                <p>Lorem psum has been industry
                                                    standard dumy text since the when
                                                    and scrambled make specimen
                                                    book has survived.</p>

                                                <div class="author-post-share">
                                                    <ul class="social-share-area">
                                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>

                                                <div class="button-box">
                                                    <a href="#" class="btn">View Profile <i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="following-add-banner" data-aos="fade-up">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/banners/home-following-banner.png') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row row--17">
                                    <div class="from-following-left-side col">
                                        <div class="row row--17">
                                            <div class="col-md-6 col-sm-6">
                                                <!-- Single Following Post Start -->
                                                <div class="single-following-post" data-aos="fade-up">
                                                    <div class="following-post-thum">
                                                        <img src="{{ asset('assets/images/blog/01.jpg') }}" alt="">
                                                    </div>
                                                    <div class="following-post-content">
                                                        <div class="following-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="health">Health</a>
                                                            </div>
                                                            <div class="following-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="following-blog-post-title">
                                                            <a href="blog-details.html">Customize your WooCommerce
                                                                store with countless design
                                                            </a>
                                                        </h5>
                                                        <div class="following-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- Single Following Post End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <!-- Single Following Post Start -->
                                                <div class="single-following-post" data-aos="fade-up">
                                                    <div class="following-post-thum">
                                                        <img src="{{ asset('assets/images/blog/02.jpg') }}" alt="">
                                                    </div>
                                                    <div class="following-post-content">
                                                        <div class="following-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="lifestyle">Lifestyle</a>
                                                            </div>
                                                            <div class="following-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="following-blog-post-title">
                                                            <a href="blog-details.html">WooCommerce comes with an intuitive
                                                                drag-and-drop interface.
                                                            </a>
                                                        </h5>
                                                        <div class="following-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- Single Following Post End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <!-- Single Following Post Start -->
                                                <div class="single-following-post" data-aos="fade-up">
                                                    <div class="following-post-thum">
                                                        <img src="{{ asset('assets/images/blog/03.jpg') }}" alt="">
                                                    </div>
                                                    <div class="following-post-content">
                                                        <div class="following-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="lifestyle">Lifestyle</a>
                                                            </div>
                                                            <div class="following-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="following-blog-post-title">
                                                            <a href="blog-details.html">All of these amazing features come at an
                                                                affordable price!
                                                            </a>
                                                        </h5>
                                                        <div class="following-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- Single Following Post End -->
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <!-- Single Following Post Start -->
                                                <div class="single-following-post" data-aos="fade-up">
                                                    <div class="following-post-thum">
                                                        <img src="{{ asset('assets/images/blog/04.jpg') }}" alt="">
                                                    </div>
                                                    <div class="following-post-content">
                                                        <div class="following-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#" class="health">Health</a>
                                                            </div>
                                                            <div class="following-blog-post-author">
                                                                By <a href="#">Kathy Ramirez</a>
                                                            </div>
                                                        </div>
                                                        <h5 class="following-blog-post-title">
                                                            <a href="blog-details.html">Make your store stand out from the others
                                                                by converting more shoppers into buyers!
                                                            </a>
                                                        </h5>
                                                        <div class="following-blog-post-meta">
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span>10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt="" /></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- Single Following Post End -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="from-following-right-side col">
                                        <div class="following-author-area" data-aos="fade-up">
                                            <div class="author-image">
                                                <img src="{{ asset('assets/images/author/author-01.png') }}" alt="">
                                            </div>
                                            <div class="author-title">
                                                <h4><a href="#">Antonio Lucas</a></h4>
                                                <p>Author, Dingcode</p>
                                            </div>
                                            <div class="author-details">
                                                <p>Lorem psum has been industry
                                                    standard dumy text since the when
                                                    and scrambled make specimen
                                                    book has survived.</p>

                                                <div class="author-post-share">
                                                    <ul class="social-share-area">
                                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fa-brands fa-skype"></i></i></a></li>
                                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>

                                                <div class="button-box">
                                                    <a href="#" class="btn">View Profile <i class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="following-add-banner" data-aos="fade-up">
                                            <a href="#">
                                                <img src="{{ asset('assets/images/banners/home-following-banner.png') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- From Following Area End -->


            <div class="bg-gray-1">

                <!-- Trending Topic Area Start -->
                <div class="trending-topic-area section-space--ptb_80">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="trending-topic-section-title">
                                <h3>Trending Topic</h3>
                                <div class="trending-topic-navigation mt-30">
                                    <div class="trending-topic-button-prev navigation-button"><i class="fa-solid fa-arrow-left"></i></div>
                                    <div class="trending-topic-button-next navigation-button"><i class="fa-solid fa-arrow-right"></i></div>
                                </div>
                            </div>
                            <div class="trending-topic-item-wrap">
                                <div class="swiper-container trending-topic-slider-active">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" data-aos="fade-up">
                                            <div class="single-trending-topic-item">
                                                <a href="category-grid.html">
                                                    <img src="{{ asset('assets/images/topic/01_topic.jpg') }}" alt="">
                                                    <h4 class="title">Travel</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-aos="fade-up">
                                            <div class="single-trending-topic-item">
                                                <a href="category-grid.html">
                                                    <img src="{{ asset('assets/images/topic/02_topic.jpg') }}" alt="">
                                                    <h4 class="title">Food</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-aos="fade-up">
                                            <div class="single-trending-topic-item">
                                                <a href="category-grid.html">
                                                    <img src="{{ asset('assets/images/topic/03_topic.jpg') }}" alt="">
                                                    <h4 class="title">Design</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-aos="fade-up">
                                            <div class="single-trending-topic-item">
                                                <a href="category-grid.html">
                                                    <img src="{{ asset('assets/images/topic/04_topic.jpg') }}" alt="">
                                                    <h4 class="title">Technology</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-aos="fade-up">
                                            <div class="single-trending-topic-item">
                                                <a href="category-grid.html">
                                                    <img src="{{ asset('assets/images/topic/05_topic.jpg') }}" alt="">
                                                    <h4 class="title">Marketing</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Newsletter Subscribe Area Start -->
                        <div class="newsletter-subscribe-inner section-space--mt_80">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <div class="section-title mb-4">
                                        <h3>Subscribe For Newsletter</h3>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="newsletter-input-box" data-aos="fade-up">
                                        <input class="newsletter-input" type="text" placeholder="Enter your email">
                                        <div class="button-box">
                                            <a href="#" class="btn-primary btn-large">Subscribe Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="newsletter-inner-image">
                                <img class="newsletter-image-01" src="{{ asset('assets/images/shap/1-newsletter.png') }}" alt="">
                                <img class="newsletter-image-02" src="{{ asset('assets/images/shap/2-newsletter.png') }}" alt="">
                            </div>
                        </div>
                        <!-- Newsletter Subscribe Area End -->

                    </div>
                </div>
                <!-- Trending Topic Area End -->

            </div>

            <!-- Featured Video Area Start -->
            <div class="featured-video-area section-space--ptb_80">
                <div class="container">
                    <div class="row row--17">
                        <div class="featured-video-col-8">

                            <div class="featured-video-haader">
                                <div class="section-title">
                                    <h3>Featured Video</h3>
                                </div>
                                <ul class="featured-video-list nav" data-aos="fade-up">
                                    <li class="featured-video-list-item">
                                        <a href="#" class="featured-video-link" data-bs-toggle="tab" data-bs-target="#travel">Travel</a>                                    
                                    </li>
                                    <li class="featured-video-list-item">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </li>
                                    <li class="featured-video-list-item">
                                        <a href="#" class="featured-video-link" data-bs-toggle="tab" data-bs-target="#lifestyle">Lifestyle</a>
                                    </li>
                                    <li class="featured-video-list-item">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </li>
                                    <li class="featured-video-list-item">
                                        <a href="#" class="featured-video-link" data-bs-toggle="tab" data-bs-target="#food">Food</a>
                                    </li>
                                    <li class="featured-video-list-item">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </li>
                                    <li class="featured-video-list-item">
                                        <a href="#" class="featured-video-link" data-bs-toggle="tab" data-bs-target="#health">Health</a>
                                    </li>
                                    
                                    
                                </ul>
                            </div>

                            <div class="featured-video-wrap">

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="travel">
                                        <div class="row row--17">
                                            <div class="col-lg-7">
                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup" data-aos="fade-up">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/01_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">
                                                                <div class="video-button__two">
                                                                    <div class="video-play">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span class="read-time">10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h3><a href="blog-details.html">All of these amazing features come
                                                                at an affordable price!</a></h3>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup" data-aos="fade-up">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/02_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">
                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span class="read-time">10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h3>
                                                            <a href="blog-details.html">Create a custom checkout page in
                                                                minutes and Increase your sales...
                                                            </a>
                                                        </h3>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                            </div>
                                            <div class="col-lg-5">
                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup" data-aos="fade-up">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/03_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">
                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April</a>
                                                            </span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h5><a href="blog-details.html">Customize your WooCommerce
                                                                store with countless design</a></h5>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup" data-aos="fade-up">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/04_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">
                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April</a>
                                                            </span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h5><a href="blog-details.html">Create a custom checkout page in
                                                                minutes and Increase your sales...
                                                            </a></h5>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup" data-aos="fade-up">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/05_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">
                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April</a>
                                                            </span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h5><a href="blog-details.html">With WooLentor's drag-and-drop
                                                                interface for creating custom...</a></h5>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="lifestyle">
                                        <div class="row row--17">
                                            <div class="col-lg-7">
                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/01_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span class="read-time">10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h3><a href="blog-details.html">All of these amazing features come
                                                                at an affordable price!</a></h3>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/02_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span class="read-time">10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h3>
                                                            <a href="blog-details.html">Create a custom checkout page in
                                                                minutes and Increase your sales...
                                                            </a>
                                                        </h3>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                            </div>
                                            <div class="col-lg-5">
                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/03_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h5><a href="blog-details.html">Customize your WooCommerce
                                                                store with countless design</a></h5>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/04_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h5><a href="blog-details.html">Create a custom checkout page in
                                                                minutes and Increase your sales...
                                                            </a></h5>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/05_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h5><a href="blog-details.html">With WooLentor's drag-and-drop
                                                                interface for creating custom...</a></h5>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="food">
                                        <div class="row row--17">
                                            <div class="col-lg-7">
                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/01_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span class="read-time">10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h3><a href="blog-details.html">All of these amazing features come
                                                                at an affordable price!</a></h3>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/02_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span class="read-time">10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h3>
                                                            <a href="blog-details.html">Create a custom checkout page in
                                                                minutes and Increase your sales...
                                                            </a>
                                                        </h3>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                            </div>
                                            <div class="col-lg-5">
                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/03_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h5><a href="blog-details.html">Customize your WooCommerce
                                                                store with countless design</a></h5>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/04_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h5><a href="blog-details.html">Create a custom checkout page in
                                                                minutes and Increase your sales...
                                                            </a></h5>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/05_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h5><a href="blog-details.html">With WooLentor's drag-and-drop
                                                                interface for creating custom...</a></h5>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="health">
                                        <div class="row row--17">
                                            <div class="col-lg-7">
                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/01_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span class="read-time">10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h3><a href="blog-details.html">All of these amazing features come
                                                                at an affordable price!</a></h3>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/02_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                                <span class="read-time">10 min read</span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h3>
                                                            <a href="blog-details.html">Create a custom checkout page in
                                                                minutes and Increase your sales...
                                                            </a>
                                                        </h3>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                            </div>
                                            <div class="col-lg-5">
                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/03_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h5><a href="blog-details.html">Customize your WooCommerce
                                                                store with countless design</a></h5>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/04_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h5><a href="blog-details.html">Create a custom checkout page in
                                                                minutes and Increase your sales...
                                                            </a></h5>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->

                                                <!-- Single Featured Video Item Start -->
                                                <div class="single-featured-video-item video-popup">
                                                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30">
                                                        <div class="single-popup-wrap">
                                                            <img src="{{ asset('assets/images/featured-video/05_featured-video.jpg') }}" alt="">
                                                            <div class="ht-popup-video video-button">

                                                                <div class="video-button__two">
                                                                    <div class="video-play-sm">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="featured-video-content">
                                                        <div class="featured-blog-post-top">
                                                            <div class="trending-blog-post-category">
                                                                <a href="#">Business</a>
                                                            </div>
                                                            <div class="post-meta-left-side">
                                                                <span class="post-date">
                                                                <i class="fa-regular fa-calendar-days"></i> 
                                                                <a href="#">03 April, 2023</a>
                                                            </span>
                                                            </div>
                                                            <div class="post-meta-right-side">
                                                                <a href="#"><img src="{{ asset('assets/images/icons/small-bookmark.png') }}" alt=""></a>
                                                                <a href="#"><img src="{{ asset('assets/images/icons/heart.png') }}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <h5><a href="blog-details.html">With WooLentor's drag-and-drop
                                                                interface for creating custom...</a></h5>
                                                    </div>
                                                </div><!-- Single Featured Video Item End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="latest-post-col-4">
                            <!-- Latest Post Area Start -->
                            <div class="latest-post-inner-wrap">
                                <div class="latest-post-header" data-aos="fade-up">
                                    <div class="section-title">
                                        <h4>Latest Post</h4>
                                    </div>
                                    <div class="latest-post-slider-navigation">
                                        <div class="latest-post-button-prev navigation-button"><i class="fa-solid fa-arrow-left"></i></div>
                                        <div class="latest-post-button-next navigation-button"><i class="fa-solid fa-arrow-right"></i></div>
                                    </div>
                                </div>
                                <div class="swiper-container latest-post-slider-active" data-aos="fade-up">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="latest-post-box">
                                                <!-- Single Latest Post Start -->
                                                <div class="single-latest-post">
                                                    <div class="latest-post-thum">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/images/latest-post/01.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="latest-post-content">
                                                        <h6 class="title"><a href="blog-details.html">All of these amazing
                                                                features come at...</a>
                                                        </h6>
                                                        <div class="latest-post-meta">
                                                            <span class="post-date">
                                                            <i class="fa-regular fa-calendar-days"></i> 
                                                            <a href="#">03-04-2023</a>
                                                        </span>
                                                            <span>10 min read</span>
                                                        </div>
                                                    </div>
                                                </div><!-- Single Latest Post End -->
                                                <!-- Single Latest Post Start -->
                                                <div class="single-latest-post">
                                                    <div class="latest-post-thum">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/images/latest-post/02.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="latest-post-content">
                                                        <h6 class="title"><a href="blog-details.html">Customize your
                                                                WooCommerce store</a>
                                                        </h6>
                                                        <div class="latest-post-meta">
                                                            <span class="post-date">
                                                            <i class="fa-regular fa-calendar-days"></i> 
                                                            <a href="#">03-04-2023</a>
                                                        </span>
                                                            <span>10 min read</span>
                                                        </div>
                                                    </div>
                                                </div><!-- Single Latest Post End -->
                                                <!-- Single Latest Post Start -->
                                                <div class="single-latest-post">
                                                    <div class="latest-post-thum">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/images/latest-post/03.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="latest-post-content">
                                                        <h6 class="title"><a href="blog-details.html">With WooLentor's drag
                                                                -and-drop interface...</a>
                                                        </h6>
                                                        <div class="latest-post-meta">
                                                            <span class="post-date">
                                                            <i class="fa-regular fa-calendar-days"></i> 
                                                            <a href="#">03-04-2023</a>
                                                        </span>
                                                            <span>10 min read</span>
                                                        </div>
                                                    </div>
                                                </div><!-- Single Latest Post End -->
                                                <!-- Single Latest Post Start -->
                                                <div class="single-latest-post">
                                                    <div class="latest-post-thum">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/images/latest-post/04.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="latest-post-content">
                                                        <h6 class="title"><a href="blog-details.html">All of these amazing
                                                                features come at...</a>
                                                        </h6>
                                                        <div class="latest-post-meta">
                                                            <span class="post-date">
                                                            <i class="fa-regular fa-calendar-days"></i> 
                                                            <a href="#">03-04-2023</a>
                                                        </span>
                                                            <span>10 min read</span>
                                                        </div>
                                                    </div>
                                                </div><!-- Single Latest Post End -->
                                                <!-- Single Latest Post Start -->
                                                <div class="single-latest-post">
                                                    <div class="latest-post-thum">
                                                        <a href="#">
                                                            <img src="{{ asset('assets/images/latest-post/05.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="latest-post-content">
                                                        <h6 class="title"><a href="blog-details.html">WooCommerce comes
                                                                with an intuitive...</a>
                                                        </h6>
                                                        <div class="latest-post-meta">
                                                            <span class="post-date">
                                                            <i class="fa-regular fa-calendar-days"></i> 
                                                            <a href="#">03-04-2023</a>
                                                        </span>
                                                            <span>10 min read</span>
                                                        </div>
                                                    </div>
                                                </div><!-- Single Latest Post End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- Latest Post Area End  -->

                            <!-- Stay In Touch Area Start -->
                            <div class="stay-in-touch-area">
                                <div class="section-title" data-aos="fade-up">
                                    <h3>Stay In Touch</h3>
                                </div>
                                <div class="stay-in-touch-box" data-aos="fade-up">
                                    <div class="single-touch-col">
                                        <a href="#!" class="single-touch facebook">
                                            <div class="touch-socail-icon">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </div>
                                            <p class="touch-title">5,685K</p>
                                        </a>
                                    </div>
                                    <div class="single-touch-col">
                                        <a href="#!" class="single-touch twitter">
                                            <div class="touch-socail-icon">
                                                <i class="fa-brands fa-twitter"></i>
                                            </div>
                                            <p class="touch-title">6,97K+</p>
                                        </a>
                                    </div>
                                    <div class="single-touch-col">
                                        <a href="#!" class="single-touch behance">
                                            <div class="touch-socail-icon">
                                                <i class="fa-brands fa-skype"></i>
                                            </div>
                                            <p class="touch-title">6,97K+</p>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div> <!-- Stay In Touch Area End -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- Featured Video Area End -->

            <!-- Recent Reading List Area Start -->
            <div class="recent-reading-list-area section-space--pb_80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="recent-reading-header">
                                <div class="section-title">
                                    <h3>Recent Reading List</h3>
                                </div>
                                <div class="recent-reading-slider-navigation mt-2 mb-2">
                                    <div class="recent-reading-button-prev navigation-button"><i class="fa-solid fa-arrow-left"></i></div>
                                    <div class="recent-reading-button-next navigation-button"><i class="fa-solid fa-arrow-right"></i></div>
                                </div>
                                <div class="recent-article-date">
                                    <span>View by Date</span> <a class="date-button" href="#"><i class="fa-regular fa-calendar-days"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container recent-reading-slider-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Single Recent Reading Post Start -->
                                <div class="single-recent-reading-post" data-aos="fade-up">
                                    <a class="recent-reading-post-thum" href="blog-details.html">
                                        <img src="{{ asset('assets/images/recent-reading-list/01_reading-list.jpg') }}" alt="">
                                    </a>
                                    <div class="recent-reading-post-content">
                                        <div class="recent-reading-post-author">
                                            By <a href="#">Kathy Ramirez</a>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">Create beautiful designs that will help convert...</a></h6>
                                        <div class="recent-reading-post-meta">
                                            <span class="post-date">
                                            <i class="fa-regular fa-calendar-days"></i> 
                                            <a href="#">03-04-2023</a>
                                        </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div><!-- Single Recent Reading Post End -->

                                <!-- Single Recent Reading Post Start -->
                                <div class="single-recent-reading-post" data-aos="fade-up">
                                    <a class="recent-reading-post-thum" href="blog-details.html">
                                        <img src="{{ asset('assets/images/recent-reading-list/02_reading-list.jpg') }}" alt="">
                                    </a>
                                    <div class="recent-reading-post-content">
                                        <div class="recent-reading-post-author">
                                            By <a href="#">Kathy Ramirez</a>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">Make your store stand out
                                                from the others by...</a></h6>
                                        <div class="recent-reading-post-meta">
                                            <span class="post-date">
                                            <i class="fa-regular fa-calendar-days"></i> 
                                            <a href="#">03-04-2023</a>
                                        </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div><!-- Single Recent Reading Post End -->

                                <!-- Single Recent Reading Post Start -->
                                <div class="single-recent-reading-post" data-aos="fade-up">
                                    <a class="recent-reading-post-thum" href="blog-details.html">
                                        <img src="{{ asset('assets/images/recent-reading-list/03_reading-list.jpg') }}" alt="">
                                    </a>
                                    <div class="recent-reading-post-content">
                                        <div class="recent-reading-post-author">
                                            By <a href="#">Kathy Ramirez</a>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">With WooLentor's drag-
                                                and-drop interface for...</a></h6>
                                        <div class="recent-reading-post-meta">
                                            <span class="post-date">
                                            <i class="fa-regular fa-calendar-days"></i> 
                                            <a href="#">03-04-2023</a>
                                        </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div><!-- Single Recent Reading Post End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Recent Reading Post Start -->
                                <div class="single-recent-reading-post" data-aos="fade-up">
                                    <a class="recent-reading-post-thum" href="blog-details.html">
                                        <img src="{{ asset('assets/images/recent-reading-list/04_reading-list.jpg') }}" alt="">
                                    </a>
                                    <div class="recent-reading-post-content">
                                        <div class="recent-reading-post-author">
                                            By <a href="#">Kathy Ramirez</a>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">With WooLentor's drag-
                                                and-drop interface for...
                                            </a></h6>
                                        <div class="recent-reading-post-meta">
                                            <span class="post-date">
                                            <i class="fa-regular fa-calendar-days"></i> 
                                            <a href="#">03-04-2023</a>
                                        </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div><!-- Single Recent Reading Post End -->

                                <!-- Single Recent Reading Post Start -->
                                <div class="single-recent-reading-post" data-aos="fade-up">
                                    <a class="recent-reading-post-thum" href="blog-details.html">
                                        <img src="{{ asset('assets/images/recent-reading-list/05_reading-list.jpg') }}" alt="">
                                    </a>
                                    <div class="recent-reading-post-content">
                                        <div class="recent-reading-post-author">
                                            By <a href="#">Kathy Ramirez</a>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">WooCommerce comes
                                                with an intuitive drag
                                            </a></h6>
                                        <div class="recent-reading-post-meta">
                                            <span class="post-date">
                                            <i class="fa-regular fa-calendar-days"></i> 
                                            <a href="#">03-04-2023</a>
                                        </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div><!-- Single Recent Reading Post End -->

                                <!-- Single Recent Reading Post Start -->
                                <div class="single-recent-reading-post" data-aos="fade-up">
                                    <a class="recent-reading-post-thum" href="blog-details.html">
                                        <img src="{{ asset('assets/images/recent-reading-list/06_reading-list.jpg') }}" alt="">
                                    </a>
                                    <div class="recent-reading-post-content">
                                        <div class="recent-reading-post-author">
                                            By <a href="#">Kathy Ramirez</a>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">Create beautiful designs
                                                that will help convert...</a></h6>
                                        <div class="recent-reading-post-meta">
                                            <span class="post-date">
                                            <i class="fa-regular fa-calendar-days"></i> 
                                            <a href="#">03-04-2023</a>
                                        </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div><!-- Single Recent Reading Post End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Recent Reading Post Start -->
                                <div class="single-recent-reading-post" data-aos="fade-up">
                                    <a class="recent-reading-post-thum" href="blog-details.html">
                                        <img src="{{ asset('assets/images/recent-reading-list/07_reading-list.jpg') }}" alt="">
                                    </a>
                                    <div class="recent-reading-post-content">
                                        <div class="recent-reading-post-author">
                                            By <a href="#">Kathy Ramirez</a>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">WooCommerce comes
                                                with an intuitive drag
                                            </a></h6>
                                        <div class="recent-reading-post-meta">
                                            <span class="post-date">
                                            <i class="fa-regular fa-calendar-days"></i> 
                                            <a href="#">03-04-2023</a>
                                        </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div><!-- Single Recent Reading Post End -->

                                <!-- Single Recent Reading Post Start -->
                                <div class="single-recent-reading-post" data-aos="fade-up">
                                    <a class="recent-reading-post-thum" href="blog-details.html">
                                        <img src="{{ asset('assets/images/recent-reading-list/08_reading-list.jpg') }}" alt="">
                                    </a>
                                    <div class="recent-reading-post-content">
                                        <div class="recent-reading-post-author">
                                            By <a href="#">Kathy Ramirez</a>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">Create beautiful designs
                                                that will help convert...</a></h6>
                                        <div class="recent-reading-post-meta">
                                            <span class="post-date">
                                            <i class="fa-regular fa-calendar-days"></i> 
                                            <a href="#">03-04-2023</a>
                                        </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div><!-- Single Recent Reading Post End -->

                                <!-- Single Recent Reading Post Start -->
                                <div class="single-recent-reading-post" data-aos="fade-up">
                                    <a class="recent-reading-post-thum" href="blog-details.html">
                                        <img src="{{ asset('assets/images/recent-reading-list/09_reading-list.jpg') }}" alt="">
                                    </a>
                                    <div class="recent-reading-post-content">
                                        <div class="recent-reading-post-author">
                                            By <a href="#">Kathy Ramirez</a>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">Make your store stand out
                                                from the others by...</a></h6>
                                        <div class="recent-reading-post-meta">
                                            <span class="post-date">
                                            <i class="fa-regular fa-calendar-days"></i> 
                                            <a href="#">03-04-2023</a>
                                        </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div><!-- Single Recent Reading Post End -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Recent Reading List Area End -->

            <!-- Bottom Add Banner Area Start -->
            <div class="bottom-add-banner-area section-space--pb_80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="#" class="bottom-add-banner-box" data-aos="fade-up">
                                <img src="{{ asset('assets/images/banners/bottom-add-banner.jpg') }}" alt="">
                                <h6 class="bottom-add-text">All Food Item
                                    <span>50% Off</span>
                                </h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- Bottom Add Banner Area End -->

        </div>
    </div>



    <!--======  footer area =======-->
    <footer class="footer-area footer-one">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="">
                                </a>
                            </div>
                            <p>Lorem Ipsum is simply dummy text
                                the printing and typesetting industry
                                has been the industry's standard
                                text ever since.
                            </p>
                            <ul class="footer-socail-share">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6">
                        <div class="footer-widget footer-subscribe-center">
                            <div class="footer-widget-title">
                                <h4 class="title">Subscribe</h4>
                            </div>
                            <div class="footer-subscribe-wrap">
                                <div class="single-input">
                                    <input type="text" placeholder="Your Name">
                                </div>
                                <div class="single-input">
                                    <input type="email" placeholder="Email Address">
                                </div>
                                <div class="button-box">
                                    <button class="btn-primary btn-large" type="submit">Subscribe Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-menu-widget">
                            <div class="single-footer-menu">
                                <div class="footer-widget-title">
                                    <h4 class="title">Company</h4>
                                </div>
                                <ul class="footer-widget-menu-list">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="#!">Local Print Ads</a></li>
                                    <li><a href="faq.html">FAQ’s</a></li>
                                    <li><a href="#!">Careers</a></li>
                                </ul>
                            </div>
                            <div class="single-footer-menu">
                                <div class="footer-widget-title">
                                    <h4 class="title">Quick Links</h4>
                                </div>
                                <ul class="footer-widget-menu-list">
                                    <li><a href="#!">Privacy Policy</a></li>
                                    <li><a href="#!">Discussion</a></li>
                                    <li><a href="#!">Terms & Conditions</a></li>
                                    <li><a href="#!">Customer Support</a></li>
                                    <li><a href="#!">Course FAQ’s</a></li>
                                </ul>
                            </div>
                            <div class="single-footer-menu">
                                <div class="footer-widget-title">
                                    <h4 class="title">Category</h4>
                                </div>
                                <ul class="footer-widget-menu-list">
                                    <li><a href="#!">Lefestyle</a></li>
                                    <li><a href="#!">Healthy</a></li>
                                    <li><a href="#!">Restaurent</a></li>
                                    <li><a href="#!">Travel Tips</a></li>
                                    <li><a href="#!">Marketing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-bottom-inner">
                            <div class="copy-right-text">
                                <p>© 2021 <a href="#">Bunzo</a>. Made with ❤️ by <a target="_blank" rel="noopener" href="https://hasthemes.com/">HasThemes</a></p>
                            </div>
                            <div class="button-right-box">
                                <a href="#!" class="btn-primary btn-large">Share your thinking <i class="fa-solid fa-arrow-right"></i></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=====  End of footer area ========-->

    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="fa-solid fa-arrow-up"></i>
        
    </a>
    <!--====================  End of scroll top  ====================-->

    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <!-- search content -->
                        <div class="search-content text-end">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets/images/logo/logo.png') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-end">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children">
                            <a href="index.html">Home</a>
                            {{-- <ul class="sub-menu">
                                <li><a href="index-2.html"><span>Home Two</span></a></li>
                                <li><a href="index-3.html"><span>Home Three</span></a></li><i class="fa-solid fa-angle-down"></i>
                                <li><a href="index-4.html"><span>Home Four</span></a></li>
                                <li><a href="index-5.html"><span>Home Five</span></a></li>
                                <li><a href="index-6.html"><span>Home Six</span></a></li>
                            </ul> --}}
                        </li>
                        <li><a href="about-us.html"><span>About</span></a></li>
                        <li class="has-children">
                            <a href="#">Category</a>
                            
                            
                            <ul class="sub-menu">
                                <li><a href="category.html"><span>Category List</span></a> </li>
                                <li><a href="category-grid.html"><span>Category Grid</span></a> </li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="blog-details.html"><span>Blog Details</span></a> </li>
                                <li><a href="blog-details-two.html"><span>Blog Details Two</span></a> </li>
                                <li><a href="error-404.html"><span>Error 404</span></a> </li>
                                <li><a href="faq.html"><span>FAQ's</span></a> </li>
                                <li><a href="author-post.html"><span>Author post</span></a> </li>
                                <li><a href="register.html"><span>Register</span></a> </li>
                                <li><a href="write-post.html"><span>Write Post</span></a> </li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html"><span>Contact </span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->







<!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script> <!--PRESENTE-->
     <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script> <!--PRESENTE-->

    <!-- Light gallery JS -->
    <script src="{{ asset('assets/js/plugins/lightgallery.min.js') }}"></script> <!--PRESENTE-->

    <!-- Isotope JS -->
    <script src="{{ asset('assets/js/plugins/isotope.min.js') }}"></script>

    <!-- Masonry JS -->
    <script src="{{ asset('assets/js/plugins/masonry.min.js') }}"></script>

    <!-- ImagesLoaded JS -->
    <script src="{{ asset('assets/js/plugins/images-loaded.min.js') }}"></script> 

    <!-- Swiper Bundle JS -->
     <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>

    <!-- AOS JS -->
    <script src="{{ asset('assets/js/plugins/aos.js') }}"></script> <!--PRESENTE-->

    <!-- Ajax JS -->
    <!-- <script src="assets/js/plugins/ajax.mail.js"></script> -->

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script> -->


    <!-- Main JS -->
    {{-- <script src="assets/js/main.js"></script> PRESENTE --}}
    <script src="https://kit.fontawesome.com/2ff2af688a.js" crossorigin="anonymous"></script>


</body>

</html>