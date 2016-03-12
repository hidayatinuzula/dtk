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
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/select2.full.min.js"></script>

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
      <img src="assets/images/header-bg.jpg" alt="img">
      <div class="header-overlay">
        <div class="header-content">
        <!-- Start header content slider -->
        <h2 class="header-slide">De-TransKot
          <span>Angkutan Kota Depok</span>
          <span>Search Rute</span>
          <span>Informasi Rute</span>
        </h2>
        <!-- End header content slider -->  
        <!-- Header btn area -->
        <div class="header-btn-area">
          <a class="knowmore-btn" href="">SEARCH ROUTE ?</a>
          <a class="download-btn" href="#">WHAT THIS APP ?</a>
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
            <li class="active"><a href="#">HOME</a></li>
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
              <p>De-TransKot merupakan aplikasi informasi rute angkutan kota (angkot) Depok. Aplikasi ini dapat membantu pengguna angkutan kota Depok dalam memberikan informasi rute angkot terpendek untuk ke tempat tujuan.</p>
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
                    <p>Aplikasi ini memiliki fitur SEARCH, yang membantu user untuk menentukan rute terpendek dalam menggunakan angkot Depok</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-info wc-icon"></span>
                    <h4 class="wc-tittle">Informasi Angkot</h4>
                    <p>Aplikasi ini memiliki fitur INFO, yang membantu user untuk mengetahui angkutan-angkutan kota Depok beserta trayeknya</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-map wc-icon"></span>
                    <h4 class="wc-tittle">Informasi Peta Rute</h4>
                    <p>Aplikasi ini akan memberikan informasi rute terpendek angkutan kota kepada user dalam bentuk peta </p>
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
    <img src="assets/images/maps-bg.png" alt="img">
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
                        <p>Menurut data Dinas Perhubungan Kota Depok Tahun 2015 , Depok memiliki 2884 unit angkutan kota</p>
                      </div>
                      <!-- single slide -->
                      <div class="single-slide">
                        <p>Menurut data Dinas Perhubungan Kota Depok Tahun 2015 , Depok memiliki 43 trayek angkutan kota ( 22 trayek Dalam Kota dan 21 trayek Antar Kota Dalam Provinsi  )</p>
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
                  <select class="form-control select2">
                  <div class="col-md-3">
                          <option selected="selected">--From--</option>
                          <option value="1">Terminal Depokr</option>
                          <option value="2">Beji</option>
                          <option value="3">UI</option>
                          <option value="4">Kuning</option>
                          <option value="5">Merah</option>
                          <option value="6">Orange</option>
                          <option value="7">Pink</option>
                          <option value="8">Putih</option>
                          <option value="9">Ungu</option>
                  </div>
                  </select>

                  <select class="form-control select2">
                  <div class="col-md-3">
                          <option selected="selected">--To--</option>
                          <option value="1">Biru Dongker</option>
                          <option value="2">Biru Muda</option>
                          <option value="3">Hijau</option>
                          <option value="4">Kuning</option>
                          <option value="5">Merah</option>
                          <option value="6">Orange</option>
                          <option value="7">Pink</option>
                          <option value="8">Putih</option>
                          <option value="9">Ungu</option>
                        
                  </div>
                  </select>
                  <button onclick="" data-text="SEARCH" class="button button-default"><span>SEARCH</span></button>
                    <div class="current_location">
                    <p id="tampilkan"></p>
                    <a href="#team" onclick="return getLocation();"><h5><i class="fa fa-map-marker"></i> <span>Use Your Current Location</span></h5></a>
                    <div id="mapcanvas"></div>
                    </div>
                    
 <script src="http://maps.google.com/maps/api/js"></script>
<script>
var view = document.getElementById("tampilkan");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        view.innerHTML = "Yah browsernya ngga support Geolocation bro!";
    }
}
 
function showPosition(position) {
    lat = position.coords.latitude;
    lon = position.coords.longitude;
    latlon = new google.maps.LatLng(lat, lon)
    mapcanvas = document.getElementById('mapcanvas')
    mapcanvas.style.height = '500px';
    mapcanvas.style.width = '500px';
 
    var myOptions = {
    center:latlon,
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    }
    
    //var contentString = latlon;

    var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + lat + '<br>Longitude: ' + lon
    });

    var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
    var marker = new google.maps.Marker({
        position:latlon,
        map:map,
        title: "You are here!",
        draggable:true
    });

    marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}
 
function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            view.innerHTML = "Yah, mau deteksi lokasi tapi ga boleh :("
            break;
        case error.POSITION_UNAVAILABLE:
            view.innerHTML = "Yah, Info lokasimu nggak bisa ditemukan nih"
            break;
        case error.TIMEOUT:
            view.innerHTML = "Requestnya timeout bro"
            break;
        case error.UNKNOWN_ERROR:
            view.innerHTML = "An unknown error occurred."
            break;
    }
 }
</script>
                    
                </div>
              </form>
            </div>
              
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
                <ul class="nav nav-stacked">
                  <li class="nav-header" href="#" data-toggle="collapse" data-target="#Menu1">
                    <a><i class="fa fa-bus"></i> <span>Trayek Angkot Dalam Kota</span> <i class="fa fa-angle-down pull-right"></i></a>
                    <ul class="nav nav-stacked collapse out" id="Menu1">
                      <li><a href="#">D.01(Jalur1): Terminal Depok – Depok I Dalam</a></li>
                      <li><a href="#">D.01(Jalur2): Terminal Depok – Depok II</a></li>
                    </ul>
                  </li>
                  <li class="nav-header" href="#" data-toggle="collapse" data-target="#Menu2">
                    <a><i class="fa fa-bus"></i> <span>Trayek Angkot Antar Kota</span> <i class="fa fa-angle-down pull-right"></i></a>
                    <ul class="nav nav-stacked collapse out" id="Menu2">
                      <li><a href="#">102: Terminal Sawangan - Lebak Bulus</a></li>
                      <li><a href="#">105: Terminal Depok - Lebak Bulus</a></li>
                      <li><a href="#">106: Parung - Lebak Bulus</a></li>
                      <li><a href="#">110: Terminal Depok - Ciputat</a></li>
                      <li><a href="#">112: Terminal Depok - Kp.Rambutan</a></li>
                      <li><a href="#">114: Pangkalan Cinere - Terminal Ciputat</a></li>
                      <li><a href="#">128: Terminal Depok - Warung Silah</a></li>
                      <li><a href="#">129(Jalur1): Mekarsari - Ps. Minggu</a></li>
                      <li><a href="#">129(Jalur2): Cisalak - Ps. Minggu</a></li>
                      <li><a href="#">28: Parung - Ciputat</a></li>
                      <li><a href="#">29: Parung - Ciputat</a></li>
                      <li><a href="#">37: Cibinong - Kp. Rambutan</a></li>
                      <li><a href="#">41: Citeureup - Kp.Rambutan</a></li>
                      <li><a href="#">61: Pangkalan Desa Limo - Ps.Minggu</a></li>
                      <li><a href="#">79: Cisalak - Lw.Nanggung</a></li>
                      <li><a href="#">97: Cisalak - Taman Bunga</a></li>
                      <li><a href="#">M.03: Terminal Depok - Ps.Minggu</a></li>
                      <li><a href="#">M.04: Depok Timur - Ps.Minggu</a></li>
                    </ul>
                  </li>
                </ul>
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
                      <h2><a href="blog-single.html">Welcome Screen</a></h2>
                    </div>
                    <p>Dengan adanya aplikasi mobile De-TransKot pada platform Android maka akan semakin mempermudah pengguna angkutan kota dalam mengakses aplikasi kapanpun dan dimanapun</p>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="assets/images/dtk-search.png" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Search Route</a></h2>
                    </div>
                    <p>Pencarian informasi rute angkutan kota dilakukan dengan memilih lokasi awal dan lokasi tujuan Anda dengan tepat</p>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="assets/images/dtk-map.png" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Route Map</a></h2>
                    </div>
                    <p>Hasil pencarian yaitu berupa informasi rute terpendek berupa peta dan angkutan kota yang bisa digunakan untuk membantu perjalanan Anda  </p>
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

   <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
      });
    </script>

<center>
  </body>
</html>