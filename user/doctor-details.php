<?php
include('connection.php');
session_start();

?>
<?php
  $id = $_GET['id'];
  $a = mysqli_query($conn, "select * from doctor_tbl where id=$id");
  $b = mysqli_num_rows($a);

 $getemail= $_SESSION['email'];
  if ($getemail == null){
      echo "<script> alert ('Login to continue') </script>";
      header("Location: sign-in.php");
  }
  else{
    $done_Appoint = mysqli_query($conn,"select * from doctor_tbl where id=$getemail");


  }

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
    <header class="main-header header-style-one">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                    </div>
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li class="dropdown"><a href="index.php">Home</a>
                                            <ul>
                                                <li><a href="index.php">Home One</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Doctors</a>
                                            <ul>
                                                <li><a href="doctor-details.php">Doctor Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="service.php">Services</a></li>
                                                <li><a href="faq.php">FAQ’s</a></li>
                                                <li><a href="404.php">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Hospitals</a>
                                            <ul>
                                                <li><a href="hospital-1.php">Hospital Grid</a></li>
                                                <li><a href="hospital-2.php">Hospital List</a></li>
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
                            <div class="link-btn"><a href="#" class="theme-btn"><span><i>+</i> Join Now</span></a></div>
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
                            <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                        </div>
                        <div class="right-column">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>
    
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    
                                </nav>
                            </div>
                            <div class="navbar-right-info">
                                <div class="search-toggler"><i class="icon-search"></i></div>
                                <div class="link-btn"><a href="#" class="theme-btn"><span><i>+</i> Join Now</span></a></div>
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

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-2.png);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Doctor Info</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="index.php">Homepage</a></li>
                        <li><a href="index.php">All Doctors</a></li>
                        <li>Doctor Info</li>
                    </ul>
                </div>                    
            </div>
        </div>
    </section>

    <!-- Doctor Details page -->
    <div class="doctor-details-page">
        <div class="auto-container">
            <div class="row">
            <?php
                while($row = mysqli_fetch_array($a)) {?>
                <div class="col-lg-8">
                    <div class="doctor-details">
                        <div class="doctor-block-three">
                            <div class="content">
                                <div class="image">
                                    <img src="../doctor/assets/dr_imgs/<?php echo $row['pic']?>" alt="">
                                </div>
                                <h4>Dr. <?php echo $row['name']?> <span class="category"><?php echo $row['speciality']?></span></h4>
                                <div class="designation"><?php echo $row['degree_name']?></div>
                                <div class="text-two">Aute irure dolor reprehenderit cepteur ocaecat cupidatate ipsum proident int sunt indys ipsum quis. Venium mini ullamco. Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                                <div class="text"><i class="icon_pin"></i><?php echo $row['dr_address']?>  <a href="#">View On Map</a></div>
                                <div class="link-btn">
                                    <a href="#" class="theme-btn"><span><i class="icon_phone"></i> <?php echo $row['cell']?></span></a>
                                    <div class="like"><i class="far fa-heart"></i></div>
                                    <div class="share-content">
                                        <div class="icon"><i class="far fa-share-alt"></i></div>
                                        <ul class="social-links">
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-block">
                            <div class="group-title">
                                <h3>About Doctor</h3>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam nmco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehender it in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit an mid est laborum. Sed ut perspiciatis unde omnis iste natus error.</p>
                            </div>
                        </div>
                        <div class="single-block">
                            <div class="group-title">
                                <h3>Specialities</h3>
                            </div>
                            <div class="text">Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam mco laboris nisiut aliquip it in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>                        
                            <ul class="achivement">
                                <li><?php echo $row['speciality']?><span><?php echo $row['degree_name']?></span></li>
                                <li><?php echo $row['speciality_2']?> <span><?php echo $row['degree_name']?></span></li>
                                <li><?php echo $row['speciality_3']?><span><?php echo $row['degree_name']?></span></li>
                            </ul>
                        </div>
                        <div class="single-block">
                            <div class="group-title">
                                <h3>Educational Background</h3>
                            </div>
                            <div class="text">Ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam  nmco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehender  it in voluptate velit esse cillum dolore nulla.</div>
                            <ul class="achivement">
                                <li><?php echo $row['edu_bg']?> <span>(Doctor of Medicine 2005)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="appointment-form">
                        <div class="to-content">
                            <i class="icon_calendar"></i>
                            <h4>Book Appointment</h4>
                            <p><?php echo $row['avail_days']?>: <?php echo $row['avail_time']?> pm</p>
                        </div>
                        <form action="" method="POST">
                            <div class="upper-box">
                                <div class="form-group">
                                    <input type="date" name="apt_date" class="form-control" id="date" value="2012-12-12">
                                </div>
                                <input type="time" name="apt_time" class="form-control" id="time">
                                <input type="submit" class="btn btn-success" value="Appoint Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php  } ?>
        </div>
    </div>

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
    <footer class="main-footer">
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

<!-- Mirrored from html.tonatheme.com/2021/Care/doctor-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 04:48:08 GMT -->
</html>













