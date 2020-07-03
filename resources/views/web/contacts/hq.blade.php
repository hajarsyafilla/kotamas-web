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
                    <li class="active">Ibu Pejabat</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="row contact-area">
        <div class="container">
            <div class="row m0 section_header">
                <h2>Bagaimana kami boleh membantu anda?</h2>
                <span></span>
            </div>
            <p class="recent-p">Hubungi Urusetia Koperasi Telekom Malaysia Berhad (KOTA MAS) di talian +603 4042 7766 atau emel menggunakan borang <strong>Hubungi Kami</strong> di bawah.</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="row contact-form-box">
                        <form action="#" id="contactForm" class="row contact-form">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="input_label">
                                        <input for="range" type="text" id="name" name="name" placeholder="Nama" required class="form-control">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name" class="input_label">
                                        <input type="email" id="email" name="email" placeholder="Emel" required class="form-control">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name" class="input_label">
                                        <input type="tel" id="phone" name="phone" placeholder="Telefon" class="form-control">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name" class="input_label">
                                        <input type="text" id="subject" name="subject" placeholder="Tajuk" required class="form-control">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <div class="message">
                                    <label for="name" class="input_label">
                                        <textarea name="message" id="message" class="form-control" placeholder="Mesej"></textarea>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12"><button type="submit" class="btn submit btn-h post">Hantar</button></div>
                        </form>
                        <div id="success">Your message succesfully sent!</div>
                        <div id="error">Opps! There is something wrong. Please try again</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="mb-20">Ibu Pejabat</h3>
                    <ul>
                        <li>
                            <div class="location_address fleft">
                                <strong>Koperasi Telekom Malaysia Berhad</strong><br />
                                No. 94, Tingkat 3, Wisma Kotamas, <br />
                                Kompleks Damai, Jalan Dato’ Haji Eusoff, <br />
                                50400 Kuala Lumpur.
                            </div>
                        </li>
                    </ul>
                    <hr />
                    <ul>
                        <li style="margin-top:10px">
                            <i class="fa fa-envelope" aria-hidden="true"></i> <strong>Emel</strong>
                            <div class="location_address fleft">
                                admin@kotamas.com.my
                            </div>
                        </li>
                        <li style="margin-top:10px">
                            <i class="fa fa-phone"></i> <strong>Telefon</strong>
                            <div class="location_address fleft">
                                +603 4042 7766
                            </div>
                        </li>
                        <li style="margin-top:10px">
                            <i class="fa fa-fax"></i> <strong>Faks</strong>
                            <div class="location_address fleft">
                                +603 4043 9071
                            </div>
                        </li>
                    </ul>
                    <hr />
                    <p>Untuk pertanyaan berkenaan dokumen, sila emelkan pertanyaan anda kepada <a href="mailto:admin@kotamas.com.my">admin@kotamas.com.my</a></p>
                </div>
            </div>

        </div>
    </section>

    <!--    map-->
    <section class="map">
        <div id="mapBox" class="row m0" data-lat="3.170453" data-lon="101.695277" data-zoom="18"></div>
    </section>
@endsection

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfEsT85pooeSrTNw9SwEJz96F4Bff9Ca8"></script>
    <script src="{{ asset('assets/biznext/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('assets/biznext/js/google-map.js') }}"></script>
@endsection