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
<section id="map-overlay">
    <div class="container">
        <div class="row">

            <!-- Contact Form Overlay
            ============================================= -->
            <div class="contact-form-overlay col-md-6 offset-md-6 col-lg-4 offset-lg-8 p-5">
                <div class="fancy-title title-border">
                    <h3>Send us an Email</h3>
                </div>

                <div class="form-widget">
                    <div class="form-result"></div>

                    <!-- Contact Form
                    ============================================= -->
                    <form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

                        <div class="col-12 form-group">
                            <label for="template-contactform-name">Name <small>*</small></label>
                            <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="template-contactform-email">Email <small>*</small></label>
                            <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="template-contactform-phone">Phone Number <small>*</small></label>
                            <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="template-contactform-subject">Subject <small>*</small></label>
                            <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <label for="template-contactform-message">Message <small>*</small></label>
                            <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                        </div>

                        <div class="col-12 form-group d-none">
                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                        </div>

                        <input type="hidden" name="prefix" value="template-contactform-">

                    </form>

                </div>

            </div><!-- Contact Form Overlay End -->
        </div>

    </div>

    <!-- Google Map
    ============================================= -->
    <section class="gmap" id="gmap"></section>

</section>
@endsection


@section('customJS')
<script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>

<script>
    function myMap() {
        var location = new google.maps.LatLng(3.197177099999999,101.74216219999994);

        var mapProp= {
            center:location,
            zoom:20,
        };
        var map=new google.maps.Map(document.getElementById("gmap"),mapProp);

        var marker = new google.maps.Marker({
            position: location,
            animation:google.maps.Animation.BOUNCE,
        });

        var infowindow = new google.maps.InfoWindow({
            content:'<strong><b>MantaSoft Sdn Bhd</b></strong><br>' +
                    '27-2, Jalan Wangsa Delima 13,<br>' +
                    'Wangsa Maju, 53300 Kuala Lumpur.<br>' +
                    'Tel : +03 4144 2971 / +03 4144 4120 <br>' +
                    'Email : support@mssb.net.my',
            });
        marker.setMap(map);
        infowindow.open(map,marker);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWI8shZTMcNOZcenBRFh5yAzif5uWuTPc&callback=myMap"></script>
@endsection
