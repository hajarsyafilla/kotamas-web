@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Penafian</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li class="active">Penafian</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="row services-wd-area services-wd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 s-content">
                    <p>Koperasi Telekom Malaysia Berhad (Kota Mas) tidak bertanggungjawab terhadap sebarang kehilangan atau kerosakan yang dialami kerana menggunakan maklumat di dalam laman ini.</p>
                </div>
            </div>
        </div>
    </section>

@endsection