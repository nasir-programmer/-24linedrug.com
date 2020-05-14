@extends('layouts.app')

@section('content')
  <!-- Start Section -->
  <section class=" position-relative set-bg breadcrumb-container" data-bg="assets/images/breadcrumb-img1.jpg">
        <div class="overlay op-P9"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="breadcrumb-inner align-items-start flex-column justify-content-center   d-flex ">
                        <h3 class="semi-bold text-uppercase text-white">About Us</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0 pl-0 p-0">
                                <li class="breadcrumb-item active"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item " aria-current="page"><a href="#">About Us</a></li>
                            </ol>
                        </nav>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Section -->

        
    <!-- Start About Section -->
    <section class="intro-area type2 m-pt-140 m-bg-1 ">
        <div class="container position-relative m-pb-140">
            <img src="assets/images/doctor-img3.png" class="intro-doctor position-absolute" alt="">
            <div class="row">
                <div class="col-lg-4 col-sm-5 col-md-4">
                    <h2 class="text-dark mb-0 semi-bold pb-5"> 
                        Who 
                        <br>
                        We Are
                    </h2>
                    <p class="mb-4">
                        Revolutionary Approach to Service India’s Healthcare Industry,One Stop for All Your Health Needs-24 hours, 7 days a week & 365 days a year..!
                    </p>
                    <div class="media align-items-center text-medium">
                        <i class="icofont-check-circled mr-3 text-active"></i>
                        <div class="media-body">
                            <p class="mb-0 text-medium">Free Medical Consultation For Poor</p>
                        </div>
                    </div>
                    <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Well Experienced Doctors</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">24/7 Free Medical Services</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Online Bill Payments</p>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-5">
                    <div class="intro-box bg-white radius-5">
                        <div class="intro-icon rounded-circle grad-bg--5">
                           <span class="icon-clock text-white"></span>
                        </div>
                        <h3 class="m-text-2 mb-3">Opening Hours</h3>
                            <p><span>Mon - Tue: </span>  <span>10:00 - 16:00 </span></p>
                            <p><span>Wed - Thu: </span>  <span>10:00 - 16:00 </span></p>
                            <p><span>Fri - Sun: </span>  <span>10:00 - 16:00 </span></p>
                          
                            <a href="timetable.html" class="btn fadeInDown-slide mt-4 animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-0 text-medium radius-pill text-active text-uppercase text-white">
                                    time table
                                </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Start About Section -->


    

@endsection