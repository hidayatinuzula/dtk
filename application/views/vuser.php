<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>De-TransKot</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/icon.png"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->  
  <header id="header">
    <div class="header-inner">
      <!-- Header image -->
      <img src="assets/images/header-bg.png" alt="img">
      <div class="header-overlay">
        <div class="header-content">
        <!-- Start header content slider -->
        <h2 class="header-slide">De-TransKot
          <span>Angkutan Kota Depok</span>
          <span>Search Rute</span>
          <span>Informasi Rute</span></h2>
        <!-- End header content slider -->  
        <!-- Header btn area -->
        <div class="header-btn-area">
          <a class="download-btn" href="#about">WHAT THIS APP?</a>
        </div>
      </div>
      </div>      
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
           <a class="navbar-brand logo" href="index.html"><img src="assets/images/logo.png" alt="logo"></a>                      
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            <li class="active"><a href="index.html">HOME</a></li>
            <li><a href="#about">ABOUT</a></li> 
            <li><a href="#team">SEARCH</a></li>                    
            <li><a href="#service">INFO</a></li> 
            <li><a href="#portfolio">MOBILE APP</a></li>
     <!--   <li><a href="#pricing-table">PRICE </a></li>             
            <li><a href="#from-blog">BLOG </a></li>      
            <li><a href="#contact">CONTACT</a></li> -->
          </ul>                            
        </div><!--/.nav-collapse -->
       <div class="search-area">
          <form action="">
            <input id="search" name="search" type="text" placeholder="What're you looking for ?">
            <input id="search_submit" value="Rechercher" type="submit">
          </form>
        </div>         
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Start about section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle">Deskripsi <span>Aplikasi</span></h2>
              <span class="tittle-line"></span>
              <p>De-TransKot merupakan aplikasi yang memberikan informasi rute angkutan kota (angkot) Depok yang dapat membantu dalam pencarian dan informasi rute angkutan kota Depok.</p>
            </div>
            <div class="welcome-content">
              <ul class="wc-table">
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-bus wc-icon"></span>
                    <h4 class="wc-tittle">Angkot Depok</h4>
                    <p>Aplikasi ini akan mengelola perutean angkutan dalam kota maupun angkutan antar kota dalam propinsi Depok, yaitu sebanyak 43 trayek</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-search wc-icon"></span>
                    <h4 class="wc-tittle">Pencarian Rute Angkot</h4>
                    <p>Aplikasi ini memiliki fitur SEARCH, yang membantu user untuk menentukan rute dalam menggunakan angkot Depok</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-info wc-icon"></span>
                    <h4 class="wc-tittle">Informasi Angkot</h4>
                    <p>Aplikasi ini memiliki fitur INFO, yang membantu user untuk mengetahui angkutan-angkutan kota Depok beserta trayeknya</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End about section -->

  <!-- Start call to action -->
  <section id="call-to-action">
    <img src="assets/images/call-to-action-bg.png" alt="img">
    <div class="call-to-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="testimonial-area">
                  <div class="testimonial-conten">
                    <!-- Start testimonial slider -->
                    <div class="testimonial-slider">
                      <!-- single slide -->
                      <div class="single-slide">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoquat. Duis aute irure d olor in reprehenderit</p>
                      </div>
                      <!-- single slide -->
                      <div class="single-slide">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoquat. Duis aute irure d olor in reprehenderit</p>
                      </div>
                    </div>
                  </div>
            </div>
            </div>
            </div>
      </div>
    </div> 
  </section>
  <!-- End call to action -->

  <!-- Start Team action -->
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="team-area">
            <div class="title-area">
              <h2 class="tittle">Search <span>Rute</span> Angkot</h2>
            </div>
              <form action="" class="contact-form">
                <div class="form-group">                
                  <input type="text" class="form-control" placeholder="Name">
                  <input type="text" class="form-control" placeholder="Name">
                  <button type="submit" data-text="SUBMIT" class="button button-default"><span>SUBMIT</span></button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Team action -->

  <!-- Start service section -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="service-area">
            <div class="title-area">
              <h2 class="tittle">Informasi <span>Angkot</span> Depok</h2>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="contact-left wow fadeInLeft">
                <h4>Trayek Angkot Dalam Kota</h4>
                <h4>Trayek Angkot Antar Kota</h4>
                  <h5>102: Terminal Sawangan - Lebak Bulus</h5>
                  <h5>105: Terminal Depok - Lebak Bulus</h5>
                  <h5>106: Parung - Pd.Gede - Lebak Bulus</h5>
                  <h5>110: Terminal Depok - Ciputat</h5>
                  <h5>112: Terminal Depok - Kp.Rambutan</h5>
                  <h5>114: Pangkalan Cinere - Terminal Ciputat</h5>
                  <h5>128: Terminal Depok - Warung Silah</h5>
                  <h5>129: Mekarsari - Akses UI - Ps. Minggu</h5>
                  <h5>129: Cisalak - Akses UI - Ps. Minggu</h5>
                  <h5>28: Parung - Pd.Petir - Ciputat</h5>
                  <h5>29: Parung - Cinangka - Ciputat</h5>
                  <h5>37: Cibinong - Kp. Rambutan</h5>
                  <h5>37: Cibinong - Cilodong - Kp.Rambutan</h5>
                  <h5>41: Citeureup - Cibinong - Kp.Rambutan</h5>
                  <h5>61: Pangkalan Desa Limo - Ps.Minggu</h5>
                  <h5>79: Cisalak - Radar AURI - Lw.Nanggung</h5>
                  <h5>97: Cisalak - Cibubur - Taman Bunga</h5>
                  <h5>M.03: Terminal Depok - Ps.Minggu</h5>
                  <h5>M.04: Depok Timur - Ps.Minggu </h5>
              </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
              <div class="contact-right wow fadeInRight">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d6303.67022361714!2d144.955652!3d-37.817331!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-37.8173306!2d144.9556518!5e0!3m2!1sen!2sbd!4v1442411159706" width="100%" height="525" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service section -->

  <!-- Start counter section -->
    <section id="counter">
      <img src="assets/images/counter-bg.png" alt="img">
      <div class="counter-overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <!-- Start counter area -->
              <div class="counter-area">
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <div class="single-counter">
                    <span class="fa fa-bus"></span>
                    <div class="counter-count">
                      <span class="counter">2884</span>
                      <p>Unit Angkot</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <div class="single-counter">
                    <span class="fa fa-road"></span>
                    <div class="counter-count">
                      <span class="counter">42</span>
                      <p>Rute / Trayek</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <div class="single-counter">
                    <span class="fa fa-user"></span>
                    <div class="counter-count">
                      <span class="counter">2,300</span>
                      <p>Followers</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <div class="single-counter">
                    <span class="fa fa-tasks"></span>
                    <div class="counter-count">
                      <span class="counter">800</span>
                      <p>Project done</p>
                    </div>
                  </div>
                </div>    
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- End counter section -->

  <!-- Start Portfolio section -->
  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="portfolio-area">
            <div class="title-area">
              <h2 class="tittle">Aplikasi <span>Mobile</span></h2>
              <span class="tittle-line"></span>
              <p>Aplikasi De-TransKot juga dapat diakses melalui smartphone android Anda. Download Aplikasi D-TransKot pada PlayStore Anda dan Anda dapat mengakses aplikasi D-TransKot melalui smartphone android Anda.</p>
            </div>
              <div class="from-blog-content">
              <div class="row">
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="assets/images/dtk-splash.png" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="assets/images/dtk-search.png" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="assets/images/dtk-map.png" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Portfolio section -->

  <!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">             
                <a class="footer-logo" href="#"><img src="assets/images/logo.png" alt="Logo"></a>              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>Created by <a href="#">ExcreamProgrammer</a></p>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- initialize jQuery Library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>  
  </body>
</html>