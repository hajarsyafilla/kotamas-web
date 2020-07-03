@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Anak Syarikat</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Info Korporat</li>
                    <li class="active">Anak Syarikat</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="managment-support-area sectpad recent-pr-two">
        <div class="container">
            <div class="row about_us_two">
                <div class="col-md-12 display-flex">
                    <div class="about_content-two text-left flex">
                        <strong>Senarai syarikat yang berdaftar sebagai anak syarikat adalah:</strong>
                        <ul class="list-group mt-20">
                            <li class="list-group-item">Kota Mas Trading & Services Sdn. Bhd.</li>
                            <li class="list-group-item">Kota Mas Travel & Tours Sdn. Bhd</li>
                            <li class="list-group-item">Kota Mas Training & Consultancy Sdn. Bhd.</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection