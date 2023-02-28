@extends('main.layouts.main')

@section('banner')
<section id="slider" class="slider-element include-header min-vh-75" style="background: url({{ asset('images/mantasoft/slider/first.jpeg') }}) center;background-repeat:no-repeat;background-size: cover; overflow: visible;">
    <div class="slider-inner flex-column justify-content-end">
        <div class="promo promo-dark promo-full landing-promo p-5 position-relative position-lg-absolute w-100" style="top: auto; bottom: 0;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8">
                        <h3 style="color:white">Meet The Team</h3>
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

            <!-- Board of Director -->
            <div class="fancy-title title-border title-center" data-animate="fadeInUp">
                <h3>Board of Director</h3>
            </div>

            <div class="row justify-content-center col-mb-50 mb-0">
                <div class="col-sm-6 col-lg-4" data-animate="fadeIn">
                    <div class="team">
                        <div class="team-image">
                            <img src="images/mantasoft/team/en-aznan.jpg">
                        </div>
                        <div class="team-desc">
                            <div class="team-title">
                                <h4><a href="#myModal1" data-lightbox="inline">Aznan Rizal Bin Mohd Shafri</a></h4>
                                <span>Executive Director</span><br>
                            </div>

                            <!-- Modal -->
                            <div class="modal1 mfp-hide" id="myModal1" >
                                <div class="block mx-auto" style="background-color: #FFF; max-width: 500px;">
                                    <div class="center" style="padding: 50px;">
                                        <img src="images/mantasoft/team/en-aznan.jpg">
                                        <br><br>
                                        <p class="nobottommargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quos, facilis esse rem dicta dignissimos eligendi earum sapiente ipsam iure vel deserunt? Soluta doloremque aspernatur quis asperiores numquam placeat dolore.</p>
                                    </div>
                                    <div class="section center nomargin" style="padding: 30px; background-color: #FFF;">
                                        <a href="#" class="button" onClick="$.magnificPopup.close();return false;">Close</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4" data-animate="fadeIn">
                    <div class="team">
                        <div class="team-image">
                            <img src="images/mantasoft/team/dato-faizal.jpg">
                        </div>
                        <div class="team-desc">
                            <div class="team-title">
                                <h4><a href="#myModal2" data-lightbox="inline">Faizal Bin Jamat</a></h4>
                                <span>Chief Executive Officer</span><br>
                            </div>

                            <!-- Modal -->
                            <div class="modal2 mfp-hide" id="myModal2" >
                                <div class="block mx-auto" style="background-color: #FFF; max-width: 500px;">
                                    <div class="center" style="padding: 50px;">
                                        <img src="images/mantasoft/team/dato-faizal.jpg">
                                        <br><br>
                                        <p class="nobottommargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quos, facilis esse rem dicta dignissimos eligendi earum sapiente ipsam iure vel deserunt? Soluta doloremque aspernatur quis asperiores numquam placeat dolore.</p>
                                    </div>
                                    <div class="section center nomargin" style="padding: 30px; background-color: #FFF;">
                                        <a href="#" class="button" onClick="$.magnificPopup.close();return false;">Close</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <!-- Head Of Department -->
            <div class="fancy-title title-border title-center" data-animate="fadeInUp">
                <h3>Head Of Department</h3>
            </div>

            <div class="row justify-content-center col-mb-50 mb-0">
                <div class="col-lg-3 col-md-6" data-animate="fadeIn">
                    <div class="team">
                        <div class="team-image">
                            <img src="images/mantasoft/team/en-faiz.jpg">
                        </div>
                        <div class="team-desc">
                            <div class="team-title"><h4><a href="#myModal3" data-lightbox="inline">Wan Ahmad Faiz<br>Mohd Zaki</a></h4>
                            <span>Head of<br>Project Management Office</span><br></div>
                        </div>

                        <!-- Modal -->
                        <div class="modal3 mfp-hide" id="myModal3" >
                            <div class="block mx-auto" style="background-color: #FFF; max-width: 500px;">
                                <div class="center" style="padding: 50px;">
                                    <img src="images/mantasoft/team/en-faiz.jpg">
                                    <br><br>
                                    <p class="nobottommargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quos, facilis esse rem dicta dignissimos eligendi earum sapiente ipsam iure vel deserunt? Soluta doloremque aspernatur quis asperiores numquam placeat dolore.</p>
                                </div>
                                <div class="section center nomargin" style="padding: 30px; background-color: #FFF;">
                                    <a href="#" class="button" onClick="$.magnificPopup.close();return false;">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-animate="fadeIn">
                    <div class="team">
                        <div class="team-image">
                            <img src="images/mantasoft/team/en-syaiful.jpg">
                        </div>
                        <div class="team-desc">
                            <div class="team-title"><h4><a href="#myModal4" data-lightbox="inline">Syaiful Erwan<br>Abd Wahab</a></h4>
                            <span>Head of<br>Technical Engineering and Services</span><br></div>
                        </div>

                        <!-- Modal -->
                        <div class="modal4 mfp-hide" id="myModal4" >
                            <div class="block mx-auto" style="background-color: #FFF; max-width: 500px;">
                                <div class="center" style="padding: 50px;">
                                    <img src="images/mantasoft/team/en-syaiful.jpg">
                                    <br><br>
                                    <p class="nobottommargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quos, facilis esse rem dicta dignissimos eligendi earum sapiente ipsam iure vel deserunt? Soluta doloremque aspernatur quis asperiores numquam placeat dolore.</p>
                                </div>
                                <div class="section center nomargin" style="padding: 30px; background-color: #FFF;">
                                    <a href="#" class="button" onClick="$.magnificPopup.close();return false;">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-animate="fadeIn">
                    <div class="team">
                        <div class="team-image">
                            <img src="images/mantasoft/team/en-dicky.jpg">
                        </div>
                        <div class="team-desc">
                            <div class="team-title"><h4><a href="#myModal5" data-lightbox="inline">Dicky Zulkarnain<br>Mohd Taufix</a></h4>
                            <span>Head of<br>Sales</span><br></div>
                        </div>

                        <!-- Modal -->
                        <div class="modal5 mfp-hide" id="myModal5" >
                            <div class="block mx-auto" style="background-color: #FFF; max-width: 500px;">
                                <div class="center" style="padding: 50px;">
                                    <img src="images/mantasoft/team/en-dicky.jpg">
                                    <br><br>
                                    <p class="nobottommargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quos, facilis esse rem dicta dignissimos eligendi earum sapiente ipsam iure vel deserunt? Soluta doloremque aspernatur quis asperiores numquam placeat dolore.</p>
                                </div>
                                <div class="section center nomargin" style="padding: 30px; background-color: #FFF;">
                                    <a href="#" class="button" onClick="$.magnificPopup.close();return false;">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <!-- Sambungan Head Of Department -->
            <div class="row justify-content-center col-mb-50 mb-0">
                <div class="col-lg-3 col-md-6" data-animate="fadeIn">
                    <div class="team">
                        <div class="team-image">
                            <img src="images/mantasoft/team/en-mohammad.jpg">
                        </div>
                        <div class="team-desc">
                            <div class="team-title"><h4><a href="#myModal6" data-lightbox="inline">Mohammad bin<br>Awaludin</a></h4>
                            <span>Head of<br>Software Development</span><br></div>
                        </div>

                        <!-- Modal -->
                        <div class="modal6 mfp-hide" id="myModal6" >
                            <div class="block mx-auto" style="background-color: #FFF; max-width: 500px;">
                                <div class="center" style="padding: 50px;">
                                    <img src="images/mantasoft/team/en-mohammad.jpg">
                                    <br><br>
                                    <p class="nobottommargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quos, facilis esse rem dicta dignissimos eligendi earum sapiente ipsam iure vel deserunt? Soluta doloremque aspernatur quis asperiores numquam placeat dolore.</p>
                                </div>
                                <div class="section center nomargin" style="padding: 30px; background-color: #FFF;">
                                    <a href="#" class="button" onClick="$.magnificPopup.close();return false;">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-animate="fadeIn">
                    <div class="team">
                        <div class="team-image">
                            <img src="images/mantasoft/team/puan-syu.jpg">
                        </div>
                        <div class="team-desc">
                            <div class="team-title"><h4><a href="#myModal7" data-lightbox="inline">Nur Syuhada<br>Ahmad Nasir</a></h4>
                            <span>Head of<br>Finance and Human Resource</span><br></div>
                        </div>

                        <!-- Modal -->
                        <div class="modal7 mfp-hide" id="myModal7" >
                            <div class="block mx-auto" style="background-color: #FFF; max-width: 500px;">
                                <div class="center" style="padding: 50px;">
                                    <img src="images/mantasoft/team/puan-syu.jpg">
                                    <br><br>
                                    <p class="nobottommargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quos, facilis esse rem dicta dignissimos eligendi earum sapiente ipsam iure vel deserunt? Soluta doloremque aspernatur quis asperiores numquam placeat dolore.</p>
                                </div>
                                <div class="section center nomargin" style="padding: 30px; background-color: #FFF;">
                                    <a href="#" class="button" onClick="$.magnificPopup.close();return false;">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>


            <!-- Manager -->
            <div class="fancy-title title-border title-center" data-animate="fadeInUp">
                <h3>Manager</h3>
            </div>

            <div class="row justify-content-center col-mb-50 mb-0">
                <div class="col-md-3"></div>
                <div class="col-lg-3 col-md-6" data-animate="fadeIn">
                    <div class="team">
                        <div class="team-image">
                            <img src="images/mantasoft/team/en-bad.jpg">
                        </div>
                        <div class="team-desc">
                        <div class="team-title"><h4><a href="#myModal9" data-lightbox="inline">Badrul Hisham<br>Ahmad</a></h4>
                            <span>Manager<br>Technical Consultant - Presale</span></div>
                        </div>

                        <!-- Modal -->
                        <div class="modal9 mfp-hide" id="myModal9" >
                            <div class="block mx-auto" style="background-color: #FFF; max-width: 500px;">
                                <div class="center" style="padding: 50px;">
                                    <img src="images/mantasoft/team/en-bad.jpg">
                                    <br><br>
                                    <p class="nobottommargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quos, facilis esse rem dicta dignissimos eligendi earum sapiente ipsam iure vel deserunt? Soluta doloremque aspernatur quis asperiores numquam placeat dolore.</p>
                                </div>
                                <div class="section center nomargin" style="padding: 30px; background-color: #FFF;">
                                    <a href="#" class="button" onClick="$.magnificPopup.close();return false;">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</section>
@endsection
