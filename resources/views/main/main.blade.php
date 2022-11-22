<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Hotel Relax</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <!--<link rel="icon"
    href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVwzKxtiRZZPAlfGv9eGcEnOPZrzHeyrURog&usqp=CAU"
    type="image/x-icon">-->
  <!-- Stylesheets-->
  <!-- <link rel="stylesheet" type="text/css" revisar
    href="fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">-->
  <link rel="stylesheet" href="{{ asset('main/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{ asset('main/css/fonts.css')}}">
  <link rel="stylesheet" href="{{ asset('main/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('main/css/estilos.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,700;0,900;1,400&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

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
    <div class="btnIS">
      @if (Route::has('login'))
      <div class="barra-inicio">
        @auth
        @can('admin.home')
        <div class="btnhome">aqui
          <a class="ml-4 text-sm" href="{{ route('home') }}"><button class="btn btn-outline-secondary">Home
              <i class="fa-brands fa-fort-awesome"></i></button></a>
        </div>
        @endcan
        <div class="btnhome">
          <ul class="nav user-menu">
            <li>
              <a id="navbarDropdown" class="dropdown-toggle nav-link" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre><span class="user-img"><img class="rounded-circle"
                    src="{{ asset('uploads/avatars')}}/{{ Auth::user()->avatar}}" width="31" alt="Soeng Souy"></span>
                {{ Auth::user()->email }}
              </a>
              <div class="dropdown-menu">
                <!-- imagen log cargo nombre -->
                <div class="user-header">
                  <div class="avatar avatar-sm"><img src="{{ asset('uploads/avatars')}}/{{ Auth::user()->avatar}}"
                      alt="User Image" class="avatar-img rounded-circle">
                  </div>
                  <div class="user-text">
                    <h6>{{ Auth::user()->name }}</h6>
                    <p class="text-muted mb-0">{{ Auth::user()->roles()->first()->name }}</p>
                  </div>
                </div>
                <!-- desconectarse -->
                <div class=""><a class="dropdown-item" href="{{ url('/usuario')}}">My Profile</a>
                </div>
                <a class="dropdown-item" href="settings.html">Account Settings</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              													document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
        @else
        <div class="btnInicio">
          <a class="ml-4 text-sm" href="{{ route('login') }}"><button class="btn btn-outline-secondary">Login <i
                class="fa-solid fa-user"></i></button></a>
        </div>
        @if (Route::has('register'))
        <div class="btnRegistro">
          <a class="ml-4 text-sm" href="{{ route('register') }}"><button class="btn btn-outline-secondary">Register <i
                class="fa-solid fa-user-plus"></i></button></a>
        </div>
        @endif
        @endauth
      </div>
      @endif
    </div>
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
                          src="{{ asset('main/images/Sin.png')}}" alt="" width="225" height="18"
                          class="rounded-5" /></a>
                    </div>
                  </div>
                </div>
                <div class="rd-navbar-aside-right rd-navbar-collapse">
                  <ul class="rd-navbar-corporate-contacts">
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                        <div class="bajar">
                          <div class="unit-body">
                            <p>07:00<span>am</span> — 06:00<span>pm</span></p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                        <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                      </div>
                    </li>
                  </ul>
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
        <div class="swiper-slide context-dark .colors" data-slide-bg="{{ asset('main/images/hotelp1.jpg')}}">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-md-10">
                  <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Registrate en
                    Nuestro Hotel</h6>
                  <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100">
                    <span>Conoce</span><span class="font-weight-bold"> Nuestras opciones</span>
                  </h2><a class="button button-default-outline button-ujarak sty" href="#"
                    data-caption-animate="fadeInLeft" data-caption-delay="0">Registro</a>
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
                  </h2><a class="button button-default-outline button-ujarak sty" href="#"
                    data-caption-animate="fadeInLeft" data-caption-delay="0">Inicia sesión</a>
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
                  </h2><a class="button button-default-outline button-ujarak sty" href="#"
                    data-caption-animate="fadeInLeft" data-caption-delay="0">Reserva</a>
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
                  <li><a href="#"><img class="rounded" src="{{ asset('main/images/hotels1.jpg')}}" alt="" width="368"
                        height="420" /></a>
                    <h5 class="box-categories-title stail">Himnasio</h5>
                  </li>
                </ul>
              </div>
              <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                <ul class="list-marked-2 box-categories-list">
                  <li><a href="#"><img class="rounded" src="{{ asset('main/images/hotels2.jpg')}}" alt="" width="368"
                        height="420" /></a>
                    <h5 class="box-categories-title stail">Piscina</h5>
                  </li>
                </ul>
              </div>
              <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                <ul class="list-marked-2 box-categories-list">
                  <li><a href="#"><img class="rounded" src="{{ asset('main/images/hotels3.jpg')}}" alt="" width="368"
                        height="420" /></a>
                    <h5 class="box-categories-title stail">Restaurante</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div><a class="link-classic wow fadeInUp" href="#">Más..<span></span></a>
        <!-- Owl Carousel-->
      </div>
    </section>
    <!-- Discover New Horizons-->
    <section class="section section-sm section-first bg-default text-md-left">
      <div class="container">
        <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
          <div class="col-lg-6 text-center wow fadeInUp"><img class="rounded-pill"
              src="{{ asset('main/images/hotel1.jpg')}}" alt="" width="556" height="382" />
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
                    <p>El origen de lo que hoy conocemos como “hoteles” data de hace más de 2.000 años.
                      En la antigüedad, el servicio de alojamiento se consideraba una obligación social.
                      Se acogía a aquellos viajeros procedentes de otros lugares que no tenían un espacio
                      seguro en el que hospedarse.</p>
                    <div class="group-md group-middle"><a class="button button-secondary button-pipaluk"
                        href="contact-us.html">Más..</a><a class="button button-black-outline button-md"
                        href="about.html">Ubicación</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-7-2">
                    <p> Ofrecer un servicio de calidad y confort en el mercado de servicio hotelero y de alimentos,
                      proveyendo a nuestros clientes productos de alta calidad</p>
                    <div class="group-md group-middle"><a class="button button-secondary button-pipaluk"
                        href="contact-us.html">Más</a><a class="button button-black-outline button-md"
                        href="about.html">Ubicación</a></div>
                  </div>
                  <div class="tab-pane fade" id="tabs-7-3">
                    <p>Ofrecer experiencias positivas inolvidables para nuestros invitados nacionales e internacionales
                      a través
                      de la excelencia en nuestros servicios de hospedaje y restaurante; logrando valor para nuestros
                      clientes,
                      los colaboradores de nuestra empresa, proveedores, inversionistas y para la sociedad.</p>
                    <div class="group-md group-middle"><a class="button button-secondary button-pipaluk"
                        href="contact-us.html">Más</a><a class="button button-black-outline button-md"
                        href="about.html">Ubicación</a></div>
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
                  <h5 class="box-icon-classic-title"><a href="#"><i class="fa-solid fa-bell"></i> Servicio de
                      habitación</a></h5>
                  <p class="box-icon-classic-text">El servicio de habitaciones de un hotel es la asistencia que reciben
                    sus huéspedes directamente
                    en su propia habitación.</p>
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
                  <p class="box-icon-classic-text">Muchos hoteles de calidad ofrecen servicio de lavanderia para sus
                    huéspedes. Utilizar el
                    servicio de lavandería en un hotel es una tarea sencilla.</p>
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
                  <p class="box-icon-classic-text">Wi-Fi es la tecnología móvil que se usa para conectar computadoras,
                    tablets, smartphones
                    y otros dispositivos a Internet. Wi-Fi es la señal de radio que se envía desde un enrutador
                    inalámbrico a un dispositivo
                    cercano, que traduce la señal en datos que puedes ver y usar.</p>
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
                  <p class="box-icon-classic-text">La oferta gastronómica es el resultado final de la cadena de
                    operaciones
                    y procesos que inician con la compra, recepción, almacenamiento, elaboración de materia prima hasta
                    culminar
                    en los platos que serán presentados a los clientes.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="#"> <i class="fa-solid fa-desktop"></i> Televisión</a>
                  </h5>
                  <p class="box-icon-classic-text">Toda la famila de TVs con los mejores servicios. Las mejores
                    televisiones que se adaptan
                    a las características de tu hotel.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="#"> <i class="fa-solid fa-shower"></i> Calentador de
                      agua</a></h5>
                  <p class="box-icon-classic-text">Es conocido que una de las demandas principales de energía en una
                    instalación de tipo hotelero,
                    es la necesaria para cubrir el servicio de agua caliente sanitaria (ACS)
                    que solicitan los clientes de este tipo de instalaciones.</p>
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
                      src="{{ asset('main/images/hab2personas.jpg')}}" alt="" width="600" height="366" /></a></div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="#">Habitacion Familiar</a></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span>
                      </div><a class="product-big-reviews" href="#">4 customer reviews</a>
                    </div>
                    <p class="product-big-text">Una oferta turística es una combinación de servicios y productos que se
                      presentan
                      para su consideración por un cliente que desea realizar un viaje turístico. El objeto de la oferta
                      turística es un consumidor,
                      un turista.</p><a class="button button-black-outline button-ujarak" href="#">Buy This Tour</a>
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
                      src="{{ asset('main/images/hab1matrimonial.jpg')}}" alt="" width="600" height="366" /></a></div>
                <div class="unit-body">
                  <div class="product-big-body">
                    <h5 class="product-big-title"><a href="#">Habitación Matrimonial</a></h5>
                    <div class="group-sm group-middle justify-content-start">
                      <div class="product-big-rating"><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span
                          class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span>
                      </div><a class="product-big-reviews" href="#">5 customer reviews</a>
                    </div>
                    <p class="product-big-text">Una oferta turística es una combinación de servicios y productos que se
                      presentan para su consideración
                      por un cliente que desea realizar un viaje turístico. El objeto de la oferta turística es un
                      consumidor, un turista.
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
        <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Contactese con nuestro
            personal</span></h3>
        <div class="row row-30 justify-content-center box-ordered">
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles"
                    src="{{ asset('main/images/adminDiana.jpg')}}" alt="" width="118" height="118" /></a>
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
                <p class="team-modern-status">Administrador</p>
                <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles"
                    src="{{ asset('main/images/subadminPeter.jpg')}}" alt="" width="118" height="118" /></a>
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
                <p class="team-modern-status">Sub Administrador</p>
                <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles"
                    src="{{ asset('main/images/resepcionJill.jpg')}}" alt="" width="118" height="118" /></a>
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
                <p class="team-modern-status">Resepción</p>
                <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles"
                    src="{{ asset('main/images/resepcionMaria.png')}}" alt="" width="118" height="118" /></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70"
                  xml:space="preserve">
                  <g>
                    <path fill="#161616"
                      d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name"><a href="#">Monick Smith</a></h6>
                <p class="team-modern-status">Ventas</p>
                <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    <!-- Section Subscribe-->
    <section class="section bg-default text-center offset-top-50">
      <div class="parallax-container" data-parallax-img="{{ asset('main/images/hotelporf.jpg')}}">
        <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
          <div class="container">
            <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">No
                Esperes Más</span><span class="d-block font-weight-light">Has Tú Reserva!</span></h2>
            <p class="text-width-medium text-spacing-75 wow fadeInLeft format" data-wow-delay=".1s">Te atenderemos de
              forma precencial o
              puedes registrarte en nuestra pagína!</p><a class="button button-secondary button-pipaluk"
              href="#">Regitrate Aquí</a>
          </div>
        </div>
      </div>
    </section>
    <!----------------------------Galería------------------------>
    <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
      <div class="container-fluid">
        <h6 class="gallery-title">Galería</h6>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3"
          data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0"
          data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{ asset('main/images/habvip.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="{{ asset('main/images/habvipg.jpg')}}" data-lightgallery="item"><img
                  src="{{ asset('main/images/habvipg.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{ asset('main/images/baño1.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="{{ asset('main/images/baño1g.jpg')}}" data-lightgallery="item"><img
                  src="{{ asset('main/images/baño1g.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{ asset('main/images/hab2matrimonial.jpg')}}" alt=""
                width="270" height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="{{ asset('main/images/hab2matrimonialg.jpg')}}" data-lightgallery="item"><img
                  src="{{ asset('main/images/hab2matrimonialg.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{ asset('main/images/baño2.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="{{ asset('main/images/baño2g.jpg')}}" data-lightgallery="item"><img
                  src="{{ asset('main/images/baño2g.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{ asset('main/images/habpersonal1.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="{{ asset('main/images/habpersonal1g.jpg')}}" data-lightgallery="item"><img
                  src="{{ asset('main/images/habpersonal1g.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{ asset('main/images/baño3.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="{{ asset('main/images/baño3g1.jpg')}}" data-lightgallery="item"><img
                  src="{{ asset('main/images/baño3g1.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
        </div>
      </div>
    </section>
    <!-- Page Footer--><a class="banner"
      href="{{ asset('https://www.templatemonster.com/intense-multipurpose-html-template.html')}}" target="_blank"></a>
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
                        <div class="unit-body"><a class="link-aemail" href="mailto:#">info@hotelrelax.org</a></div>
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
                      <time datetime="2019-05-04">Oct 10, 2022</time>
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
                  class="copyright-year"></span><span>&nbsp;</span><span>Hotel Relx</span>. Derechos Reservados.
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

</body>

</html>