@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Banglo</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Perkhidmatan</li>
                    <li class="active">Banglo</li>
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
                        <img class="img-responsive" alt="" src="{{ asset('assets/biznext/image/banglo.jpg') }}">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 s-content">
                    <h2>Banglo Port Dickson</h2>
                    <p>Koperasi Telekom Malaysia Berhad menyediakan kemudahan penginapan untuk anggota-anggota koperasi beristirehat bersama keluarga. Rumah Banglo Kota Mas berdekatan dengan pantai, mempunyai 4 bilik tidur, 3 bilik air, kelengkapan perabot dan juga perkakas dapur untuk memasak.
                        Banglo ini terletak di Batu 9 1/12, Jalan Pantai, Port Dickson (berhampiran Politeknik Port Dickson).<br /><br />
                        Penempahan banglo boleh dibuat dengan <strong>Puan Nohayati binti  Mohd Noor</strong> di talian 03-4045 4822 ( Kota Mas Travel & Tours)</p>
                </div>
                <div class="col-md-12 s-content mt-25" style="padding-left: 5px">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Kadar Sewaan (1 Malam)</th>
                            <th scope="col">Anggota</th>
                            <th scope="col">Bukan Anggota</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Bukan Musim Puncak (Ahad-Khamis)</td>
                            <td>RM300</td>
                            <td>RM450</td>
                        </tr>
                        <tr>
                            <td>Musim Puncak (Jumaat hingga Sabtu, Cuti Sekolah, Malam sebelum Cuti Umum dan Cuti Umum)</td>
                            <td>RM350</td>
                            <td>RM500</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection