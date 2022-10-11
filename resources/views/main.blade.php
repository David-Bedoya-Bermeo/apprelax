<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Hotel Relax</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon"
    href="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVwzKxtiRZZPAlfGv9eGcEnOPZrzHeyrURog&usqp=CAU')}}"
    type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css"
    href="rfonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
  <link rel="stylesheet" href="{{ asset('main/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{ asset('main/css/fonts.css')}}">
  <link rel="stylesheet" href="{{ asset('main/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('main/css/estilos.css')}}">
  <link href="{{ asset('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,700;0,900;1,400&display=swap')}}"
    rel="stylesheet">
  <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css')}}" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<body>
  <div class="ie-panel"><a href="{{ asset('http://windows.microsoft.com/en-US/internet-explorer/')}}"><img
        src="{{ asset('main/images/ie8-panel/warning_bar_0000_us.jpg')}}" height="42" width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
  </div>
  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
      <p>Loading...</p>
    </div>
  </div>
  <div class="page">
    <!-- Page Header imagen Arriba--><a class="banner banner-top"
      href="{{ asset('https://www.templatemonster.com/intense-multipurpose-html-template.html')}}" target="_blank"><img src=""
        alt="" /></a>
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
          data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
          data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
          data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
          data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse">
            <span></span>
          </div>
          <div class="rd-navbar-aside-outer">
            <div class="estilo-inicio">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <div class="logo-imagen">
                      <!--Brand Logotipo Hotel Relax--><a class="brand " href="index.html"><img
                          src="{{ asset('main/images/Sin título.png')}}" alt="" width="225" height="18" class="rounded-5" /></a>
                    </div>
                  </div>
                </div>
                <div class="rd-navbar-aside-right rd-navbar-collapse">
                  <ul class="rd-navbar-corporate-contacts">
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                        <div class="unit-body">
                          <p>07:00<span>am</span> — 06:00<span>pm</span></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                        <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                      </div>
                    </li>
                  </ul><a class="button button-md button-default-outline-2 button-ujarak" href="#">Iniciar Sesión</a>
                </div>
              </div>
            </div>
          </div>
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <div class="rd-navbar-nav-wrap">
                <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                  <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Inicio</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">Habitaciones</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Promosiones</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contactenos</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2"
      data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
      <div class="swiper-wrapper text-left">
        <div class="swiper-slide context-dark"
          data-slide-bg="{{ asset('main/images/hotelp1.jpg')}}">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-md-10">
                  <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Registrate en
                    nuestro hotel</h6>
                  <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100">
                    <span>Conoce</span><span class="font-weight-bold"> Nuestras opciones</span>
                  </h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft"
                    data-caption-delay="0">Get in touch</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="{{ asset('main/images/hotelp2.jpg')}}">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-md-10">
                  <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Opciones
                    variadas de habitaciones</h6>
                  <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100">
                    <span>TÚ</span><span class="font-weight-bold"> Elijes</span>
                  </h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft"
                    data-caption-delay="0">Get in touch</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="{{ asset('main/images/hotelp3.jpg')}}">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-md-10">
                  <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Pasa momentos
                    inholvidables</h6>
                  <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100">
                    <span>Que</span><span class="font-weight-bold"> Esperas?</span>
                  </h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft"
                    data-caption-delay="0">Get in touch</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Swiper Pagination-->
      <div class="swiper-pagination"></div>
    </section>
    <!-- Section Box Categories-->
    <section class="section section-lg section-top-1 bg-gray-4">
      <div class="container offset-negative-1">
        <div class="box-categories cta-box-wrap">
          <div class="box-categories-content">
            <div class="row justify-content-center">
              <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                <ul class="list-marked-2 box-categories-list">
                  <li><a href="#"><img src="{{ asset('main/images/hotels1.jpg')}}" alt="" width="368" height="420" /></a>
                    <h5 class="box-categories-title">Himnasio</h5>
                  </li>
                </ul>
              </div>
              <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                <ul class="list-marked-2 box-categories-list">
                  <li><a href="#"><img src="{{ asset('main/images/hotels2.jpg')}}" alt="" width="368" height="420" /></a>
                    <h5 class="box-categories-title">Piscina</h5>
                  </li>
                </ul>
              </div>
              <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                <ul class="list-marked-2 box-categories-list">
                  <li><a href="#"><img src="{{ asset('main/images/hotels3.jpg')}}" alt="" width="368" height="420" /></a>
                    <h5 class="box-categories-title">Restaurante</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div><a class="link-classic wow fadeInUp" href="#">Other Tours<span></span></a>
        <!-- Owl Carousel-->
      </div>
    </section>
    <!-- Discover New Horizons-->
    <section class="section section-sm section-first bg-default text-md-left">
      <div class="container">
        <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
          <div class="col-lg-6 text-center wow fadeInUp"><img src="{{ asset('main/images/hotel1.jpg')}}" alt="" width="556"
              height="382" />
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
            <div class="box-width-lg-470">
              <h3>Conoce más sobre el Hotel Relax</h3>
              <!-- Bootstrap tabs-->
              <div
                class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left"
                id="tabs-7">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1"
                      data-toggle="tab">Historia</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-2" data-toggle="tab">
                      Misión</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-3" data-toggle="tab">
                      Visión</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-7-1">
                    <p>Wonder Tour is committed to bringing our clients the best in value and quality travel
                      arrangements. We are passionate about travel and sharing the world's wonders with you.</p>
                    <div class="group-md group-middle"><a class="button button-secondary button-pipaluk"
                        href="contact-us.html">Get in Touch</a><a class="button button-black-outline button-md"
                        href="about.html">Read More</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-7-2">
                    <p>We are proud to offer excellent quality and value for money in our tours, which give you the
                      chance to experience your chosen destination in an authentic and exciting way.</p>
                    <div class="group-md group-middle"><a class="button button-secondary button-pipaluk"
                        href="contact-us.html">Get in Touch</a><a class="button button-black-outline button-md"
                        href="about.html">Read More</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-7-3">
                    <p>Our mission is to provide the ultimate travel planning experience while becoming a one-stop shop
                      for every travel service available in the industry.</p>
                    <div class="group-md group-middle"><a class="button button-secondary button-pipaluk"
                        href="contact-us.html">Get in Touch</a><a class="button button-black-outline button-md"
                        href="about.html">Read More</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--	Our Services-->
    <section class="section section-sm">
      <div class="container">
        <h3>Otros Servicios</h3>
        <div class="row row-30">
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="#"><i class="fa-solid fa-bell"></i> Servicio de habitación</a></h5>
                  <p class="box-icon-classic-text">Our unique matching system lets you find just the tour you want for
                    your next holiday.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><i class="fa-solid fa-tag"></i> Lavanderia</a></h5>
                  <p class="box-icon-classic-text">We offer a wide variety of personally picked tours with destinations
                    all over the globe.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="#"><i class="fa-duotone fa-wifi"></i> Wifi</a></h5>
                  <p class="box-icon-classic-text">Our tour managers are qualified, skilled, and friendly to bring you
                    the best service.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="#"><i class="fa-brands fa-apple"></i> Restaurante</a></h5>
                  <p class="box-icon-classic-text">You can always get professional support from our staff 24/7 and ask
                    any question you have.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="#"> <i class="fa-solid fa-desktop"></i> Televisión</a></h5>
                  <p class="box-icon-classic-text">Our team offers only the best selection of affordable and luxury
                    hotels to our clients.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="#"> <i class="fa-solid fa-shower"></i> Calentador de agua</a></h5>
                  <p class="box-icon-classic-text">If you find tours that are cheaper than ours, we will compensate the
                    difference.</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    <!-- Hot tours-->
    <section class="section section-sm bg-default">
      <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Ofertas</span></h3>
        <div class="row row-sm row-40 row-md-50">
          <div class="col-sm-6 col-md-12 wow fadeInRight">
            <!-- Product Big-->
            <article class="product-big">
              <div class="unit flex-column flex-md-row align-items-md-stretch">
                <div class="unit-left"><a class="product-big-figure" href="#"><img
                      src="{{ asset('main/images/product-big-1-600x366.jpg')}}" alt="" width="600" height="366" /></a></div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="#">Habitacion Familiar</a></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span>
                      </div><a class="product-big-reviews" href="#">4 customer reviews</a>
                    </div>
                    <p class="product-big-text">Benidorm is a buzzing resort with a big reputation for beach holidays.
                      Situated in sunny Costa Blanca, the town is one of the original Spanish beach resorts...</p><a
                      class="button button-black-outline button-ujarak" href="#">Buy This Tour</a>
                    <div class="product-big-price-wrap"><span class="product-big-price">$790</span></div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-12 wow fadeInLeft">
            <!-- Product Big-->
            <article class="product-big">
              <div class="unit flex-column flex-md-row align-items-md-stretch">
                <div class="unit-left"><a class="product-big-figure" href="#"><img
                      src="{{ asset('main/images/product-big-2-600x366.jpg')}}" alt="" width="600" height="366" /></a></div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="#">Habitación Matrimonial</a></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span>
                      </div><a class="product-big-reviews" href="#">5 customer reviews</a>
                    </div>
                    <p class="product-big-text">The beautiful and inviting island nation of Mauritius is an ideal ‘flop
                      and drop’ at the conclusion of your safari. Indulge in the delightful scents of the fragrant...
                    </p><a class="button button-black-outline button-ujarak" href="#">Buy This Tour</a>
                    <div class="product-big-price-wrap"><span class="product-big-price">$890</span></div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    <!-- Different People-->
    <section class="section section-sm">
      <div class="container">
        <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Different People — One
            Mission</span></h3>
        <div class="row row-30 justify-content-center box-ordered">
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="{{ asset('main/img-circles')}}"
                    src="{{ asset('main/images/user-1-118x118.jpg')}}" alt="" width="118" height="118" /></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70"
                  xml:space="preserve">
                  <g>
                    <path fill="#161616"
                      d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name"><a href="#">Diana Robinson</a></h6>
                <p class="team-modern-status">Founder, Owner</p>
                <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles"
                    src="{{ asset('main/images/user-2-118x118.jpg')}}" alt="" width="118" height="118" /></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70"
                  xml:space="preserve">
                  <g>
                    <path fill="#161616"
                      d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name"><a href="#">Peter McMillan</a></h6>
                <p class="team-modern-status">Travel Agent</p>
                <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles"
                    src="{{ asset('main/images/user-3-118x118.jpg')}}" alt="" width="118" height="118" /></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70"
                  xml:space="preserve">
                  <g>
                    <path fill="#161616"
                      d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name"><a href="#">Jill Peterson</a></h6>
                <p class="team-modern-status">Tour Consultant</p>
                <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles"
                    src="{{ asset('main/images/user-4-118x118.jpg')}}" alt="" width="118" height="118" /></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70"
                  xml:space="preserve">
                  <g>
                    <path fill="#161616"
                      d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name"><a href="#">James Smith</a></h6>
                <p class="team-modern-status">PR Manager</p>
                <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    <!-- Section Subscribe-->
    <section class="section bg-default text-center offset-top-50">
      <div class="parallax-container" data-parallax-img="{{ asset('main/images/parallax-1-1920x850.jpg')}}">
        <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
          <div class="container">
            <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span
                class="d-block font-weight-semi-bold">First-class Impressions</span><span
                class="d-block font-weight-light">are Waiting for You!</span></h2>
            <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">Our agency offers travelers
              various tours and excursions with destinations all over the world. Browse our website to find your dream
              tour!</p><a class="button button-secondary button-pipaluk" href="#">Book a Tour Now</a>
          </div>
        </div>
      </div>
    </section>
    <!--	Instagrram wondertour-->
    <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
      <div class="container-fluid">
        <h6 class="gallery-title">Gallery</h6>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3"
          data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0"
          data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{ asset('main/images/gallery-image-1-270x195.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="{{ asset('main/images/gallery-image-1-1200x800-original.jpg')}}" data-lightgallery="item"><img
                  src="{{ asset('main/images/gallery-image-1-270x195.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{ asset('main/images/gallery-image-2-270x195.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="{{ asset('main/images/gallery-image-2-1200x800-original.jpg')}}" data-lightgallery="item"><img
                  src="{{ asset('main/images/gallery-image-2-270x195.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{ asset('main/images/gallery-image-3-270x195.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="{{ asset('main/images/gallery-image-3-1200x800-original.jpg')}}" data-lightgallery="item"><img
                  src="{{ asset('main/images/gallery-image-3-270x195.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{ asset('main/images/gallery-image-4-270x195.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="{{ asset('main/images/gallery-image-4-1200x800-original.jpg')}}" data-lightgallery="item"><img
                  src="{{ asset('main/images/gallery-image-4-270x195.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{ asset('main/images/gallery-image-5-270x195.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="{{ asset('main/images/gallery-image-5-1200x800-original.jpg')}}" data-lightgallery="item"><img
                  src="{{ asset('main/images/gallery-image-5-270x195.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{ asset('main/images/gallery-image-6-270x195.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="{{ asset('main/images/gallery-image-6-1200x800-original.jpg')}}" data-lightgallery="item"><img
                  src="{{ asset('main/images/gallery-image-6-270x195.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{ asset('main/images/gallery-image-7-270x195.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="{{ asset('main/images/gallery-image-7-1200x800-original.jpg')}}" data-lightgallery="item"><img
                  src="{{ asset('main/images/gallery-image-7-270x195.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
        </div>
      </div>
    </section>
    <!-- Page Footer--><a class="banner" href="{{ asset('https://www.templatemonster.com/intense-multipurpose-html-template.html')}}"
      target="_blank"><img src="{{ asset('main/css/images/intense_big_02.jpg')}}" alt="" /></a>
    <footer class="section footer-corporate context-dark">
      <div class="footer-corporate-inset">
        <div class="container">
          <div class="row row-40 justify-content-lg-between">
            <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
              <div class="oh-desktop">
                <div class="wow slideInRight" data-wow-delay="0s">
                  <h6 class="text-spacing-100 text-uppercase">Contactenos</h6>
                  <ul class="footer-contacts d-inline-block d-sm-block">
                    <li>
                      <div class="unit">
                        <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                        <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit">
                        <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                        <div class="unit-body"><a class="link-aemail" href="mailto:#">info@demolink.org</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit">
                        <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                        <div class="unit-body"><a class="link-location" href="#">4730 Crystal Springs Dr, Los Angeles,
                            CA 90027</a></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
              <div class="oh-desktop">
                <div class="wow slideInDown" data-wow-delay="0s">
                  <h6 class="text-spacing-100 text-uppercase">Popular news</h6>
                  <!-- Post Minimal 2-->
                  <article class="post post-minimal-2">
                    <p class="post-minimal-2-title"><a href="#">Your Personal Guide to 5 Best Places to Visit on
                        Earth</a></p>
                    <div class="post-minimal-2-time">
                      <time datetime="2019-05-04">May 04, 2019</time>
                    </div>
                  </article>
                  <!-- Post Minimal 2-->
                  <article class="post post-minimal-2">
                    <p class="post-minimal-2-title"><a href="#">Top 10 Hotels: Rating by Wonder Tour Travel Experts</a>
                    </p>
                    <div class="post-minimal-2-time">
                      <time datetime="2019-05-04">May 04, 2019</time>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
              <div class="oh-desktop">
                <div class="wow slideInLeft" data-wow-delay="0s">
                  <h6 class="text-spacing-100 text-uppercase">Quick links</h6>
                  <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                    <li><a href="about.html">About us</a></li>
                    <li><a href="#">Our Tours</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Blog</a></li>
                  </ul>
                  <div class="group-md group-middle justify-content-sm-start"><a
                      class="button button-lg button-primary button-ujarak" href="#">Get in touch</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-corporate-bottom-panel">
        <div class="container">
          <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2">
            <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
              <div>
                <ul class="list-inline list-inline-sm footer-social-list-2">
                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                  <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 order-sm-first">
              <!-- Rights-->
              <p class="rights"><span>&copy;&nbsp;</span><span
                  class="copyright-year"></span><span>&nbsp;</span><span>Wonder Tour</span>. All Rights Reserved. Design
                by <a href="{{ asset('https://www.templatemonster.com')}}">TemplateMonster</a></p>
            </div>
            <div class="col-sm-6 col-md-4 text-md-right">
              <p class="rights"><a href="#">Privacy Policy</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="{{ asset('main/js/core.min.js')}}"></script>
  <script src="{{ asset('main/js/script.js')}}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>