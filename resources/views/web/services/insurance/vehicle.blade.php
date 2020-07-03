@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Insurans Kenderaan</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Perkhidmatan</li>
                    <li>Insurans</li>
                    <li class="active">Insurans Kenderaan</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="row services-wd-area services-wd">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="">
                        <img class="img-responsive" alt="" src="http://www.etiqa.com.my/Image/1512051961251">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 s-content">
                    <h2>Apa Yang Disertakan</h2>
                    <p>Kemalangan atau kerosakan kenderaan boleh menyebabkan anda terkandas dan kecewa. Pelan-pelan kami memastikan anda boleh kembali memandu di jalan raya tanpa kesukaran. Berikut adalah apa yang termasuk dalam pelan Insurans dan Takaful Komprehensif Kereta Persendirian:
                    </p>
                    <ol class="custom-list">
                        <li><span>Kecederaan badan dan kematian pihak ketiga</span></li>
                        <li><span>Kerugian atau kerosakan harta benda pihak ketiga</span></li>
                        <li><span>Kerugian atau kerosakan terhadap kenderaan anda akibat kebakaran yang bukan disengajakan, kecurian atau kemalangan</span></li>
                    </ol>
                </div>
            </div>
        </div>

    </section>
    <section class="row services-wd-area services-wd services-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 s-content">
                    <h2>Nikmati manfaat berikut dengan rancangan Insuran Motor dan Motor Takaful</h2>
                    <ol class="custom-list">
                        <li><span>Rebat sebanyak 5% untuk pembaharuan</span></li>
                        <li><span>Mudah dan pantas</span></li>
                        <li><span>Nilai dipersetujui</span></li>
                        <li><span>Perlindungan untuk semua pemandu</span></li>
                        <li><span>Tiada caj tambahan</span></li>
                        <li><span>Bantuan kecemasan 24-jam di jalan raya</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section-baner sectpad info-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-content">
                    <div class="media">
                        <div class="media-body texts">
                            <h2>Lindungi Kenderaan Anda Sekarang!</h2>
                            <p>Kota Mas menawarkan anda pinjaman tanpa faedah (Qardhul Hassan) untuk insurans selama 12 bulan. Sila hubungi <strong>En. Mohd Alhaqqraqiib</strong> di <strong>03-4042 7766</strong> atau emel <strong>akib@kotamas.com.my</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="baner-btn slide-Link">
                        <a class="btn btn-primary btn-h" style="width: 200px" href="{{ action('Web\HomeController@contactUs') }}">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection