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
                <div class="">
                    @foreach($dept->personnels as $p)
                        <div class=" col-lg-4 col-md-6 col-sm-6 mb-20">
                            <div class="card-personnel">
                                <img src="{{ asset('kotamas_personnel/' . $p->image) }}" alt="Avatar" style="width:100%">
                                <div class="card-personnel-container">
                                    <p>
                                        <span style="font-size: 13px"><strong>{{ $p->name }}</strong></span><br />
                                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;{{ $p->email }}<br />
                                        <i class="fa fa-phone"></i>&nbsp;&nbsp; {{ ($p->contact_no) ? $p->contact_no : 'N/A' }}
                                    </p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection