<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GeriBadminton</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('abc/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('abc/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:400,700') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic') }}" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="{{ asset('abc/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{ asset('abc/css/freelancer.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">GeriBadminton</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Barang yang Tersedia</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Kontak</a>
          </li>

          <div class="collapse navbar-collapse" id="navbarResponsive">
          
            @if (Route::has('login'))
                <div class="collapse navbar-collapse" id="navbarResponsive">
                
                                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto" src="{{ ('abc/img/profile.png') }}" alt="">
      <h1 class="text-uppercase mb-0">Geri Badminton</h1>
      <hr class="star-light">
      <h2 class="font-weight-light mb-0">Raket - Shuttle Kok - Net</h2>
    </div>
  </header>

  <!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Barang yang Tersedia</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-md-6 col-lg-4">
        <font size="4">Raket Adidas Rp.450.000</font><br>

            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ ('abc/img/portfolio/raketadidas.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
        <font size="4">Raket Yonex Rp.875.000</font><br>
       
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ ('abc/img/portfolio/raketyonex.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
        <font size="4">Raket Karakal Rp.425.000</font><br>
        
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ ('abc/img/portfolio/raketkarakal.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
        <font size="4">Raket Yehlex Rp.450.000</font><br>
       
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ ('abc/img/portfolio/raketyehlex.jpg') }}" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
        <font size="4">Raket Lining Rp.525.000</font><br>
       
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ ('abc/img/portfolio/raketlining.png') }}" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
        <font size="4">Raket Wilson Rp.425.000</font><br>
       
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ ('abc/img/portfolio/raketwilson.jpg') }}" alt="">
          </a>
        </div>

        <div class="col-md-6 col-lg-4">
        <font size="4">ShuttleKok Yonex Rp.150.000</font><br>
        
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ ('abc/img/portfolio/yonexkok.jpg') }}" alt="">
          </a>
        </div>

        <div class="col-md-6 col-lg-4">
        <font size="4">ShuttleKok FlyPower Rp.80.000</font><br>
        
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ ('abc/img/portfolio/flypowerkok.jpg') }}" alt="">
          </a>
        </div>

<div class="col-md-6 col-lg-4">
<font size="4">ShuttleKok Gajahmada Rp.75.000</font><br>

            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ ('abc/img/portfolio/gajahmadakok.jpg') }}" alt="">
          </a>
          </div>

          <div class="col-md-6 col-lg-4">
          <font size="4">ShuttleKok Garuda Rp.75.000</font><br>
        
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ ('abc/img/portfolio/garudakok.jpg') }}" alt="">
          </a>
          </div>
 
<div class="col-md-6 col-lg-4">
<font size="4">ShuttleKok Sinar Mutiara Rp.75.000</font><br>

            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ ('abc/img/portfolio/sinarkok.jpg') }}" alt="">
          </a>
          </div>

<div class="col-md-6 col-lg-4">
<font size="4">Net Proteam Rp.90.000</font><br>

            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ ('abc/img/portfolio/proteamnet.jpg') }}" alt="">
          </a>
          </div>

      <div class="col-md-6 col-lg-4">
      <font size="4">Net Lining Rp.85.000</font><br>
     
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ ('abc/img/portfolio/netlining.jpg') }}" alt="">
          </a>
          </div>
<div class="col-md-6 col-lg-4">
<font size="4">Net Yonex Rp.175.000</font><br>

            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ ('abc/img/portfolio/netyonex.jpg') }}" alt="">
          </a>
          </div>



    </div>
  </section>

  <!-- About Section -->
  <section class="bg-primary text-white mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">Kontak</h2>
      
          <p class="lead">Jika anda berminat untuk memesan silahkan hubungi telp/wa: 085852924711  email: gerindraangga@gmail.com </p>
        </div>
        
      </div>
      
    </div>
  </section>

  

</body>

</html>    