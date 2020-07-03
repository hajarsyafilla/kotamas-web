@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/construction.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Under Construction</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li class="active">Under Construction</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="row skills-area">
        <div class="container">
            <div class="row m0 section_header">
                <h2>Check back later!</h2>
                <span></span>
            </div>
            <p class="recent-p">This page is under construction. We'll be here soon with new awesome content. Stay tuned!</p>
        </div>
    </section>
@endsection