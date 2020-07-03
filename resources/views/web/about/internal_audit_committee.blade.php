@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Jawatankuasa Audit Dalaman</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Info Korporat</li>
                    <li class="active">Jawatankuasa Audit Dalaman</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="row project-d-info-area project-d-info-area-two">
        <div class="container">
            <div class="row pr-p">
                <div class="col-sm-12 pr-info">
                    <ul class="list-group">
                        <li class="list-group-item"><b>Mohammad Wahid Bin Jantan</b> - Pengerusi JAD</li>
                        <li class="list-group-item"><b>Amran Bin Zakaria</b> - Setiausaha JAD</li>
                        <li class="list-group-item"><b>Anuar Bin Adam</b></li>
                        <li class="list-group-item"><b>Meor Ahmad Hisyam Bin Abu Hassan</b></li>
                        <li class="list-group-item"><b>Mohd Zain Bin Amedan</b></li>
                      </ul>
                </div>
            </div>
        </div>
    </section>

@endsection