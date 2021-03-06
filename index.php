<?php
session_start();
//$id = isset($_SESSION["name"]) ? $_SESSION["name"] : '';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GPC Muttom</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="css/styles-merged.css">
        <link rel="stylesheet" href="css/style.min_2.css">
        <link rel="stylesheet" href="css/custom.css">

        <!--[if lt IE 9]>
          <script src="js/vendor/html5shiv.min.js"></script>
          <script src="js/vendor/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="probootstrap-search" id="probootstrap-search">
            <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
            <form action="#">
                <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
            </form>
        </div>

        <div class="probootstrap-page-wrapper">
            <!-- Fixed navbar -->

            <?php include('Common/Header.php'); ?>

            <nav class="navbar navbar-default probootstrap-navbar">
                <div class="container">
                    <div class="navbar-header">
                        <div class="btn-more js-btn-more visible-xs">
                            <a href="#"><i class="icon-dots-three-vertical "></i></a>
                        </div>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php" title="Govt. Polytechnic College Muttom">GPC Muttom</a>
                    </div>

                    <div id="navbar-collapse" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Courses</a>
                                <ul class="dropdown-menu">
                                    <li><a href="course-single.php?CRS_id=1">Computer Engg.</a></li>
                                    <li><a href="course-single.php?CRS_id=3">Civil Engg.</a></li>
                                    <li><a href="course-single.php?CRS_id=4">Mechanical Engg.</a></li>
                                    <li><a href="course-single.php?CRS_id=2">Electronics Engg.</a></li>
                                    <li><a href="course-single.php?CRS_id=5">Electrical Engg.</a></li>
                                </ul>
                            </li>


                            <li><a href="contact.php">Contact</a></li>
                            <?php
                            if (isset($_SESSION["user_id"])) {
                                if ($_SESSION["user_roll"] == 'ADMN') {
                                    echo '<li><a href="adminComplaints.php">Complaints</a></li>';
                                    echo '<li><a href="AdminMessages.php">Messages</a></li>';
                                    echo '<li><a href="AdminAddItem.php">Dash</a></li>';
                                    echo '<li><a href="Accounts/logout.php">Logout</a></li>';
                                } else {
                                    echo '<li><a href="complaints.php">Complaints</a></li>';
                                    echo '<li><a href="Accounts/logout.php">Logout</a></li>';
                                }
                            } else {
                                echo '<li><a href="user/Accounts.php">Login</a></li>';
                            }
                            ?>
                        </ul>
                        <a href="user/Accounts.php"></a>
                    </div>
                </div>
            </nav>

            <section class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(img/slider_1.jpg)" class="overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="probootstrap-slider-text text-center">
                                        <h1 class="probootstrap-heading probootstrap-animate">Your Bright Future is Our Mission</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(img/slider_2.jpg)" class="overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="probootstrap-slider-text text-center">
                                        <h1 class="probootstrap-heading probootstrap-animate">Education is Life</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li style="background-image: url(img/slider_3.jpg)" class="overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="probootstrap-slider-text text-center">
                                        <h1 class="probootstrap-heading probootstrap-animate">Helping Each of Our Students Fulfill the Potential</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>

            <section class="probootstrap-section probootstrap-section-colored">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left section-heading probootstrap-animate">
                            <h2>Welcome to Center of Excellence</h2>
                        </div>
                    </div>
                </div>
            </section>

            <section class="probootstrap-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="probootstrap-flex-block">
                                <div class="probootstrap-text probootstrap-animate">
                                    <h3>About College</h3>
                                    <p>Government Polytechnic College, Muttom is one of the Technical institutions in Idukki district situated at Thodupuzha, Muttom. It functions along with the other educational institutions in Central Travancore.</p>
                                    <p><a href="about.php" class="btn btn-primary">Learn More</a></p>
                                </div>
                                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
                                    <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="probootstrap-section" id="probootstrap-counter">
                <div class="container">

                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                            <div class="probootstrap-counter-wrap">
                                <div class="probootstrap-icon">
                                    <i class="icon-users2"></i>
                                </div>
                                <div class="probootstrap-text">
                                    <span class="probootstrap-counter">
                                        <span class="js-counter" data-from="0" data-to="20203" data-speed="5000" data-refresh-interval="50">1</span>
                                    </span>
                                    <span class="probootstrap-counter-label">Students Enrolled</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                            <div class="probootstrap-counter-wrap">
                                <div class="probootstrap-icon">
                                    <i class="icon-user-tie"></i>
                                </div>
                                <div class="probootstrap-text">
                                    <span class="probootstrap-counter">
                                        <span class="js-counter" data-from="0" data-to="139" data-speed="5000" data-refresh-interval="50">1</span>
                                    </span>
                                    <span class="probootstrap-counter-label">Certified Teachers</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block visible-xs-block"></div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                            <div class="probootstrap-counter-wrap">
                                <div class="probootstrap-icon">
                                    <i class="icon-library"></i>
                                </div>
                                <div class="probootstrap-text">
                                    <span class="probootstrap-counter">
                                        <span class="js-counter" data-from="0" data-to="99" data-speed="5000" data-refresh-interval="50">1</span>%
                                    </span>
                                    <span class="probootstrap-counter-label">Passing to Universities</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">

                            <div class="probootstrap-counter-wrap">
                                <div class="probootstrap-icon">
                                    <i class="icon-smile2"></i>
                                </div>
                                <div class="probootstrap-text">
                                    <span class="probootstrap-counter">
                                        <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                                    </span>
                                    <span class="probootstrap-counter-label">Parents Satisfaction</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/slider_2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center section-heading probootstrap-animate">
                            <h2 class="mb0">Highlights</h2>
                        </div>
                    </div>
                </div>
                <div class="probootstrap-tab-style-1">
                    <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
                        <li class="active"><a data-toggle="tab" href="#featured-news">Featured News</a></li>
                        <li><a data-toggle="tab" href="#upcoming-events">Upcoming Events</a></li>
                    </ul>
                </div>
            </section>

            <section class="probootstrap-section probootstrap-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="tab-content">

                                <div id="featured-news" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="owl-carousel" id="owl1">
                                                <div class="item">
                                                    <a href="#" class="probootstrap-featured-news-box">
                                                        <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Loading..!" class="img-responsive"></figure>
                                                        <div class="probootstrap-text">
                                                            <h3>Tempora consectetur unde nisi</h3>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, ut.</p>
                                                            <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>

                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- END item -->
                                                <div class="item">
                                                    <a href="#" class="probootstrap-featured-news-box">
                                                        <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Loading..!" class="img-responsive"></figure>
                                                        <div class="probootstrap-text">
                                                            <h3>Tempora consectetur unde nisi</h3>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, officia.</p>
                                                            <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>

                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- END item -->
                                                <div class="item">
                                                    <a href="#" class="probootstrap-featured-news-box">
                                                        <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Loading..!" class="img-responsive"></figure>
                                                        <div class="probootstrap-text">
                                                            <h3>Tempora consectetur unde nisi</h3>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dolores.</p>
                                                            <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>

                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- END item -->
                                                <div class="item">
                                                    <a href="#" class="probootstrap-featured-news-box">
                                                        <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Loading..!" class="img-responsive"></figure>
                                                        <div class="probootstrap-text">
                                                            <h3>Tempora consectetur unde nisi</h3>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, earum.</p>
                                                            <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>


                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- END item -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END row -->
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <p><a href="#" class="btn btn-primary">View all news</a></p>  
                                        </div>
                                    </div>
                                </div>
                                <div id="upcoming-events" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="owl-carousel" id="owl2">
                                                <div class="item">
                                                    <a href="#" class="probootstrap-featured-news-box">
                                                        <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Loading..!" class="img-responsive"></figure>
                                                        <div class="probootstrap-text">
                                                            <h3>Tempora consectetur unde nisi</h3>
                                                            <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                                                            <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- END item -->
                                                <div class="item">
                                                    <a href="#" class="probootstrap-featured-news-box">
                                                        <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Loading..!" class="img-responsive"></figure>
                                                        <div class="probootstrap-text">
                                                            <h3>Tempora consectetur unde nisi</h3>
                                                            <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                                                            <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- END item -->
                                                <div class="item">
                                                    <a href="#" class="probootstrap-featured-news-box">
                                                        <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Loading..!" class="img-responsive"></figure>
                                                        <div class="probootstrap-text">
                                                            <h3>Tempora consectetur unde nisi</h3>
                                                            <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                                                            <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- END item -->
                                                <div class="item">
                                                    <a href="#" class="probootstrap-featured-news-box">
                                                        <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Loading..!" class="img-responsive"></figure>
                                                        <div class="probootstrap-text">
                                                            <h3>Tempora consectetur unde nisi</h3>
                                                            <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                                                            <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- END item -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <p><a href="#" class="btn btn-primary">View all events</a></p>  
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                            <h2>Our Featured Courses</h2>
                            <p class="lead">"Moulding Engineers par Industry Excellence with Values and Culture"</p>
                        </div>
                    </div>
                    <!-- END row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="probootstrap-service-2 probootstrap-animate">
                                <div class="image">
                                    <div class="image-bg">
                                        <img src="img/img_sm_1.jpg" alt="Loading..!">
                                    </div>
                                </div>
                                <div class="text">
                                    <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                                    <h3>Computer Engineering</h3>
                                    <p>The curriculum of the three year diploma course in computer technology is updated from time to time to keep up with the ever evolving IT sector.</p>
                                    <p><a href="course-single.php?CRS_id=1" class="btn btn-primary">View More</a> </p>
                                </div>
                            </div>

                            <div class="probootstrap-service-2 probootstrap-animate">
                                <div class="image">
                                    <div class="image-bg">
                                        <img src="img/img_sm_3.jpg" alt="Loading..!">
                                    </div>
                                </div>
                                <div class="text">
                                    <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                                    <h3>Electronics Engineering</h3>
                                    <p>The discipline typically also designs passive electrical components, usually based on printed circuit boards.</p>
                                    <p><a href="course-single.php?CRS_id=2" class="btn btn-primary">View More</a> </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="probootstrap-service-2 probootstrap-animate">
                                <div class="image">
                                    <div class="image-bg">
                                        <img src="img/img_sm_2.jpg" alt="Loading..!">
                                    </div>
                                </div>
                                <div class="text">
                                    <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                                    <h3>Civil Engineering</h3>
                                    <p>Civil engineers are the builders of our world. They are responsible for virtually for all the great structures around us today and throughout history.</p>
                                    <p><a href="course-single.php?CRS_id=3" class="btn btn-primary">View More</a> </p>
                                </div>
                            </div>

                            <div class="probootstrap-service-2 probootstrap-animate">
                                <div class="image">
                                    <div class="image-bg">
                                        <img src="img/img_sm_4.jpg" alt="Loading..!">
                                    </div>
                                </div>
                                <div class="text">
                                    <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                                    <h3>Mechanical Engineering</h3>
                                    <p>Mechanical Engineering is the mother of all Branches of Engineering. It is a very broad field that includes the applications of..</p>
                                    <p><a href="course-single.php?CRS_id=4" class="btn btn-primary">View More</a> </p>
                                </div>
                            </div>

                            <div class="probootstrap-service-2 probootstrap-animate">
                                <div class="image">
                                    <div class="image-bg">
                                        <img src="img/img_sm_4.jpg" alt="Loading..!">
                                    </div>
                                </div>
                                <div class="text">
                                    <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                                    <h3>Electrical & Electronics Engineering</h3>
                                    <p>Electrical Engineering forms the application of the laws of Physics governing electricity, magnetism, and light to develop new ..</p>
                                    <p><a href="course-single.php?CRS_id=5" class="btn btn-primary">View More</a> </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>



            <section class="probootstrap-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                            <h2>Meet Our Qualified Teachers</h2>
                            <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
                        </div>
                    </div>
                    <!-- END row -->

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="probootstrap-teacher text-center probootstrap-animate">
                                <figure class="media">
                                    <img src="img/person_1.jpg" alt="Loading..!" class="img-responsive">
                                </figure>
                                <div class="text">
                                    <h3>Chris Worth</h3>
                                    <p>Physical Education</p>
                                    <ul class="probootstrap-footer-social">
                                        <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="probootstrap-teacher text-center probootstrap-animate">
                                <figure class="media">
                                    <img src="img/person_5.jpg" alt="Loading..!" class="img-responsive">
                                </figure>
                                <div class="text">
                                    <h3>Janet Morris</h3>
                                    <p>English Teacher</p>
                                    <ul class="probootstrap-footer-social">
                                        <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block visible-xs-block"></div>
                        <div class="col-md-3 col-sm-6">
                            <div class="probootstrap-teacher text-center probootstrap-animate">
                                <figure class="media">
                                    <img src="img/person_6.jpg" alt="Loading..!" class="img-responsive">
                                </figure>
                                <div class="text">
                                    <h3>Linda Reyez</h3>
                                    <p>Math Teacher</p>
                                    <ul class="probootstrap-footer-social">
                                        <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="probootstrap-teacher text-center probootstrap-animate">
                                <figure class="media">
                                    <img src="img/person_7.jpg" alt="Loading..!" class="img-responsive">
                                </figure>
                                <div class="text">
                                    <h3>Jessa Sy</h3>
                                    <p>Physics Teacher</p>
                                    <ul class="probootstrap-footer-social">
                                        <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                                        <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                                        <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="probootstrap-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                            <h2>Why Choose Enlight School</h2>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service left-icon probootstrap-animate">
                                <div class="icon"><i class="icon-checkmark"></i></div>
                                <div class="text">
                                    <h3>Consectetur Adipisicing</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                                </div>  
                            </div>
                            <div class="service left-icon probootstrap-animate">
                                <div class="icon"><i class="icon-checkmark"></i></div>
                                <div class="text">
                                    <h3>Aliquid Dolorum Saepe</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                                </div>
                            </div>
                            <div class="service left-icon probootstrap-animate">
                                <div class="icon"><i class="icon-checkmark"></i></div>
                                <div class="text">
                                    <h3>Eveniet Tempora Anisi</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service left-icon probootstrap-animate">
                                <div class="icon"><i class="icon-checkmark"></i></div>
                                <div class="text">
                                    <h3>Laboriosam Quod Dignissimos</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                                </div>  
                            </div>

                            <div class="service left-icon probootstrap-animate">
                                <div class="icon"><i class="icon-checkmark"></i></div>
                                <div class="text">
                                    <h3>Asperiores Maxime Modi</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                                </div>
                            </div>

                            <div class="service left-icon probootstrap-animate">
                                <div class="icon"><i class="icon-checkmark"></i></div>
                                <div class="text">
                                    <h3>Libero Maxime Molestiae</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END row -->
                </div>
            </section>


            <?php include('Common/footer.php'); ?>


        </div>
        <!-- END wrapper -->


        <script src="js/scripts.min.js"></script>
        <script src="js/main.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>