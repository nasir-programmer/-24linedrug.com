<!doctype html>
<html lang="en">
<!-- {{ asset('xxxxxx') }} -->
<head>
  <base href="http://24linedrug.com">
  @laravelPWA
  <link rel="manifest" href="/manifest.json">
  <meta name="theme-color" content="#000000">

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="PWA">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>24 Line Drug</title>
    <!-- Favicons-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/apple-touch-icon-32x32.png') }}">
    <link rel="shortcut icon" type="image/x-icon" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}">

    <!-- web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto:400,500" rel="stylesheet"> 
    
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
        
    <!-- Start Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="loader-content">
                <span class="icon-section-wave d-inline-block text-active  mt-3 "></span>
            </div>
        </div>
    </div>

    <div class="preloader">
        <div class="preloader-inner">
            <div class="loader-content">
                <span class="icon-section-wave d-inline-block text-active  mt-3 "></span>
            </div>
        </div>
    </div>
    <header class="bg-white">
        <!-- Start Toolbar Section -->
        <div class="toolbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 d-none d-md-block">
                        <div class="toolbar-right text-right">
                            <div class="media align-items-center d-inline-flex">
                                <div class="tolbar-icon text-active s-dp-1-3 justify-content-center  rounded-circle">
                                    <i class="icofont-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="text-default text-Underline"><?= env('EMAIL', 'hoststudioz@gmail.com')?></a>
                                </div>
                            </div>
                            <div class="media align-items-center d-inline-flex">
                                <div class="tolbar-icon text-active s-dp-1-3 justify-content-center  rounded-circle">
                                   <i class="icofont-ui-call"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="text-default"><?= env('CONTACT', '+919716942965')?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Toolbar Section -->

        <!-- Start Navigation Section -->
        <nav class="navbar grad-bg--2 s-dp-1-3 navbar-sticky navbar-expand-lg m-navbar bcbd_navbar">
            <div class="container position-relative">
                <a href="index.html" class="menu-logo" >
                    <img src="assets/images/logo.png" alt="">
                </a>
                <div class="burger_menu">
                    <span class="navbar-toggler-icon"></span>
                </div><!-- burger menu -->

                <div class="collapse navbar-collapse bcbd_collpase_nav" id="navbarSupportedContent">
                    <div class="nav_outer  mr-auto">
                        <ul class="navbar-nav bcbd_nav mr-auto">
                        
                             <li class="nav-item">
                                <a class="nav-link" href="{{ Route('home')}}">   
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ Route('about')}}">   
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ Route('service')}}">   
                                    Service
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ Route('booking')}}">   
                                    Booking
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ Route('contact')}}">   
                                    Contact
                                </a>
                            </li>
                        </ul> <!-- navbar nav -->
                        <div class="navigation_right_area position-relative navbar-search my-lg-0">
                            <form class="form-inline my-2 my-lg-0 d-block d-lg-none">
                                <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                                <button class="btn bg-transparent position-absolute my-sm-0" type="submit">
                                    <i class="icofont-search-2"></i>
                                </button>
                            </form>
                        </div> <!-- navbar search -->
                        <div class="toolbar-right mobile-view text-left d-block d-md-none">
                            <div class="media align-items-center d-inline-flex">
                                <div class="tolbar-icon text-active s-dp-1-3 justify-content-center  rounded-circle">
                                    <i class="icofont-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="text-default text-Underline"><?= env('EMAIL','hoststudioz@gmail.com')?></a>
                                </div>
                            </div>
                            <div class="media align-items-center d-inline-flex">
                                <div class="tolbar-icon text-active s-dp-1-3 justify-content-center  rounded-circle">
                                   <i class="icofont-ui-call"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="text-default"><?= env('CONTACT', '+0123 456 789')?></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- navbar outer -->
                    <div class="navigation_right_area position-relative navbar-search my-lg-0">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                            <button class="btn bg-transparent  my-sm-0" type="submit">
                                <i class="icofont-search-2"></i>
                            </button>
                        </form>
                    </div> <!-- navbar search -->
                </div> <!-- navbar collpase -->
            </div> <!-- container -->
        </nav>
        <!-- Start Navigation Section -->
    </header>
@section('homeBanner')
    <!-- Start Banner Section -->
    <div class="grad-bg--2 banenr position-relative type-1 no-overflows">
        <div class="circle"></div> 
        <div class="circle2"></div>
        <div class="circle3"></div>
        <div class="circle4"></div>
        <div class="container position-relative">
            <img src="{{ asset('assets/images/banner-img.png')}}" class="banner-image position-absolute" alt="banenr image">
            <div class="row">
                <div class="col-md-12">
                    <div class="banenr-slider">
                        <div class="single-banenr-slide">
                            <div class="row">
                                <div class="col-xl-5 col-sm-8 col-md-6">
                                    <h6 class="ml12 text-white text-uppercase fadeInDown-slide animated">we care about youR HEALTH</h6>
                                    <h1 class="text-white font-weight-bold mb-4 fadeInDown-slide animated">WE ARE MEDIM</h1>
                                    <p class="text-white fadeInDown-slide animated">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                                    </p>
                                   <div class="xs-flex">
                                        <a href="#" class="btn fadeInDown-slide animated  medim-btn btn-bordered-white mt-4 text-medium radius-pill bg-transparent text-active text-uppercase text-white">
                                            About Us
                                        </a>
                                        <a href="{{ Route('booking')}}" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-4 text-medium radius-pill text-active text-uppercase text-white">
                                            Appoinment
                                        </a>
                                   </div>
                                </div>
                            </div>
                        </div> <!-- single-banenr-slide -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- Banenr Section -->
    <!-- Start Banner Section -->
@endsection

@section('aboutSection')
    <!-- Start About Section -->
    <section class="m-pt-140 m-pb-70 about-area type-1 position-relative" >
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 xs-mb-20">
                    <h2 class="text-dark mb-0 semi-bold pb-5"> 
                        Who 
                        <br>
                        We Are
                    </h2>
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </p>
                    <a href="contact.html" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-4 text-medium radius-pill text-active text-uppercase text-white">
                        Contact us
                    </a>
                </div> <!-- col -->
                <div class="col-lg-7 offset-lg-1 col-md-8">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="m-mb-60 features-wraper">
                                <div class="features-circle mb-3 m-bg-3 text-active d-inline-flex align-items-center justify-content-center rounded-circle">
                                    <i class="icofont-first-aid"></i>
                                </div>
                                <h4 class="m-text-2 mb-3 mt-2">Medical Treatment</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                </p>
                            </div>
                        </div> <!-- col -->
                        <div class="col-sm-6">
                            <div class="m-mb-60 features-wraper">
                                <div class="features-circle mb-3 m-bg-3 text-active d-inline-flex align-items-center justify-content-center rounded-circle">
                                    <i class="icofont-doctor"></i>
                                </div>
                                <h4 class="m-text-2 mb-3 mt-2">Qualified Doctors</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                </p>
                            </div>
                        </div> <!-- col -->
                        <div class="col-sm-6">
                            <div class="m-mb-60 features-wraper">
                                <div class="features-circle mb-3 m-bg-3 text-active d-inline-flex align-items-center justify-content-center rounded-circle">
                                   <i class="icofont-clock-time"></i>
                                </div>
                                <h4 class="m-text-2 mb-3 mt-2">24 Hours Service</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                </p>
                            </div>
                        </div> <!-- col -->
                        <div class="col-sm-6">
                            <div class="m-mb-60 features-wraper">
                                <div class="features-circle mb-3 m-bg-3 text-active d-inline-flex align-items-center justify-content-center rounded-circle">
                                    <i class="icofont-ambulance-cross"></i>
                                </div>
                                <h4 class="m-text-2 mb-3 mt-2">Emergency Services</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                </p>
                            </div>
                        </div> <!-- col -->
                    </div>
                </div> <!-- Banenr Section -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- About Section -->
    <!-- Start About Section -->
@endsection

@section('departmentSection')
    <!-- Start Department Section -->
    <section class="m-bg-1 intro-area type-1 position-relative">
        <div class="intro-overlay position-absolute set-bg" data-bg="assets/images/intro-bg.jpg" ></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="department-tab-pill m-pt-140  m-pb-140 position-relative ">
                        <h2 class="text-white pb-md-5">
                            Our 
                            <br>
                            Departments
                        </h2>
                        <div class="nav  pt-md-0 flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <a class="nav-link active"  data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="icofont-heart-beat-alt"></i>
                               <span>
                                    Cardiology
                               </span>
                            </a>
                          <a class="nav-link"  data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="icofont-dna-alt-1"></i>
                                <span>
                                    Neurology
                                </span>
                            </a>
                          <a class="nav-link"  data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <i class="icofont-tooth"></i>
                                <span>
                                    Dental
                                </span>
                            </a>
                          <a class="nav-link"  data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="icofont-laboratory"></i>
                                <span>
                                    Diagnostic
                                </span>
                            </a>
                            <a class="nav-link"  data-toggle="pill" href="#eye-care" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                <i class="icofont-laboratory"></i>
                                <span>
                                    Eyecare
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content m-pt-140 m-pb-140 " >
                          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" >
                              <h4 class="m-text-2 ">Department of Cardiology</h4>
                              <h6 class="text-light-dark ff-roboto pb-40 mb-0">We are the Best in Cardiology</h6>
                              <p class="m-mb-30">
                                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                              </p>
                              <p>
                                  Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                              </p>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="media mt-4 mb-2">
                                          <div class="text-active">
                                              <i class="icofont-first-aid"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                            <h5 class="mt-0 mb-3 text-dark2">Cardiology Service - 01</h5>
                                           <p>
                                               Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                           </p>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="media mt-4 mb-2">
                                          <div class="text-active">
                                              <i class="icofont-capsule"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                            <h5 class="mt-0 mb-3 text-dark2">Cardiology Service - 02</h5>
                                           <p>
                                               Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                           </p>
                                          </div>
                                        </div>
                                  </div>
                              </div>
                            <a href="department-1.html" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-3 text-medium radius-pill text-active text-uppercase text-white">
                                View more
                            </a>
                          </div>
                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" >
                              <h4 class="m-text-2 ">Department of Neurology</h4>
                              <h6 class="text-light-dark ff-roboto pb-40 mb-0">We are the Best in Neurology</h6>
                              <p class="m-mb-30">
                                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                              </p>
                              <p>
                                  Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                              </p>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="media mt-4 mb-2">
                                          <div class="text-active">
                                              <i class="icofont-first-aid"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                            <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                           <p>
                                               Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                           </p>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="media mt-4 mb-2">
                                          <div class="text-active">
                                              <i class="icofont-capsule"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                            <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 02</h5>
                                           <p>
                                               Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                           </p>
                                          </div>
                                        </div>
                                  </div>
                              </div>
                             <a href="department-2.html" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-3 text-medium radius-pill text-active text-uppercase text-white">
                                View more
                            </a>
                          </div>
                          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" >
                              <h4 class="m-text-2 ">Department of Dental</h4>
                              <h6 class="text-light-dark ff-roboto pb-40 mb-0">We are the Best in Dental</h6>
                              <p class="m-mb-30">
                                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                              </p>
                              <p>
                                  Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                              </p>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="media mt-4 mb-2">
                                          <div class="text-active">
                                              <i class="icofont-first-aid"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                            <h5 class="mt-0 mb-3 text-dark2">Dental Service - 01</h5>
                                           <p>
                                               Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                           </p>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="media mt-4 mb-2">
                                          <div class="text-active">
                                             <i class="icofont-capsule"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                            <h5 class="mt-0 mb-3 text-dark2">Dental Service - 02</h5>
                                           <p>
                                               Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                           </p>
                                          </div>
                                        </div>
                                  </div>
                              </div>
                             <a href="department-1.html" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-3 text-medium radius-pill text-active text-uppercase text-white">
                                View more
                            </a>
                          </div>
                          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" >
                              <h4 class="m-text-2 ">Department of Diagnostic</h4>
                              <h6 class="text-light-dark ff-roboto pb-40 mb-0">We are the Best in Diagnostic</h6>
                              <p class="m-mb-30">
                                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                              </p>
                              <p>
                                  Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                              </p>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="media mt-4 mb-2">
                                          <div class="text-active">
                                              <i class="icofont-first-aid"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                            <h5 class="mt-0 mb-3 text-dark2">Diagnostic Service - 01</h5>
                                           <p>
                                               Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                           </p>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="media mt-4 mb-2">
                                          <div class="text-active">
                                              <i class="icofont-capsule"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                            <h5 class="mt-0 mb-3 text-dark2">Diagnostic Service - 02</h5>
                                           <p>
                                               Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                           </p>
                                          </div>
                                        </div>
                                  </div>
                              </div>
                             <a href="department-2.html" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-3 text-medium radius-pill text-active text-uppercase text-white">
                                View more
                            </a>
                          </div>
                          <div class="tab-pane fade" id="eye-care" role="tabpanel" >
                              <h4 class="m-text-2 ">Department of Eyecare</h4>
                              <h6 class="text-light-dark ff-roboto pb-40 mb-0">We are the Best in Eyecare</h6>
                              <p class="m-mb-30">
                                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                              </p>
                              <p>
                                  Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                              </p>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="media mt-4 mb-2">
                                          <div class="text-active">
                                              <i class="icofont-first-aid"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                            <h5 class="mt-0 mb-3 text-dark2">Eyecare Service - 01</h5>
                                           <p>
                                               Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                           </p>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="media mt-4 mb-2">
                                          <div class="text-active">
                                              <i class="icofont-first-aid"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                            <h5 class="mt-0 mb-3 text-dark2">Eyecare Service - 02</h5>
                                           <p>
                                               Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                           </p>
                                          </div>
                                        </div>
                                  </div>
                              </div>
                             <a href="department-1.html" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-3 text-medium radius-pill text-active text-uppercase text-white">
                                View more
                            </a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Department Section -->
@endsection

@section('contentSection')
    <!-- Start Section -->
    <section class=" m-pb-140 m-pt-135 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                   <div class="text-center pb-75">
                        <p class="m-0  text-uppercase text-light-dark lt-space">Here is medim specialist doctors</p>
                        <h2 class="m-0  text-dark">Medim Doctors</h2>
                       
                        <span class="icon-section-wave d-inline-block text-active section-wave mt-3"></span>
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="doctors-slider">
                        <div class="signle-doctor-slide position-relative">
                            <img src="assets/images/doctor-img1.jpg" alt="">
                            <div class="doctors-info top-radius-pill bg-white text-center position-absolute pt-35 pb-35 full-width">
                                <a href="doctor-single.html" class="more-btn d-inline-flex  align-items-center justify-content-center bg-white rounded-circle position-absolute">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                                <div class="social-icon position-absolute">
                                    <a href="#" class="text-active">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="text-active">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="text-active">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </div>
                                <h5 class="text-dark2 m-0 semi-bold">
                                    Dr. Rojana Rossy
                                </h5>
                                <p class=" m-0 fz-poppins">Cardiologist</p>
                            </div>
                        </div> <!-- signle-doctor-slide -->
                        <div class="signle-doctor-slide position-relative">
                            <img src="assets/images/doctor-img2.jpg" alt="">
                            <div class="doctors-info top-radius-pill bg-white text-center position-absolute pt-35 pb-35 full-width">
                                <a href="doctor-single.html" class="more-btn d-inline-flex  align-items-center justify-content-center bg-white rounded-circle position-absolute">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                                <div class="social-icon position-absolute">
                                    <a href="#" class="text-active">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="text-active">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="text-active">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </div>
                                <h5 class="text-dark2 m-0 semi-bold">Dr. Jonathon Doe</h5>
                                <p class=" m-0 fz-poppins">Cardiologist</p>
                            </div>
                        </div> <!-- signle-doctor-slide -->
                        <div class="signle-doctor-slide position-relative">
                            <img src="assets/images/doctor-img5.jpg" alt="">
                            <div class="doctors-info top-radius-pill bg-white text-center position-absolute pt-35 pb-35 full-width">
                                <a href="doctor-single.html
                                " class="more-btn d-inline-flex  align-items-center justify-content-center bg-white rounded-circle position-absolute">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                                <div class="social-icon position-absolute">
                                    <a href="#" class="text-active">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="text-active">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="text-active">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </div>
                                <h5 class="text-dark2 m-0 semi-bold">Dr. Katrina Katy</h5>
                                <p class=" m-0 fz-poppins">Cardiologist</p>
                            </div>
                        </div> <!-- signle-doctor-slide -->
                        <div class="signle-doctor-slide position-relative">
                            <img src="assets/images/doctor-img6.jpg" alt="">
                            <div class="doctors-info top-radius-pill bg-white text-center position-absolute pt-35 pb-35 full-width">
                                <a href="doctor-single.html" class="more-btn d-inline-flex  align-items-center justify-content-center bg-white rounded-circle position-absolute">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                                <div class="social-icon position-absolute">
                                    <a href="#" class="text-active">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="text-active">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="text-active">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </div>
                                <h5 class="text-dark2 m-0 semi-bold">Dr. Raino helsy</h5>
                                <p class=" m-0 fz-poppins">Cardiologist</p>
                            </div>
                        </div> <!-- signle-doctor-slide -->
                        <div class="signle-doctor-slide position-relative">
                            <img src="assets/images/doctor-img3.jpg" alt="">
                            <div class="doctors-info top-radius-pill bg-white text-center position-absolute pt-35 pb-35 full-width">
                                <a href="doctor-single.html" class="more-btn d-inline-flex  align-items-center justify-content-center bg-white rounded-circle position-absolute">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                                <div class="social-icon position-absolute">
                                    <a href="#" class="text-active">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="text-active">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="text-active">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </div>
                                <h5 class="text-dark2 m-0 semi-bold">Dr. Rey Rossy</h5>
                                <p class=" m-0 fz-poppins">Cardiologist</p>
                            </div>
                        </div> <!-- signle-doctor-slide -->
                        <div class="signle-doctor-slide position-relative">
                            <img src="assets/images/doctor-img4.jpg" alt="">
                            <div class="doctors-info top-radius-pill bg-white text-center position-absolute pt-35 pb-35 full-width">
                                <a href="doctor-single.html" class="more-btn d-inline-flex  align-items-center justify-content-center bg-white rounded-circle position-absolute">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                                <div class="social-icon position-absolute">
                                    <a href="#" class="text-active">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="text-active">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="text-active">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </div>
                                <h5 class="text-dark2 m-0 semi-bold">Dr. Jonathon Jos</h5>
                                <p class=" m-0 fz-poppins">Cardiologist</p>
                            </div>
                        </div> <!-- signle-doctor-slide -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->
@endsection


@section('booking')
    <!-- Start About Section -->
    <section class="m-pt-135  position-relative set-bg" data-bg="assets/images/bg-img1.jpg">
        <div class="overlay op-P9"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                   <div class="text-center pb-75">
                        <p class="m-0 text-white  text-uppercase  lt-space">Book an appointment for a consultation</p>
                        <h2 class="m-0  text-white ">Book Appointment</h2>
                       <span class="icon-section-wave d-inline-block text-white section-wave mt-3"></span>
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 perspective--400">
                    <div class="appoint-card radius-20 bg-white  position-relative m-pt-70 m-pb-70 s-10-80">
                         <img src="assets/images/doctor-img.png" alt="">
                        <form action="#">
                            <div class="row">
                            
                                <div class="col-lg-7 offset-lg-5  col-md-9 offset-md-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control m-mb-20" placeholder="Your Name:">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control m-mb-20" placeholder="Your Phone:">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control m-mb-20" placeholder="Your Mail:">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative m-mb-20">
                                                <label  class="position-absolute m-label">
                                                    <i class="icofont-calendar"></i>
                                                </label>
                                               <input type="text" placeholder="Date:" class="form-control datepicker " >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative m-mb-20" >
                                                <label   class="position-absolute m-label">
                                                    <i class="icofont-first-aid"></i>
                                                </label>
                                                <select class="js-example-basic-single" name="state">
                                                    <option value="">Select Department:</option>
                                                    <option value="Department1">Cardiology</option>
                                                    <option value="Department1">Neurology</option>
                                                    <option value="Department1">Diagnostic</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative m-mb-20">
                                                <label   class="position-absolute m-label">
                                                    <i class="icofont-stethoscope-alt"></i>
                                                </label>
                                                <select class="js-example-basic-single" name="state">
                                                    <option value="">Select Doctors:</option>
                                                    <option value="Department1">
                                                        Dr. Rojana Rossy
                                                    </option>
                                                    <option value="Department1">Dr. Jonathon Jos</option>
                                                    <option value="Department1">Dr. Katrina Katy</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="pt-2">
                                                Please Call Us:  <a href="#" class="text-active d-inline-block pl-3 fz-poppins"><?= env('CONTACT', '+919716942965') ;?></a>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="appointment.html" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn text-medium radius-pill  text-uppercase text-white">
                                                make appointment
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> <!-- appoint-card -->
                </div>
            </div>
        </div>
    </section>
    <!-- Start About Section -->
@endsection


@section('recentPost')

    <!-- Start recent post Section -->
    <section class="m-bg-1 m-pt-275 m-pb-140 recent-post-area type-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                   <div class="text-center pb-75 ">
                        <p class="m-0  text-uppercase text-light-dark lt-space">Here is medim specialist doctors</p>
                        <h2 class="m-0  text-dark">Recent Posts</h2>
                       <span class="icon-section-wave d-inline-block text-active section-wave mt-3"></span>
                   </div>
                </div>
            </div>
         <?php /*   <div class="row">
                <div class="col-md-6">
                    <div  class="media align-items-center recent-post-wraper type-1">
                        
                        <a href="blog-single-sidebar.html" class="mr-0">
                            <img class=" lt-radius-25 lb-radius-25" src="assets/images/recent-post-sm-img1.jpg" alt="Generic placeholder image">
                        </a>
                        <div class="media-body h-dp-10-60 bg-white type1-post pt-40 pb-40 rt-radius-25 rb-radius-25 pr-50 pl-25 s-dp-1-3">
                            <div class="post-meta">
                                <p class="fz-14 text-default mb-1"> <a href="blog-single-sidebar.html" class="text-default">16 Jan, 2019</a>    |    <a href="#" class="text-default">Medical</a>, <a href="#" class="text-default">Health</a></p>
                            </div>
                            <a href="blog-single-sidebar.html">
                                <h5 class="mt-0 text-dark2 text-medium">Few information about 
                    medical treatment</h5>
                            </a>
                           <p class="mb-0 pt-2 text-default">
                               Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                           </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div  class="media align-items-center recent-post-wraper type-1">
                        
                        <a href="blog-single-sidebar.html" class="mr-0">
                            <img class=" lt-radius-25 lb-radius-25" src="assets/images/recent-post-sm-img2.jpg" alt="Generic placeholder image">
                        </a>
                        <div class="media-body h-dp-10-60 bg-white type1-post pt-40 pb-40 rt-radius-25 rb-radius-25 pr-50 pl-25 s-dp-1-3">
                            <div class="post-meta">
                                <p class="fz-14 text-default mb-1"> <a href="#" class="text-default">18 Jan, 2019</a>    |    <a href="#" class="text-default">Medical</a>, <a href="#" class="text-default">Health</a></p>
                            </div>
                            <a href="blog-single-sidebar.html">
                                <h5 class="mt-0 text-dark2 text-medium">Aenean vulputate ele an leo ligula </h5>
                            </a>
                           <p class="mb-0 pt-2 text-default">
                               Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                           </p>
                        </div>
                    </div>
                </div>
            </div> */ ?>
        </div>
     </section>
    <!-- End recent post Section -->

@endsection

@if (Route::is('home'))
    @yield('homeBanner')
@elseif (Route::is('booking'))
    @yield('booking')
    <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                   <div class="text-center pb-75 ">
                    </div>
                </div>
            </div>
@endif


@yield('content')
    <!-- Start footer -->
    <footer class="m-pt-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 ">
                    <div class="footer-widget">
                        <div class="logo">
                            <a href="index.html" class="d-inline-block mb-5">
                                    <img src="{{ asset('assets/images/logo.png')}}" alt="">
                                </a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                        </p>
                        <div class="media text-light-dark mb-3">
                            <i class="icofont-ui-touch-phone mr-2 mt-2 "></i>
                            <div class="media-body">
                                <p class="m-0  fz-poppins"><?= env('CONTACT', '+919716942965') ?></p>
                                <p class="m-0  fz-poppins"><?= env('EMAIL', 'hoststudioz@gmail.com') ?></p>
                            </div>
                        </div>
                        <div class="media text-light-dark">
                            <i class="icofont-location-pin mr-2 mt-2 text-light-dark"></i>
                            <div class="media-body">
                                <p class="m-0  fz-poppins"><?= env('ADD1') ?>,</p>
                                <p class="m-0  fz-poppins"><?= env('ADD2') ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget pl-3">
                        <h5 class="text-dark footer-widget-title">Our Department</h5>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="icofont-caret-right"></i>
                                    Neurology
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont-caret-right"></i>
                                    Diagnistics
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont-caret-right"></i>
                                    Dental
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont-caret-right"></i>
                                     Opthamology
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont-caret-right"></i>
                                    Emergency
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont-caret-right"></i>
                                    Cardilogy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h5 class="text-dark footer-widget-title">Important Links</h5>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="icofont-caret-right"></i>
                                   About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont-caret-right"></i>
                                    Booking Medicine
                                </a>
                            </li>
                           
                            <li>
                                <a href="#">
                                    <i class="icofont-caret-right"></i>
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont-caret-right"></i>
                                     Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h5 class="text-dark footer-widget-title">Newsletter</h5>
                        <p>
                            Subscribe our Newslatter
                        </p>
                        <div class="input-group  d-flex align-items-center">
                            <input type="text" class="form-control" placeholder="Enter mail" aria-label="Enter mail" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn" type="button" id="button-addon2">
                                    <i class="icofont-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <div class="social-icon circle-link position-relative">
                        @if(env('FACEBOOK'))
                        <a href="<?= env('FACEBOOK') ?>" class="text-default rounded-circle s-dp-1-3-15">
                                    <i class="icofont-facebook"></i>
                        </a>
                        @endif

                        @if(env('TWITTER'))
                        <a href="<?= env('TWITTER') ?>" class="text-default rounded-circle s-dp-1-3-15">
                                    <i class="icofont-twitter"></i>
                        </a>  
                        @endif              
                        @if(env('INSTAGRAM'))
                            <a href="<?= env('INSTAGRAM')?>" class="text-default rounded-circle s-dp-1-3-15">
                                    <i class="icofont-instagram"></i>
                                </a>
                        @endif
                        @if(env('PINTEREST'))
                            <a href="<?= env('PINTEREST')?>" class="text-default rounded-circle s-dp-1-3-15">
                                    <i class="icofont-pinterest"></i>
                                </a>
                        @endif    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center m-mt-120 m-bg-1 pt-4 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="mb-1 mt-1">&copy; 2019. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

  <!-- Start scroll-top  Section -->
    <div class="scroll-top">
        <i class="icofont-rounded-up"></i>
    </div>
    <!-- End  scroll-top Section -->

    <!-- js file -->
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
       <!-- plugins js -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
       <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>