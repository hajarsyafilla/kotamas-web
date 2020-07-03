@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/apartment.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Hubungi Kami</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Hubungi Kami</li>
                    <li class="active">Ar-Rahnu X'Change</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="managment-support-area sectpad recent-pr-two">
        <div class="container">
            <div class="row about_us_two">
                <div class="col-md-6 display-flex">
                    <div class="about_content-two text-left flex">
                        <h2>AR-RAHNU X’CHANGE<br /><small>PANDAN INDAH </small></h2>
                        <p>Koperasi Telekom Malaysia Berhad,<br />
                            No 3-G, Jalan Perubatan 2, Taman Pandan Indah, <br/>
                            55100 Kuala Lumpur.</p>
                        <p>
                            <i class="fa fa-phone"></i> 03 – 4295 4842<br />
                            <i class="fa fa-fax"></i> 03 – 4295 4849
                        </p>
                    </div>
                </div>
                <div class="col-md-6 display-flex">
                    <div class="about_content-two text-left flex">
                        <h2>AR-RAHNU X’CHANGE<br /><small>PANTAI HILLPARK CENTRIO </small></h2>
                        <p>Koperasi Telekom Malaysia Berhad,<br/>
                            C-1-18 & C-1-19 No 1, Jalan Pantai Murni,<br />
                            59200 Kuala Lumpur.</p>
                        <p>
                            <i class="fa fa-phone"></i> 03 – 2241 9414<br />
                            <i class="fa fa-fax"></i> N/A
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection