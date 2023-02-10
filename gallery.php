<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Restaurant</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Amatic+SC:400,700|Lilita+One" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

<!-- font awesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css" />

<!-- mega menu -->
<link rel="stylesheet" type="text/css" href="css/mega-menu/mega_menu.css" />

<!-- magnific-popup -->
<link rel="stylesheet" type="text/css" href="css/magnific-popup/magnific-popup.css" />

<!-- main style -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!-- Style customizer -->
<link rel="stylesheet" type="text/css" href="#" data-style="styles" />
<link rel="stylesheet" type="text/css" href="css/style-customizer.css" />

</head>
<body>

<!--=================================
 loading -->

<div id="loading">
  <div id="loading-center">
    <img src="images/loader.gif" alt="">
  </div>
</div>

<!--=================================
 loading -->

<!--=================================
 header -->

<header id="header" class="header">
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="topbar-left text-start">
            <ul>
              <li><i class="fa fa-phone"></i> (01) 123 456 7890 </li>
              <li><a href=""> <i class="fa fa-envelope-o"></i> support@website.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="topbar-right text-end">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
              <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
              <li><a href="#"><i class="fa fa-instagram"></i> </a></li>
              <li><div class="search-1">
                <a class="search-btn" href="javascript:void(0);"></a>
                <!-- Overlay Search -->
                 <div class="overlay-search">
                  <div class="container">
                      <div class="row">
                          <div class="form_search-wrap">
                              <form>
                                  <input class="search-input" placeholder="Type and hit Enter..." type="text">
                                  <a href="#" class="search-close">
                                      <span></span>
                                      <span></span>
                                  </a>
                              </form>
                          </div>
                      </div>
                    </div>
                  </div>
                <!-- End Overlay Search -->
              </div>
             </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- mega menu -->
  <div class="menu">
    <!-- menu start -->
    <?php include ('includes/navbar.php'); ?>
  <!-- menu end -->
 </div>
</header>

 <!--=================================
 header -->

 <!--=================================
 intro bg -->

<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(images/bg/02.jpg);">
  <div class="container">
     <div class="row text-center intro-title">
      <div class="col-md-12">
        <h1 class="text-orange">Gallery</h1>
        <p class="text-white">We Know The Secret Of Your Success</p>
        <ul class="page-breadcrumb">
          <li><a href=""><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
          <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span>gallery 4 column</span></li>
       </ul>
      </div>
     </div>
  </div>
</div>

 <!--=================================
 intro bg -->

<!--=================================
 gallery -->

 <section class="gallery white-bg page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
       <div class="isotope-filters">
        <button data-filter="" class="active">All</button>
        <button data-filter=".vegetarian"> Vegetarian</button>
        <button data-filter=".chinese">Chinese</button>
        <button data-filter=".italian">Italian</button>
        <button data-filter=".mexican">Mexican</button>
       </div>
      </div>
     </div>
     </div>
   <div class="container">
 <div class="isotope popup-gallery columns-4">
   <div class="grid-item chinese mexican">
      <div class="galllery-item">
        <span><img class="img-fluid" src="images/gallery/bbq chicken shawarma.png" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
             <h3> <a href="#"> BBQ chicken shawarma </a> </h3>
              <!-- <a href="#">Branding</a>/
              <a href="#">Identity</a> -->
             <a class="portfolio-img" href="images/gallery/bbq chicken shawarma.png"><i class="fa fa-expand"></i></a>
              </div>
           </div>
        </div>
    </div>
    <div class="grid-item chinese">
      <div class="galllery-item">
        <span><img class="img-fluid" src="images/gallery/Chiles en nogada.png" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3> <a href="#"> Chiles en nogada </a> </h3>
             
             <a class="portfolio-img" href="images/gallery/Chiles en nogada.png"><i class="fa fa-expand"></i></a>
              </div>
           </div>
        </div>
    </div>
     <div class="grid-item  vegetarian italian">
        <div class="galllery-item">
        <span><img class="img-fluid" src="images/gallery/Elote.png" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
           <h3> <a href="#"> Elote </a> </h3>
             
             <a class="portfolio-img" href="images/gallery/Elote.png"><i class="fa fa-expand"></i></a>
              </div>
           </div>
        </div>
    </div>
    <div class="grid-item mexican">
      <div class="galllery-item">
        <span><img class="img-fluid" src="images/gallery/Enchiladas.png" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
           <h3> <a href="#"> Enchiladas </a> </h3>
              
             <a class="portfolio-img" href="images/gallery/Enchiladas.png"><i class="fa fa-expand"></i></a>
              </div>
           </div>
        </div>
    </div>
    <div class="grid-item  vegetarian chinese">
      <div class="galllery-item">
        <span><img class="img-fluid" src="images/gallery/Guacamole.png" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
          <h3> <a href="#"> Guacamole</a> </h3>
                
             <a class="portfolio-img" href="images/gallery/Guacamole.png"><i class="fa fa-expand"></i></a>
              </div>
           </div>
        </div>
    </div>
    <div class="grid-item  vegetarian">
      <div class="galllery-item">
        <span><img class="img-fluid" src="images/gallery/Mexican Shawarma Plate.png" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3> <a href="#"> Mexican Shawarma Plate </a> </h3>
              <a href="#">Branding</a>/
              <a href="#">Identity</a>
             <a class="portfolio-img" href="images/gallery/Mexican Shawarma Plate.png"><i class="fa fa-expand"></i></a>
              </div>
           </div>
        </div>
    </div>
    <div class="grid-item">
      <div class="galllery-item">
        <span><img class="img-fluid" src="images/gallery/Mole.png" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
           <h3> <a href="#"> Mole </a> </h3>
              
             <a class="portfolio-img" href="images/gallery/Mole.png"><i class="fa fa-expand"></i></a>
              </div>
           </div>
        </div>
    </div>
      <div class="grid-item  vegetarian italian">
        <div class="galllery-item">
        <span><img class="img-fluid" src="images/gallery/Pozole.png" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3> <a href="#"> Pozole </a> </h3>
              
             <a class="portfolio-img" href="images/gallery/Pozole.png"><i class="fa fa-expand"></i></a>
              </div>
           </div>
        </div>
    </div>
     <div class="grid-item chinese">
        <div class="galllery-item">
        <span><img class="img-fluid" src="images/gallery/Tacos al pastor.png" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3> <a href="#"> Tacos al pastor </a> </h3>
             
             <a class="portfolio-img" href="images/gallery/Tacos al pastor.png"><i class="fa fa-expand"></i></a>
              </div>
           </div>
        </div>
    </div>
     <div class="grid-item chinese">
       <div class="galllery-item">
        <span><img class="img-fluid" src="images/gallery/Tamales.png" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3> <a href="#"> Tamales </a> </h3>
             
             <a class="portfolio-img" href="images/gallery/Tamales.png"><i class="fa fa-expand"></i></a>
              </div>
           </div>
        </div>
    </div>
    <div class="grid-item chinese">
       <div class="galllery-item">
        <span><img class="img-fluid" src="images/gallery/Tostadas.png" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3> <a href="#"> Tostadas </a> </h3>
              
             <a class="portfolio-img" href="images/gallery/Tostadas.png"><i class="fa fa-expand"></i></a>
              </div>
           </div>
        </div>
    </div>
    <div class="grid-item chinese">
       <div class="galllery-item">
        <span><img class="img-fluid" src="images/gallery/Chiles en nogada.png" alt=""></span>
         <div class="overlay">
          <div class="overlay-content">
            <h3> <a href="#"> Chiles en nogada </a> </h3>
              
             <a class="portfolio-img" href="images/gallery/Chiles en nogada.png"><i class="fa fa-expand"></i></a>
              </div>
           </div>
        </div>
    </div>
   </div>
 </div>
 </section>

 <!--=================================
 gallery -->

<!--=================================
  footer -->

<footer class="footer" style="background-image: url(images/bg/01.jpg);">
  <div class="object-bottom">
   <div class="object-left">
      <img class="img-fluid bottom" src="images/object/06.png" alt="">
    </div>
    <div class="object-right">
      <img  class="img-fluid bottom" src="images/object/16.png" alt="">
      </div>
  </div>
   <div class="container position-relative">
     <div class="row justify-content-center">
       <div class="col-lg-8 text-center mt-60">
          <div class="footer-logo">
            <img id="logo-footer" class="img-fluid" src="images/logo.png" alt="">
          </div>
          <p class=" text-white mb-60">We provide you with daily self-made bread, sourdough pizza, roasted fish-meat-vegetables and many more.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        </div>
      </div>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6">
       <div class="newsletter">
        <h4 class="text-white mb-30">Newsletter</h4>
        <p class="text-white">Signing up to our newsletter keeps you up-to-date!</p>
        <div class="newsletter-input">
          <input type="email" placeholder="Your email*" name="email">
           <a href="#"><i class="fa fa-envelope-o"></i></a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
     <div class="tweet">
       <h4 class="text-white mb-30">Latest tweet</h4>
        <div class="tweet-block mb-20">
          <div class="icon">
          <i class="fa fa-twitter text-white"></i>
        </div>
        <div class="content">
          <p class="text-white">Our brand new has just launched! </p>
          <span class="text-orange">03:05 AM Sep 18th</span>
        </div>
      </div>
      <div class="tweet-block">
        <div class="icon">
          <i class="fa fa-twitter text-white"></i>
        </div>
        <div class="content">
          <p class="text-white">Get your photo on win prizes. </p>
          <span class="text-orange">03:05 AM Sep 18th</span>
        </div>
      </div>
    </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
     <div class="opening-time">
      <h4 class="text-white mb-30">Open time</h4>
      <ul>
        <li>Monday<span class="text-end">8am - 2pm </span></li>
        <li>Tuesday<span>10am - 4pm</span></li>
        <li>Wednesday<span >11am - 4pm</span></li>
        <li>Close on public holidays</li>
      </ul>
     </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
      <div class="contact">
         <h4 class="text-white mb-30">Contact</h4>
         <p class="text-white">1234 North Avenue Luke, IN 360001</p>
         <p class="text-white">(01) 123 456 7890</p>
         <p class="text-white">support@website.com</p>
         <a class="text-orange" href="#"><i class="fa fa-map-o pr-10"></i> Find us here</a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
   <div class="container">
     <div class="row">
      <div class="co-md-12 text-center">
        <div class="footer-social">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#" data-tooltip="facebook"> <i class="fa fa-facebook"></i> </a> </li>
            <li class="list-inline-item"><a href="#" data-tooltip="twitter"> <i class="fa fa-twitter"></i> </a> </li>
            <li class="list-inline-item"><a href="#" data-tooltip="google-plus"> <i class="fa fa-google-plus"></i> </a> </li>
            <li class="list-inline-item"><a href="#" data-tooltip="instagram"> <i class="fa fa-instagram"></i> </a> </li>
            <!-- <li class="list-inline-item"><a href="#" data-tooltip="tripadvisor"> <i class="fa fa-tripadvisor"></i> </a> </li> -->
          </ul>
        </div>
        <p>© <?php echo date('Y'); ?> Designed & Developed By <a href="https://amoriotech.com/" target="_blank">Amorio Technologies</a>
      </div>
      </div>
    </div>
  </div>
</footer>

<!--=================================
 color customizer -->

<div class="style-customizer closed">
  <div class="buy-button"> <a class="opener" href="#"><i class="fa fa-cog fa-spin"></i></a>  </div>
  <div class="clearfix content-chooser">
     <!-- <a target="_blank" class="button black-bt" href="#">Purchase Now</a> -->
      <h3>Color Schemes</h3>
      <p>Which template color you want to use? Here are some predefined colors.</p>
      <ul class="styleChange clearfix">
        <li class="skin-default selected" title="Default" data-style="skin-default"></li>
        <li class="skin-green" title="Green" data-style="skin-green"></li>
        <li class="skin-gold" title="Gold" data-style="skin-gold"></li>
        <li class="skin-cyan" title="Cyan" data-style="skin-cyan" ></li>
        <li class="skin-light-red" title="Light red" data-style="skin-light-red"></li>
        <li class="skin-lime" title="lime" data-style="skin-lime"></li>
        <li class="skin-red" title="Red" data-style="skin-red"></li>
        <li class="skin-yellow" title="Yellow" data-style="skin-yellow"></li>
        <li class="skin-dark-green" title="Dark Green" data-style="skin-dark-green" ></li>
        <li class="skin-dark-red" title="Dark red" data-style="skin-dark-red"></li>
       </ul>
      <ul class="resetAll">
      <li><a class="button-reset button" href="#">Reset All</a></li>
    </ul>
  </div>
</div>

<!--=================================
 back to top -->

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-long-arrow-up"></i></a></div>

 <!--=================================
 footer -->

<!--=================================
 jquery -->

<!-- JS Global Compulsory (Do not remove)-->

<!-- jquery  -->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>

<!-- popper  -->
<script type="text/javascript" src="js/popper.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->

<!-- mega menu -->
<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

<!-- popup -->
<script type="text/javascript" src="js/popup/jquery.magnific-popup.js"></script>

<!-- isotope -->
<script type="text/javascript" src="js/isotope/isotope.pkgd.min.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>

<!-- style customizer  -->
<script type="text/javascript" src="js/style-customizer.js"></script>

</body>
</html>
