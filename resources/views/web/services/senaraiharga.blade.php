@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Senarai Harga Gadget</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Perkhidmatan</li>
                    <li class="active">Senarai Harga Gadget</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="row project-d-info-area project-d-info-area-two">
        <div class="container">
            <div class="row pr-details pr-details-two">
                <div class="col-sm-12">
                    <img align="center" class="img-responsive" alt="" src="{{ asset('assets/biznext/image/1.jpg') }}">
                </div>
                <div class="col-sm-12">
                    <img align="center" class="img-responsive" alt="" src="{{ asset('assets/biznext/image/2.jpg') }}">
                </div>
                <div class="col-sm-12">
                    <img align="center" class="img-responsive" alt="" src="{{ asset('assets/biznext/image/3.jpg') }}">
                </div>
            </div>
        </div>
    </section>

@endsection