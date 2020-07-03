@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Jawatankuasa Negeri</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Info Korporat</li>
                    <li>Jawatankuasa Negeri</li>
                    <li class="active">Zon {{ $zone->name }}</li>
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
                        <h2 class="sidebar_title">Zon</h2>
                        <ul class="nav nav-tabs single-services-menu" role="tablist">
                            @foreach($zones as $z)
                            <li class="{{ Helper\Html::setActive($z->id, $zone->id) }}"><a href="{{ action('Web\AboutController@stateCommittee', $z->id) }}">{{ $z->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content tab_service_content">
                        <div role="tabpanel" class="tab-pane active" id="serviceNo-2">
                            @foreach($states as $s)
                            @if($s->committees->count())
                            <div class="row service_tab_slider">

                                <div class="col-md-12 display-flex">
                                    <div class="content flex">
                                        <h2>{{ $s->name }}</h2>
                                    </div>
                                </div>
                            </div>
                                <div class="row service_tab_slider mb-30">
                                    @foreach($s->committees as $c)
                                    <div class="col-md-6 display-flex">
                                        <div class="content flex">
                                            <p><strong>{{ $c->position->name }}<br />{{ $c->name }}</strong></p>
                                            <p>{{ $c->address_line_1 }}<br />
                                                {{ $c->address_line_2 }}<br />
                                                {{ $c->postcode }} {{ $c->city }}, {{ $c->state->name }}
                                            </p>
                                            <p>
                                                <i class="fa fa-phone"></i>&nbsp;&nbsp; {{ ($c->contact_no) ? $c->contact_no : 'N/A' }}<br />
                                                <i class="fa fa-envelope"></i>&nbsp;&nbsp;{{ $c->email }}
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection