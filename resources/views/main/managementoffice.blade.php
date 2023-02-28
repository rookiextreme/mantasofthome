@extends('main.layouts.main')

@section('banner')
<section id="slider" class="slider-element include-header min-vh-75" style="background: url({{ asset('images/mantasoft/slider/first.jpeg') }}) center;background-repeat:no-repeat;background-size: cover; overflow: visible;">
    <div class="slider-inner flex-column justify-content-end">
        <div class="promo promo-dark promo-full landing-promo p-5 position-relative position-lg-absolute w-100" style="top: auto; bottom: 0;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8">
                        <h3 style="color:white">Project Management Office</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section id="content">
    <div class="content-wrap">
        <!-- Graphic Info -->
        <div class="section bg-transparent topmargin-lg mb-0">
            <div class="container clearfix">
                <div class="row align-items-center col-mb-50">
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/landing/device1.png')}}" alt="Image" data-animate="fadeInLeft">
                    </div>

                    <div class="col-md-6">
                        <div class="heading-block" style="padding-top: 40px;">
                            <h2>OUR EXPERIENCE</h2>
                        </div>

                        <p>We served you with a highly experience project manager in various type of system development. For the project implementation, we used the best practices that tailored to the customer requirement. Our administrative project deployment ensuring high project traceability.

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section bg-transparent mt-0 border-0 bottommargin-sm">
            <div class="container clearfix">
                <div class="row align-items-center col-mb-50">
                    <div class="col-md-6">
                        <div class="heading-block" style="padding-top: 40px;">
                            <h2>Our Team</h2>
                        </div>

                        <p>Our workers are competent to provide professional services for system design, system development, system deployment and commissioning. The systems are supported by highly skills and technologies personal in ensuring the project implemented perform accordingly.</p>
                    </div>

                    <div class="col-md-6 text-center">
                        <img src="{{ asset('images/forms/car/1.png')}}" alt="Image" data-animate="fadeInRight">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
