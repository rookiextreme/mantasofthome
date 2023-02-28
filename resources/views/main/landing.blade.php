@extends('main.layouts.main')

@section('customCSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/include/rs-plugin/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/include/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('templates/include/rs-plugin/css/navigation.css') }}">
@endsection

@section('slider')
<section id="slider" class="slider-element revslider-wrap h-auto include-header">

    <div class="rev_slider_wrapper" style="background:#aaa;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_31_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>	<!-- SLIDE  -->
                <li class="dark" data-index="rs-101" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="include/rs-plugin/demos/assets/images/100x50_waterfal.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px transparent">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('images/mantasoft/slider/first.jpeg') }}"  alt="Image"  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-101-layer-13"
                         data-x="['left','left','left','left']" data-hoffset="['250','171','39','17']"
                         data-y="['top','top','top','top']" data-voffset="['779','693','847','630']"
                                    data-fontweight="['100','600','600','600']"
                        data-width="['493','490','490','312']"
                        data-height="['216','222','222','293']"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-slicey_offset="20"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"

                        data-frames='[{"delay":300,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-101-layer-6"
                         data-x="['left','left','left','left']" data-hoffset="['141','81','48','19']"
                         data-y="['top','top','top','top']" data-voffset="['254','215','270','211']"
                                    data-fontweight="['100','600','600','600']"
                        data-width="['281','257','140','75']"
                        data-height="['345','343','250','127']"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-slicey_offset="10"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"

                        data-frames='[{"delay":350,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-101-layer-5"
                         data-x="['left','left','left','left']" data-hoffset="['687','574','469','301']"
                         data-y="['top','top','top','top']" data-voffset="['248','223','281','208']"
                                    data-width="['338','308','140','94']"
                        data-height="['621','602','787','542']"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-slicey_offset="10"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"

                        data-frames='[{"delay":400,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-101-layer-12"
                         data-x="['left','left','left','left']" data-hoffset="['851','688','551','355']"
                         data-y="['top','top','top','top']" data-voffset="['149','141','222','162']"
                                    data-width="['339','329','226','77']"
                        data-height="['809','662','867','569']"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-slicey_offset="20"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"

                        data-frames='[{"delay":450,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-101-layer-1"
                         data-x="['left','left','left','left']" data-hoffset="['-54','-22','-4','-23']"
                         data-y="['top','top','top','top']" data-voffset="['195','174','242','187']"
                                    data-width="['396','278','133','90']"
                        data-height="['762','664','779','564']"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-slicey_offset="20"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"

                        data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 9;background-color:rgba(0, 0, 0, 0.5);"> </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-101-layer-14"
                         data-x="['left','left','left','left']" data-hoffset="['992','835','644','413']"
                         data-y="['top','top','top','top']" data-voffset="['104','95','156','119']"
                                    data-width="['756','404','242','150']"
                        data-height="['810','787','1038','654']"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-slicey_offset="30"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"

                        data-frames='[{"delay":550,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10;background-color:rgba(0, 0, 0, 0.5);"> </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-101-layer-15"
                         data-x="['left','left','left','left']" data-hoffset="['-424','-195','-215','-131']"
                         data-y="['top','top','top','top']" data-voffset="['119','138','208','170']"
                                    data-width="['606','253','253','160']"
                        data-height="['762','668','829','670']"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-slicey_offset="30"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"

                        data-frames='[{"delay":600,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 11;background-color:rgba(0, 0, 0, 0.5);"> </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-101-layer-16"
                         data-x="['left','left','left','left']" data-hoffset="['822','737','534','340']"
                         data-y="['top','top','top','top']" data-voffset="['459','385','536','350']"
                                    data-width="['953','501','502','325']"
                        data-height="['464','431','661','400']"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-slicey_offset="40"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"

                        data-frames='[{"delay":650,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);"> </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-101-layer-17"
                         data-x="['left','left','left','left']" data-hoffset="['952','862','643','408']"
                         data-y="['top','top','top','top']" data-voffset="['588','498','676','449']"
                                    data-width="['873','404','405','366']"
                        data-height="['462','401','571','343']"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-slicey_offset="60"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"

                        data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 13;background-color:rgba(0, 0, 0, 0.5);"> </div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-101-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-48','-48','-48','-38']"
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"

                        data-type="text"
                        data-responsive_offset="on"

                        data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 14; white-space: nowrap; font-size: 17px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100);font-family:Poppins;text-transform:uppercase;">WE ARE </div>

                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-101-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-fontsize="['50','50','40','30']"
                        data-lineheight="['60','60','50','40']"
                        data-width="['none','none','480','360']"
                        data-height="none"
                        data-whitespace="['nowrap','nowrap','normal','normal']"

                        data-type="text"
                        data-responsive_offset="on"

                        data-frames='[{"delay":400,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
                        data-textAlign="['inherit','inherit','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 15; white-space: nowrap; font-size: 70px; line-height: 60px; font-weight: 600; color: rgba(255,255,255,100);font-family:Poppins;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">MANTASOFT </div>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-101-layer-4"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['59','59','49','39']"
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"

                        data-type="text"
                        data-responsive_offset="on"

                        data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 16; white-space: nowrap; font-size: 17px; line-height: 25px; font-weight: 400; color: rgba(255,255,255,100);font-family:Poppins;">WELCOME </div>
                </li>
                <!-- SLIDE  -->
                <li class="dark" data-index="rs-102" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeOut" data-easeout="Power4.easeOut" data-masterspeed="1000"  data-thumb="include/rs-plugin/demos/assets/images/100x50_colorcar.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px #1a1336">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('templates/include/rs-plugin/demos/assets/images/colorcar.jpg')}}"  alt="Image"  data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-102-layer-7"
                         data-x="['left','left','left','left']" data-hoffset="['113','122','40','-95']"
                         data-y="['top','top','top','top']" data-voffset="['-137','27','78','54']"
                                    data-width="['973','809','809','573']"
                        data-height="['433','256','256','233']"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-slicey_offset="10"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"

                        data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 5;background-color:rgba(0, 0, 0, 0.5);"> </div>

                    <!-- LAYER NR. 14 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-102-layer-6"
                         data-x="['left','left','left','left']" data-hoffset="['26','-10','-133','-139']"
                         data-y="['top','top','top','top']" data-voffset="['252','194','190','256']"
                                    data-fontweight="['100','600','600','600']"
                        data-width="['413','413','413','279']"
                        data-height="['437','437','437','336']"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-slicey_offset="20"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"

                        data-frames='[{"delay":450,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 6;background-color:rgba(0, 0, 0, 0.5);"> </div>

                    <!-- LAYER NR. 15 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-102-layer-1"
                         data-x="['left','left','left','left']" data-hoffset="['550','486','395','240']"
                         data-y="['top','top','top','top']" data-voffset="['351','334','377','348']"
                                    data-width="['380','252','252','159']"
                        data-height="['404','309','309','291']"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-slicey_offset="30"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"

                        data-frames='[{"delay":350,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 7;background-color:rgba(0, 0, 0, 0.5);"> </div>

                    <!-- LAYER NR. 16 -->
                    <div class="tp-caption tp-shape tp-shapewrapper tp-slicey  tp-resizeme"
                         id="slide-102-layer-5"
                         data-x="['left','left','left','left']" data-hoffset="['708','588','481','312']"
                         data-y="['top','top','top','top']" data-voffset="['245','207','252','251']"
                                    data-width="['403','403','403','273']"
                        data-height="['178','178','178','157']"
                        data-whitespace="nowrap"

                        data-type="shape"
                        data-slicey_offset="40"
                        data-slicey_blurstart="inherit"
                        data-slicey_blurend="inherit"
                        data-responsive_offset="on"

                        data-frames='[{"delay":400,"speed":1000,"frame":"0","from":"sX:1;sY:1;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 8;background-color:rgba(0, 0, 0, 0.5);"> </div>

                    <!-- LAYER NR. 17 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-102-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-48','-48','-48','-38']"
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"

                        data-type="text"
                        data-responsive_offset="on"

                        data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 9; white-space: nowrap; font-size: 17px; line-height: 25px; font-weight: 600; color: rgba(255,255,255,100);font-family:Poppins;text-transform:uppercase;">Project #2 </div>

                    <!-- LAYER NR. 18 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-102-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-fontsize="['50','50','40','30']"
                        data-lineheight="['60','60','50','40']"
                        data-width="['none','none','480','360']"
                        data-height="none"
                        data-whitespace="['nowrap','nowrap','normal','normal']"

                        data-type="text"
                        data-responsive_offset="on"

                        data-frames='[{"delay":400,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 100);bc:rgb(255,255,255);bw:0 0 3px 0;"}]'
                        data-textAlign="['inherit','inherit','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 10; white-space: nowrap; font-size: 50px; line-height: 60px; font-weight: 600; color: rgba(255,255,255,100);font-family:Poppins;border-color:rgba(255, 255, 255, 0);border-style:solid;border-width:0px 0px 3px 0px;cursor:pointer;">Design Curves </div>

                    <!-- LAYER NR. 19 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-102-layer-4"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['59','59','49','39']"
                                    data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"

                        data-type="text"
                        data-responsive_offset="on"

                        data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 11; white-space: nowrap; font-size: 17px; line-height: 25px; font-weight: 400; color: rgba(255,255,255,100);font-family:Poppins;">Beautiful Photography </div>
                </li>
            </ul>
            <div class="tp-bannertimer" style="height: 10px; background: rgba(255,255,255,0.25);"></div>
        </div>
    </div><!-- END REVOLUTION SLIDER -->

</section>
@endsection

@section('content')
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
@endsection

@section('customJS')
    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="{{ asset('templates/include/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/addons/revolution.addon.slicey.min.js') }}"></script>

	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ asset('templates/include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>

	<!-- ADD-ONS JS FILES -->

	<script>
		var tpj=jQuery;
		var revapi31;
		var $ = jQuery.noConflict();

		tpj(document).ready(function() {
			if(tpj("#rev_slider_31_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_31_1");
			}else{
				revapi31 = tpj("#rev_slider_31_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"include/rs-plugin/js/",
					sliderLayout:"fullscreen",
					dottedOverlay:"none",
					delay:5500,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
                         mouseScrollReverse:"default",
						onHoverStop:"off",
						arrows: {
							style:"uranus",
							enable:true,
							hide_onmobile:false,
							hide_onleave:false,
							tmp:'',
							left: {
								h_align:"left",
								v_align:"center",
								h_offset:20,
                                v_offset:0
							},
							right: {
								h_align:"right",
								v_align:"center",
								h_offset:20,
                                v_offset:0
							}
						}
						,
						bullets: {
							enable:true,
							hide_onmobile:false,
							style:"hermes",
							hide_onleave:false,
							direction:"horizontal",
							h_align:"center",
							v_align:"bottom",
							h_offset:0,
							v_offset:20,
                            space:5,
							tmp:''
						}
					},
					responsiveLevels:[1240,1024,778,480],
					visibilityLevels:[1240,1024,778,480],
					gridwidth:[1240,1024,778,480],
					gridheight:[868,768,960,720],
					lazyType:"none",
					shadow:0,
					spinner:"off",
					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAutoWidth:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0px",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:false,
					}
				});
			}

            if(revapi31) revapi31.revSliderSlicey();

            revapi31.on("revolution.slide.onloaded",function (e) {
				setTimeout( function(){ SEMICOLON.slider.sliderDimensions(); }, 200 );
			});

			revapi31.on("revolution.slide.onchange",function (e,data) {
				SEMICOLON.slider.revolutionSliderMenu();
			});
		});	/*ready*/
	</script>
@endsection
