<!DOCTYPE html>
<html lang="en" class="h-100">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Fasto : CodeIgniter Sass Admin Dashboard Template" />
    <meta property="og:title" content="Fasto : CodeIgniter Sass Admin Dashboard Template" />
    <meta property="og:description" content="Fasto : CodeIgniter Sass Admin Dashboard Template" />
    <meta property="og:image" content="https://fasto.dexignzone.com/xhtml/error-404.html" />
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('components.title')
    <link href="{{ asset('assets') }}/public/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/public/assets/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <img src="{{ asset('assets') }}/public/assets/images/logo-full.png" alt="">
                                    </div>
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
 Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets') }}/public/assets/vendor/global/global.min.js"></script>
    <script src="{{ asset('assets') }}/public/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets') }}/public/assets/js/custom.min.js"></script>
    <script src="{{ asset('assets') }}/public/assets/js/deznav-init.js"></script>
    <script src="{{ asset('assets') }}/public/assets/js/demo.js"></script>
    <script src="{{ asset('assets') }}/public/assets/js/styleSwitcher.js"></script>
</body>

</html>
