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
    <section class="row services-wd-area services-wd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 s-content mt-25" style="">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Tajuk</th>
                            <th style="text-align: center" width="120" scope="col">Tarikh</th>
                            <th width="80" scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $n)
                        <tr>
                            <td><a href="{{ action('Web\NewsController@view', $n->id) }}">{{ $n->title }}</a></td>
                            <td align="center">{{ $n->published_at }}</td>
                            <td align="right">
                                <a class="btn btn-primary btn-sm" href="{{ action('Web\NewsController@view', $n->id) }}" role="button"><i class="fa fa-info-circle"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @if($news->isEmpty())
                            <tr>
                                <td colspan="3">Tiada berita untuk dipaparkan.</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection