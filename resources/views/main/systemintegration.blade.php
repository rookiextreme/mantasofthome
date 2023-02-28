@extends('main.layouts.main')

@section('banner')
<section id="slider" class="slider-element include-header min-vh-75" style="background: url({{ asset('images/mantasoft/slider/first.jpeg') }}) center;background-repeat:no-repeat;background-size: cover; overflow: visible;">
    <div class="slider-inner flex-column justify-content-end">
        <div class="promo promo-dark promo-full landing-promo p-5 position-relative position-lg-absolute w-100" style="top: auto; bottom: 0;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8">
                        <h3 style="color:white">System Integration (SI)</h3>
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
                            <h2>THE ADVANTAGES</h2>
                        </div>

                        <p>We are the systems integrator (SI) that builds computing systems for clients by combining hardware and software products from various vendors. By using our expertise, your company can align cheaper, pre-configured components and off-the-shelf software to meet key business goals, as opposed to more expensive, customized implementations that may require original programming or manufacture of unique components.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section bg-transparent mt-0 border-0 bottommargin-sm">
            <div class="container clearfix">
                <div class="row align-items-center col-mb-50">
                    <div class="col-md-6">
                        <div class="heading-block" style="padding-top: 40px;">
                            <h2>SPECIALIZED AREA</h2>
                        </div>

                        <p>Some systems integrators working in specialized areas, like SAP installations or upgrades, may offer more customization for specific applications.</p>
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
