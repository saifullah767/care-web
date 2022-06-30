<?php
 include('connection.php');

?>

<?php
$a = mysqli_query($conn, "select * from doctor_tbl");
$b = mysqli_num_rows($a);
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Care Doctors directory and Book HTML Template</title>
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Main Header -->
    <header class="main-header header-style-two">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.php"><img src="assets/images/logo-2.png" alt=""></a></div>
                    </div>
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar.png" alt=""></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="index.php">Home</a>
                                        </li>
                                        <li class="dropdown"><a href="#">Doctors</a>
                                            <ul>
                                                <li><a href="doctor-details.php">Doctor Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="faq.php">FAQ’s</a></li>
                                                <li><a href="404.php">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Hospitals</a>
                                            <ul>
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="service.php">Services</a></li>
                                                <li><a href="hospital-details.php">Hospital Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="blog-details.php">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="navbar-right-info">
                            <div class="search-toggler"><i class="icon-search"></i></div>
                            <div class="link-btn"><a href="sign-in.php" class="theme-btn"><span><i>+</i> Join Now</span></a></div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.php"><img src="assets/images/logo-2.png" alt=""></a></div>
                        </div>
                        <div class="right-column">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar.png" alt=""></div>
    
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    
                                </nav>
                            </div>
                            <div class="navbar-right-info">
                                <div class="search-toggler"><i class="icon-search"></i></div>
                                <div class="link-btn"><a href="sign-in.php" class="theme-btn"><span><i>+</i> Join Now</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon icon_close_alt2"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="assets/images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
    <!-- End Main Header -->
    
    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search"><span class="icon_close_alt2"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="http://html.tonatheme.com/2021/Care/index.php">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bnner Section style two -->
    <section class="banner-section style-two">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/shape/shape-26.png);">
                    <div class="shape-one"><img src="assets/images/shape/shape-16.png" alt=""></div>
                    <div class="shape-two"><img src="assets/images/shape/shape-17.png" alt=""></div>
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h1>Make an Appointment <br> With Nearby Doctor</h1>
                                <div class="text">Ad mini veniam quis nostrud exercitation ullamco laboris <br> nisiut aliquip ex ea consequat duis aute irure. </div>
                                <div class="link-btn"><a href="#" class="theme-btn"><span>How We Help <i class="icon-arrow-right"></i> </span></a></div>
                            </div>
                            <div class="image"><img src="assets/images/main-slider/image-1.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(assets/images/shape/shape-27.png);">
                    <div class="shape-three"><img src="assets/images/shape/shape-18.png" alt=""></div>
                    <div class="shape-four"><img src="assets/images/shape/shape-19.png" alt=""></div>
                    <div class="shape-five"><img src="assets/images/shape/shape-20.png" alt=""></div>
                    <div class="shape-six"><img src="assets/images/shape/shape-21.png" alt=""></div>
                    <div class="content-outer">
                        <div class="content-box dark-content">
                            <div class="inner">
                                <h1>Team That Includes <br> Health Managers</h1>
                                <div class="text">Ad mini veniam quis nostrud exercitation ullamco laboris <br> nisiut aliquip ex ea consequat duis aute irure. </div>
                                <div class="link-btn"><a href="#" class="theme-btn"><span>How We Help <i class="icon-arrow-right"></i> </span></a></div>
                            </div>
                            <div class="image-two"><img src="assets/images/main-slider/image-2.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- Search form two -->
    <div class="search-form-two">
        <div class="auto-container">
            <div class="wrapper-box">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-5">
                            <h5>Type Keyword(s)</h5>
                            <input type="search" placeholder="Ex: Dr. Andy or JDC Hospital etc"> 
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group-two">
                                <h5>Select Options</h5>
                                <ul class="select-box">
                                    <li>
                                        <div class="single-checkbox">
                                            <input type="radio" name="check-box" id="check1" checked="">
                                            <label for="check1"><span></span>All</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-checkbox">
                                            <input type="radio" name="check-box" id="check2">
                                            <label for="check2"><span></span>Doctor</label>    
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-checkbox">
                                            <input type="radio" name="check-box" id="check3">
                                            <label for="check3"><span></span>Hospital/Clinic</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 form-btn">
                            <button type="submit"><i class="icon-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section class="about-section style-two">
        <div class="shape-two"><img src="assets/images/shape/shape-10.png" alt=""></div>
        <div class="shape-three"><img src="assets/images/shape/shape-11.png" alt=""></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <div class="image"><img src="assets/images/resource/image-4.png" alt=""></div>
                        <div class="shape-one"><img src="assets/images/shape/shape-9.png" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sec-title">
                        <div class="sub-title">Medical Directory Services</div>
                        <h2>Best Caring Facilities <br> For Everyone - At Care <br> You’ll Find Any Doctor</h2>
                        <div class="text">Aute irure dolor reprehenderit cepteur ocaecat sed cupidatate  sed ipsum non proident int sunt indys ipsum quis. Venium mini  ullamco laboris nisalut aliquap comodo.</div>
                    </div>
                    <div class="row">   
                        <div class="col-md-6">
                            <ul class="list wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                <li>Maintain your growth</li>
                                <li>Growing listings of clinics</li>
                                <li>Healthcare at your finger tips</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list wow animated fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                                <li>Free medicine delivery</li>
                                <li>Enjoy many discounts in fees</li>
                                <li>Information for any disease</li>
                            </ul>
                        </div>
                    </div>
                    <div class="link-btn"><a href="#" class="theme-btn"><span> How We Help <i class="icon-arrow-right"></i></span></a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Medical Directory -->
    <section class="medical-directory-section-two">
        <div class="shape-one"><img src="assets/images/shape/shape-4.png" alt=""></div>
        <div class="shape-five"><img src="assets/images/shape/shape-22.png" alt=""></div>
        <div class="shape-three"><img src="assets/images/shape/shape-23.png" alt=""></div>
        <div class="shape-four"><img src="assets/images/shape/shape-24.png" alt=""></div>
        <div class="auto-container">
            <div class="row title-content">
                <div class="col-lg-5">
                    <div class="sec-title">
                        <div class="sub-title">Care Medical Directory</div>
                        <h2>Easily Search The <br> Information Needed</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="text">Aute irure dolor reprehenderit cepteur ocaecat sed cupidatate <br> sed ipsum non proident int sunt indys ipsum quis. Venium mini <br> ullamco laboris nisalut aliquap comodo.</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 service-block-two">
                    <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="shape"></div>
                        <div class="shape-two">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="213px" height="213px">
                            <path fill-rule="evenodd"  fill="rgb(237, 250, 255)"
                            d="M68.264,5.148 C5.979,-16.030 -5.613,40.513 3.757,56.514 C17.732,80.377 43.118,66.299 61.878,89.241 C71.022,100.422 70.364,111.806 78.893,136.013 C83.101,147.957 95.217,166.140 116.721,169.921 C141.128,174.213 152.787,167.793 168.675,178.189 C188.230,190.986 177.914,211.510 188.107,212.444 C196.101,213.177 213.632,202.183 212.731,183.545 C212.472,178.177 217.646,156.723 183.517,132.682 C170.889,123.787 147.178,122.387 135.388,112.336 C113.369,93.563 114.005,76.003 106.122,54.460 C96.678,28.654 91.371,13.006 68.264,5.148 Z"/>
                            </svg>
                        </div>
                        <div class="icon neurosurgery"><i class="icon-neurosurgery-2"></i></div>
                        <h4>Neurosurgery</h4>
                        <h5><a href="doctors-1.php">View All Doctors</a></h5>
                        <div class="link-icon">
                            <a href="doctor-details.php" class="link"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 service-block-two">
                    <div class="inner-box wow animated fadeInDown" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="shape"></div>
                        <div class="shape-two">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="213px" height="213px">
                            <path fill-rule="evenodd"  fill="rgb(237, 250, 255)"
                            d="M68.264,5.148 C5.979,-16.030 -5.613,40.513 3.757,56.514 C17.732,80.377 43.118,66.299 61.878,89.241 C71.022,100.422 70.364,111.806 78.893,136.013 C83.101,147.957 95.217,166.140 116.721,169.921 C141.128,174.213 152.787,167.793 168.675,178.189 C188.230,190.986 177.914,211.510 188.107,212.444 C196.101,213.177 213.632,202.183 212.731,183.545 C212.472,178.177 217.646,156.723 183.517,132.682 C170.889,123.787 147.178,122.387 135.388,112.336 C113.369,93.563 114.005,76.003 106.122,54.460 C96.678,28.654 91.371,13.006 68.264,5.148 Z"/>
                            </svg>
                        </div>
                        <div class="icon ophthalmology"><i class="icon-ophthalmology-2"></i></div>
                        <h4>Ophthalmology</h4>
                        <h5><a href="doctors-1.php">View All Doctors</a></h5>
                        <div class="link-icon">
                            <a href="doctor-details.php" class="link"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 service-block-two">
                    <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="shape"></div>
                        <div class="shape-two">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="213px" height="213px">
                            <path fill-rule="evenodd"  fill="rgb(237, 250, 255)"
                            d="M68.264,5.148 C5.979,-16.030 -5.613,40.513 3.757,56.514 C17.732,80.377 43.118,66.299 61.878,89.241 C71.022,100.422 70.364,111.806 78.893,136.013 C83.101,147.957 95.217,166.140 116.721,169.921 C141.128,174.213 152.787,167.793 168.675,178.189 C188.230,190.986 177.914,211.510 188.107,212.444 C196.101,213.177 213.632,202.183 212.731,183.545 C212.472,178.177 217.646,156.723 183.517,132.682 C170.889,123.787 147.178,122.387 135.388,112.336 C113.369,93.563 114.005,76.003 106.122,54.460 C96.678,28.654 91.371,13.006 68.264,5.148 Z"/>
                            </svg>
                        </div>
                        <div class="icon oral"><i class="icon-oral"></i></div>
                        <h4>Oral Health Medicine</h4>
                        <h5><a href="doctors-1.php">View All Doctors</a></h5>
                        <div class="link-icon">
                            <a href="doctor-details.php" class="link"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 service-block-two">
                    <div class="inner-box wow animated fadeInDown" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="shape"></div>
                        <div class="shape-two">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="213px" height="213px">
                            <path fill-rule="evenodd"  fill="rgb(237, 250, 255)"
                            d="M68.264,5.148 C5.979,-16.030 -5.613,40.513 3.757,56.514 C17.732,80.377 43.118,66.299 61.878,89.241 C71.022,100.422 70.364,111.806 78.893,136.013 C83.101,147.957 95.217,166.140 116.721,169.921 C141.128,174.213 152.787,167.793 168.675,178.189 C188.230,190.986 177.914,211.510 188.107,212.444 C196.101,213.177 213.632,202.183 212.731,183.545 C212.472,178.177 217.646,156.723 183.517,132.682 C170.889,123.787 147.178,122.387 135.388,112.336 C113.369,93.563 114.005,76.003 106.122,54.460 C96.678,28.654 91.371,13.006 68.264,5.148 Z"/>
                            </svg>
                        </div>
                        <div class="icon heart"><i class="icon-heart-2"></i></div>
                        <h4>Heart Diseses</h4>
                        <h5><a href="doctors-1.php">View All Doctors</a></h5>
                        <div class="link-icon">
                            <a href="doctor-details.php" class="link"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 service-block-two">
                    <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="shape"></div>
                        <div class="shape-two">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="213px" height="213px">
                            <path fill-rule="evenodd"  fill="rgb(237, 250, 255)"
                            d="M68.264,5.148 C5.979,-16.030 -5.613,40.513 3.757,56.514 C17.732,80.377 43.118,66.299 61.878,89.241 C71.022,100.422 70.364,111.806 78.893,136.013 C83.101,147.957 95.217,166.140 116.721,169.921 C141.128,174.213 152.787,167.793 168.675,178.189 C188.230,190.986 177.914,211.510 188.107,212.444 C196.101,213.177 213.632,202.183 212.731,183.545 C212.472,178.177 217.646,156.723 183.517,132.682 C170.889,123.787 147.178,122.387 135.388,112.336 C113.369,93.563 114.005,76.003 106.122,54.460 C96.678,28.654 91.371,13.006 68.264,5.148 Z"/>
                            </svg>
                        </div>
                        <div class="icon hematology"><i class="icon-hematology"></i></div>
                        <h4>Hematology</h4>
                        <h5><a href="doctors-1.php">View All Doctors</a></h5>
                        <div class="link-icon">
                            <a href="doctor-details.php" class="link"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 service-block-two">
                    <div class="inner-box wow animated fadeInDown" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="shape"></div>
                        <div class="shape-two">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="213px" height="213px">
                            <path fill-rule="evenodd"  fill="rgb(237, 250, 255)"
                            d="M68.264,5.148 C5.979,-16.030 -5.613,40.513 3.757,56.514 C17.732,80.377 43.118,66.299 61.878,89.241 C71.022,100.422 70.364,111.806 78.893,136.013 C83.101,147.957 95.217,166.140 116.721,169.921 C141.128,174.213 152.787,167.793 168.675,178.189 C188.230,190.986 177.914,211.510 188.107,212.444 C196.101,213.177 213.632,202.183 212.731,183.545 C212.472,178.177 217.646,156.723 183.517,132.682 C170.889,123.787 147.178,122.387 135.388,112.336 C113.369,93.563 114.005,76.003 106.122,54.460 C96.678,28.654 91.371,13.006 68.264,5.148 Z"/>
                            </svg>
                        </div>
                        <div class="icon otolaryngology"><i class="icon-otolaryngology"></i></div>
                        <h4>Otolaryngology (ENT)</h4>
                        <h5><a href="doctors-1.php">View All Doctors</a></h5>
                        <div class="link-icon">
                            <a href="doctor-details.php" class="link"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 service-block-two">
                    <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="shape"></div>
                        <div class="shape-two">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="213px" height="213px">
                            <path fill-rule="evenodd"  fill="rgb(237, 250, 255)"
                            d="M68.264,5.148 C5.979,-16.030 -5.613,40.513 3.757,56.514 C17.732,80.377 43.118,66.299 61.878,89.241 C71.022,100.422 70.364,111.806 78.893,136.013 C83.101,147.957 95.217,166.140 116.721,169.921 C141.128,174.213 152.787,167.793 168.675,178.189 C188.230,190.986 177.914,211.510 188.107,212.444 C196.101,213.177 213.632,202.183 212.731,183.545 C212.472,178.177 217.646,156.723 183.517,132.682 C170.889,123.787 147.178,122.387 135.388,112.336 C113.369,93.563 114.005,76.003 106.122,54.460 C96.678,28.654 91.371,13.006 68.264,5.148 Z"/>
                            </svg>
                        </div>
                        <div class="icon orthopaedic"><i class="icon-orthopaedic"></i></div>
                        <h4>Orthopaedic Surgery</h4>
                        <h5><a href="doctors-1.php">View All Doctors</a></h5>
                        <div class="link-icon">
                            <a href="doctor-details.php" class="link"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 service-block-two">
                    <div class="inner-box wow animated fadeInDown" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="shape"></div>
                        <div class="shape-two">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="213px" height="213px">
                            <path fill-rule="evenodd"  fill="rgb(237, 250, 255)"
                            d="M68.264,5.148 C5.979,-16.030 -5.613,40.513 3.757,56.514 C17.732,80.377 43.118,66.299 61.878,89.241 C71.022,100.422 70.364,111.806 78.893,136.013 C83.101,147.957 95.217,166.140 116.721,169.921 C141.128,174.213 152.787,167.793 168.675,178.189 C188.230,190.986 177.914,211.510 188.107,212.444 C196.101,213.177 213.632,202.183 212.731,183.545 C212.472,178.177 217.646,156.723 183.517,132.682 C170.889,123.787 147.178,122.387 135.388,112.336 C113.369,93.563 114.005,76.003 106.122,54.460 C96.678,28.654 91.371,13.006 68.264,5.148 Z"/>
                            </svg>
                        </div>
                        <div class="icon pulmonology"><i class="icon-pulmonology"></i></div>
                        <h4>Pulmonology</h4>
                        <h5><a href="doctors-1.php">View All Doctors</a></h5>
                        <div class="link-icon">
                            <a href="doctor-details.php" class="link"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="link-btn-two text-center mb-30"><a href="doctors-1.php" class="theme-btn"><span>More Specialties <i class="icon-arrow-right"></i> </span></a></div>
        </div>
    </section>

    <!-- Working Process section -->
    <section class="working-process-section style-two">
        <div class="sec-bg" style="background-image: url(assets/images/shape/shape-29.png)"></div>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <div class="sub-title">Universal Medical Directory Services</div>
                <h2>How Care Appointment Works</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 process-block">
                    <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="count">01</div>
                        <div class="image"><img src="assets/images/resource/image-1.png" alt=""></div>
                        <div class="lik-btn"><a href="#" class="link"><i class="icon-arrow-right"></i></a></div>
                        <div class="text">Find The Best  Doctor <br> Hospital or Clinic</div>
                    </div>
                </div>
                <div class="col-lg-4 process-block">
                    <div class="inner-box wow animated fadeInDown" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="count">02</div>
                        <div class="image"><img src="assets/images/resource/image-2.png" alt=""></div>
                        <div class="lik-btn"><a href="#" class="link"><i class="icon-arrow-right"></i></a></div>
                        <div class="text">View Full Profile And <br> Schedule Appointment</div>
                    </div>
                </div>
                <div class="col-lg-4 process-block">
                    <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="count">03</div>
                        <div class="image"><img src="assets/images/resource/image-3.png" alt=""></div>
                        <div class="lik-btn"><a href="#" class="link"><i class="icon-arrow-right"></i></a></div>
                        <div class="text">Get Your Checked-Up <br> And Stay Healthy</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors -->
    <section class="doctors-section style-two">
        <div class="shape-five"><img src="assets/images/shape/shape-5.png" alt=""></div>
        <div class="auto-container">
            <div class="row title-content align-items-center">
                <div class="col-lg-5">
                    <div class="sec-title">
                        <div class="sub-title">Medical Directory Services</div>
                        <h2>Meet The Top And <br> Best Rated Doctors</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="link-btn mb-30 text-end"><a href="blog-details.php" class="theme-btn style-two"><span>Read More <i class="icon-arrow-right"></i></span></a></div>
                </div>
            </div>
            <div class="row">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "center": false, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600"}}'>
              <?php  while($row = mysqli_fetch_array($a)) {?>

                    <div class="col-lg-12 doctor-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="doctor-details.php"><img src="assets/images/resource/<?php echo $row['pic']?>" alt=""></a>
                            </div>
                            <div class="lower-content">
                                <div class="top-content">
                                    <div class="category"><?php echo $row['speciality']?></div>
                                    <a href="doctor-details.php"><h4>Dr. <?php echo $row['name']?></h4></a>
                                    <div class="designation"><?php echo $row['degree_name']?></div>
                                    <div class="text"><i class="icon_pin"></i> <?php echo $row['dr_address']?> </div>
                                </div>
                                <div class="bottom-content">
                                    <ul>
                                        <li><a href="doctor-details.php?id=<?php echo $row['id']?>"><i class="icon_calendar"></i> Availability</a></li>
                                        <li><a href="doctor-details.php?id=<?php echo $row['id']?>"><i class="icon_phone"></i>Book Today</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php  } ?>

                </div>
            </div>
        </div>
    </section>

    <!-- Servcies section two -->
    <section class="services-section-two" style="background-image: url(assets/images/shape/shape-25.png);">
        <div class="side-image"><img src="assets/images/resource/image-5.png" alt=""></div>
        <div class="shape-one"><img src="assets/images/shape/shape-28.png" alt=""></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sec-title mb-40">
                        <div class="sub-title"> Medical Directory Services</div>
                        <h2>Professional Medical <br> Network With Large <br> Directory Listings</h2>
                        <div class="text">Aute irure dolor reprehenderit cepteur caecat sed cupid <br> sed ipsum non proident int sunt indys ipsum quis. Venium <br>ullamco laboris nisalut aliquap comodo.</div>
                    </div>
                    <div class="link-btn mb-30">
                        <a href="contact.php" class="theme-btn"><span>Get Appointment <i class="icon-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="ps-lg-5">
                        <div class="row row-10">
                            <div class="col-md-6 service-block-three">
                                <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                    <div class="shape">
                                        <svg 
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="162px" height="162px">
                                    <path fill-rule="evenodd"  fill="rgb(233, 245, 250)"
                                        d="M51.907,4.025 C4.744,-12.017 -4.034,30.812 3.061,42.932 C13.643,61.007 32.866,50.344 47.072,67.720 C53.996,76.190 53.497,84.812 59.956,103.148 C63.142,112.195 72.317,125.968 88.600,128.832 C107.082,132.083 115.911,127.220 127.941,135.094 C142.748,144.787 134.937,160.333 142.655,161.040 C148.709,161.596 161.984,153.268 161.302,139.151 C161.105,135.085 165.023,118.834 139.180,100.625 C129.617,93.888 111.663,92.827 102.735,85.214 C86.062,70.995 86.544,57.694 80.574,41.376 C73.423,21.829 69.404,9.976 51.907,4.025 Z"/>
                                    </svg>
                                    </div>
                                    <div class="icon"><i class="icon-hospital"></i></div>
                                    <h4>Book Appointment <br> With a Hospital</h4>
                                </div>
                            </div>                
                            <div class="col-md-6 service-block-three">
                                <div class="inner-box wow animated fadeInDown" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                    <div class="shape">
                                        <svg 
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="162px" height="162px">
                                    <path fill-rule="evenodd"  fill="rgb(233, 245, 250)"
                                        d="M51.907,4.025 C4.744,-12.017 -4.034,30.812 3.061,42.932 C13.643,61.007 32.866,50.344 47.072,67.720 C53.996,76.190 53.497,84.812 59.956,103.148 C63.142,112.195 72.317,125.968 88.600,128.832 C107.082,132.083 115.911,127.220 127.941,135.094 C142.748,144.787 134.937,160.333 142.655,161.040 C148.709,161.596 161.984,153.268 161.302,139.151 C161.105,135.085 165.023,118.834 139.180,100.625 C129.617,93.888 111.663,92.827 102.735,85.214 C86.062,70.995 86.544,57.694 80.574,41.376 C73.423,21.829 69.404,9.976 51.907,4.025 Z"/>
                                    </svg>
                                    </div>
                                    <div class="icon"><i class="icon-doctor"></i></div>
                                    <h4>Book Appointment <br> With a Doctor</h4>
                                </div>
                            </div>
                            <div class="col-md-6 service-block-three">
                                <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                    <div class="shape">
                                        <svg 
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="162px" height="162px">
                                    <path fill-rule="evenodd"  fill="rgb(233, 245, 250)"
                                        d="M51.907,4.025 C4.744,-12.017 -4.034,30.812 3.061,42.932 C13.643,61.007 32.866,50.344 47.072,67.720 C53.996,76.190 53.497,84.812 59.956,103.148 C63.142,112.195 72.317,125.968 88.600,128.832 C107.082,132.083 115.911,127.220 127.941,135.094 C142.748,144.787 134.937,160.333 142.655,161.040 C148.709,161.596 161.984,153.268 161.302,139.151 C161.105,135.085 165.023,118.834 139.180,100.625 C129.617,93.888 111.663,92.827 102.735,85.214 C86.062,70.995 86.544,57.694 80.574,41.376 C73.423,21.829 69.404,9.976 51.907,4.025 Z"/>
                                    </svg>
                                    </div>
                                    <div class="icon"><i class="icon-phone"></i></div>
                                    <h4>Live Chat With <br> Certified Doctors</h4>
                                </div>
                            </div>
                            <div class="col-md-6 service-block-three">
                                <div class="inner-box wow animated fadeInDown" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                    <div class="shape">
                                        <svg 
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="162px" height="162px">
                                    <path fill-rule="evenodd"  fill="rgb(233, 245, 250)"
                                        d="M51.907,4.025 C4.744,-12.017 -4.034,30.812 3.061,42.932 C13.643,61.007 32.866,50.344 47.072,67.720 C53.996,76.190 53.497,84.812 59.956,103.148 C63.142,112.195 72.317,125.968 88.600,128.832 C107.082,132.083 115.911,127.220 127.941,135.094 C142.748,144.787 134.937,160.333 142.655,161.040 C148.709,161.596 161.984,153.268 161.302,139.151 C161.105,135.085 165.023,118.834 139.180,100.625 C129.617,93.888 111.663,92.827 102.735,85.214 C86.062,70.995 86.544,57.694 80.574,41.376 C73.423,21.829 69.404,9.976 51.907,4.025 Z"/>
                                    </svg>
                                    </div>
                                    <div class="icon"><i class="icon-hospital"></i></div>
                                    <h4>Get Quick 24/7 <br>  Help And Support</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clients-logo-two">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "center": false, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "992":{ "items" : "4" }, "1200":{ "items" : "4" }}}'>
                    <div class="single-client-logo">
                        <img src="assets/images/resource/client-logo-5.png" alt="">
                    </div>
                    <div class="single-client-logo">
                        <img src="assets/images/resource/client-logo-6.png" alt="">
                    </div>
                    <div class="single-client-logo">
                        <img src="assets/images/resource/client-logo-7.png" alt="">
                    </div>
                    <div class="single-client-logo">
                        <img src="assets/images/resource/client-logo-8.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section style-two">
        <div class="shape-one"><img src="assets/images/shape/shape-6.png" alt=""></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Universal Medical Directory Services</div>
                <h2>What People Are Saying</h2>
            </div>
            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="shape">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="162px" height="162px">
                           <path fill-rule="evenodd"  fill="rgb(233, 245, 250)"
                            d="M51.907,4.025 C4.744,-12.017 -4.034,30.812 3.061,42.932 C13.643,61.007 32.866,50.344 47.072,67.720 C53.996,76.190 53.497,84.812 59.956,103.148 C63.142,112.195 72.317,125.968 88.600,128.832 C107.082,132.083 115.911,127.220 127.941,135.094 C142.748,144.787 134.937,160.333 142.655,161.040 C148.709,161.596 161.984,153.268 161.302,139.151 C161.105,135.085 165.023,118.834 139.180,100.625 C129.617,93.888 111.663,92.827 102.735,85.214 C86.062,70.995 86.544,57.694 80.574,41.376 C73.423,21.829 69.404,9.976 51.907,4.025 Z"/>
                           </svg>
                        </div>
                        <div class="author-info">
                            <div class="thumb"><img src="assets/images/resource/author-1.jpg" alt=""></div>
                            <h4>James Thomas</h4>
                            <div class="location">California, USA</div>
                        </div>
                        <div class="content">
                            <div class="text">Dolor sitam consectetur sed adip ausmod tempor adidunt laborsd et magn aliquat enim sed.</div>
                            <div class="rating-info">
                                <h5>Best Medical Directory</h5>
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="shape">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="162px" height="162px">
                           <path fill-rule="evenodd"  fill="rgb(233, 245, 250)"
                            d="M51.907,4.025 C4.744,-12.017 -4.034,30.812 3.061,42.932 C13.643,61.007 32.866,50.344 47.072,67.720 C53.996,76.190 53.497,84.812 59.956,103.148 C63.142,112.195 72.317,125.968 88.600,128.832 C107.082,132.083 115.911,127.220 127.941,135.094 C142.748,144.787 134.937,160.333 142.655,161.040 C148.709,161.596 161.984,153.268 161.302,139.151 C161.105,135.085 165.023,118.834 139.180,100.625 C129.617,93.888 111.663,92.827 102.735,85.214 C86.062,70.995 86.544,57.694 80.574,41.376 C73.423,21.829 69.404,9.976 51.907,4.025 Z"/>
                           </svg>
                        </div>
                        <div class="author-info">
                            <div class="thumb"><img src="assets/images/resource/author-2.jpg" alt=""></div>
                            <h4>Tanya Benson</h4>
                            <div class="location">California, USA</div>
                        </div>
                        <div class="content">
                            <div class="text">Dolor sitam consectetur sed adip ausmod tempor adidunt laborsd et magn aliquat enim sed.</div>
                            <div class="rating-info">
                                <h5>Best Medical Directory</h5>
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="shape">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="162px" height="162px">
                           <path fill-rule="evenodd"  fill="rgb(233, 245, 250)"
                            d="M51.907,4.025 C4.744,-12.017 -4.034,30.812 3.061,42.932 C13.643,61.007 32.866,50.344 47.072,67.720 C53.996,76.190 53.497,84.812 59.956,103.148 C63.142,112.195 72.317,125.968 88.600,128.832 C107.082,132.083 115.911,127.220 127.941,135.094 C142.748,144.787 134.937,160.333 142.655,161.040 C148.709,161.596 161.984,153.268 161.302,139.151 C161.105,135.085 165.023,118.834 139.180,100.625 C129.617,93.888 111.663,92.827 102.735,85.214 C86.062,70.995 86.544,57.694 80.574,41.376 C73.423,21.829 69.404,9.976 51.907,4.025 Z"/>
                           </svg>
                        </div>
                        <div class="author-info">
                            <div class="thumb"><img src="assets/images/resource/author-4.jpg" alt=""></div>
                            <h4>Adam Smith</h4>
                            <div class="location">California, USA</div>
                        </div>
                        <div class="content">
                            <div class="text">Dolor sitam consectetur sed adip ausmod tempor adidunt laborsd et magn aliquat enim sed.</div>
                            <div class="rating-info">
                                <h5>Best Medical Directory</h5>
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="shape">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="162px" height="162px">
                           <path fill-rule="evenodd"  fill="rgb(233, 245, 250)"
                            d="M51.907,4.025 C4.744,-12.017 -4.034,30.812 3.061,42.932 C13.643,61.007 32.866,50.344 47.072,67.720 C53.996,76.190 53.497,84.812 59.956,103.148 C63.142,112.195 72.317,125.968 88.600,128.832 C107.082,132.083 115.911,127.220 127.941,135.094 C142.748,144.787 134.937,160.333 142.655,161.040 C148.709,161.596 161.984,153.268 161.302,139.151 C161.105,135.085 165.023,118.834 139.180,100.625 C129.617,93.888 111.663,92.827 102.735,85.214 C86.062,70.995 86.544,57.694 80.574,41.376 C73.423,21.829 69.404,9.976 51.907,4.025 Z"/>
                           </svg>
                        </div>
                        <div class="author-info">
                            <div class="thumb"><img src="assets/images/resource/author-1.jpg" alt=""></div>
                            <h4>James Thomas</h4>
                            <div class="location">California, USA</div>
                        </div>
                        <div class="content">
                            <div class="text">Dolor sitam consectetur sed adip ausmod tempor adidunt laborsd et magn aliquat enim sed.</div>
                            <div class="rating-info">
                                <h5>Best Medical Directory</h5>
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="shape">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="162px" height="162px">
                           <path fill-rule="evenodd"  fill="rgb(233, 245, 250)"
                            d="M51.907,4.025 C4.744,-12.017 -4.034,30.812 3.061,42.932 C13.643,61.007 32.866,50.344 47.072,67.720 C53.996,76.190 53.497,84.812 59.956,103.148 C63.142,112.195 72.317,125.968 88.600,128.832 C107.082,132.083 115.911,127.220 127.941,135.094 C142.748,144.787 134.937,160.333 142.655,161.040 C148.709,161.596 161.984,153.268 161.302,139.151 C161.105,135.085 165.023,118.834 139.180,100.625 C129.617,93.888 111.663,92.827 102.735,85.214 C86.062,70.995 86.544,57.694 80.574,41.376 C73.423,21.829 69.404,9.976 51.907,4.025 Z"/>
                           </svg>
                        </div>
                        <div class="author-info">
                            <div class="thumb"><img src="assets/images/resource/author-2.jpg" alt=""></div>
                            <h4>Tanya Benson</h4>
                            <div class="location">California, USA</div>
                        </div>
                        <div class="content">
                            <div class="text">Dolor sitam consectetur sed adip ausmod tempor adidunt laborsd et magn aliquat enim sed.</div>
                            <div class="rating-info">
                                <h5>Best Medical Directory</h5>
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="shape">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="162px" height="162px">
                           <path fill-rule="evenodd"  fill="rgb(233, 245, 250)"
                            d="M51.907,4.025 C4.744,-12.017 -4.034,30.812 3.061,42.932 C13.643,61.007 32.866,50.344 47.072,67.720 C53.996,76.190 53.497,84.812 59.956,103.148 C63.142,112.195 72.317,125.968 88.600,128.832 C107.082,132.083 115.911,127.220 127.941,135.094 C142.748,144.787 134.937,160.333 142.655,161.040 C148.709,161.596 161.984,153.268 161.302,139.151 C161.105,135.085 165.023,118.834 139.180,100.625 C129.617,93.888 111.663,92.827 102.735,85.214 C86.062,70.995 86.544,57.694 80.574,41.376 C73.423,21.829 69.404,9.976 51.907,4.025 Z"/>
                           </svg>
                        </div>
                        <div class="author-info">
                            <div class="thumb"><img src="assets/images/resource/author-4.jpg" alt=""></div>
                            <h4>Adam Smith</h4>
                            <div class="location">California, USA</div>
                        </div>
                        <div class="content">
                            <div class="text">Dolor sitam consectetur sed adip ausmod tempor adidunt laborsd et magn aliquat enim sed.</div>
                            <div class="rating-info">
                                <h5>Best Medical Directory</h5>
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="shape">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="162px" height="162px">
                           <path fill-rule="evenodd"  fill="rgb(233, 245, 250)"
                            d="M51.907,4.025 C4.744,-12.017 -4.034,30.812 3.061,42.932 C13.643,61.007 32.866,50.344 47.072,67.720 C53.996,76.190 53.497,84.812 59.956,103.148 C63.142,112.195 72.317,125.968 88.600,128.832 C107.082,132.083 115.911,127.220 127.941,135.094 C142.748,144.787 134.937,160.333 142.655,161.040 C148.709,161.596 161.984,153.268 161.302,139.151 C161.105,135.085 165.023,118.834 139.180,100.625 C129.617,93.888 111.663,92.827 102.735,85.214 C86.062,70.995 86.544,57.694 80.574,41.376 C73.423,21.829 69.404,9.976 51.907,4.025 Z"/>
                           </svg>
                        </div>
                        <div class="author-info">
                            <div class="thumb"><img src="assets/images/resource/author-1.jpg" alt=""></div>
                            <h4>James Thomas</h4>
                            <div class="location">California, USA</div>
                        </div>
                        <div class="content">
                            <div class="text">Dolor sitam consectetur sed adip ausmod tempor adidunt laborsd et magn aliquat enim sed.</div>
                            <div class="rating-info">
                                <h5>Best Medical Directory</h5>
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="shape">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="162px" height="162px">
                           <path fill-rule="evenodd"  fill="rgb(233, 245, 250)"
                            d="M51.907,4.025 C4.744,-12.017 -4.034,30.812 3.061,42.932 C13.643,61.007 32.866,50.344 47.072,67.720 C53.996,76.190 53.497,84.812 59.956,103.148 C63.142,112.195 72.317,125.968 88.600,128.832 C107.082,132.083 115.911,127.220 127.941,135.094 C142.748,144.787 134.937,160.333 142.655,161.040 C148.709,161.596 161.984,153.268 161.302,139.151 C161.105,135.085 165.023,118.834 139.180,100.625 C129.617,93.888 111.663,92.827 102.735,85.214 C86.062,70.995 86.544,57.694 80.574,41.376 C73.423,21.829 69.404,9.976 51.907,4.025 Z"/>
                           </svg>
                        </div>
                        <div class="author-info">
                            <div class="thumb"><img src="assets/images/resource/author-2.jpg" alt=""></div>
                            <h4>Tanya Benson</h4>
                            <div class="location">California, USA</div>
                        </div>
                        <div class="content">
                            <div class="text">Dolor sitam consectetur sed adip ausmod tempor adidunt laborsd et magn aliquat enim sed.</div>
                            <div class="rating-info">
                                <h5>Best Medical Directory</h5>
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="shape">
                            <svg 
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="162px" height="162px">
                           <path fill-rule="evenodd"  fill="rgb(233, 245, 250)"
                            d="M51.907,4.025 C4.744,-12.017 -4.034,30.812 3.061,42.932 C13.643,61.007 32.866,50.344 47.072,67.720 C53.996,76.190 53.497,84.812 59.956,103.148 C63.142,112.195 72.317,125.968 88.600,128.832 C107.082,132.083 115.911,127.220 127.941,135.094 C142.748,144.787 134.937,160.333 142.655,161.040 C148.709,161.596 161.984,153.268 161.302,139.151 C161.105,135.085 165.023,118.834 139.180,100.625 C129.617,93.888 111.663,92.827 102.735,85.214 C86.062,70.995 86.544,57.694 80.574,41.376 C73.423,21.829 69.404,9.976 51.907,4.025 Z"/>
                           </svg>
                        </div>
                        <div class="author-info">
                            <div class="thumb"><img src="assets/images/resource/author-4.jpg" alt=""></div>
                            <h4>Adam Smith</h4>
                            <div class="location">California, USA</div>
                        </div>
                        <div class="content">
                            <div class="text">Dolor sitam consectetur sed adip ausmod tempor adidunt laborsd et magn aliquat enim sed.</div>
                            <div class="rating-info">
                                <h5>Best Medical Directory</h5>
                                <div class="rating">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="sec-bg" style="background-image: url(assets/images/shape/shape-29.png);"></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title light mb-50">
                        <div class="sub-title">Care Medical Directory</div>
                        <h2>Read Our FAQ’s</h2>
                    </div>
                    <ul class="accordion-box">
                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon-arrow-right"></span></div>What kind of information listed here?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <p>Aute irure dolor reprehenderit cepteur caecat sed cupid <br> sed ipsum non proident int sunt indys ipsum. </p>
                                    </div>
                                </div>
                            </div>
                        </li>
        
                        <!--Accordion Block-->
                        <li class="accordion block active-block">
                            <div class="acc-btn active"><div class="icon-outer"><span class="icon-arrow-right"></span></div>Can I personally meet a doctor at clinic?</div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">
                                        <p>Aute irure dolor reprehenderit cepteur caecat sed cupid <br> sed ipsum non proident int sunt indys ipsum. </p>
                                    </div>
                                </div>
                            </div>
                        </li>
        
                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon-arrow-right"></span></div>How I can find a nearby hospital?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <p>Aute irure dolor reprehenderit cepteur caecat sed cupid <br> sed ipsum non proident int sunt indys ipsum. </p>
                                    </div>
                                </div>
                            </div>
                        </li>   
                        <!--Accordion Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon-arrow-right"></span></div>Are you support paid featured listings?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        <p>Aute irure dolor reprehenderit cepteur caecat sed cupid <br> sed ipsum non proident int sunt indys ipsum. </p>
                                    </div>
                                </div>
                            </div>
                        </li>                
                        <!-- End Block -->
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="sec-title light mb-50">
                        <div class="sub-title">Care Medical Directory</div>
                        <h2>Get In Touch With Us</h2>
                    </div>
                    <!--Contact Form-->
                    <div class="contact-form">
                        <form method="post" action="http://html.tonatheme.com/2021/Care/inc/sendemail.php" id="contact-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <i class="fal fa-user"></i>
                                    <input type="text" name="form_name" value="" placeholder="Your Name" required>
                                </div>                      
                                <div class="form-group col-md-6">
                                    <i class="fal fa-envelope"></i>
                                    <input type="text" name="email" value="" placeholder="Your Email" required>
                                </div>                        
                                <div class="form-group col-md-12">
                                    <i class="fal fa-book-alt"></i>
                                    <input type="text" name="form_subject" value="" placeholder="Subject" required>
                                </div>                        
                                <div class="form-group-two col-md-12">
                                    <i class="fal fa-mountain"></i>
                                    <textarea name="form_message" placeholder="Massage"></textarea>
                                </div>                        
                                <div class="form-group-three col-md-12">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="theme-btn" type="submit" data-loading-text="Please wait..."><span>Send Message <i class="icon-arrow-right"></i></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News section -->
    <section class="latest-news-section style-two">
        <div class="shape-one"><img src="assets/images/shape/shape-9.png" alt=""></div>
        <div class="auto-container">
            <div class="row title-content">
                <div class="col-lg-5">
                    <div class="sec-title">
                        <div class="sub-title">Medical Directory News</div>
                        <h2>Easily Search The <br> Information Needed</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="text">Aute irure dolor reprehenderit cepteur ocaecat sed cupidatate <br> sed ipsum non proident int sunt indys ipsum quis. Venium mini <br> ullamco laboris nisalut aliquap comodo.</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 news-block">
                    <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="image">                            
                            <img src="assets/images/resource/image-13.jpg" alt="">
                            <div class="date"><strong>31</strong> DEC</div>
                        </div>
                        <div class="lower-content">
                            <div class="post-meta-info">
                                <div class="author"><img src="assets/images/resource/author-3.jpg" alt="">Jilly Smith</div>
                                <div class="category"><i class="icon_folder-alt"></i>Hospitals</div>
                                <div class="comment"><i class="icon_chat_alt"></i>460</div>
                            </div>
                            <h4><a href="blog-details.php">The Largest Community Of All <br> Healthcare Professionals</a></h4>
                            <div class="text">Reprehender in voluptate velit esse cillum <br> dolore eu fugiat nulla pariatus.</div>
                            <div class="link-btn"><a href="blog-details.php" class="theme-btn style-two"><span>Read More <i class="icon-arrow-right"></i></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 news-block">
                    <div class="inner-box wow animated fadeInDown" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="image">                            
                            <img src="assets/images/resource/image-14.jpg" alt="">
                            <div class="date"><strong>02</strong> JAN</div>
                        </div>
                        <div class="lower-content">
                            <div class="post-meta-info">
                                <div class="author"><img src="assets/images/resource/author-5.jpg" alt="">Mark William</div>
                                <div class="category"><i class="icon_folder-alt"></i>Hospitals</div>
                                <div class="comment"><i class="icon_chat_alt"></i>460</div>
                            </div>
                            <h4><a href="blog-details.php">Best Medical Network Directory <br> For Physicians & Clients</a></h4>
                            <div class="text">Ceprehender in voluptate velit esse cillum <br> dolore eu fugiat nulla pariatus.</div>
                            <div class="link-btn"><a href="blog-details.php" class="theme-btn style-two"><span>Read More <i class="icon-arrow-right"></i></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 news-block">
                    <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="image">                            
                            <img src="assets/images/resource/image-15.jpg" alt="">
                            <div class="date"><strong>09</strong> JAN</div>
                        </div>
                        <div class="lower-content">
                            <div class="post-meta-info">
                                <div class="author"><img src="assets/images/resource/author-6.jpg" alt="">Anderson</div>
                                <div class="category"><i class="icon_folder-alt"></i>Hospitals</div>
                                <div class="comment"><i class="icon_chat_alt"></i>460</div>
                            </div>
                            <h4><a href="blog-details.php">Primary care is often the first point of contact for people</a></h4>
                            <div class="text">Feprehender in voluptate velit esse cillum <br> dolore eu fugiat nulla pariatus.</div>
                            <div class="link-btn"><a href="blog-details.php" class="theme-btn style-two"><span>Read More <i class="icon-arrow-right"></i></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section style-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="content">
                        <div class="icon"><span class="icon-envelope"></span></div>
                        <h3>Newsletter Subscribe </h3>
                        <div class="text">Urgent 24/7 Medical Directory Services</div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form">
                        <form class="ajax-sub-form" method="post">
                            <div class="form-group">
                                <input type="email" placeholder="Enter Your Email Address..." id="subscription-email">
                                <button type="submit" class="theme-btn"><span>Subscribe <i class="icon-arrow-right"></i></span></button>
                                <label class="subscription-label" for="subscription-email"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Main Footer-->
    <footer class="main-footer style-two">
        <div class="shape-one"><img src="assets/images/shape/shape-7.png" alt=""></div>
        <div class="upper-box">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">
                        
                        <!--Column-->
                        <div class="column col-lg-3 col-md-6">
                            <div class="widget about-widget">
                                <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                                <div class="text">Integer lobortis sem consequt imperd
                                    In nulla viverra ut lorem ut dapibus con
                                    etur diam. Nun biend yums.</div>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <!--Column-->
                        <div class="column col-lg-3 col-md-6">
                            <div class="widget links-widget">
                                <h3 class="widget-title">About Us</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Listing</a></li>
                                        <li><a href="#">How It Works</a></li>
                                        <li><a href="#">What We Offer</a></li>
                                        <li><a href="#">Latest News</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>                                        
                                </div>
                            </div>
                        </div>
    
                        <!--Column-->
                        <div class="column col-lg-3 col-md-6">
                            <div class="widget links-widget">
                                <h3 class="widget-title">Quick Links</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">Medical Directory</a></li>
                                        <li><a href="#">Press Release</a></li>
                                        <li><a href="#">Top Doctors</a></li>
                                        <li><a href="#">Featured Hospitals</a></li>
                                        <li><a href="#">Download App</a></li>
                                        <li><a href="#">First Aid Facility</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!--Column-->
                        <div class="column col-lg-3 col-md-6">
                            <div class="widget contact-widget">
                                <h3 class="widget-title">Contact Us</h3>
                                <div class="widget-content">
                                    <ul class="contact-info">
                                        <li>
                                            <div class="icon"><span class="fas fa-flag"></span></div>
                                            <div class="text">72 Main Drive, Calibry, <br> Florida 20304</div>
                                        </li>
                                        <li>
                                            <div class="icon"><span class="fas fa-phone-volume"></span></div>
                                            <div class="text">
                                                Helpline 24/7 <br>
                                                <a href="tel:+1(700)3330088">+1 (700) 333 0088</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><span class="fas fa-clock"></span></div>
                                            <div class="text">
                                                Mon to Friday <br> 9:00 am to 7:00 pm
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">(c) 2021 - Care Medical Directory. All rights reserved. <a href="#">Sitemap</a></div>
            </div>
        </div>               
    </footer>
    <!--End Main Footer-->

	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon-arrow-left"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/script.js"></script>


</body>

<!-- Mirrored from html.tonatheme.com/2021/Care/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 04:47:20 GMT -->
</html>













