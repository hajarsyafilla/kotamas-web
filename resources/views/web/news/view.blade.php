@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Berita & Aktiviti</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li class="active">Berita & aktiviti</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="blog-area sectpad blog-details">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 blogs">
                    <article class="items leading-0">
                        <div class="blog-content">
                            <div class="media">
                                <div class="media-body">
                                    <h2><a href="#">{{ $news->title }}</a></h2>
                                    <ul class="post-meta nav">
                                        <li><i class="fa fa-user"></i><a href="#">Administrator</a></li>
                                        <li><i class="fa fa-calendar"></i><a href="#">{{ $news->published_at }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <hr />
                            {!! $news->content !!}
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

@endsection