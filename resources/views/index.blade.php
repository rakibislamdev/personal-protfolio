<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="keendevs">
    <!-- ======== Page title ============ -->
    <title>Welcome to MD RAKIB's Web page - Md Rakib</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!--  owl carosuel css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- metisMenu css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/metismenu.css') }}">
    <!-- progresscircle css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/progresscircle.css') }}">
    <!--  owl theme css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!--  main style css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- template main style css file -->
    <link rel="stylesheet" href="style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- preloader -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <header class="header-section header-style-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <div class="logo">
                        <a href="index.html">Rakib</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 d-none d-lg-block text-right">
                    <div class="main-menu">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">services</a></li>
                            <li><a href="#resume">Resume</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#blog">blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 d-block d-lg-none">
                    <div class="menu-toggle text-right">
                        <div id="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- mobile menu - responisve menu  -->
                    <div class="mobile-nav">
                        <button type="button" class="close-nav">
                            <i class="fal fa-times-circle"></i>
                        </button>
                        <nav class="sidebar-nav">
                            <ul class="metismenu" id="mobile-menu">
                                <li>
                                    <a class="has-arrow" href="#">Home</a>
                                    <ul>
                                        <li>
                                            <a href="index.html">Homepage 1</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Homepage 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#about">about</a>
                                </li>
                                <li>
                                    <a href="#services">services</a>
                                </li>
                                <li>
                                    <a href="#portfolio">portfolio</a>
                                </li>
                                <li>
                                    <a href="#blog">blog</a>
                                </li>
                                <li>
                                    <a href="#contact">contact</a>
                                </li>
                            </ul>
                        </nav>

                        <a href="#" class="theme-btn mt-4">+ Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="hero-section hero-1" style="background-image: url('assets/img/hero_bg_element.png')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-12 text-center text-lg-left">
                    <div class="hero-content overflow-hidden">
                        <span class="hello-tooltip wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Hi!
                            There</span>
                        <h1 class="wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay=".9s">MD RAKIB</h1>
                        <div class="typed">
                            <h3 class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.3s">I'm a <span
                                    class="profession"></span></h3>
                        </div>
                        <p class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.6s">Maborisum ipsum dolor
                            seat ameat consecteturetel seat more be elite consecteture.</p>
                        <a href="#" class="theme-btn wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.9s">+
                            Download CV</a>

                        <div class="social-profile">
                            <a href="#" class="wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="2.2s"><i
                                    class="fal fa-plus"></i>facebook</a>
                            <a href="#" class="wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="2.5s"><i
                                    class="fal fa-plus"></i>twitter</a>
                            <a href="#" class="wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay="2.7s"><i
                                    class="fal fa-plus"></i>linkedin</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-sm-12 text-center overflow-hidden">
                    <div class="hero-profile-img wow fadeInUp" data-wow-duration="2s" data-wow-delay=".9s">
                        <img src="assets/img/profile.png" alt="Spruce" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- service section -->
    <section class="services-section section-padding" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one wow fadeInDown" data-wow-duration="1.2s">
                        <span>my services</span>
                        <h2>I’m Graphic & Web Design , Developer and Check What’s Services I’ll Provide my Clients.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-service service-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="icon">
                            <img src="assets/img/icons/creativity.png" alt="">
                        </div>
                        <h3>Creative Design</h3>
                        <p>Maborisum ipsum dosea ilelite consec Maborisum iesumdolor anim id est laborum</p>
                    </div>
                </div> <!-- /.single-service -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-service service-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        <div class="icon">
                            <img src="assets/img/icons/seo.png" alt="">
                        </div>
                        <h3>Digital Marketing</h3>
                        <p>Maborisum ipsum dosea ilelite consec Maborisum iesumdolor anim id est laborum</p>
                    </div>
                </div> <!-- /.single-service -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-service service-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                        <div class="icon">
                            <img src="assets/img/icons/code.png" alt="">
                        </div>
                        <h3>Web Coding</h3>
                        <p>Maborisum ipsum dosea ilelite consec Maborisum iesumdolor anim id est laborum</p>
                    </div>
                </div> <!-- /.single-service -->
            </div>
            <div class="contact-promo text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">
                Have any Work? Fell Free to - <a href="#contact">Contact Me</a>
            </div>
        </div>
    </section>

    <!-- about-me section -->
    <section class="about-section section-padding theme-bg-gray" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1 achivements-area">
                    <div class="single-achivement">
                        <div class="icon">
                            <img src="assets/img/icons/start-up.png" alt="">
                        </div>
                        <div class="achive-heading">
                            <h3>Top Rated</h3>
                            <span>Worldcalss UI-UX</span>
                        </div>
                    </div> <!-- single-achivement -->
                    <div class="single-achivement">
                        <div class="icon">
                            <img src="assets/img/icons/client.png" alt="">
                        </div>
                        <div class="achive-heading">
                            <h3>500+</h3>
                            <span>Satisfied Clients</span>
                        </div>
                    </div> <!-- single-achivement -->
                    <div class="single-achivement">
                        <div class="icon">
                            <img src="assets/img/icons/career.png" alt="">
                        </div>
                        <div class="achive-heading">
                            <h3>10 YEARS</h3>
                            <span>Experienced Designer</span>
                        </div>
                    </div> <!-- single-achivement -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 col-12 wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <div class="main-profile-img">
                        <img src="assets/img/main_profile.png" alt="profile image">
                        <span>+</span>
                        <div class="dots_animate"></div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-12 wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".4s">
                    <div class="about-content">
                        <h1>Hello! I,m Spruce Springlane Graphic & Web Design and Web Developer.</h1>
                        <h3>Have 6 Years Experienced</h3>
                        <p>Maborisum ipsum dolor seat ameconsecteturers seat more be elite consecteture.
                            ContrarpopulabelLoreIpsum is notili more consecteture elite.</p>

                        <div class="row mt-4">
                            <div class="col-sm-6 col-12">
                                <div class="single-info">
                                    <h4>Phone :</h4>
                                    <p>+123- 4567- 8901</p>
                                </div>
                                <div class="single-info">
                                    <h4>Freelance :</h4>
                                    <p>Avialable For You</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="single-info">
                                    <h4>Email :</h4>
                                    <p>Springlane@mail.com</p>
                                </div>
                                <div class="single-info">
                                    <h4>Address :</h4>
                                    <p>House 201 Torento, Canada</p>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="theme-btn">+ Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills-experiance-resume section-padding" id="resume">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one">
                        <span>My resume</span>
                        <h2>High Skilled Provide High Quality </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="resume-timeline-wraper mt-5">
                        <div class="row">

                            <div class="col-sm-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-edu-tab" data-toggle="pill"
                                        href="#v-pills-edu" role="tab" aria-controls="v-pills-edu"
                                        aria-selected="true">Education</a>
                                    <a class="nav-link" id="v-pills-job-tab" data-toggle="pill" href="#v-pills-job"
                                        role="tab" aria-controls="v-pills-job" aria-selected="false">Experience</a>
                                    <a class="nav-link" id="v-pills-awards-tab" data-toggle="pill"
                                        href="#v-pills-awards" role="tab" aria-controls="v-pills-awards"
                                        aria-selected="false">Awards</a>
                                </div>
                            </div>

                            <div class="col-sm-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-edu" role="tabpanel"
                                        aria-labelledby="v-pills-edu-tab">
                                        <div class="single-resume-item">
                                            <div class="year">
                                                <span>2002-2006</span>
                                            </div>
                                            <h3>Graphic Design</h3>
                                            <h5>Springlean Graphic University</h5>
                                            <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla
                                                tristique, ornare felis id, congue libero. Nam volutpat euismod quam.
                                            </p>
                                        </div>
                                        <div class="single-resume-item">
                                            <div class="year">
                                                <span>2008-20011</span>
                                            </div>
                                            <h3>Frontend Development</h3>
                                            <h5>University of Udemy</h5>
                                            <p>Maecenas finibus nec sem ut imperdiet. Ut tincidunt est ac dolor aliquam
                                                sodales. Phasellus sed mauris hendrerit, laoreet sem in.</p>
                                        </div>
                                        <div class="single-resume-item">
                                            <div class="year">
                                                <span>20015-2020</span>
                                            </div>
                                            <h3>B.Sc. in Computer Science & Engineering</h3>
                                            <h5>Daffodil International University</h5>
                                            <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla
                                                tristique, ornare felis id, congue libero. Nam volutpat euismod quam.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-job" role="tabpanel"
                                        aria-labelledby="v-pills-job-tab">
                                        <div class="single-resume-item">
                                            <div class="year">
                                                <span>2008-2011</span>
                                            </div>
                                            <h3>Junior Ui/Ux Designer</h3>
                                            <h5>ITTALKBD</h5>
                                            <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla
                                                tristique, ornare felis id, congue libero. Nam volutpat euismod quam.
                                            </p>
                                        </div>
                                        <div class="single-resume-item">
                                            <div class="year">
                                                <span>2014-2019</span>
                                            </div>
                                            <h3>WordPress Developer</h3>
                                            <h5>Fiveer</h5>
                                            <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla
                                                tristique, ornare felis id, congue libero. Nam volutpat euismod quam.
                                            </p>
                                        </div>
                                        <div class="single-resume-item">
                                            <div class="year">
                                                <span>2019-Current</span>
                                            </div>
                                            <h3>Full Stack Developer</h3>
                                            <h5>KeenDevs</h5>
                                            <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla
                                                tristique, ornare felis id, congue libero. Nam volutpat euismod quam.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-awards" role="tabpanel"
                                        aria-labelledby="v-pills-awards-tab">
                                        <div class="single-resume-item">
                                            <div class="year">
                                                <span>2015</span>
                                            </div>
                                            <h3>Best UI Designer</h3>
                                            <h5>Google Awarads - 2015</h5>
                                            <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla
                                                tristique, ornare felis id, congue libero. Nam volutpat euismod quam.
                                            </p>
                                        </div>
                                        <div class="single-resume-item">
                                            <div class="year">
                                                <span>2017</span>
                                            </div>
                                            <h3>Best Online Freelancer</h3>
                                            <h5>SOFTTECH IT Awarads - 2017</h5>
                                            <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla
                                                tristique, ornare felis id, congue libero. Nam volutpat euismod quam.
                                            </p>
                                        </div>
                                        <div class="single-resume-item">
                                            <div class="year">
                                                <span>2020</span>
                                            </div>
                                            <h3>Product Dev Awarads</h3>
                                            <h5>Basic IT Awarads - 2020</h5>
                                            <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla
                                                tristique, ornare felis id, congue libero. Nam volutpat euismod quam.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="programming-skill mt-5">
                        <h3>Coding Skills</h3>

                        <div class="single-progress-bar">
                            <p>HTML & CSS</p>
                            <div class="progress-bar barfiller" id='bar1'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                                    <span class="tip">90%</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s"
                                    data-percentage="90"></span>
                            </div>
                        </div>

                        <div class="single-progress-bar">
                            <p>JavaScript</p>
                            <div class="barfiller progress-bar" id='bar2'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s">
                                    <span class="tip">80%</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".4s"
                                    data-percentage="80"></span>
                            </div>
                        </div>

                        <div class="single-progress-bar">
                            <p>WordPress</p>
                            <div class="barfiller progress-bar" id='bar3'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".6s">
                                    <span class="tip">92%</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".6s"
                                    data-percentage="92"></span>
                            </div>
                        </div>

                        <div class="single-progress-bar">
                            <p>React JS</p>
                            <div class="barfiller progress-bar" id='bar4'>
                                <div class="tipWrap wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".8s">
                                    <span class="tip">75%</span>
                                </div>
                                <span class="fill wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".8s"
                                    data-percentage="75"></span>
                            </div>
                        </div>
                    </div>

                    <div class="design-skills mt-45">
                        <h3>Design Skills</h3>
                        <div class="row">
                            <div class="single-design-skill text-center col-sm-4 col-12">
                                <div class="circlechart" data-percentage="90"></div>
                                <p>Web Design</p>
                            </div>
                            <div class="single-design-skill text-center col-sm-4 col-12">
                                <div class="circlechart" data-percentage="80"></div>
                                <p>Print Design</p>
                            </div>
                            <div class="single-design-skill text-center col-sm-4 col-12">
                                <div class="circlechart" data-percentage="75"></div>
                                <p>App Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-showcase section-padding pt-0" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one">
                        <span>My portfolio</span>
                        <h2>I’m Graphic & Web Design , Developer and Check my Recent Work I’ll Provide my Clients.</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="portfolio-filter mt-4 mt-sm-5">
                        <button data-filter="*" class="active">All</button>
                        <button data-filter=".wordpress">WordPress</button>
                        <button data-filter=".branding">Branding</button>
                        <button data-filter=".website">Web Design</button>
                        <button data-filter=".app">App Design</button>
                    </div>
                </div>
            </div>
            <div class="row grid p-0">
                <div class="col-lg-4 col-md-6 col-12 grid-item branding">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/1.jpg" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item wordpress website app">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/web1.jpg" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/web1.jpg" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item branding">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/4.jpg" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/4.jpg" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item branding app">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/5.jpg" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item wordpress">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/6.jpg" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/6.jpg" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 grid-item wordpress website">
                    <div class="single-portfolio-item">
                        <a href="assets/img/portfolio/web2.jpg" class="popup-gallery">
                            <img class="img-fluid" src="assets/img/portfolio/web2.jpg" alt="">
                            <span class="zoom-icon">+</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonial section -->
    <section id="testimonial" class="testimonial-section section-padding theme-bg-gray"
        style="background-image: url('assets/img/testimonial_bg.png');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-carousel-active text-center owl-carousel owl-theme">
                        <div class="single-testimonial-box">
                            <div class="client-img" style="background-image: url('assets/img/client1.png');"></div>
                            <div class="client-info">
                                <h3>Rachel Dowson</h3>
                                <span>Creative Arts</span>
                            </div>
                            <p>Maborisum ipsum dolor seat ameat consecteturerslmore be elite consec.</p>
                        </div>
                        <div class="single-testimonial-box">
                            <div class="client-img" style="background-image: url('assets/img/profile.png');"></div>
                            <div class="client-info">
                                <h3>Salman Ahmed</h3>
                                <span>React Developer</span>
                            </div>
                            <p>Maborisum ipsum dolor seat ameat consecteturerslmore be elite consec.</p>
                        </div>
                        <div class="single-testimonial-box">
                            <div class="client-img" style="background-image: url('assets/img/client2.png');"></div>
                            <div class="client-info">
                                <h3>Isabella Dowson</h3>
                                <span>CEO of WPLand</span>
                            </div>
                            <p>Maborisum ipsum dolor seat ameat consecteturerslmore be elite consec.</p>
                        </div>
                        <div class="single-testimonial-box">
                            <div class="client-img" style="background-image: url('assets/img/client1.png');"></div>
                            <div class="client-info">
                                <h3>Rachel Dowson</h3>
                                <span>Creative Arts</span>
                            </div>
                            <p>Maborisum ipsum dolor seat ameat consecteturerslmore be elite consec.</p>
                        </div>
                        <div class="single-testimonial-box">
                            <div class="client-img" style="background-image: url('assets/img/profile.png');"></div>
                            <div class="client-info">
                                <h3>Salman Ahmed</h3>
                                <span>React Developer</span>
                            </div>
                            <p>Maborisum ipsum dolor seat ameat consecteturerslmore be elite consec.</p>
                        </div>
                        <div class="single-testimonial-box">
                            <div class="client-img" style="background-image: url('assets/img/client2.png');"></div>
                            <div class="client-info">
                                <h3>Isabella Dowson</h3>
                                <span>CEO of WPLand</span>
                            </div>
                            <p>Maborisum ipsum dolor seat ameat consecteturerslmore be elite consec.</p>
                        </div>
                        <div class="single-testimonial-box">
                            <div class="client-img" style="background-image: url('assets/img/client1.png');"></div>
                            <div class="client-info">
                                <h3>Rachel Dowson</h3>
                                <span>Creative Arts</span>
                            </div>
                            <p>Maborisum ipsum dolor seat ameat consecteturerslmore be elite consec.</p>
                        </div>
                        <div class="single-testimonial-box">
                            <div class="client-img" style="background-image: url('assets/img/profile.png');"></div>
                            <div class="client-info">
                                <h3>Salman Ahmed</h3>
                                <span>React Developer</span>
                            </div>
                            <p>Maborisum ipsum dolor seat ameat consecteturerslmore be elite consec.</p>
                        </div>
                        <div class="single-testimonial-box">
                            <div class="client-img" style="background-image: url('assets/img/client2.png');"></div>
                            <div class="client-info">
                                <h3>Isabella Dowson</h3>
                                <span>CEO of WPLand</span>
                            </div>
                            <p>Maborisum ipsum dolor seat ameat consecteturerslmore be elite consec.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blog section -->
    <section class="blog-section section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-8 offset-lg-2">
                    <div class="section-title-one">
                        <span>blog news</span>
                        <h2>Here I’ll Share Some of My Work Experience and also Some Tips&Tricks</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-blog blog-one">
                        <div class="featured-img" style="background-image: url('assets/img/blog1.jpg');"></div>
                        <div class="blog-content-box">
                            <div class="post-date">02 January 2021, Sunday</div>
                            <h3><a href="single-blog.html">Top 10 Tips For Branding</a></h3>

                            <a href="single-blog.html" class="read-more-btn">+ Read More</a>
                        </div>
                    </div>
                </div> <!-- /.single-blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-blog blog-one">
                        <div class="featured-img" style="background-image: url('assets/img/blog2.jpg');"></div>
                        <div class="blog-content-box">
                            <div class="post-date">02 January 2021, Sunday</div>
                            <h3><a href="single-blog.html">Top 10 Tips For Branding</a></h3>

                            <a href="single-blog.html" class="read-more-btn">+ Read More</a>
                        </div>
                    </div>
                </div> <!-- /.single-blog -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-blog blog-one">
                        <div class="featured-img" style="background-image: url('assets/img/blog1.jpg');"></div>
                        <div class="blog-content-box">
                            <div class="post-date">02 January 2021, Sunday</div>
                            <h3><a href="single-blog.html">Best UI UX Course</a></h3>

                            <a href="single-blog.html" class="read-more-btn">+ Read More</a>
                        </div>
                    </div>
                </div> <!-- /.single-blog -->
            </div>
        </div>
    </section>

    <!-- blog section -->
    <section id="contact" class="contact-section section-padding theme-bg-gray"
        style="background-image: url('assets/img/testimonial_bg.png');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center col-lg-10 offset-lg-1">
                    <div class="section-title-one">
                        <span>Contact us</span>
                        <h2>Feel Free Message OR Call Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="contact-form-wraper">
                        <form action="mail.php" id="contact-form" method="POST" class="row">
                            <div class="col-md-6 col-12">
                                <div class="single-input">
                                    <input type="text" name="name" id="name" placeholder="Spruce Springlane">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-input">
                                    <input type="email" name="email" id="email" placeholder="Type Email Here">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="single-input">
                                    <textarea placeholder="Message" name="message" id="message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="theme-btn">+ Mesage Me</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- col-12 col-lg-8 -->
                <div class="col-lg-4 col-12 offset-lg-1">
                    <div class="contact-info">
                        <div class="single-info">
                            <h4>eMail :</h4>
                            <span>example@email.com</span>
                        </div>
                        <div class="single-info">
                            <h4>Phone :</h4>
                            <span>+888- 1234- 5678- 00</span>
                        </div>
                        <div class="single-info">
                            <h4>Address :</h4>
                            <span>201 House Road, Torento Canada</span>
                        </div>
                    </div>
                </div><!-- col-lg-4 col-12 -->
            </div>
        </div>
    </section>

    <footer class="footer-one text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    &copy; 2020 Copyright Reserved - <a href="#">Modina Theme</a>
                </div>
            </div>
        </div>
    </footer>

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imageload.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoint.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/typed.min.js') }}"></script>
    <script src="{{ asset('assets/js/metismenu.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/progresscircle.js') }}"></script>
    <script src="{{ asset('assets/js/barfiller.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
    <script>
        let typed = new Typed('.profession', {
        strings: ["Freelance Developer", "UI Designer"],
        typeSpeed: 80,
        loop: true,
        startDelay: 200,
        backSpeed: 50,
    });
    </script>
    <script src="assets/js/active.js"></script>
</body>

</html>
