@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Insurans</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Perkhidmatan</li>
                    <li class="active">Insurans</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="row services-wd-area services-wd">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service_slider owl-carousel">
                        <div class="item">
                            <img class="img-responsive" alt="" src="{{ asset('assets/biznext/image/etiqa-logo.jpg') }}">
                        </div>
                        <div class="item">
                            <img class="img-responsive" alt="" src="{{ asset('assets/biznext/image/aig-logo.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 s-content">
                    <h2>Perkhidmatan Insurans Anda</h2>
                    <p>Matlamat kami adalah untuk memberi anda ketenangan fikiran apabila anda memerlukannya. Pakar Tuntutan kami terkenal dengan kecekapan dan semangat bertekad untuk memastikan penyelesaian tuntutan yang cepat.
                    </p>
                    <ul>
                        <li><span><i class="fa fa-angle-right"></i></span><a href="{{ action('Web\ServiceController@insurance', 'vehicle-insurance') }}">Insurans Kenderaan</a></li>
                        <li><span><i class="fa fa-angle-right"></i></span><a href="{{ action('Web\ServiceController@insurance', 'mutiara-plus') }}">Mutiara Plus Takaful Etiqa</a></li>
                      <!--  <li><span><i class="fa fa-angle-right"></i></span><a href="{{ action('Web\ServiceController@insurance', 'accident-coverage') }}">Insurans Perlindungan Kemalangan AIG</a></li>
                    -->
                    </ul>
                </div>
            </div>
        </div>

    </section>
@endsection