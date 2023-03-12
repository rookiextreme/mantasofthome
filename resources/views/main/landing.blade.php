@extends('main.layouts.main')

@section('customCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/include/rs-plugin/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/include/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/include/rs-plugin/css/navigation.css') }}">

    <style>

		.revo-slider-emphasis-text {
			font-size: 64px;
			font-weight: 700;
			letter-spacing: -1px;
			font-family: 'Poppins', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Poppins', sans-serif;
		}

		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

	</style>
@endsection

@section('slider')
<section id="slider" class="slider-element slider-parallax revslider-wrap min-vh-0">
    <div class="slider-inner">
        <!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
        <div id="rev_slider_779_1_wrapper" class="rev_slider_wrapper fullwidth-container" data-alias="default-slider" style="padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
            <div id="rev_slider_779_1" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.1.4">
                <ul>    <!-- SLIDE  -->
                    <li class="dark" data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000" data-thumb="{{ asset('templates/include/rs-plugin/demos/assets/images//iceberg-250x100.jpg') }}"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('templates/include/rs-plugin/demos/assets/images//iceberg-250x100.jpg') }}"  alt="video_woman_cover3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-fade fadeout fullscreenvideo rs-background-video-layer"
                            data-forcerewind="on"
                            data-volume="mute"
                            data-videowidth="100%"
                            data-videoheight="100%"
                            data-videomp4="{{ asset('videos/montage.mov') }}"
                            data-videopreload="preload"
                            data-videoloop="none"
                            data-forceCover="1"
                            data-aspectratio="16:9"
                            data-autoplay="true"
                            data-autoplayonlyfirsttime="false"
                            data-nextslideatend="true"
                             style="z-index: 2;">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text text-uppercase"
                        data-x="['left','left','left','left']" data-hoffset="['600','50','50','30']"
                        data-y="['top','top','top','top']" data-voffset="['235','235','235','235']"
                        data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                        data-speed="800"
                        data-start="1000"
                        data-easing="easeOutQuad"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.1"
                        data-endspeed="1000"
                        data-endeasing="Power4.easeIn" style="z-index: 3; color: #FFF; white-space: nowrap;"></div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text p-0 border-0"
                        data-x="['left','left','left','left']" data-hoffset="['600','50','50','30']"
                        data-y="['top','top','top','top']" data-voffset="['260','260','260','260']"
                        data-fontsize="['60','60','44','44']"
                        data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                        data-speed="800"
                        data-start="1200"
                        data-easing="easeOutQuad"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.1"
                        data-endspeed="1000"
                        data-endeasing="Power4.easeIn" style="z-index: 3; color: #FFF; font-size: 60px; white-space: nowrap;"></div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text text-start"
                        data-x="['left','left','left','left']" data-hoffset="['600','50','50','30']"
                        data-y="['top','top','top','top']" data-voffset="['360','360','360','360']"
                        data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                        data-speed="800"
                        data-start="1600"
                        data-easing="easeOutQuad"
                        data-splitin="none"
                        data-width="['550','550','480','360']"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.1"
                        data-endspeed="1000"
                        data-endeasing="Power4.easeIn" style="z-index: 3; color: #FFF; max-width: 550px; white-space: normal;"></div>

                        {{-- <div class="tp-caption customin ltl tp-resizeme"
                        data-x="['left','left','left','left']" data-hoffset="['600','50','50','30']"
                        data-y="['top','top','top','top']" data-voffset="['470','470','470','470']"
                        data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                        data-speed="800"
                        data-start="1550"
                        data-easing="easeOutQuad"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.1"
                        data-endspeed="1000"
                        data-endeasing="Power4.easeIn" style="z-index: 3;"><a href="#" class="button button-border button-large button-light button-rounded text-end m-0"><span>Start Tour</span><i class="icon-angle-right"></i></a></div> --}}

                    </li>
                    <!-- SLIDE  -->
                </ul>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </div>
</section>
@endsection

@section('content')
<section id="content" class="mt-0">
    <div class="content-wrap" style="padding-top:0px !important">
        <div class=" m-0 p-0">
            <div class=" m-0">
                <div class="section bg-transparent topmargin-sm mb-0">
                    <div class="container clearfix">
                        <div class="row align-items-center col-mb-50">
                            <div class="col-md-6 text-center">
                                <img src="{{ asset('images/mantasoft/slider/first.jpeg') }}" alt="Image" data-animate="fadeInLeft">
                            </div>

                            <div class="col-md-6">
                                <div class="heading-block" style="padding-top: 40px;">
                                    <h2 style="color:blue">About Us</h2>
                                </div>

                                <p style="text-align:justify;text-justify:inter-word">
                                    MantaSoft Sdn Bhd (Formerly known as Venture Nucleus (M) Sdn Bhd) is an established Bumiputera company <b>since 2004</b>. Combining years of experiences with technical expertise, MantaSoft was able to carry out trading and provide various technical and management services in ICT and telecommunication industry in Malaysia.
                                </p>
                                <p  style="text-align:justify;text-justify:inter-word">
                                    As we all know, the growth of information technology today is very fast. Companies and organizations continue to seek opportunities that meaningfully enhancing their businesses. In our side, we work hard and our dedication to keep long term relationship with the customers. We constantly strive to develop new strategic and always alert with the latest technology for recommendation to the customer. Through these strategic initiatives, we have gained a deeper understanding of customer needs and challenges, so we can continue to serve them better.
                                </p>
                                <p  style="text-align:justify;text-justify:inter-word">
                                    We also take into consideration of the government initiatives when faced with the technology rapacity. MantaSoft will be focusing on the Communications Content and Infrastructure (CCI) sector which is spans a wide ecosystem covering content, network applications, services and devices. Aware of this opportunity, we will strive to engage more actively approaching our target and take chances.<br><br>
                                    With high quality of human capital and consistent financial stability, MantaSoft has been spreading its wings in equipment supply, software development and technical services that relates to telecommunication and ICT ground works as well as project management.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container clearfix">
            <div class="heading-block border-bottom-0 mb-0 center">
                <h2 style="font-size: 40px;color:darkblue" class="nott fw-bold ls1">CORE SERVICES</h2>
            </div>
        </div>
        <div class="row bottommargin-lg align-items-stretch">

            <div class="col-lg-3 dark col-padding overflow-hidden" style="background-color:rgb(75, 75, 252);text-align: center;">
                <div>
                    <h3 class="text-uppercase" style="font-weight: 600;">SYSTEM INTEGRATION</h3>
                    <p style="line-height: 1.8;">We are the systems integrator (SI) that builds computing systems for clients by combining hardware and software products from various vendors. Aligning clients with the best solutions possible for lower price</p>
                    <a href="#" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
                    <i class="icon-bulb bgicon"></i>
                </div>
            </div>

            <div class="col-lg-3 dark col-padding overflow-hidden" style="background-color: grey;text-align: center;">
                <div>
                    <h3 class="text-uppercase" style="font-weight: 600;">PROJECT MANAGEMENT</h3>
                    <p style="line-height: 1.8;color:black">Serving you with high experiences and best practices tailored as per requirements. Our administrative project deployment ensuring high project traceability.Ensuring the project implemented perform accordingly</p>
                    <a href="#" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
                    <i class="icon-cog bgicon"></i>
                </div>
            </div>

            <div class="col-lg-3 dark col-padding overflow-hidden" style="background-color: rgb(75, 75, 252);text-align: center;">
                <div>
                    <h3 class="text-uppercase" style="font-weight: 600;">SOFTWARE DEVELOPMENT</h3>
                    <p style="line-height: 1.8;">Dedicated software team that has the ability to adapt latest technology for all your needs. Providing services such as web design, mobile app development, software development, software testing</p>
                    <a href="#" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
                    <i class="icon-thumbs-up bgicon"></i>
                </div>
            </div>
            <div class="col-lg-3 dark col-padding overflow-hidden" style="background-color: grey;text-align: center;">
                <div>
                    <h3 class="text-uppercase" style="font-weight: 600;">TECHNICAL ENGINEERING</h3>
                    <p style="line-height: 1.8;">Sustainability involvement fundraising campaign connect carbon rights, collaborative cities convener truth. Synthesize change lives treatment fluctuation participatory monitoring underprivileged equal.</p>
                    <a href="#" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
                    <i class="icon-thumbs-up bgicon"></i>
                </div>
            </div>
            <div class="clear"></div>

        </div>
        <div class="container clearfix">
            <div class="row justify-content-center col-mb-50">
                <div class="col-sm-6 col-lg-6">
                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>Our <span style="color:darkblue">Vision</span>.</h4>
                    </div>

                    <p>TO BECOME A PREMIER ICT SOLUTIONS PROVIDER BY BRIDGING PEOPLE, KNOWLEDGE AND TECHNOLOGY. TO HELP ADDRESS NEEDS, CHALLENGES AND EXPECTATIONS.</p>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>Our <span style="color:darkblue">Mission</span>.</h4>
                    </div>

                    <p>CREATING SOLUTIONS FOR A BETTER TOMORROW.</p>
                </div>
            </div>
        </div>

        <div class="section topmargin mb-0 border-bottom-0">
            <div class="container clearfix">
                <div class="heading-block center m-0">
                    <h3 style="color:darkblue">Activities</h3>
                </div>
            </div>
        </div>
        <div id="portfolio" class="portfolio row g-0 portfolio-reveal grid-container">

            <article class="portfolio-item col-6 col-md-4 col-lg-4 pf-media pf-icons">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="{{ asset('images/mantasoft/activity/pmo2.jpeg') }}" alt="Open Imagination">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                                <a href="{{ asset('templates/images/portfolio/4/1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">PMO MEETING</a></h3>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-6 col-md-4 col-lg-4 pf-illustrations">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="{{ asset('images/mantasoft/activity/benchmark.jpeg') }}" alt="Locked Steel Gate">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                                <a href="{{ asset('templates/images/portfolio/4/1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Quarterly Benchmark & Review Meeting</a></h3>
                        <span><a href="#">Illustrations</a></span>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-6 col-md-4 col-lg-4 pf-graphics pf-uielements">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{{ asset('images/mantasoft/activity/vmware.jpeg') }}" alt="Mac Sunglasses">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                                <a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-video.html">VMware</a></h3>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-6 col-md-4 col-lg-4 pf-icons pf-illustrations">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="{{ asset('images/mantasoft/activity/kickOff.jpeg') }}" alt="Open Imagination">
                        </a>
                        <div class="bg-overlay" data-lightbox="gallery">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                                <a href="{{ asset('templates/images/portfolio/4/1.jpg') }}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="{{ asset('templates/images/portfolio/4/1.jpg') }}" class="d-none" data-lightbox="gallery-item"></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-gallery.html">Kick-Off Meeting</a></h3>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-6 col-md-4 col-lg-4 pf-uielements pf-media">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="{{ asset('images/mantasoft/activity/ngaji.jpeg') }}" alt="Console Activity">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                                <a href="images/portfolio/full/5.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Kelas Mengaji</a></h3>
                    </div>
                </div>
            </article>

            <article class="portfolio-item col-6 col-md-4 col-lg-4 pf-graphics pf-illustrations">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="{{ asset('images/mantasoft/activity/tazkirah.jpeg') }}" alt="Open Imagination">
                        </a>
                        <div class="bg-overlay" data-lightbox="gallery">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                                <a href="images/portfolio/full/6.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="images/portfolio/full/6-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                <a href="images/portfolio/full/6-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                <a href="images/portfolio/full/6-3.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                <a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-gallery.html">Tazkirah Januari</a></h3>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
@endsection

@section('customJS')
    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="{{ asset('templates/include/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/addons/revolution.addon.slicey.min.js') }}"></script>

    <script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>

	<!-- ADD-ONS JS FILES -->

	<script>
		var tpj=jQuery;
		tpj.noConflict();
		var $ = jQuery.noConflict();

		tpj(document).ready(function() {
			var apiRevoSlider = tpj('#rev_slider_779_1').show().revolution(
			{
				sliderType:"standard",
				jsFileLocation:"include/rs-plugin/js/",
				dottedOverlay:"none",
				sliderLayout: "fullwidth",
				delay:9000,
				responsiveLevels: [1240, 1024, 778, 480],
				visibilityLevels: [1240, 1024, 778, 480],
				gridwidth: [1200, 1024, 778, 480],
				gridheight: [700, 768, 960, 720],
				hideThumbs:200,

				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:3,

				touchenabled:"on",
				onHoverStop:"on",

				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,


				navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "hades",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div></div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        },
                        thumbnails: {
                            style: "hades",
                            enable: true,
                            width: 50,
                            height: 50,
                            min_width: 100,
                            wrapper_padding: 5,
                            wrapper_color: "transparent",
                            wrapper_opacity: "1",
                            tmp: '<span class="tp-thumb-img-wrap">  <span class="tp-thumb-image"></span></span>',
                            visibleAmount: 5,
                            hide_onmobile: false,
                            hide_onleave: false,
                            direction: "horizontal",
                            span: false,
                            position: "inner",
                            space: 5,
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 20
                        }
                    },

				soloArrowLeftHalign:"left",
				soloArrowLeftValign:"center",
				soloArrowLeftHOffset:20,
				soloArrowLeftVOffset:0,

				soloArrowRightHalign:"right",
				soloArrowRightValign:"center",
				soloArrowRightHOffset:20,
				soloArrowRightVOffset:0,

				shadow:0,
				fullWidth:"off",
				fullScreen:"on",

				spinner:"spinner0",

				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",


				forceFullWidth:"off",
				fullScreenAlignForce:"off",

				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,

				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
			});

			apiRevoSlider.on("revolution.slide.onloaded",function (e) {
				setTimeout( function(){ SEMICOLON.slider.sliderDimensions(); }, 200 );
			});

			apiRevoSlider.on("revolution.slide.onchange",function (e,data) {
				SEMICOLON.slider.revolutionSliderMenu();
			});
		}); //ready
	</script>
@endsection
