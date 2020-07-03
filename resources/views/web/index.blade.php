@extends('layouts.web')

@section('content')
    <!--================Awesome Slider Area =================-->
    <section class="main_slider_area">
        <div id="business_slider" class="rev_slider" data-version="5.4.1">
            <ul>
                @foreach($banners as $b)
                <li data-index="rs-{{ $b->id }}" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{ Storage::url($b->file_name) }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina alt="">
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    <!--================End Awesome Slider Area =================-->

    <section class="fiz_video_area">
        <div class="container">
            <div class="video_content text-center">
                <h3><span>Koperasi Telekom Malaysia Berhad</span> komited menyediakan perkhidmatan yang terbaik kepada para anggota. Pelbagai program telah dijalankan bagi memastikan anggota dapat <span>menikmati keistimewaan, ganjaran dan kelebihan</span> sebagai anggota koperasi.</h3>
                
            </div>
        </div>
    </section>
    <section class="row managment-support-area sectpad recent-pr">
        <div class="container">
            <div class="row about_us_two">
                <div class="col-md-6 col-sm-12 display-flex">
                    <div class="about_content-two about_content_three text-left flex">
                        <h2>Teguh, Mampan dan Dinamik</h2>
                        <p>Ke arah Koperasi yang unggul dengan memberikan tumpuan utama kepada kemudahan perkhidmatan berkualiti kepada anggota dan melibatkan diri dengan aktif dalam aktiviti ekonomi selaras dengan pengiktirafan koperasi sebagai sektor ketiga selepas sektor awam dan swasta di dalam memacu pembangunan ekonomi negara.</p>
                        <a href="#" class="theme_btn">Visi & Misi</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <a href="#"><img src="{{ asset('uploads/kotamas_dihati.jpg') }}" alt="..."></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="new_service_area bg_color_three">
        <div class="container">
            <div class="section_title_three title_gr text-center mb-60">
                <h2>Perkhidmatan <span>Kami</span></h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="service_flipbox service_flipbox_two">
                        <div class="flipbox_font">
                            <div class="inner_flip">
                                <img src="{{ asset('assets/biznext') }}/image/new/code.png" alt="">
                                <h4>Insurans</h4>
                                <p>Perkhidmatan insurans kenderaan dan insurans berkelompok Mutiara Plus Takaful Etiqa</p>
                            </div>
                        </div>
                        <div class="flipbox_back">
                            <div class="inner_flip">
                                <h4>Insurans</h4>
                                <p>Kami menyediakan perkhidmatan insurans kenderaan dan insurans berkelompok Mutiara Plus Takaful Etiqa.</p>
                                <a href="{{ action('Web\ServiceController@insurance') }}">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service_flipbox service_flipbox_two">
                        <div class="flipbox_font">
                            <div class="inner_flip">
                                <img src="{{ asset('assets/biznext') }}/image/new/design.png" alt="">
                                <h4>Pembiayaan</h4>
                                <p>Perkhidmatan pembiayaan untuk ahli dengan kadar bayaran balik yang rendah.</p>
                            </div>
                        </div>
                        <div class="flipbox_back">
                            <div class="inner_flip">
                                <h4>Pembiayaan</h4>
                                <p>Kami menyediakan perkhidmatan pembiayaan untuk ahli dengan kadar bayaran balik yang rendah.</p>
                                <a href="{{ action('Web\ServiceController@financing') }}">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service_flipbox service_flipbox_two">
                        <div class="flipbox_font">
                            <div class="inner_flip">
                                <img src="{{ asset('assets/biznext') }}/image/new/features.png" alt="">
                                <h4>Ar-Rahnu</h4>
                                <p>Pajak gadai Ar-Rahnu menawarkan pinjaman tunai segera dan mudah.</p>
                            </div>
                        </div>
                        <div class="flipbox_back">
                            <div class="inner_flip">
                                <h4>Ar-Rahnu</h4>
                                <p>Pajak Gadai-i Ar-Rahnu menawarkan pinjaman tunai segera dan mudah dengan kadar upah simpan yang rendah berdasarkan 3 prinsip Syariah.</p>
                                <a href="{{ action('Web\ServiceController@arrahnu') }}">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service_flipbox service_flipbox_two">
                        <div class="flipbox_font">
                            <div class="inner_flip">
                                <img src="{{ asset('assets/biznext') }}/image/new/settings.png" alt="">
                                <h4>Banglo</h4>
                                <p>Kemudahan penginapan untuk anggota-anggota koperasi beristirehat bersama keluarga.</p>
                            </div>
                        </div>
                        <div class="flipbox_back">
                            <div class="inner_flip">
                                <h4>Banglo</h4>
                                <p>Kemudahan penginapan untuk anggota-anggota koperasi beristirehat bersama keluarga.</p>
                                <a href="{{ action('Web\ServiceController@accommodation') }}">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recent-news-area -->
    <section class="row sectpad Recent-news-area key-bg">
        <div class="container">
            <div class="section_title_three text-center mb-60">
                <h2>Berita & Aktiviti <span>Terkini</span></h2>
            </div>
            <div class="row Recent-content">
                @foreach($news as $n)
                <div class="col-sm-4 clo-xs-12">
                    <div class="recent recent_two">
                        <div class="recent-news-text">
                            <a href="{{ action('Web\NewsController@view', $n->id) }}">
                                <h4>{{ $n->title }}</h4>
                            </a>
                            <h6>{{ $n->published_at }}</h6>
                            <p>{{ $n->short_description }}</p>
                            <a href="{{ action('Web\NewsController@view', $n->id) }}">Selanjutnya <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- brand-logo -->
@endsection

@section('js')
    <script>
        
        $(function() {
            @if(Storage::exists('landing_poster.jpg'))
            showLandingPoster();
            @endif
        });

        function showLandingPoster() {
            if (!sessionStorage.alreadyClicked) {
                $.fancybox.open({
                    src  : '{{ Storage::url('landing_poster.jpg') }}',
                    type : 'image',
                });
                sessionStorage.alreadyClicked = 1;
            }
        }

    </script>
@endsection