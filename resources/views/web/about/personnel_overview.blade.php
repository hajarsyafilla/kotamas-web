@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Barisan Pentadbiran</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Info Korporat</li>
                    <li>Barisan Pentadbiran</li>
                    <li class="active">{{ ($dept) ? $dept->name : 'Bahagian Pentadbiran' }}</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="service_area_three sectpad">
        <div class="container">
            <div class="row">
                <div class="col-md-3 sr_sidebar">
                    <div class="sr_sidebar_tab">
                        <h2 class="sidebar_title">Bahagian</h2>
                        <ul class="nav nav-tabs single-services-menu" role="tablist">
                            @foreach($depts as $d)
                                <li class="{{ Helper\Html::setActive($d->id, ($dept) ? $dept->id : 0) }}"><a href="{{ action('Web\AboutController@personnel', $d->id) }}">{{ $d->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content tab_service_content">
                        <div role="tabpanel" class="tab-pane active" id="serviceNo-2">
                            <div class="row pr-details pr-details-two">
                                <div class="col-sm-12">
                                    <div class="" align="center">
                                        <img class="img-responsive" alt="" src="{{ asset('assets/biznext/image/uploads/best-768x754.jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row pr-p">
                                <div class="col-sm-12 pr-info mt-20" align="center">
                                    <p><strong>Duduk dari Kiri</strong><br />Abd Razak Bin Yatim (HOD Admin), Adnan Bin Mohd Amer (General Manager), Ahmad Nizam Bin Ismail (HOD Insurans)</p>
                                    <p><strong>Berdiri dari Kiri</strong><br />Mahanum Binti A. Rahim , Ahmad Nizam Bin Ismail (HOD Insurance),  Nurul Husna Binti Abdul Razak (HOD Credit Control), Yuslinda Binti Yusoff (HOD Property & Development), Mohd Alhaqraqqiib Bin Mohd Hata (Public Relationship Officer), Nursyahirah Binti Mahmood (Personal Assistant), Nurul Nadia Binti Abd Kudus (HOB Ar-Rahnu), Fatin Syafiah Amirah Binti Mohd Fizi (Eksekutif Business Developement)</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection