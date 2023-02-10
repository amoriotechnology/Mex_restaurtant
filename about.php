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

<!-- carousel -->
<link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.carousel.min.css" />

<!-- main style -->
<link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" />

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
              <li><a href=""> <i class="fa fa-envelope-o"></i> support@gmail.com</a></li>
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

<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(images/bg/03.jpg);">
 <div class="container">
    <div class="row text-center intro-title">
       <div class="col-md-12">
          <h1 class="text-orange">About us</h1>
          <p class="text-white mb-0">We Know The Secret Of Your Success</p>
          <ul class="page-breadcrumb">
            <li><a href=""><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="">pages</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>about us</span></li>
         </ul>
       </div>
     </div>
  </div>
</div>

<!--=================================
 intro bg -->

<!--=================================
 about -->

<section class="about white-bg page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="custom-content">
          <h2><span class="text-orange mb-20">WHO WE ARE </span> & HISTORY</h2>
          <p>Consectetur adipisicing elit lorem ipsum dolor sit amet. <span class="tooltip-content-2" data-bs-placement="top" data-bs-toggle="tooltip" title="Sed hendrerit enim non justo">Vero quod conseqt</span> quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>
          <p>Aperiam fugiat lorem ipsum dolor sit amet, <span class="tooltip-content-2" data-placement="top" data-toggle="tooltip" data-original-title="Sed hendrerit enim non justo">consectetur adipisicing </span>elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum eserunt velit rerum laudantium cum magnam.</p>
          <ul>
          <li><i class="fa fa-hand-o-right"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, </li>
          <li><i class="fa fa-hand-o-right"></i> lorem quis bibendum auctor, nisi elit consequat ipsum, </li>
          <li><i class="fa fa-hand-o-right"></i> nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate  </li>
          <li><i class="fa fa-hand-o-right"></i> cursus a sit amet mauris. Morbi accumsan ipsum velit. </li>
        </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="true"  data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1">
           <div class="item">
             <img class="img-fluid center-block" src="images/about/des.png" alt="">
           </div>
           <div class="item">
             <img class="img-fluid center-block" src="images/about/des.png" alt="">
           </div>
        </div>
      </div>
     </div>
  </div>
</section>

<!--=================================
 about -->


<!--=================================
counter -->

 <section class="parallax bg-overlay-black-80 page-section-ptb counter" style="background-image: url(images/bg/07.jpg);">
    <div class="container">
     <div class="row">
       <div class="col-lg-3 col-md-3 col-sm-6 text-center">
        <div class="counter-block">
         <span class="glyph-icon flaticon-lemonade-with-straw text-white" aria-hidden="true"></span>
         <span class="timer text-white" data-to="3968" data-speed="10000">3968</span>
         <h5 class="text-white"><span class="text-orange">Daily</span> Customers</h5>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
      <div class="counter-block">
        <span class="glyph-icon flaticon-food-66 text-white" aria-hidden="true"></span>
        <span class="timer text-white" data-to="5568" data-speed="10000">5568</span>
       <h5 class="text-white"><span class="text-orange">Best</span> Food</h5>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
      <div class="counter-block mb-5 mb-sm-0">
       <span class="glyph-icon flaticon-food text-white" aria-hidden="true"></span>
       <span class="timer text-white" data-to="8908" data-speed="10000">8908</span>
       <h5 class="text-white"><span class="text-orange">Master</span> chefs</h5>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
      <div class="counter-block last mb-0">
        <span class="glyph-icon flaticon-hot-mug-doodle text-white" aria-hidden="true"></span>
        <span class="timer text-white" data-to="9968" data-speed="10000">9968</span>
        <h5 class="text-white"><span class="text-orange">our</span> experience</h5>
        </div>
       </div>
      </div>
     </div>
 </section>

<!--=================================
counter -->

 <!--=================================
  our team -->

 <section class="our-team white-bg page-section-pt">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
      <div class="section-title text-center">
      <div class="title-separator">
        <i class="glyph-icon flaticon-food-27"></i>
      </div>
        <h2> <span class="text-orange">Our</span> Team</h2>
        <p>List of people who matter in The Zayka</p>
      </div>
    </div>
   </div>
   <div class="row">
   <div class="col-lg-12 col-md-12">
    <div class="owl-carousel" data-items="3" data-md-items="3" data-sm-items="2">
      <div class="item">
        <div class="team">
          <div class="team-images">
            <img class="img-fluid center-block" src="images/team/test.png" alt="">
          </div>
           <div class="team-content">
            <div class="team-description">
              <h6>Alice Williams</h6>
              <span>Cook</span>
            </div>
           <!--  <div class="team-social">
              <ul>
                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                <li><a href="#"> <i class="fa fa-dribbble"></i> </a></li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
      <div class="team">
          <div class="team-images">
            <img class="img-fluid center-block" src="images/team/test.png" alt="">
          </div>
           <div class="team-content">
            <div class="team-description">
              <h6>Martin Smith</h6>
              <span>Su chef</span>
            </div>
           <!--  <div class="team-social">
              <ul>
                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                <li><a href="#"> <i class="fa fa-dribbble"></i> </a></li>
              </ul>
            </div> -->
          </div>
        </div>
      <div class="team">
          <div class="team-images">
            <img class="img-fluid center-block" src="images/team/test.png" alt="">
          </div>
           <div class="team-content">
            <div class="team-description">
              <h6>Paul Flavius</h6>
              <span>Head waiter</span>
            </div>
           <!--  <div class="team-social">
              <ul>
                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                <li><a href="#"> <i class="fa fa-dribbble"></i> </a></li>
              </ul>
            </div> -->
          </div>
        </div>
      <div class="team">
          <div class="team-images">
            <img class="img-fluid center-block" src="images/team/test.png" alt="">
          </div>
           <div class="team-content">
            <div class="team-description">
              <h6>Michael Bean</h6>
              <span>Head chef</span>
            </div>
           <!--  <div class="team-social">
              <ul>
                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                <li><a href="#"> <i class="fa fa-dribbble"></i> </a></li>
              </ul>
            </div> -->
          </div>
        </div>
      <div class="team">
          <div class="team-images">
            <img class="img-fluid center-block" src="images/team/test.png" alt="">
          </div>
           <div class="team-content">
            <div class="team-description">
              <h6>Sara Lisbon</h6>
              <span>Chef de partie</span>
            </div>
          <!--   <div class="team-social">
              <ul>
                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                <li><a href="#"> <i class="fa fa-dribbble"></i> </a></li>
              </ul>
            </div> -->
          </div>
        </div>
       </div>
      </div>
    </div>
   </div>
</section>

<!--=================================
  our team -->

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
     <div class="col-md-8 text-center mt-60">
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
       <p><a href="" class="text-white"> support@website.com</a></p>
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
          <li class="list-inline-item"><a href="#" data-tooltip="tripadvisor"> <i class="fa fa-tripadvisor"></i> </a> </li>
        </ul>
      </div>
      <p>© <?php echo date('Y'); ?> Designed & Developed By <a href="https://amoriotech.com/" target="_blank">Amorio Technologies</a></p>
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
      <li><a class="button-reset button black-bt" href="#">Reset All</a></li>
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

<!-- owl carousel -->
<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>

<!-- appear -->
<script type="text/javascript" src="js/jquery.appear.js"></script>

<!-- counter -->
<script type="text/javascript" src="js/counter/jquery.countTo.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>

<!-- style customizer  -->
<script type="text/javascript" src="js/style-customizer.js"></script>

</body>
</html>
