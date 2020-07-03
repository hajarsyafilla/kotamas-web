@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Ar-Rahnu</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Perkhidmatan</li>
                    <li class="active">Ar-Rahnu</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="row services-wd-area services-wd">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="services-img">
                        <img class="img-responsive" alt="" src="{{ asset('assets/biznext/image/arrahnu.jpg') }}">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 s-content">
                    <h2>Apa Itu Ar-Rahnu?</h2>
                    <p>Ar-Rahnu adalah satu produk pinjaman jangka pendek (Qardh) di mana pelanggan akan mencagar Emas atau mana-mana sekuriti yang diterima (dirujuk sebagai Emas) sebagai cagaran bagi pinjaman yang diberikan. <br /><br />
                        Skim Pajak Gadai Islam ini berkonsepkan:
                    </p>
                    <ul>
                        <li><span><i class="fa fa-angle-right"></i></span>Qard (pinjaman tanpa faedah)</li>
                        <li><span><i class="fa fa-angle-right"></i></span>Wadi`ah Yad Dhamanah (simpanan dengan jaminan ke atas barang gadaian)</li>
                        <li><span><i class="fa fa-angle-right"></i></span>Ujrah (upah simpan)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="row services-wd-area services-wd services-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 s-content">
                    <h2>Syarat-Syarat Gadaian</h2>
                    <ul>
                        <li><span><i class="fa fa-angle-right"></i></span>Warganegara dan bukan warganegara Malaysia</li>
                        <li><span><i class="fa fa-angle-right"></i></span>Pemastautin tetap</li>
                        <li><span><i class="fa fa-angle-right"></i></span>Berumur 18 tahun ke atas</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 s-content">
                    <h2>Keistimewaan</h2>
                    <ul>
                        <li><span><i class="fa fa-angle-right"></i></span>Bebas riba’</li>
                        <li><span><i class="fa fa-angle-right"></i></span>Tiada yuran proses</li>
                        <li><span><i class="fa fa-angle-right"></i></span>Kadar upah simpan dikira secara harian</li>
                        <li><span><i class="fa fa-angle-right"></i></span>Tempoh gadaian yang panjang</li>
                        <li><span><i class="fa fa-angle-right"></i></span>Jaminan keselamatan barang gadaian dengan pelindungan Takaful</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="row services-wd-area services-wd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 s-content">
                    <h2>Margin Gadaian</h2>
                    <ul>
                        <li><span><i class="fa fa-angle-right"></i></span>65% daripada nilai marhun (pelanggan baru)</li>
                        <li><span><i class="fa fa-angle-right"></i></span>70% daripada nilai marhun (pelanggan berulang)</li>
                    </ul>
                    <h2 class="mt-30">Had Gadaian</h2>
                    <ul>
                        <li><span><i class="fa fa-angle-right"></i></span>Had gadaian sehingga RM30,000 sehari</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 s-content">
                    <h2>Tempoh Gadaian</h2>
                    <ul>
                        <li><span><i class="fa fa-angle-right"></i></span>Ar-Rahnu maksimum 6 bulan dengan tempoh lanjutan</li>
                        <li><span><i class="fa fa-angle-right"></i></span>Az-Zahab maksimum 3 tahun (bayaran secara ansuran)</li>
                    </ul>
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
                            <h2>Skim Az-Zahab Premium</h2>
                            <p>Skim Ar-Rahnu dan Az-Zahab sebelum ini ditawarkan pada had pinjaman sehari sebanyak RM150,000 dan di naikkan dengan tambahan skim Az-Zahab Premium adalah sebanyak RM500,000. Pelancaran Skim Az-Zahab Premium berkuatkuasa pada 22 Oktober 2017.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="baner-btn slide-Link">
                        <a class="btn btn-primary btn-h" style="width: 200px" href="{{ action('Web\HomeController@contactUsArRahnu') }}">Maklumat Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection