@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Carta Organisasi</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Info Korporat</li>
                    <li class="active">Carta Organisasi</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="row project-d-info-area project-d-info-area-two">
        <div class="container">
            <div class="row pr-details pr-details-two">
                <div class="col-sm-12">
                    <img align="center" class="img-responsive" alt="" src="{{ asset('images/org_chart_101219.jpg') }}">
                </div>
            </div>
        </div>
    </section>

@endsection