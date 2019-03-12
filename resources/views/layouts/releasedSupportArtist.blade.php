<!-- get_header('Page Name','Title')-->
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('PageTitle')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CPoppins:200,400,500,600,700%7CPlayfair+Display:400,700i" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Icon foont list -->
    <link rel="stylesheet" href="../assets/css/iconfont.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- isotope -->
    <link rel="stylesheet" href="../assets/css/isotope.css">
    <!-- magnific -->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <!-- woocommerce -->
    <link rel="stylesheet" href="../assets/css/woocommerce.css">


    <!--For Plugins external css-->
    <link rel="stylesheet" href="../assets/css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="../assets/css/responsive.css" />

    <script src="../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="woocommerce">
<!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="preloader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div><!-- #preloader -->
<!-- header section -->
<!-- header version inner menu -->
<header class="fundpress-header-inner-version fundpress-header-main-version xs-menu-style-solid color-navy-blue">
    <div class="container">
        <nav class="xs-menus fundpress-menu">
            <div class="nav-header">
                <div class="nav-toggle"></div>
                <a class="nav-brand nav-logo" href="index.html">
                    <img src="../assets/images/logo.png" alt="">
                </a>
            </div><!-- . END -->
            <div class="nav-menus-wrapper">
                <div class="xs-logo-wraper">
                    <a class="nav-brand xs-logo fundpress-logo-v1" href="index.html">
                        <img src="../assets/images/logo.png" alt="">
                    </a>
                </div>
                <ul class="nav-menu">
                    <li><a href="">Home</a>
                        <ul class="nav-dropdown">
                            <li><a href="index.html">home version 1</a></li>
                            <li><a href="index-v2.html">home version 2</a></li>
                            <li><a href="index-v3.html">home version 3</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="#">Blog</a>
                        <ul class="nav-dropdown">
                            <li><a href="news-feed.html ">blog version 1</a></li>
                            <li><a href="news-feed-v2.html ">blog version 2</a></li>
                            <li><a href="news-feed-v3.html">blog version 3</a></li>
                            <li><a href="blog-single.html">blog details </a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="#">pages</a>
                        <ul class="nav-dropdown">
                            <li><a href="team-member-details.html ">team details</a></li>
                            <li><a href="progress.html ">progress</a></li>
                            <li><a href="progress-successful.html">progress successful</a></li>
                            <li><a href="progress-explore.html">progress explore</a></li>
                            <li><a href="events.html">events</a></li>
                            <li><a href="faq.html">faq</a></li>
                            <li><a href="fund-details.html ">fund-details</a></li>
                            <li><a href="we-do.html">we do</a></li>
                            <li><a href="portfolio.html">portfolio</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="single-shop.html">single Shop</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="xs-navs-button">
                    <ul class="xs-icon-with-text fundpress-icon-menu">
                        <li><a href="" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-unlock-alt color-green"></i>Log In</a></li>
                        <li class="d-block d-lg-none d-xl-block"><a href="#" class="xs-btn round-btn green-btn">start a campaign</a></li>
                    </ul>
                </div>
            </div><!-- .nav-menus-wrapper END -->
        </nav><!-- .xs-menus .fundpress-menu END -->
    </div>
</header>
<!-- header version inner menu closed -->


<!-- modal -->
<div class="modal fade bd-example-modal-lg xs-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="fundpress-tab-nav-v5">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#login" role="tab" data-toggle="tab">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#signup" role="tab" data-toggle="tab">
                            Signup
                        </a>
                    </li>
                </ul>
            </div><!-- fundpress-tab-nav-v3 -->
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fadeInRights show fade in active" id="login">
                    <form action="#" method="POST" id="xs-login-form">
                        <div class="xs-input-group-v2">
                            <i class="icon icon-profile-male"></i>
                            <input type="text" name="name" id="xs_user_login_name" class="xs-input-control" placeholder="Enter your username">
                        </div>
                        <div class="xs-input-group-v2">
                            <i class="icon icon-key2"></i>
                            <input type="password" name="name" id="xs_login_password" class="xs-input-control" placeholder="Enter your password">
                        </div>
                        <div class="xs-submit-wraper xs-mb-20">
                            <input type="submit" name="submit" value="login now" id="xs_contact_get_action" class="btn btn-warning btn-block">
                        </div>
                        <p class="xs-mb-20">or</p>
                        <div class="xs-submit-wraper xs-mb-20">
                            <input type="submit" name="submit" value="Login with facebook account" id="xs_facebook" class="btn btn-info btn-block">
                        </div>
                        <div class="xs-submit-wraper">
                            <input type="submit" name="submit" value="Login with twitter account" id="xs_twitter" class="btn btn-success btn-block">
                        </div>
                    </form>
                </div><!-- tab-pane -->
                <div role="tabpanel" class="tab-pane fadeInRights fade" id="signup">
                    <form action="#" method="POST" id="xs-register-form">
                        <div class="xs-input-group-v2">
                            <i class="icon icon-profile-male"></i>
                            <input type="text" name="name" id="xs_register_name" class="xs-input-control" placeholder="Enter your username">
                        </div>
                        <div class="xs-input-group-v2">
                            <i class="icon icon-envelope2"></i>
                            <input type="email" name="email" id="xs_register_email" class="xs-input-control" placeholder="Enter your email">
                        </div>
                        <div class="xs-input-group-v2">
                            <i class="icon icon-key2"></i>
                            <input type="password" name="name" id="xs_register_password" class="xs-input-control" placeholder="Enter your password">
                        </div>
                        <div class="xs-input-group-v2">
                            <i class="icon icon-key2"></i>
                            <input type="password" name="name" id="xs_register_repeat_pass" class="xs-input-control" placeholder="Enter your confirm password">
                        </div>
                        <div class="xs-submit-wraper xs-mb-20">
                            <input type="submit" name="submit" value="login now" id="xs_register_get_action" class="btn btn-warning btn-block">
                        </div>
                        <p class="xs-mb-20">or</p>
                        <div class="xs-submit-wraper xs-mb-20">
                            <input type="submit" name="submit" value="Login with facebook account" id="xs_register_facebook" class="btn btn-info btn-block">
                        </div>
                        <div class="xs-submit-wraper">
                            <input type="submit" name="submit" value="Login with twitter account" id="xs_register_twitter" class="btn btn-success btn-block">
                        </div>
                    </form>
                </div><!-- tab-pane -->
            </div><!-- tab-content -->
        </div>
    </div>
</div><!-- End modal --><!-- End header section -->

<!-- welcome section -->
<!--breadcumb start here-->
<section class="xs-inner-welcome-section fundpress-inner-welcome-section fundpress-inner-bg-1 parallax-window" data-parallax="scroll" data-image-src="../assets/images/background/about_us_bg.png">
    <div class="xs-solid-overlay xs-bg-black"></div>
    <div class="container">
        <div class="fundpress-inner-welcome-content">
            <h2 class="color-white">About US</h2>
            <ul class="xs-breadcumb fundpress-breadcumb">
                <li><a href="index.html" class="color-white"> Home /</a> About US</li>
            </ul>
        </div>
    </div>
</section>
<!--breadcumb end here--><!-- End welcome section -->

<main class="xs-all-content-wrapper">
    <!-- about us promo -->
    <section class="xs-about-us-promo-section xs-content-section-padding fundpress-about-us-promo-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="fundpress-inner-about-content">
                        <h2 class="color-navy-blue">We are changing the way of making things possible.</h2>
                        <p>“FundPress is one of those platforms that gives you space to work with people who know you, love you, and support you.” </p>
                        <a href="#" class="xs-sign-logo">
                            <img src="../assets/images/signature_logo.png" alt="Fundpress author sign">
                        </a>
                    </div>
                    <!--
                        xs-inner-title
                        xs-padding-right
                        fundpress-inner-title
                        xs-equal-height-and-content-center
                    -->
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="fundpress-about-promo-image xs-box-shadow">
                        <img src="../assets/images/about.jpg" alt="">
                    </div>
                    <!--
                        fundpress-about-promo-image
                        xs-box-shadow
                     -->
                </div>
            </div>
        </div>
    </section>	<!-- about us promo end -->

    <!-- about us video text -->
    <section class="fundpress-video-popup-with-text">
        <div class="fundpress-video-top-section xs-navy-blue-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-12 col-lg-10 content-center">
                        <div class="xs-heading-title fundpress-heading-title">
                            <h2 class="color-white margin-bottom-0">“ FundPress is about giving back, raising lots of money for great causes, and having the most fun in the world while doing it. ”</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about us video text -->
        <div class="funpress-video-popup xs-margin-top xs-margin-minus">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-12 col-lg-6 content-center">
                        <div class="fundpress-popup-image xs-box-shadow">
                            <img src="../assets/images/about_2.jpg" alt="">
                            <div class="xs-popup-content icon-position-center">
                                <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="xs-video-popup full-round icon-identify-btn green-btn xs-box-shadow xs-big-button"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	<!-- about us video text end -->
    </section>	<!-- about us video text end -->

    <!-- about us simple promo text -->
    <div class="fundpress-simple-promo-text-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-12 col-lg-9 content-center">
                    <div class="fundpress-title-text-content">
                        <h4 class="color-green margin-bottom-0">Raise money for ​over 1.5 million charities with personal fundraisers, events, races and corporate philanthropy.</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-6">
                    <div class="xs-text-content fundpress-text-content">
                        <p>FundPress is the world’s largest and fastest​-​growing fundraisingplatform dedicated exclusively to charitable giving. FundPress is used by millions of individuals to raise money for their favorite charities​ and causes.​</p>
                        <p>Tens of thousands of charities and events, and many of the most famous artists and athletes in the world use FundPress to creatively unlock the power of their Fund and raise hundreds of millions of dollars to support positive social missions. ​Some of our partners include ​American Cancer Society, the New York City Marathon, the Boston Marathon, Red Cross, UNICEF, Ironman, Tough Mudder, United Airlines, Huffington Post, Active, Live Nation, and Viacom​ as well as artists like ​Kristen Bell, Pearl Jam, ​Sean Penn, ​Big Sean, ​Seth Rogen, Jonah Hill, Paul Rudd​ ​and many more.</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-6">
                    <div class="xs-text-content fundpress-text-content">
                        <p>The FundPress community was named a “Top 25 Best Global Philanthropist” by Barron’s. We beat Oprah. And, Mashable named FundPress something like “the best place to raise money online for your favorite causes.” If you don't understand how fast and easy it is to raise lots of money for your favorite charity on FundPress, please check out the <a href="#" class="color-green">How It Works</a> page, <a href="#" class="color-green">Contact us</a>, or just ask any fifteen year old.</p>
                        <p>Fundraise online and raise money for charity and causes you’repassionate about. CrowdRise is an innovative, cost-effective online fundraising website for personal fundraising pages, non-profit fundraising and event fundraising. Raise money online for causes and have the most fun in the world while doing it.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>	<!-- about us simple promo text end -->

    <!-- about us side by side image version 1 -->
    <section class="xs-gray-bg fundpress-text-with-image-side-by-side-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="xs-box-shadow-2">
                        <img src="../assets/images/happy_people.jpg" alt="" class="img-100">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="fundpress-side-by-side-image-with-text">
                        <h5 class="color-green">Our Vission</h5>
                        <div class="xs-inner-title fundpress-inner-title">
                            <h2 class="color-navy-blue">FundPress is the World's #1 Personal Fundraising Website.</h2>
                        </div>
                        <ul class="xs-list-item-icon-text xs-side-by-side-list">
                            <li><i class="fa fa-check color-green"></i>Mobile-Friendly Campaigns</li>
                            <li><i class="fa fa-check color-green"></i>No deadlines or goal requirements</li>
                            <li><i class="fa fa-check color-green"></i>Keep every donation you receive</li>
                            <li><i class="fa fa-check color-green"></i>5-Minute Email Support</li>
                        </ul>
                        <p>But thanks to the kindness of hundreds of people, Harding has just started at Manchester university. Her story gained traction, and a supporter, Sonia Joy Sarre, a school secretary, was moved to create a campaign.</p>
                        <a href="#" class="xs-btn round-btn navy-blue-btn">start a campaign</a>
                    </div>
                </div>
            </div>
        </div>
    </section>	<!-- about us side by side image version 1 end -->

    <!-- about us side by side image version 2 -->
    <section class="xs-bg xs-content-section-padding fundpress-text-with-image-side-by-side-2" style="background-image: url(../assets/images/icons-background-1.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="fundpress-side-by-side-image-with-text padding-right-100">
                        <h5 class="color-green">Our Mission</h5>
                        <div class="xs-inner-title fundpress-inner-title">
                            <h2 class="color-navy-blue">Crowdfunding campaigns has never been that easy</h2>
                        </div>
                        <p>We built FundPress to help bring creative projects to life. We measure our success as a company by how well we achieve that mission, not by the size of our profits. That’s why, in 2015, we became a Benefit Corporation.</p>
                        <a href="#" class="xs-btn round-btn navy-blue-btn">start a campaign</a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="xs-box-shadow-2">
                        <img src="../assets/images/heppy_people_2.jpg" class="img-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>	<!-- about us side by side image version 2 end -->

    <!-- team section -->
    <section class="xs-gray-bg xs-team-section fundpress-team-section xs-section-padding">
        <div class="container">
            <div class="xs-section-heading row xs-margin-0">
                <div class="fundpress-heading-title xs-padding-0 col-md-9 col-xl-9">
                    <h2 class="color-navy-blue">Meet with our team</h2>
                    <span class="xs-separetor dashed-separetor fundpress-separetor"></span>
                    <p>No matter how many times your amazing, absolutely brilliant</p>
                </div><!-- .xs-heading-title .fundpress-heading-title .xs-col-9 END -->
                <div class="xs-btn-wraper xs-padding-0 col-xl-3 col-md-3 d-flex-center-end">
                    <a href="#" class="xs-btn round-btn navy-blue-btn">Team</a>
                </div><!-- .xs-btn-wraper .d-flex-center-end .xs-col-3 END -->
            </div><!-- .xs-section-heading .fundpress-section-heading .xs-spilit-container END -->
            <div class="row">
                <div class="col-md-3">
                    <div class="xs-box-shadow  fundpress-single-team-member">
                        <div class="fundpress-item-header ">
                            <img src="../assets/images/avatar/team-1.jpg" alt="">
                            <div class="xs-hover-content fundpress-hover-content text-center">
                                <ul class="xs-social-list fundpress-social-list xs-social-list-v2">
                                    <li><a href="" class="color-facebook full-round"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="" class="color-twitter full-round"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="" class="color-dribbble full-round"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--fundpress-item-header -->
                        <div class="xs-item-footer xs-content-padding bg-color-white  fundpress-team-details text-center">
                            <a href="#" class="color-navy-blue">
                                Kene Williamson
                            </a>
                            <h5 class="color-green">Founder</h5>
                        </div>
                        <!--
                            xs-item-footer
                            xs-content-padding
                            bg-color-white
                            fundpress-team-details
                            text-center
                         -->
                    </div>
                    <!--
                        xs-box-shadow
                        fundpress-single-team-member
                     -->
                </div>
                <div class="col-md-3">
                    <div class="xs-box-shadow  fundpress-single-team-member">
                        <div class="fundpress-item-header ">
                            <img src="../assets/images/avatar/team-2.jpg" alt="">
                            <div class="xs-hover-content fundpress-hover-content text-center">
                                <ul class="xs-social-list fundpress-social-list xs-social-list-v2">
                                    <li><a href="" class="color-facebook full-round"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="" class="color-twitter full-round"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="" class="color-dribbble full-round"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--fundpress-item-header -->
                        <div class="xs-item-footer xs-content-padding bg-color-white  fundpress-team-details text-center">
                            <a href="#" class="color-navy-blue">
                                Thomas Muller
                            </a>
                            <h5 class="color-green">C E O</h5>
                        </div>
                        <!--
                            xs-item-footer
                            xs-content-padding
                            bg-color-white
                            fundpress-team-details
                            text-center
                         -->
                    </div>
                    <!--
                        xs-box-shadow
                        fundpress-single-team-member
                     -->
                </div>
                <div class="col-md-3">
                    <div class="xs-box-shadow  fundpress-single-team-member">
                        <div class="fundpress-item-header ">
                            <img src="../assets/images/avatar/team-3.jpg" alt="">
                            <div class="xs-hover-content fundpress-hover-content text-center">
                                <ul class="xs-social-list fundpress-social-list xs-social-list-v2">
                                    <li><a href="" class="color-facebook full-round"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="" class="color-twitter full-round"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="" class="color-dribbble full-round"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--fundpress-item-header -->
                        <div class="xs-item-footer xs-content-padding bg-color-white  fundpress-team-details text-center">
                            <a href="#" class="color-navy-blue">
                                Arian Roben
                            </a>
                            <h5 class="color-green">Volunteer</h5>
                        </div>
                        <!--
                            xs-item-footer
                            xs-content-padding
                            bg-color-white
                            fundpress-team-details
                            text-center
                         -->
                    </div>
                    <!--
                        xs-box-shadow
                        fundpress-single-team-member
                     -->
                </div>
                <div class="col-md-3">
                    <div class="xs-box-shadow  fundpress-single-team-member">
                        <div class="fundpress-item-header ">
                            <img src="../assets/images/avatar/team-4.jpg" alt="">
                            <div class="xs-hover-content fundpress-hover-content text-center">
                                <ul class="xs-social-list fundpress-social-list xs-social-list-v2">
                                    <li><a href="" class="color-facebook full-round"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="" class="color-twitter full-round"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="" class="color-dribbble full-round"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--fundpress-item-header-->
                        <div class="xs-item-footer xs-content-padding bg-color-white  fundpress-team-details text-center">
                            <a href="#" class="color-navy-blue">
                                Pencil Henrics
                            </a>
                            <h5 class="color-green">Volunteer</h5>
                        </div>
                        <!--
                            xs-item-footer
                            xs-content-padding
                            bg-color-white
                            fundpress-team-details
                            text-center
                         -->
                    </div>
                    <!--
                        xs-box-shadow
                        fundpress-single-team-member
                     -->
                </div>
            </div>
        </div>
    </section>	<!-- team section end -->

    <!-- testimonial section -->
    <div class="xs-content-section-padding xs-testimonial-section fundpress-testimonial-section">
        <div class="container">
            <div class="xs-testimonial-slider slider-double-item xs-owl-dot owl-carousel">
                <div class="xs-testimonial-item">
                    <blockquote class="xs-blockquote bg-color-white xs-box-shadow xs-content-padding fundpress-blockquote">
					<span class="xs-blockquote-icon fundpress-blockquote-icon">
						<img src="../assets/images/quote-left.png" alt="">
					</span>
                        " We are so glad that we made the switch to use FundPress this year and our results were fantastic. Our 8th Annual Race For Grace raised $457,000, which is a new record for us."
                    </blockquote><!-- xs-blockquote bg-color-white xs-box-shadow xs-content-padding fundpress-blockquote END -->
                    <div class="xs-spilit-container xs-testimonial-bio content-center width-70">
                        <div class="xs-avatar full-round fundpress-avatar-big">
                            <img src="../assets/images/avatar/testimonial-1.jpg" alt="" class="xs-box-shadow-2">
                        </div>
                        <div class="xs-item-footer fundpress-team-details fundpress-testimonial-details text-left">
                            <a href="#" class="color-navy-blue">
                                Mark Williamson
                            </a>
                            <h5 class="color-green">Founder, UI Hub Inc.</h5>
                        </div>
                    </div><!-- xs-spilit-container xs-testimonial-bio content-center width-70 END -->
                </div><!-- xs-testimonial-item END -->
                <div class="xs-testimonial-item">
                    <blockquote class="xs-blockquote bg-color-white xs-box-shadow xs-content-padding fundpress-blockquote">
					<span class="xs-blockquote-icon fundpress-blockquote-icon">
						<img src="../assets/images/quote-left.png" alt="">
					</span>
                        " We are so glad that we made the switch to use FundPress this year and our results were fantastic. Our 8th Annual Race For Grace raised $457,000, which is a new record for us."
                    </blockquote><!-- xs-blockquote bg-color-white xs-box-shadow xs-content-padding fundpress-blockquote END -->
                    <div class="xs-spilit-container xs-testimonial-bio content-center width-70">
                        <div class="xs-avatar full-round fundpress-avatar-big">
                            <img src="../assets/images/avatar/testimonial-2.jpg" alt="" class="xs-box-shadow-2">
                        </div>
                        <div class="xs-item-footer fundpress-team-details fundpress-testimonial-details text-left">
                            <a href="#" class="color-navy-blue">
                                Mark Henricks
                            </a>
                            <h5 class="color-green">CEO, Pranklin Agency</h5>
                        </div>
                    </div><!-- xs-spilit-container xs-testimonial-bio content-center width-70 END -->
                </div><!-- xs-testimonial-item END -->
                <div class="xs-testimonial-item">
                    <blockquote class="xs-blockquote bg-color-white xs-box-shadow xs-content-padding fundpress-blockquote">
					<span class="xs-blockquote-icon fundpress-blockquote-icon">
						<img src="../assets/images/quote-left.png" alt="">
					</span>
                        " We are so glad that we made the switch to use FundPress this year and our results were fantastic. Our 8th Annual Race For Grace raised $457,000, which is a new record for us."
                    </blockquote><!-- xs-blockquote bg-color-white xs-box-shadow xs-content-padding fundpress-blockquote END -->
                    <div class="xs-spilit-container xs-testimonial-bio content-center width-70">
                        <div class="xs-avatar full-round fundpress-avatar-big">
                            <img src="../assets/images/avatar/testimonial-3.jpg" alt="" class="xs-box-shadow-2">
                        </div>
                        <div class="xs-item-footer fundpress-team-details fundpress-testimonial-details text-left">
                            <a href="#" class="color-navy-blue">
                                Mark Henricks
                            </a>
                            <h5 class="color-green">Founder, UI Hub Inc.</h5>
                        </div>
                    </div><!-- xs-spilit-container xs-testimonial-bio content-center width-70 END -->
                </div><!-- xs-testimonial-item END -->
                <div class="xs-testimonial-item">
                    <blockquote class="xs-blockquote bg-color-white xs-box-shadow xs-content-padding fundpress-blockquote">
					<span class="xs-blockquote-icon fundpress-blockquote-icon">
						<img src="../assets/images/quote-left.png" alt="">
					</span>
                        " We are so glad that we made the switch to use FundPress this year and our results were fantastic. Our 8th Annual Race For Grace raised $457,000, which is a new record for us."
                    </blockquote><!-- xs-blockquote bg-color-white xs-box-shadow xs-content-padding fundpress-blockquote END -->
                    <div class="xs-spilit-container xs-testimonial-bio content-center width-70">
                        <div class="xs-avatar full-round fundpress-avatar-big">
                            <img src="../assets/images/avatar/testimonial-4.jpg" alt="" class="xs-box-shadow-2">
                        </div>
                        <div class="xs-item-footer fundpress-team-details fundpress-testimonial-details text-left">
                            <a href="#" class="color-navy-blue">
                                Mark Williamson
                            </a>
                            <h5 class="color-green">CEO, Pranklin Agency</h5>
                        </div>
                    </div><!-- xs-spilit-container xs-testimonial-bio content-center width-70 END -->
                </div><!-- xs-testimonial-item END -->
            </div>
        </div>
    </div>	<!-- testimonial section end -->


    <!-- sponsor section -->
    <section class="xs-gray-bg xs-bg xs-section-padding fundpress-sponsor-section" style="background-image: url(../assets/images/background/sponsor_section_bg.jpg);">
        <div class="xs-solid-overlay xs-bg-white"></div>
        <div class="container fundpress-partners-wraper">
            <div class="fundpress-heading-title">
                <h2 class="color-navy-blue xs-mb-0">Trusted by the biggest nonprofits, companies in the world.</h2>
            </div><!-- .xs-heading-title .fundpress-heading-title END -->
            <div class="content-center">
                <ul class="fundpress-partners">
                    <li><a href="#" class="full-round fundpress-single-partner"><img src="../assets/images/partner/partner-1.png" alt=""></a></li>
                    <li><a href="#" class="full-round fundpress-single-partner"><img src="../assets/images/partner/partner-2.png" alt=""></a></li>
                    <li><a href="#" class="full-round fundpress-single-partner"><img src="../assets/images/partner/partner-3.png" alt=""></a></li>
                    <li><a href="#" class="full-round fundpress-single-partner"><img src="../assets/images/partner/partner-4.png" alt=""></a></li>
                </ul><!-- .fundpress-partners END -->
            </div>
            <div class="content-center">
                <ul class="fundpress-partners">
                    <li><a href="#" class="full-round fundpress-single-partner"><img src="../assets/images/partner/partner-5.png" alt=""></a></li>
                    <li><a href="#" class="full-round fundpress-single-partner"><img src="../assets/images/partner/partner-6.png" alt=""></a></li>
                    <li><a href="#" class="full-round fundpress-single-partner"><img src="../assets/images/partner/partner-7.png" alt=""></a></li>
                    <li><a href="#" class="full-round fundpress-single-partner"><img src="../assets/images/partner/partner-8.png" alt=""></a></li>
                    <li><a href="#" class="full-round fundpress-single-partner"><img src="../assets/images/partner/partner-9.png" alt=""></a></li>
                </ul><!-- .fundpress-partners END -->
            </div>
        </div>
    </section>	<!-- End sponsor section -->
</main>

<!-- footer section -->
<footer class="xs-footer-section xs-fixed-footer fundpress-footer-section">
    <div class="fundpress-footer-top-layer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="fundpress-single-footer">
                        <div class="xs-footer-logo">
                            <a href="index.html">
                                <img src="../assets/images/footer_logo.png" alt="">
                            </a>
                        </div>
                        <div class="fundpress-footer-content">
                            <p>FundPress online and raise money for charity and causes you’re passionate about. FundPress is an innovative, cost-effective online fundraising website for personal fundraising pages.</p>
                        </div><!-- . END -->
                        <ul class="xs-social-list fundpress-social-list">
                            <li><a href="" class="color-facebook full-round"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="" class="color-twitter full-round"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="" class="color-dribbble full-round"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="" class="color-pinterest full-round"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="" class="color-instagram full-round"><i class="fa fa-instagram"></i></a></li>
                        </ul><!-- .xs-social-list .fundpress-social-list END -->
                    </div><!-- .fundpress-single-footer END -->
                </div>
                <div class="col-md-3">
                    <div class="fundpress-single-footer">
                        <div class="xs-footer-title">
                            <h4 class="color-white">Explore Campaigns</h4>
                        </div><!-- .xs-footer-title END -->
                        <nav class="xs-footer-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Gadgets</a></li>
                                <li><a href="#">Monuments</a></li>
                                <li><a href="#">Travels</a></li>
                                <li><a href="#">Accessoriers</a></li>
                                <li><a href="#">Books</a></li>
                                <li><a href="#">Community Programs</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </nav><!-- .xs-footer-menu .xs-block-menu END -->
                    </div><!-- .fundpress-single-footer END -->
                </div>
                <div class="col-md-2">
                    <div class="fundpress-single-footer">
                        <div class="xs-footer-title">
                            <h4 class="color-white">About</h4>
                        </div><!-- .xs-footer-title END -->
                        <nav class="xs-footer-menu">
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#">How It Works</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Press</a></li>
                                <li><a href="news-feed.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav><!-- .xs-footer-menu .xs-block-menu END -->
                    </div><!-- .fundpress-single-footer END -->
                </div>
                <div class="col-md-2">
                    <div class="fundpress-single-footer">
                        <div class="xs-footer-title">
                            <h4 class="color-white">Help</h4>
                        </div><!-- .xs-footer-title END -->
                        <nav class="xs-footer-menu">
                            <ul>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="#">Our Rules</a></li>
                                <li><a href="#">Trust & Safety</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </nav><!-- .xs-footer-menu .xs-block-menu END -->
                    </div><!-- .fundpress-single-footer END -->
                </div>
            </div>
        </div>
    </div><!-- .xs-footer-wraper .fundpress-footer-top-layer END -->
    <div class="xs-footer-bottom-layer fundpress-footer-bottom">
        <div class="container">
            <div class="xs-footer-bottom-wraper">
                <div class="xs-copyright-text fundpress-copyright-text">
                    <p>Built with <i class="fa fa-heart"></i> by <a href="https://xpeedstudio.com/">XpeedStudio</a></p>
                </div>
                <div class="xs-back-to-top-wraper">
                    <a href="#" class="xs-back-to-top full-round green-btn xs-back-to-top-btn show-last-pos">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div><!-- .xs-back-to-top-wraper END -->
            </div>
        </div>
    </div><!-- .xs-footer-bottom-layer .fundpress-footer-bottom END -->
</footer>


<script src="../assets/js/jquery-3.2.1.min.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/Popper.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/isotope.pkgd.min.js"></script>
<script src="../assets/js/jquery.easing.1.3.js"></script>
<script src="../assets/js/jquery.countdown.min.js"></script>
<script src="../assets/js/jquery.magnific-popup.min.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
<script src="../assets/js/jquery.easypiechart.min.js"></script>
<script src="../assets/js/spectragram.min.js"></script>
<script src="../assets/js/jquery.waypoints.min.js"></script>
<script src="../assets/js/scrollax.js"></script>

<script src="../assets/js/main.js"></script>
</body>
</html>
<!-- end footer section -->