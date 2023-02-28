@extends('main.layouts.main')

@section('banner')
<section id="slider" class="slider-element include-header min-vh-75" style="background: url({{ asset('images/mantasoft/slider/first.jpeg') }}) center;background-repeat:no-repeat;background-size: cover; overflow: visible;">
    <div class="slider-inner flex-column justify-content-end">
        <div class="promo promo-dark promo-full landing-promo p-5 position-relative position-lg-absolute w-100" style="top: auto; bottom: 0;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8">
                        <h3 style="color:white">Gallery</h3>
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
        <div class="container clearfix">
            <div class="container">

                <div class="grid-filter-wrap">
                    <!-- Grid Filter
                    ============================================= -->
                    <ul class="grid-filter style-2 mx-auto" data-container="#portfolio">

                        <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
                        <li><a href="#" data-filter=".pf-pmo">PMO Meeting</a></li>
                        <li><a href="#" data-filter=".pf-vmware">VMware</a></li>
                        <li><a href="#" data-filter=".pf-kickoff">Kick-Off Meeting @ Getaway</a></li>
                        <li><a href="#" data-filter=".pf-mengaji">Kelas Mengaji</a></li>
                        <li><a href="#" data-filter=".pf-tazkirah">Tazkirah Bulanan</a></li>

                    </ul><!-- .grid-filter end -->

                    <div class="grid-shuffle" data-container="#portfolio">
                        <i class="icon-random"></i>
                    </div>
                </div>

                <!-- Portfolio Items
                ============================================= -->
                <div id="portfolio" class="portfolio row grid-container g-0" data-layout="fitRows">

                    <!-- Portfolio Item: Start -->
                    <article class="portfolio-item col-12 pf-uielements pf-tazkirah">
                        <div class="grid-inner row g-0">
                            <div class="col-lg-8">
                                <div class="portfolio-image">
                                    <div class="grid-inner">
                                        <a href="portfolio-single.html">
                                            <img src="images/portfolio/1/5.jpg" alt="Tazkirah Januari 2023">
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="images/portfolio/full/5.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-desc col-lg-4 p-4 px-lg-5">
                                <h3>Tazkirah Januari 2023</h3>

                                <p class="mt-3 d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                                <ul class="iconlist d-none d-md-block">
                                    <li><i class="icon-line-check"></i> <strong>Date:</strong>11 January 2023</li>
                                    <li><i class="icon-line-check"></i> <strong>Time:</strong>9am - 11am</li>
                                    <li><i class="icon-line-check"></i> <strong>Location:</strong>Venture Nucleus</li>
                                </ul>
                                <a href="portfolio-single.html" class="btn btn-secondary d-none d-sm-inline-block"><i class="icon-line-arrow-right"></i><span class="visually-hidden">Details</span></a>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 pf-graphics pf-kickoff">
                        <div class="grid-inner row g-0">
                            <div class="col-lg-8">
                                <div class="portfolio-image">
                                    <div class="grid-inner">
                                        <a href="#">
                                            <img src="images/portfolio/1/3.jpg" alt="Kick-Off Meeting 2023">
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-desc col-lg-4 p-4 px-lg-5">
                                <h3>Kick-Off Meeting 2023</h3>

                                <p class="mt-3 d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                                <ul class="iconlist d-none d-md-block">
                                    <li><i class="icon-line-check"></i> <strong>Date:</strong>6 - 8 January 2023</li>
                                    <li><i class="icon-line-check"></i> <strong>Duration:</strong>3 Day & 2 Night</li>
                                    <li><i class="icon-line-check"></i> <strong>Location:</strong>Amverton Cove Resort</li>
                                </ul>
                                <a href="portfolio-single.html" class="btn btn-secondary d-none d-sm-inline-block"><i class="icon-line-arrow-right"></i><span class="visually-hidden">Details</span></a>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 pf-icons pf-mengaji">
                        <div class="grid-inner row g-0">
                            <div class="col-lg-8">
                                <div class="portfolio-image">
                                    <div class="grid-inner">
                                        <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/1/4.jpg" alt="Kelas Mengaji 2/2023"></a></div>
                                                    <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/1/4-1.jpg" alt="Kelas Mengaji 2/2023"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-overlay" data-lightbox="gallery">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="images/portfolio/full/4.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                                <a href="images/portfolio/full/4-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-desc col-lg-4 p-4 px-lg-5">
                                <h3>Kelas Mengaji 2/2022</h3>

                                <p class="mt-3 d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                                <ul class="iconlist d-none d-md-block">
                                    <li><i class="icon-line-check"></i> <strong>Date:</strong>23 August 2022</li>
                                    <li><i class="icon-line-check"></i> <strong>Time:</strong>9am - 11am</li>
                                    <li><i class="icon-line-check"></i> <strong>Location:</strong>Venture Nucleus</li>
                                </ul>
                                <a href="portfolio-single.html" class="btn btn-secondary d-none d-sm-inline-block"><i class="icon-line-arrow-right"></i><span class="visually-hidden">Details</span></a>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 pf-media pf-pmo">
                        <div class="grid-inner row g-0">
                            <div class="col-lg-8">
                                <div class="portfolio-image">
                                    <div class="grid-inner">
                                        <a href="portfolio-single.html">
                                            <img src="images/portfolio/1/1.jpg" alt="PMO Meeting 2022">
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="portfolio-desc col-lg-4 p-4 px-lg-5">
                                <h3>PMO Meeting 2022</h3>

                                <p class="mt-3 d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                                <ul class="iconlist d-none d-md-block">
                                    <li><i class="icon-line-check"></i> <strong>Date:</strong>13 June 2022</li>
                                    <li><i class="icon-line-check"></i> <strong>Time:</strong>10am - 4pm</li>
                                    <li><i class="icon-line-check"></i> <strong>Location:</strong>Kuala Lumpur</li>
                                </ul>
                                <a href="portfolio-single.html" class="btn btn-secondary d-none d-sm-inline-block"><i class="icon-line-arrow-right"></i><span class="visually-hidden">Details</span></a>
                            </div>

                        </div>
                    </article>

                    <article class="portfolio-item col-12 pf-graphics pf-mengaji">
                        <div class="grid-inner row g-0">
                            <div class="col-lg-8">
                                <div class="portfolio-image">
                                    <div class="grid-inner">
                                        <div class="fslider" data-arrows="false">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/1/6.jpg" alt="Shake It"></a></div>
                                                    <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/1/6-1.jpg" alt="Shake It"></a></div>
                                                    <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/1/6-2.jpg" alt="Shake It"></a></div>
                                                    <div class="slide"><a href="portfolio-single-gallery.html"><img src="images/portfolio/1/6-3.jpg" alt="Shake It"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-overlay" data-lightbox="gallery">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="images/portfolio/full/6.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                                <a href="images/portfolio/full/6-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                                <a href="images/portfolio/full/6-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                                <a href="images/portfolio/full/6-3.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                                <a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-desc col-lg-4 p-4 px-lg-5">
                                <h3>Kelas Mengaji 1/2022</h3>

                                <p class="mt-3 d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                                <ul class="iconlist d-none d-md-block">
                                    <li><i class="icon-line-check"></i> <strong>Date:</strong>1 April 2022</li>
                                    <li><i class="icon-line-check"></i> <strong>Time:</strong>9am - 11am</li>
                                    <li><i class="icon-line-check"></i> <strong>Location:</strong>Venture Nucleus</li>
                                </ul>
                                <a href="portfolio-single.html" class="btn btn-secondary d-none d-sm-inline-block"><i class="icon-line-arrow-right"></i><span class="visually-hidden">Details</span></a>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 pf-uielements pf-kickoff">
                        <div class="grid-inner row g-0">
                            <div class="col-lg-8">
                                <div class="portfolio-image">
                                    <div class="grid-inner">
                                        <a href="portfolio-single-video.html">
                                            <img src="images/portfolio/1/7.jpg" alt="Kick-Off Meeting 2022">
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-desc col-lg-4 p-4 px-lg-5">
                                <h3>Kick-Off Meeting 2022</h3>

                                <p class="mt-3 d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                                <ul class="iconlist d-none d-md-block">
                                    <li><i class="icon-line-check"></i> <strong>Date:</strong>6 - 8 January 2022</li>
                                    <li><i class="icon-line-check"></i> <strong>Duration:</strong>3 Days & 2 Night</li>
                                    <li><i class="icon-line-check"></i> <strong>Location:</strong>Kuala Lumpur</li>
                                </ul>
                                <a href="portfolio-single.html" class="btn btn-secondary d-none d-sm-inline-block"><i class="icon-line-arrow-right"></i><span class="visually-hidden">Details</span></a>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 pf-uielements pf-pmo">
                        <div class="grid-inner row g-0">
                            <div class="col-lg-8">
                                <div class="portfolio-image">
                                    <div class="grid-inner">
                                        <a href="portfolio-single-video.html">
                                            <img src="images/portfolio/1/3.jpg" alt="PMO Meeting 2021">
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-desc col-lg-4 p-4 px-lg-5">
                                <h3>PMO Meeting 2021</h3>

                                <p class="mt-3 d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                                <ul class="iconlist d-none d-md-block">
                                    <li><i class="icon-line-check"></i> <strong>Date:</strong>13 June 2021</li>
                                    <li><i class="icon-line-check"></i> <strong>Time:</strong>10am - 4pm</li>
                                    <li><i class="icon-line-check"></i> <strong>Location:</strong>Kuala Lumpur</li>
                                </ul>
                                <a href="portfolio-single.html" class="btn btn-secondary d-none d-sm-inline-block"><i class="icon-line-arrow-right"></i><span class="visually-hidden">Details</span></a>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 pf-vmware">
                        <div class="grid-inner row g-0">
                            <div class="col-lg-8">
                                <div class="portfolio-image">
                                    <div class="grid-inner">
                                        <a href="portfolio-single.html">
                                            <img src="images/portfolio/1/2.jpg" alt="VMware">
                                        </a>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="images/portfolio/full/2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-desc col-lg-4 p-4 px-lg-5">
                                <h3>VMware</h3>

                                <p class="mt-3 d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                                <ul class="iconlist d-none d-md-block">
                                    <li><i class="icon-line-check"></i> <strong>Start Date:</strong>19 September 2019</li>
                                    <li><i class="icon-line-check"></i> <strong>Location:</strong>Kuala Lumpur</li>
                                    <li><i class="icon-line-check"></i> <strong>By:</strong>Mohammad bin Awaludin</li>
                                </ul>
                                <a href="portfolio-single.html" class="btn btn-secondary d-none d-sm-inline-block"><i class="icon-line-arrow-right"></i><span class="visually-hidden">Details</span></a>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- #portfolio end -->
            </div>
        </div>
    </div>
</section>
@endsection
