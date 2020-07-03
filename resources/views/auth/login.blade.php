<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Web Admin - Login</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/limitless') }}/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/limitless') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/limitless') }}/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/limitless') }}/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/limitless') }}/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/limitless') }}/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('assets/limitless') }}/js/main/jquery.min.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/main/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/limitless') }}/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('assets/limitless') }}/js/app.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand">
        <a href="index.html" class="d-inline-block">
            <img src="{{ asset('assets/limitless') }}/images/logo_light.png" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
    </div>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Login form -->
            <form class="login-form" method="post" action="{{ action('Auth\LoginController@authenticate') }}">
                {{ csrf_field() }}
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h5 class="mb-0">Kotamas</h5>
                            <span class="d-block text-muted">Web Administration</span>
                        </div>
                        @if (Session::get('error'))
                        <div class="alert alert-warning border-0">
                            <span class="font-weight-bold">Error</span> <br>{{ Session::get('error') }}
                        </div>
                        @endif
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input name="email" type="text" class="form-control" placeholder="Email" value="{{ old('email') }}">
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
                        </div>

                        <div class="text-center">
                            <a href="#">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /login form -->

        </div>
        <!-- /content area -->


    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
