@extends('layouts.app')

@section('content')
<section class=" position-relative set-bg breadcrumb-container" data-bg="assets/images/breadcrumb-img1.jpg">
        <div class="overlay op-P9"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="breadcrumb-inner align-items-start flex-column justify-content-center   d-flex ">
						<h3 class="semi-bold text-uppercase text-white">contact</h3>
						<nav aria-label="breadcrumb">
						    <ol class="breadcrumb bg-transparent mb-0 pl-0 p-0">
						        <li class="breadcrumb-item active"><a href="index.html">Home</a></li>
						        <li class="breadcrumb-item " aria-current="page"><a href="#">contact</a></li>
						    </ol>
						</nav>
                   </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Start Section -->
	<section class="m-bg-1 m-pt-140 m-pb-140">
		<div class="container">
			<div class="row m-mb-60">
				<div class="col-md-12">
					<div class="contact-inner bg-white radius-5">
						<h3 class="m-text-2 m-mb-30">Contact Us</h3>
						<form action="#">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="First name:" class="form-control medim-field fz-poppins m-mb-20">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Last name:" class="form-control medim-field fz-poppins m-mb-20">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Your Mail:" class="form-control medim-field fz-poppins m-mb-20">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Website:" class="form-control medim-field fz-poppins m-mb-20">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<input type="text" placeholder="Subject:" class="form-control fz-poppins m-mb-20 medim-field">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<textarea name="message" class="form-control fz-poppins medim-field" data-box-name="contact-message" placeholder="Your message here:"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 text-right">
									<button  class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-4 text-medium radius-pill text-active text-uppercase text-white">send message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="bg-white pt-4 pl-4 pb-4 pr-4 m-mtb-20 radius-5 info-box">
						<h5 class="m-text-2 mb-3">New York</h5>
							<div class="media ">
							    <i class="icofont-location-pin mr-2 mt-2 "></i>
							    <div class="media-body">
							        <p class="m-0  fz-poppins">198 West 21th Street, New York</p>
							    </div>
							</div>
							<div class="media ">
							    <i class="icofont-location-pin mr-2 mt-2 "></i>
							    <div class="media-body">
							        <p class="m-0  fz-poppins"><?= env('EMAIL', 'jon@medim.com')?></p>
							    </div>
							</div>
							<div class="media ">
							    <i class="icofont-location-pin mr-2 mt-2 "></i>
							    <div class="media-body">
							        <p class="m-0  fz-poppins">+123 4567 890 000</p>
							    </div>
							</div>
					</div> <!-- col-->
				</div> <!-- col-->
				<div class="col-md-4">
					<div class="bg-white pt-4 pl-4 pb-4 pr-4 info-box m-mtb-20  radius-5">
						<h5 class="m-text-2 mb-3">San Francisco</h5>
							<div class="media ">
							    <i class="icofont-location-pin mr-2 mt-2 "></i>
							    <div class="media-body">
							        <p class="m-0  fz-poppins">15 East Street, San Francisco 1050</p>
							    </div>
							</div>
							<div class="media ">
							    <i class="icofont-location-pin mr-2 mt-2 "></i>
							    <div class="media-body">
							        <p class="m-0  fz-poppins">ross@medim.com</p>
							    </div>
							</div>
							<div class="media ">
							    <i class="icofont-location-pin mr-2 mt-2 "></i>
							    <div class="media-body">
							        <p class="m-0  fz-poppins">+125 3247 780 024</p>
							    </div>
							</div>
					</div> <!-- col-->
				</div> <!-- col-->
				<div class="col-md-4">
					<div class="bg-white pt-4 pl-4 pb-4 pr-4 info-box m-mtb-20 radius-5">
						<h5 class="m-text-2 mb-3">London</h5>
							<div class="media text-light-dark">
							    <i class="icofont-location-pin mr-2 mt-2 text-light-dark"></i>
							    <div class="media-body">
							        <p class="m-0  fz-poppins">80/1 south Street,London UK</p>
							    </div>
							</div>
							<div class="media text-light-dark">
							    <i class="icofont-location-pin mr-2 mt-2 text-light-dark"></i>
							    <div class="media-body">
							        <p class="m-0  fz-poppins">kate@medim.com</p>
							    </div>
							</div>
							<div class="media text-light-dark">
							    <i class="icofont-location-pin mr-2 mt-2 text-light-dark"></i>
							    <div class="media-body">
							        <p class="m-0  fz-poppins">+44 20 2854 890 854</p>
							    </div>
							</div>
					</div> <!-- col-->
				</div> <!-- col-->
			</div>
			
		</div>
	</section>
	<!-- End Section -->


@endsection