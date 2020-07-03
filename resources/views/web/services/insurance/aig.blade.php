@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Insurans Perlindungan Kemalangan</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Perkhidmatan</li>
                    <li>Insurans</li>
                    <li class="active">Insurans Perlindungan Kemalangan</li>
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
                        <img class="img-responsive" alt="" src="{{ asset('assets/biznext/image/aig-logo.jpg') }}">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 s-content">
                    <h2>Insurans Perlindungan Kemalangan Kumpulan dari AIG</h2>
                    <p>Skim Perlindungan Kemalangan Koperasi Telekom Malaysia Berhad telah mencarum di dalam polisi “Perlindungan Kemalangan Berkumpulan” untuk melindungi semua anggota koperasi. Polisi ini dibiayai sepenuhnya oleh Koperasi sebanyak RM132,591.00 untuk melindungi anggota-anggota sekiranya berlaku kemalangan sahaja. Perlindungan Kemalangan Berkumpulan ini adalah bermula pada 16 Februari 2015 dengan manfaat yang terbaik:
                    </p>
                    <ol class="custom-list">
                        <li><span>Tuntutan Kos penggunaan kenderaan ambulans sehingga RM 1,000 (mengikut terma dan syarat)</span></li>
                        <li><span>Elaun harian kemasukan ke wad / hospital bagi tempoh minima 6 jam disebabkan kemalangan sehingga 120 hari.</span></li>
                        <li><span>Tuntutan perbelanjaan “mobility Expenses” seperti alat bantuan berjalan sehingga RM 5,000 (mengikut terma dan syarat)</span></li>
                        <li><span>Perlindungan merangkumi kematian dan keilatan kekal menyeluruh berpunca daripada penyakit dan kemalangan.</span></li>
                    </ol>
                </div>
            </div>
        </div>

    </section>
    <section class="row services-wd-area services-wd services-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 s-content">
                    <h2><small><strong>BORANG TUNTUTAN KEMALANGAN AIG MALAYSIA INSURANS BERHAD</strong></small></h2>
                </div>
                <div class="col-md-8 col-sm-12 s-content">
                    <p>Sila sertakan dokumen dibawah:</p>
                    <ol class="custom-list">
                        <li><span>Salinan Discharge summary (dinyatakan sakit apa)</span></li>
                        <li><span>Salinan bil hospital (jika ada)</span></li>
                        <li><span>Salinan kad pengenalan</span></li>
                        <li><span>Salinan dokumen yang berkaitan</span></li>
                        <li><span>Salinan laporan polis (jika berkaitan)</span></li>
                        <li><span>Resit original alat bantuan (perlu pengesahan doktor)</span></li>
                        <li><span>Salinan lesen memandu</span></li>
                        <li><span>Salinan cukai jalan</span></li>
                        <li><span>Salinan slip gaji (terkini 1 bulan)</span></li>
                    </ol>
                    <p>Borang tuntutan yang telah lengkap hendaklah dipos atau dihantar melalui serahan tangan ke Pejabat Kota Mas. Pastikan Borang tuntutan yang dihantar adalah yang original bertandatangan.</p>
                </div>
                <div class="col-md-4 col-sm-12 s-content">
                    <p><i class="fa fa-download"></i> <strong>Muat Turun Borang</strong></p>
                    <ol class="custom-list">
                        <li><span><a href="{{ asset('uploads/Borang-Tuntutan-Kemalangan.pdf') }}" target="_blank">Borang Tuntutan Kemalangan AIG</a></span></li>
                        <li><span><a href="{{ asset('uploads/MEDICAL-REPORT-AIG.pdf') }}" target="_blank">Medical Report AIG</a></span></li>
                        <li><span><a href="{{ asset('uploads/Borang-IBG.pdf') }}" target="_blank">Borang IBG</a></span></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="row services-wd-area services-wd services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 s-content">
                    <h2><small><strong>Tuntutan Kematian / Manfaat Pengebumian Insurans Berkelompok Takaful</strong></small></h2>
                </div>
                <div class="col-md-8 col-sm-12 s-content">
                    <p>Waris yang ingin membuat tuntutan kematian / manfaat pengebumian perlu menyediakan dokumen seperti dibawah:</p>
                    <ol class="custom-list">
                        <li><span>Borang Tuntutan Kematian</span></li>
                        <li><span>Salinan Permit Penguburan</span></li>
                        <li><span>Salinan Sijil Kematian</span></li>
                        <li><span>Salinan Kad Pengenalan Arwah</span></li>
                        <li><span>Salinan Kad Pengenalan Waris</span></li>
                        <li><span>Salinan Sijil Nikah (Jika Berkaitan)</span></li>
                        <li><span>Original Borang Direct Payment (IBG FORM) -Sila lengkapkan Borang ini sebelum dihantar ke Pejabat Kota Mas</span></li>
                        <li><span>Statutory Declaration ETIQA</span></li>
                    </ol>
                    <p>Borang tuntutan yang telah lengkap hendaklah dihantar melalui serahan tangan ke Pejabat Kota Mas. Pastikan Borang tuntutan yang dihantar adalah yang original bertandatangan.</p>
                </div>
                <div class="col-md-4 col-sm-12 s-content">
                    <p><i class="fa fa-download"></i> <strong>Muat Turun Borang</strong></p>
                    <ol class="custom-list">
                        <li><span><a href="{{ asset('uploads/BORANG-TUNTUTAN-INSURANS-SECTION-A.pdf') }}" target="_blank">Borang Tuntutan Kematian</a></span></li>
                        <li><span><a href="{{ asset('uploads/statutory-declaration-ETIQA.pdf') }}" target="_blank">Statutory Declaration Form</a></span></li>
                        <li><span><a href="{{ asset('uploads/Borang-IBG.pdf') }}" target="_blank">Borang IBG</a></span></li>
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
                            <h2>Pertanyaan?</h2>
                            <p>Anda boleh menghubungi pegawai insurans kami di talian <strong>03 4042 7766</strong></p>
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