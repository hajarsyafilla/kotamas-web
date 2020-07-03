<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Koperasi Telekom Malaysia Berhad</title>
    <!--    favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>
    <!--    font-->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,600italic,700italic,400italic,300,300italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,500italic,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/biznext/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/biznext/css/bootstrap-theme.min.css') }}">

    <!-- Font awesome css -->
    <link rel="stylesheet" href="{{ asset('assets/biznext/css/font-awesome.min.css') }}">

    <!-- elegant-ico- css -->
    <link rel="stylesheet" href="{{ asset('assets/biznext/vendors/elegant-icon/style.css') }}">

    <!--    popup-->
    <link rel="stylesheet" href="{{ asset('assets/biznext/vendors/magnific/magnific-popup.css') }}">

    <!--    owl-carousel-->
    <link rel="stylesheet" href="{{ asset('assets/biznext/vendors/owlcarousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/biznext/vendors/owlcarousel/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/biznext/vendors/swipper/css/swiper.css') }}">

    <!-- vendor -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/orgchart/dist/css/jquery.orgchart.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/dist/jquery.fancybox.min.css') }}">

    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('assets/biznext/css/style_kotamas.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/biznext/css/custom.css') }}">
    <!--    responsive css-->
    <link rel="stylesheet" href="{{ asset('assets/biznext/css/responsive.css') }}">

</head>
<body>
<!-- Preloader -->
<section id="loader" class="sampleContainer">
    <div class="loader-o loader">
        <div class="wrapper">
            <div class="squares">
                <span class="load-square"></span>
                <span class="load-square"></span>
            </div>
            <p>loading</p>
        </div>
    </div>
</section>
<!--Offcanvas Menu-->
<div class="offcanvas_closer"></div>
<div class="offcanvas-menu">
    <a href="#" class="close-offcanvas"><i class="icon_close"></i></a>
    <ul class="nav menu" id="offcanvas-inner-menu">
        <li><a href="{{ action('Web\ServiceController@insurance') }}">Insurans</a></li>
        <li><a href="{{ action('Web\ServiceController@financing') }}">Pembiayaan</a></li>
        <li><a href="{{ action('Web\ServiceController@arrahnu') }}">Ar-Rahnu</a></li>
        <li><a href="{{ action('Web\ServiceController@accommodation') }}">Banglo</a></li>
        <li><a href="{{ action('Web\ServiceController@trading') }}">Kotamas Trading</a></li>
        <li><a href="{{ action('Web\ServiceController@travel') }}">Kotamas Travel</a></li>
        <li><a href="{{ action('Web\ServiceController@ccdkeanggotaan') }}">CCD/Keanggotaan</a></li>
    </ul>
</div>
<!--    header-->
<header>
    <div class="header-top">
        <div class="container">
            <ul class="nav navbar-left top-nav">
                <li class="inner"><a href="http://anggota.kotamas.com.my"><i class="fa fa-user"></i> Daftar Masuk Anggota</a></li>
                

            </ul>
            <ul class="nav menu navbar-right top-nav nav-text">
                <li class="tel"><a href="#"><i class="fa fa-phone"></i> +603 4042 7766</a></li>
                <li><a href="#" style="text-transform: lowercase;"><i class="fa fa-envelope"></i> admin@kotamas.com.my</a></li>
            </ul>
        </div>
    </div>
    <!--Navigation-->
    <nav class="navbar navbar-default menu-nav menu_three" id="main_navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><img height="64" src="{{ asset('assets/biznext/image/logo.png') }}" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="main_nav collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul style="padding-left: 10px" class="nav navbar-nav menu-left menu">
                    <li><a href="{{ url('/') }}">Utama</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle m_drop_down" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info Korporat</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ action('Web\AboutController@ceoMessage') }}">Perutusan Khas</a></li>
                            <li><a href="{{ action('Web\AboutController@index') }}">Profil Korporat</a></li>
                            <li><a href="{{ action('Web\AboutController@bod') }}">Carta Organisasi</a></li>
                            <li><a href="{{ action('Web\AboutController@stateCommittee') }}">Jawatankuasa Negeri</a></li>
                            <li><a href="{{ action('Web\AboutController@internalAuditCommittee') }}">Jawatankuasa Audit Dalaman</a></li>
                            <li><a href="{{ action('Web\AboutController@subsidiary') }}">Anak Syarikat</a></li>
                            <li><a href="{{ action('Web\AboutController@achievement') }}">Pencapaian & Anugerah</a></li>
                            <li><a href="{{ action('Web\AboutController@history') }}">Sejarah Penubuhan</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle m_drop_down" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perkhidmatan</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ action('Web\ServiceController@insurance') }}">Insurans</a></li>
                            <li><a href="{{ action('Web\ServiceController@financing') }}">Pembiayaan</a></li>
                            <li><a href="{{ action('Web\ServiceController@arrahnu') }}">Ar-Rahnu</a></li>
                            <li><a href="{{ action('Web\ServiceController@accommodation') }}">Banglo</a></li>
                            <li><a href="{{ action('Web\ServiceController@trading') }}">Kotamas Trading</a></li>
                            <li><a href="{{ action('Web\ServiceController@travel') }}">Kotamas Travel</a></li>
                            <li><a href="{{ action('Web\ServiceController@ccdkeanggotaan') }}">CCD/Keanggotaan</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ action('Web\HomeController@downloads') }}">Muat Turun</a></li>
                    <li><a href="{{ action('Web\NewsController@index') }}">Berita & Aktiviti</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle m_drop_down" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hubungi Kami</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ action('Web\HomeController@contactUs') }}">Ibu Pejabat</a></li>
                            <li><a href="{{ action('Web\HomeController@contactUsArRahnu') }}">Ar-Rahnu X'Change</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content')

<!--Footer-->
<footer class="row footer-area footer_area_two footer_area_three">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="widget single-ft-widget col-sm-6 col-lg-6">
                    <a href="{{ url('/') }}" class="brand_logo">
                        <img width="250" src="{{ asset('assets/biznext/image/logo_white_250.png') }}" alt="logo image">
                    </a>
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <div class="location_address fleft">
                                <strong>Koperasi Telekom Malaysia Berhad</strong><br />
                                No. 94, Tingkat 3, Wisma Kotamas, <br />
                                Kompleks Damai, Jalan Dato’ Haji Eusoff, <br />
                                50400 Kuala Lumpur.
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <div class="location_address fleft">
                                admin@kotamas.com.my
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <div class="location_address fleft">
                                +603 4042 7766
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-fax"></i>
                            <div class="location_address fleft">
                                +603 4043 9071
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="widget latest-widget col-sm-6 col-lg-3">
                    <h4 class="widget_title">Pautan</h4>
                    <ul>
                        <li><a target="_blank" href="http://telekom.com.my">Telekom Malaysia</a></li>
                        <li><a target="_blank" href="http://skm.gov.my">Suruhanjaya Koperasi Malaysia</a></li>
                        <li><a href="{{ action('Web\HomeController@privacyPolicy') }}">Dasar Privasi</a></li>
                        <li><a href="{{ action('Web\HomeController@disclaimer') }}">Penafian</a></li>
                    </ul>
                </div>

                <div class="widget contact-from-widget col-sm-6 col-lg-3">
                    <h4 class="widget_title">Hubungi Kami</h4>
                    <div class="widget-contact-list row m0">
                        <form class="submet-form row m0" action="#" method="post">
                            <input type="text" class="form-control" id="name" placeholder="Nama">
                            <input type="email" class="form-control" id="email" placeholder="Emel">
                            <textarea class="form-control message" placeholder="Mesej anda"></textarea>
                            <button class="submit btn-h" type="submit">hantar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m0 footer-bottom">
        <div class="container">
            <div class="scroll-t"><i class="fa fa-angle-double-up" aria-hidden="true"></i></div>
            <div class="row">
                <div class="col-sm-8">
                    Hak Cipta Terpelihara &copy; 2018 <br class="visible-xs"><a href="#">Koperasi Telekom Malasia Berhad</a>
                </div>
                <div class="right col-sm-4">
                    <ul class="nav icon">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<a style="display: none" href="{{ asset('uploads/ucapan-2019.jpg') }}" data-type="image" data-caption="Caption">Ucapan Tahun Baru 2019</a>
<!-- jQuery Latest version -->
<script src="{{ asset('assets/biznext/js/jquery-2.2.0.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/biznext/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/biznext/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

<!-- Isotop JS -->
<script src="{{ asset('assets/biznext/vendors/isotope/isotope.min.js') }}"></script>

<!-- magnific JS-->
<script src="{{ asset('assets/biznext/vendors/magnific/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/biznext/js/stellar.js') }}"></script>

<!-- owl-JS-->
<script src="{{ asset('assets/biznext/vendors/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Vendors -->
<script src="{{ asset('assets/vendor/orgchart/dist/js/jquery.orgchart.min.js') }}"></script>
<script src="{{ asset('assets/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>

<!-- counter-up-JS-->
<script src="{{ asset('assets/biznext/vendors/countdown/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/biznext/vendors/waypoint/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/biznext/vendors/swipper/js/swiper.min.js') }}"></script>
<!-- RS5.0 Core JS Files -->
<script src="{{ asset('assets/biznext/vendors/revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"></script>
<script src="{{ asset('assets/biznext/vendors/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"></script>
<!--RS5.0 Extensions-->
<script src="{{ asset('assets/biznext/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('assets/biznext/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/biznext/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/biznext/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/biznext/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/biznext/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/biznext/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/biznext/vendors/video/plyr.js') }}"></script>
<script src="{{ asset('assets/biznext/vendors/svg/vivus.js') }}"></script>
<!--Contact Form-->
<script src="{{ asset('assets/biznext/js/jquery.form.js') }}"></script>
<script src="{{ asset('assets/biznext/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/biznext/js/contact.js') }}"></script>
<script src="{{ asset('assets/biznext/vendors/svg/apear.js') }}"></script>
<script src="{{ asset('assets/biznext/js/wow.min.js') }}"></script>

@yield('js')

<!-- jQuery custom script -->
<script src="{{ asset('assets/biznext/js/custom.js') }}"></script>
</body>
</html>