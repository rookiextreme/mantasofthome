@extends('main.layouts.main')

@section('banner')
<section id="slider" class="slider-element include-header min-vh-75" style="background: url({{ asset('images/mantasoft/slider/first.jpeg') }}) center;background-repeat:no-repeat;background-size: cover; overflow: visible;">
    <div class="slider-inner flex-column justify-content-end">
        <div class="promo promo-dark promo-full landing-promo p-5 position-relative position-lg-absolute w-100" style="top: auto; bottom: 0;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8">
                        <h3 style="color:white">Software Development</h3>
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
                            <h2>WEBSITE DESIGN</h2>
                        </div>

                        <p>Venture Nucleus helps you in making your dream website design that not only reflects your brand identity but would aid you in uplifting your image and grow in your target market. Whether you are selling products or services online, we deliver excelled end product in the form of a well laid out website that gives you unique and user-friendly image. The methodology we follow is that we understand objectives of our clients and convert your ideas into a visually appealing website design.

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
                            <h2>MOBILE APP DEVELOPMENT</h2>
                        </div>

                        <p>Our developer will help you create a mobile experience that lingers in memory and leverages the latest technologies. Going mobile will help your business streamline operations, bring value to the demanding modern customers, and help you tackle Big Data. Whether it is your first app or fifth, our decade-long expertise in mobile app development will help you succeed with your mobile strategy.</p>
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
