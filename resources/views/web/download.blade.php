@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Muat Turun</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li class="active">Muat Turun</li>
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
                            <th scope="col">Dokumen</th>
                            <th style="text-align: right" width="150" scope="col">Saiz</th>
                            <th width="80" scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($downloads as $d)
                        <tr>
                            <td><a target="_blank" href="{{ Storage::url($d->hash_name) }}">{{ $d->name }}</a></td>
                            <td align="right">{{ Helper\Html::formatBytes($d->size) }}</td>
                            <td align="right">
                                <a class="btn btn-primary btn-sm" target="_blank" href="{{ Storage::url($d->hash_name) }}" role="button"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection