<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kotamas Web Admin</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/limitless') }}/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/limitless') }}/css/icons/material/icons.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/limitless') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/limitless') }}/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/limitless') }}/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/limitless') }}/css/custom.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/limitless') }}/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/limitless') }}/css/colors.min.css" rel="stylesheet" type="text/css">

    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('assets/limitless') }}/js/main/jquery.min.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/main/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/loaders/blockui.min.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/ui/slinky.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('assets/limitless') }}/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/notifications/sweet_alert.min.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/ui/moment/moment.min.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/pickers/daterangepicker.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/ui/sticky.min.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/editors/ckeditor/ckeditor.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/forms/selects/select2.min.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/forms/inputs/formatter.min.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/forms/inputs/inputmask.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/forms/inputs/maxlength.min.js"></script>

    <script src="{{ asset('assets/limitless') }}/js/app.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/custom.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/demo_pages/dashboard.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/demo_pages/navbar_multiple_sticky.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand wmin-0 mr-5">
        <a href="{{ action('Admin\HomeController@index') }}" class="d-inline-block">
            <img src="{{ asset('assets/limitless') }}/images/logo_light.png" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav"></ul>

        <span class="ml-md-3 mr-md-auto"></span>

        <ul class="navbar-nav">
            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ Auth::user()->gravatar }}" class="rounded-circle mr-2" height="34" alt="">
                    <span>{{ Auth::user()->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-key"></i> Change Password</a>
                    <a href="{{ action('Auth\LoginController@logout') }}" class="dropdown-item"><i class="icon-switch2"></i> Sign Out</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Secondary navbar -->
<div class="navbar navbar-expand-md navbar-light navbar-sticky">
    <div class="text-center d-md-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-navigation">
            <i class="icon-unfold mr-2"></i>
            Navigation
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ action('Admin\HomeController@index') }}" class="navbar-nav-link">
                    <i class="icon-home4 mr-2"></i>
                    Dashboard
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-briefcase3 mr-2"></i>
                    Management
                </a>

                <div class="dropdown-menu">
                    <a href="{{ action('Admin\NewsController@index') }}" class="dropdown-item"><i class="icon-chevron-right"></i> News</a>
                    <a href="{{ action('Admin\DownloadController@index') }}" class="dropdown-item"><i class="icon-chevron-right"></i> Downloads</a>
                    <a href="{{ action('Admin\BannerController@index') }}" class="dropdown-item"><i class="icon-chevron-right"></i> Banners</a>
                    <a href="{{ action('Admin\StateCommitteeController@index') }}" class="dropdown-item"><i class="icon-chevron-right"></i> Committees</a>
                    <a href="{{ action('Admin\HomeController@editLandingPoster') }}" class="dropdown-item"><i class="icon-chevron-right"></i> Landing Poster</a>
                </div>
            </li>

            @if(Auth::user()->user_group_id == 1)
            <li class="nav-item">
                <a href="{{ action('Admin\UserController@index') }}" class="navbar-nav-link">
                    <i class="icon-users mr-2"></i>
                    Users
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>
<!-- /secondary navbar -->


@yield('page-header')

<!-- Page content -->
@yield('content')
<!-- /page content -->


<!-- Footer -->
<div class="navbar navbar-expand-lg navbar-light">
    <div class="text-center d-lg-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            Footer
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
			<span class="navbar-text">
				Copyright &copy; 2018 - 2019 <a href="#">Koperasi Telekom Malaysia Berhad</a>
			</span>

        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item"><a href="#" class="navbar-nav-link" target="_blank"><i class="icon-git mr-2"></i> v1.0.0-alpha</a></li>
        </ul>
    </div>
</div>
<!-- /footer -->

<script>
    swal.setDefaults({
        buttonsStyling: false,
        confirmButtonClass: 'btn btn-primary',
        cancelButtonClass: 'btn btn-light'
    });

    function deleteCfmDialog(url, dt) {
        var resp;
        swal.queue([{
            title: 'Delete',
            text: "Are you sure?",
            type: 'warning',
            showCancelButton: true,
            showCloseButton: true,
            confirmButtonText: 'Delete',
            cancelButtonText: 'Cancel',
            showLoaderOnConfirm: true,
            preConfirm: function () {
                return new Promise(function (resolve) {
                    $.get(url)
                        .done(function (response) {
                            resp = response;
                            swal.insertQueueStep({
                                html: response.msg,
                                type: (response.success) ? 'success' : 'error',
                            });

                            resolve();
                        });
                });
            }
        }]).then(function() {
            console.log(resp);
            if(dt && resp.success) {
                dt.ajax.reload();
            } else {
                if (resp.redirect) {
                    window.location = resp.redirect;
                } else {
                    location.reload();
                }

            }
        });
    }
</script>

@yield('js')

</body>
</html>
