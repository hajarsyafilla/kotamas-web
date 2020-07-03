@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Profil Korporat</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Info Korporat</li>
                    <li class="active">Profil Korporat</li>
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
                        <h2>Visi</h2>
                        <p>Menjadikan Kota Mas sebagai sebuah Koperasi yang unggul dengan memberikan tumpuan utama kepada kemudahan perkhidmatan berkualiti kepada anggota dan melibatkan diri dengan aktif dalam aktiviti ekonomi selaras dengan pengiktirafan koperasi sebagai sektor ketiga selepas sektor awam dan swasta di dalam memacu pembangunan ekonomi negara.</p>
                    </div>
                </div>
            </div>
            <div class="row about_us_two">
                <div class="col-md-12 display-flex">
                    <div class="about_content-two text-left flex">
                        <h2>Misi</h2>
                        <p>Misi kami ialah untuk menjadi Kota Mas sebagai sebuah Koperasi yang sentiasa berdaya maju dan berdaya saing melalui peningkatan dan mobilisasi sumber kekuatan yang ada secara optimum. Mempertingkatkan pencapaian Kota Mas sebagai sebuah Koperasi yang teguh, mampan dan dinamik secara berterusan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection