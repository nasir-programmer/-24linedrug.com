@extends('layouts.app')

@section('content')
 <!-- Start Section -->
 <section class=" position-relative set-bg breadcrumb-container" data-bg="{{ asset('assets/images/breadcrumb-img1.jpg')}}">
        <div class="overlay op-P9"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="breadcrumb-inner align-items-start flex-column justify-content-center   d-flex ">
                        <h3 class="semi-bold text-uppercase text-white">Our sERVICES</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0 pl-0 p-0">
                                <li class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item " aria-current="page"><a href="#">Our sERVICES</a></li>
                            </ol>
                        </nav>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Section -->
    <!-- Start Section -->
    <section class="m-pt-140 m-bg-1 m-pb-90">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
                    <div class="single-service bg-white  type-1  radius-10 position-relative service-wrapper s-dp-10-60 m-mb-50">
                        <div class="service-circle position-relative mb-4 text-active m-bg-4 rounded-circle d-flex align-items-center justify-content-center">
                            <span class="icon-heart-beat text-grad-1"></span>
                        </div>
                        <h4 class="text-dark2 mb-3 position-relative pt-2">Heart Surgery</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        </p>
                        <a href="#" class="text-default fz-poppins text-Underline">
                            Read More
                        </a>
                    </div>
                </div>
    			<div class="col-md-4">
                    <div class="single-service bg-white  type-1 radius-10 position-relative service-wrapper s-dp-10-60 m-mb-50">
                        <div class="service-circle position-relative mb-4 text-active m-bg-4 rounded-circle d-flex align-items-center justify-content-center">
                             <span class="icon-test-tube text-grad-1"></span>
                        </div>
                        <h4 class="text-dark2 mb-3 position-relative pt-2">Blood Testing</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        </p>
                        <a href="#" class="text-default fz-poppins text-Underline">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-service bg-white  type-1 radius-10 position-relative service-wrapper s-dp-10-60 m-mb-50">
                        <div class="service-circle position-relative mb-4 text-active m-bg-4 rounded-circle d-flex align-items-center justify-content-center">
                           <span class="icon-dna text-grad-1"> </span>
                        </div>
                        <h4 class="text-dark2 mb-3 position-relative pt-2">DNA Testing</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        </p>
                        <a href="#" class="text-default fz-poppins text-Underline">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-service bg-white  type-1 radius-10 position-relative service-wrapper s-dp-10-60 m-mb-50">
                        <div class="service-circle position-relative mb-4 text-active m-bg-4 rounded-circle d-flex align-items-center justify-content-center">
                            <span class="icon-eye text-grad-1"> </span>
                        </div>
                        <h4 class="text-dark2 mb-3 position-relative pt-2">Eye Treatment</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        </p>
                        <a href="#" class="text-default fz-poppins text-Underline">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-service bg-white  type-1 radius-10 position-relative service-wrapper s-dp-10-60 m-mb-50">
                        <div class="service-circle position-relative mb-4 text-active m-bg-4 rounded-circle d-flex align-items-center justify-content-center">
                             <span class="icon-teeth text-grad-1"> </span>
                        </div>
                        <h4 class="text-dark2 mb-3 position-relative pt-2">Dental Care</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        </p>
                        <a href="#" class="text-default fz-poppins text-Underline">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-service bg-white  type-1 radius-10 position-relative service-wrapper s-dp-10-60 m-mb-50">
                        <div class="service-circle position-relative mb-4 text-active m-bg-4 rounded-circle d-flex align-items-center justify-content-center">
                            <span class="icon-ambulance text-grad-1"> </span>
                        </div>
                        <h4 class="text-dark2 mb-3 position-relative pt-2">Emergency Service</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        </p>
                        <a href="#" class="text-default fz-poppins text-Underline">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-service bg-white  type-1 radius-10 position-relative service-wrapper s-dp-10-60 m-mb-50">
                        <div class="service-circle position-relative mb-4 text-active m-bg-4 rounded-circle d-flex align-items-center justify-content-center">
                            <span class="icon-eye text-grad-1"> </span>
                        </div>
                        <h4 class="text-dark2 mb-3 position-relative pt-2">Pharmacy Service</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        </p>
                        <a href="#" class="text-default fz-poppins text-Underline">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-service bg-white  type-1 radius-10 position-relative service-wrapper s-dp-10-60 m-mb-50">
                        <div class="service-circle position-relative mb-4 text-active m-bg-4 rounded-circle d-flex align-items-center justify-content-center">
                             <span class="icon-teeth text-grad-1"> </span>
                        </div>
                        <h4 class="text-dark2 mb-3 position-relative pt-2">Outdoor Checkup</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        </p>
                        <a href="service-single.html" class="text-default fz-poppins text-Underline">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-service bg-white  type-1 radius-10 position-relative service-wrapper s-dp-10-60 m-mb-50">
                        <div class="service-circle position-relative mb-4 text-active m-bg-4 rounded-circle d-flex align-items-center justify-content-center">
                            <span class="icon-ambulance text-grad-1"> </span>
                        </div>
                        <h4 class="text-dark2 mb-3 position-relative pt-2">Critical Care</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        </p>
                        <a href="service-single.html" class="text-default fz-poppins text-Underline">
                            Read More
                        </a>
                    </div>
                </div>
    		</div>
    	</div>
    </section>
    <!-- End Section -->
    <!-- Start Call to action Section -->
    <section class="parallax-window pt-95 pb-100 position-relative call-to-action type2" data-bg="{{ asset('assets/images/call-to-action-img.jpg')}}">
        <div class="overlay2 grad-bg-top-btm-1 op-P9"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 class="text-white">Do You Need Any Of Our Service?</h2>
                        <p class="text-white">Feel free to drop a line to us and  choose the best care for youself</p>
                        <button class="btn fz-poppins medim-btn solid-btn mt-4 text-medium radius-pill  text-uppercase bg-white text-medium text-active">
                            Contact us
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call to action Section -->


@endsection