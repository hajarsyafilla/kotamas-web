<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Koperasi Telekom Malaysia Berhad</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">


    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">


    <link href="{{ asset('assets/tpl_maintenance/css/ionicons.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/tpl_maintenance/css/jquery.classycountdown.css') }}" />

    <link href="{{ asset('assets/tpl_maintenance/css/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/tpl_maintenance/css/responsive.css') }}" rel="stylesheet">

</head>
<body>

<div class="main-area">

    <section class="left-section" style="background-image: url({{ asset('assets/tpl_maintenance/images/bg3.jpg') }}">

        <div class="display-table center-text">
            <div class="display-table-cell">

                <div id="normal-countdown" data-date="2018/01/01"></div>

            </div><!-- display-table-cell -->
        </div><!-- display-table -->

    </section><!-- left-section -->


    <section class="right-section full-height">

        <a class="logo" style="height:70px" href="#"><img src="{{ asset('assets/tpl_maintenance/images/logo.png') }}" alt="Logo"></a>

        <div class="display-table">
            <div class="display-table-cell">
                <div class="main-content">
                    <h1 class="title"><b>Maintenance</b></h1>
                    <p>We are undergoing a bit of scheduled maintenance.</p>

                    <div class="email-input-area">
                        <form method="post">
                            <input class="email-input" name="email" type="text" placeholder="Enter your email"/>
                            <button class="submit-btn" name="submit" type="submit"><b>NOTIFY US</b></button>
                        </form>
                    </div><!-- email-input-area -->
                    <p class="post-desc">Sorry for the inconvenience. We'll be back up and running as soon as possible.</p><br />
                    <p style="font-size: 13px;margin-top:20px">
                        <strong>Koperasi Telekom Malaysia Berhad</strong><br />
                        No. 94, Tingkat 3, Wisma Kotamas,<br />
                        Kompleks Damai, Jalan Dato’ Haji Eusoff,<br />
                        50400 Kuala Lumpur.<br /><br />
                        Tel: 03-4042 7766 | Fax: 03-4043 9071<br />
                    </p>
                </div><!-- main-content -->
            </div><!-- display-table-cell -->
        </div><!-- display-table -->


        <ul class="footer-icons">
            <li>Copyright &copy; 2018 Koperasi Telekom Malaysia Berhad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            <li><a href="https://www.facebook.com/kotamas1922/"><i class="ion-social-facebook"></i></a></li>
            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
        </ul>

    </section><!-- right-section -->

</div><!-- main-area -->

<!-- SCIPTS -->

<script src="{{ asset('assets/tpl_maintenance/js/jquery-3.1.1.min.js') }}"></script>

<script src="{{ asset('assets/tpl_maintenance/js/jquery.countdown.min.js') }}"></script>

<script src="common-js/scripts.js"></script>

</body>
</html>