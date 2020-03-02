<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Login Page on Logging-out.
}
?>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Library Management,Website for CMRIT	">
<meta name="keywords" content="Library Management CMRIT, Online Courses CMRIT ">	
<title> Library Management | CMRIT</title>
<link rel="shortcut icon" type="image/x-icon" href="asset/img/4.jfif">

<!-- css plugin ------------------------------------------------------------------->
<link rel="stylesheet" href="asset/css/bootstrap.min.css">
<link rel="stylesheet" href="asset/css/font-awesome.min.css">
<link rel="stylesheet" href="asset/css/magnific-popup.css">
<link rel="stylesheet" href="asset/css/flexslider.css">
<link rel="stylesheet" href="asset/css/aos.css">

<!-- main css ---------------------------------------------------------------------->
<link rel="stylesheet" href="asset/css/style.css">
<link rel="stylesheet" href="asset/css/style-responsives.css">

<!-- google fonts -------------------------------------------------------------------->
<link href="https://fonts.googleapis.com/css?family=Hind:600|Lato:300,400|Ubuntu" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>

<body>
<!-- // PRELOADER BEGIN ----------------------------------------------------------------->
<div id="preloader">
<div id="status">
<div class="loader-revolve center">
<span></span>
</div>
</div>
</div>
<!-- // PRELOADER END -------------------------------------------------------------------->

<!-- // NAVIGATION BEGIN------------------------------------------------------------------->
<div id="navigation">
<div class="container">
<div class="row">
<div class="col-sm-3">
<div class="logo">
<a href="index.html" >Library Management CMRIT </a>
</div>       
<!--// LOGOUT-------------------------------->
<div id="profile">
<b style="color:white" id="welcome">Welcome : <i><?php echo $login_session; ?></i></b><br>
</div>
<!-------------------------------------------->
</div>
<div class="col-sm-9">
<div class="navigation-menu">
<div class="navbar">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li><a class="active smoth-scroll" href="#particles-js">Home</a></li>
<li><a class="smoth-scroll" href="#about">Book Info.</a></li>
<li><a class="smoth-scroll" href="#portfolio">Register</a></li>
<li><a class="smoth-scroll" href="#contact">Contact</a></li>
<li><a id="logout" href="logout.php" style="color:silver">Log Out</a></li>	
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- // NAVIGATION END -------------------------------------------------------------------------------------------------->

<!--   // HOME BEGIN ----------------------------------------------------------------------------------------------------> 
<div id="particles-js" class="home-bg" style="background-image: url('asset/img/2.jpg')" data-stellar-background-ratio="0.6">
<div class="overlay">
<div class="container">
<div class="row">
<div class="home-text">
<div class="profile-pic" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="400"
 data-aos-offset="0">
<img src="asset/img/4.jfif" />
</div>
<div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="400" data-aos-offset="0">
<h1>Library Management CMRIT</h1>
<h3 id="text-rotator">
<div>Dive Deep into Concepts</div>
<div>Where Learning Never STOPS</div>
<div>CMRIT Bengaluru</div>
</h3>
</div>
</div>
<a class="smoth-scroll" href="#about"><i class="fa fa-angle-down arrow"></i></a>
</div>
</div>
</div>
</div>

<!-- particles-js style ------------------------------------------------------------------------------------------------------->
<style type="text/css" media="screen">
#particles-js
{
background-image: url('asset/img/2.jpg');
height: 100vh;
}
</style>
<!-- // HOME END --------------------------------------------------------------------------------------------------------------->

<!-- // ABOUT BEGIN -------------------------------------------------------------------------------------------------------------->
<section id="about">
<div class="container">
<div class="row">
<div class="description col-md-6 col-sm-4 col-xs-12">
<h2> Welcome to our <strong style="color: #4cd137"> Library </strong></h2>
<h4> DBMS Project | CMRIT Bengaluru, India</h4>
<p> Our Project <em> ' LIBRARY MANAGEMENT ' </em>  sole purpose is to build a system is to manage library daily operation efficiently. 	
<br>
</p> 
</div>
<div class="facts col-md-5 col-sm-5 col-xs-12">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6">
<div class="count-item">
<div class="numscroller" data-slno='1' data-min='0' data-max='40000' data-delay='6' data-increment="50">50</div>
<div class="count-name-intro">e-Books <i class="fa fa-book"></i></div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-6">
<div class="count-item">
<div class="numscroller" data-slno='1' data-min='0' data-max='1700' data-delay='6' data-increment="2">95</div>
<div class="count-name-intro">Journals  <i class="fa fa-file-text"></i></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // ABOUT END ------------------------------------------------------------------------------------------------------------->
	
<section id="portfolio">
<div class="container text-center">
<div class="row">
<div class="col-md-20 text-center">
<h2> Student Registeration |  Registered Student Details </h2>
</div>
<div class="col-md-18 col-sm-6">
<div class="blog-item">
<div class="blog-desc">
<h4>
<a > Student Registeration</a>
</h4>
<a href="form.html" target="_blank" class="btn btn-dark " id="register"> Student Register</a>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="blog-item">
<div class="blog-desc">
<h4>
<a > Student Details</a>
</h4>
<a href="studentdetails.php" target="_blank" class="btn btn-dark " id="register">Student Details</a>
</div>
</div>
</div>
</div>
</div>
</section> 	
<section id="blog">
<div class="container text-center">
<div class="row">
<div class="col-md-12 text-center">
<h2>Books Available | Issue | Update </h2>
</div>
<div class="col-md-4 col-sm-6">
<div class="blog-item">
<a   class="blog-img">
<img src="asset/img/7.jpg">
</a>
<div class="blog-desc">
<h4>
<a > Books Available</a>
</h4>
<p>This section contains the list of available books- currently in our CMRIT library depository.</p>
<a href="booksavailable.php" target="_blank" class="btn btn-dark" id="readmore">View</a>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="blog-item">
<a   class="blog-img">
<img src="asset/img/7.png">
</a>
<div class="blog-desc">
<h4>
<a > Book Issue/Return</a>
</h4>
<p>This section of Books Info. contains the list of issued/return books.</p>
<a href="booksissue.html" target="_blank" class="btn btn-dark" id="readmore">Issue</a>
<a href="reissue.html" target="_blank" class="btn btn-dark " id="register">Return</a>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6">
<div class="blog-item">
<a   class="blog-img">
<img src="asset/img/img3.jfif">
</a>
<div class="blog-desc">
<h4>
<a > Update </a>
</h4>
<p> Updating on the books information- i.e addition of books.</p>
<a href="update.html" target="_blank" class="btn btn-dark " id="register">Enter</a>
</div>
</div>
</div>
</div>
</div>
</section> 
	
<!-- // FOOTER BEGIN ----------------------------------------------------------------------------------------------->
<footer id="contact">
<div class="container">
<div class="col-md-12 text-center">
<h3> CONNECT WITH US.</h3>
<ul class="social-icons-footer">
<li><a href="https://twitter.com/cmritspeaks?lang=en" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li><a href="https://www.linkedin.com/school/cmr-institute-of-technology/?originalSubdomain=in" target="_blank"><i class="fa fa-linkedin"></i></a></li>
<li><a href="mailto:info@cmrit.ac.in" target="_blank"><i class="fa fa-envelope"></i></a></li>
</ul>
</div>
</div>
</footer>
<!-- // FOOTER END ------------------------------------------------------------------------------------------------------->

<!-- js plugin ------------------------------------------------------------------------------------------------------------>
<script src="asset/js/jquery.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/jquery.stellar.min.js"></script>
<script src="asset/js/text-rotate.js"></script>
<script src="asset/js/numscroller.js"></script>
<script src="asset/js/jquery.appear.js"></script>
<script src="asset/js/progress-bar.min.js"></script>
<script src="asset/js/jquery.mixitup.js"></script>
<script src="asset/js/jquery.magnific-popup.min.js"></script>
<script src="asset/js/magnific-popup-options.js"></script>
<script src="asset/js/jquery.flexslider-min.js"></script>
<script src="asset/js/aos.js"></script>
<script src="asset/js/jquery.form.js"></script> 
<script src="asset/js/jquery.validate.min.js"></script>
<script src="particles.js"></script>
<script src="app.js"></script>

<!-- main js ------------------------------------------------------------------------------------------------------------------------------------------------------>
<script src="asset/js/main.js"></script>
</body>

 
