@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Pencapaian & Anugerah</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li>Info Korporat</li>
                    <li class="active">Pencapaian & Anugerah</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="managment-support-area sectpad recent-pr-two">
        <div class="container">
            <div class="row about_us_two">
                <div class="col-md-12 display-flex">
                    <div class="about_content-two text-left flex">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" width="150">Tahun</th>
                                <th scope="col">Anugerah</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>2003</td>
                                <td>Pemenang Hari Koperasi Negara</td>
                            </tr>
                            <tr>
                                <td>2000</td>
                                <td>Anugerah Kualiti Perdana Menteri (Sektor Sosio-Ekonomi)</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection