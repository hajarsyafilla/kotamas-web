@extends('layouts.web')

@section('content')
    <!-- Breadcrumb Area -->
    <section class="row header-breadcrumb">
        <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            <img src="{{ asset('assets/biznext/image/pexels/arch_building.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="row m0 page-cover">
                <h2 class="page-cover-tittle">Dasar Privasi</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li class="active">Dasar Privasi</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="row services-wd-area services-wd">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 s-content">
                    <p>Halaman ini menerangkan dasar privasi yang merangkumi penggunaan dan perlindungan maklumat yang dikemukakan oleh pengunjung.</p>
                    <h2 class="mt-25">Maklumat Yang Dikumpul</h2>
                    <p>Tiada maklumat peribadi akan dikumpul semasa anda melayari laman web ini kecuali maklumat yang dikemukakan oleh anda melalui e-mel.</p>
                    <h2 class="mt-25">Apa yang akan berlaku jika kami membuat pautan kepada laman web yang lain?</h2>
                    <p>Laman web ini mempunyai pautan ke laman web lain. Dasar privasi ini hanya terpakai untuk laman web ini sahaja. Perlu diingatkan bahawa laman web yang terdapat dalam pautan mungkin mempunyai dasar privasi yang berbeza dan pengunjung dinasihatkan supaya meneliti dan memahami dasar privasi bagi setiap laman web yang dilayari.</p>
                    <h2 class="mt-25">Pindaan Dasar</h2>
                    <p>Sekiranya dasar privasi dipinda, pindaan tersebut akan dikemas kini di halaman ini. Dengan melayari halaman ini dengan maklumat yang dikemas kini, cara penggunaan laman ini dan bagaimana maklumat dikongsi bersama pihak yang lain di dalam keadaan tertentu.</p>
                </div>
            </div>
        </div>
    </section>

@endsection