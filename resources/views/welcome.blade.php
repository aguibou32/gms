<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Gracious | Charity, Foundation and Donation HTML Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GMS | Guinean Medical Society</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset("assets/images/favicon.ico") }}" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,400&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset("assets/css/font-awesome/all.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/flaticon/flaticon.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap/bootstrap.min.css") }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset("assets/css/owl-carousel/owl.carousel.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/magnific-popup/magnific-popup.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/swiper/swiper.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/animate/animate.min.css") }}"/>

     <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}" />
  </head>

  <body>

    <!--=================================
    preloader -->
    <div id="pre-loader">
      <img src="{{ asset("assets/images/pre-loader/loader-01.gif") }}" alt="">
    </div>
    <!--=================================
    preloader -->

    <!--=================================
    header -->
    <header class="header header-transparent">
      <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
        <div class="container">
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
          <a class="navbar-brand" href="{{ route('welcome') }}">
            <img class="img-fluid logo" src="{{ asset("assets/images/logo.png") }}" alt="Main logo">
            <img class="img-fluid logo-sticky" src="{{ asset("assets/images/logo.png") }}" alt="Logo responsive and sticky">
          </a>
          <div class="navbar-collapse collapse justify-content-center">
            <ul class="nav navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('welcome') }}">HOME</a>
              </li>
             
              <li class="dropdown nav-item">
                <a class="nav-link" href="javascript:void(0)"  data-toggle="dropdown">ABOUT US<i class="fas fa-chevron-down fa-xs"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('mission') }}">Mission</a></li>
                  <li><a class="dropdown-item" href="{{ route('about_guinea') }}">About Guinea</a></li>
                  <li><a class="dropdown-item" href="{{ route('leadership') }}">Leadership</a></li>
                  <li><a class="dropdown-item" href="{{ route('international_committee') }}">International Commitee</a></li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a class="nav-link" href="javascript:void(0)"  data-toggle="dropdown">PROGRAMS<i class="fas fa-chevron-down fa-xs"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('education_and_training') }}">Education And Training</a></li>
                  <li><a class="dropdown-item" href="{{ route('health_care') }}">Health Care</a></li>
                  <li><a class="dropdown-item" href="{{ route('empowerment') }}">Empowerment</a></li>
                  <li><a class="dropdown-item" href="{{ route('community_outreach') }}">Community Outreach</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('news.index') }}">NEWS</a>
              </li>
              <li class="dropdown nav-item">
                <a class="nav-link" href="javascript:void(0)"  data-toggle="dropdown">MEMBERS<i class="fas fa-chevron-down fa-xs"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('join_team.index') }}">Join the Team</a></li>
                  <li><a class="dropdown-item" href="{{ route('faq') }}">FAQ</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('contact_us.index') }}">CONTACT US</a>
              </li>

            </ul>
          </div>
          <div class="add-listing d-none d-sm-block">
            <a class="btn btn-primary btn-round" href="{{ route('make_donation') }}">Make a Donation</a>
          </div>
        </div>
      </nav>
    </header>
    <!--=================================
     header -->

    <!--=================================
    banner -->
    <section class="slider-01">
      <div id="main-slider" class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide align-items-center d-flex bg-overlay-dark-50" style="background-image: url(assets/images/slider/home-01/02.jpg); background-size: cover; background-position: center center;">
            <div class="swipeinner container">
              <div class="row justify-content-center text-center">
                <div class="col-xl-8 col-md-9 col-sm-10">
                  <div class="slider-1">
                    <h1 class="animated text-white" data-swiper-animation="fadeInUp" data-duration="2s" data-delay="0.75s">The Guinean Medical Society (GMS) Launched its First Medical School Seminar for Aspiring Health Students.</h1>
                    <a href="{{ route('mission') }}" class="animated btn btn-primary btn-round mt-2" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="2s">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide align-items-center d-flex bg-overlay-dark-50" style="background-image: url(assets/images/slider/home-01/01.jpg); background-size: cover; background-position: center center;">
            <div class="swipeinner container">
              <div class="row justify-content-start">
                <div class="col-xl-9 col-md-9 col-sm-10">
                  <div class="slider-1">
                    <div class="animated" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">
                      <h1 class="animated text-white" data-swiper-animation="fadeInUp" data-duration="2s" data-delay="0.75s"> GMS is a student-led organisation advocating for accessible, affordable and evidence based</h1>
                      <div class="animated h4 text-white" data-swiper-animation="fadeInUp" data-duration="2s" data-delay="1.5s">
                        <span class="d-inline-block"><i class="fas fa-check-circle text-primary mr-2 mb-3"></i>Professionals only</span>
                        <span class="d-inline-block"><i class="fas fa-check-circle text-primary ml-3 mr-2 mb-3"></i>No booking fees</span>
                        <span class="d-inline-block"><i class="fas fa-check-circle text-primary ml-3 mr-2 mb-3"></i>No-hassle booking</span>
                      </div>
                      <a href="#" class="animated btn btn-primary btn-round mt-2" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="2.5s">Donate Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <!-- Pagination -->
      <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="flaticon-left"></i>
      </div>
      <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="flaticon-right"></i></div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    About -->
        

   
    @include('layouts.partials.footer')
    <!--=================================
    footer-->

    <!--=================================
    back to top-->
    <div id="back-to-top" class="back-to-top" style="">
       <i class="fas fa-angle-up"></i>
     </div>
    <!--=================================
    back to top-->

    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ asset("assets/js/jquery-3.5.1.min.js") }}"></script>
    <script src="{{ asset("assets/js/popper/popper.min.js") }}"></script>
    <script src="{{ asset("assets/js/bootstrap/bootstrap.min.js") }}"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{ asset("assets/js/jquery.appear.js") }}"></script>
    <script src="{{ asset("assets/js/counter/jquery.countTo.js") }}"></script>
    <script src="{{ asset("assets/js/owl-carousel/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("assets/js/swiper/swiper.min.js") }}"></script>
    <script src="{{ asset("assets/js/swiperanimation/SwiperAnimation.min.js") }}"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="{{ asset("assets/js/custom.js") }}"></script>
  </body>

</html>
