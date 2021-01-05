<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>NGB Career - Admin Dashboard</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{!! asset('beauty/css/app.min.css') !!}">
    <!-- Template CSS -->
{{--    <link rel="stylesheet" href="{!! asset('beauty/css/style.css') !!}">--}}
    <link rel="stylesheet" href="{!! asset('beauty/css/components.css') !!}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{!! asset('beauty/css/custom.css') !!}">
    <link rel='shortcut icon' type='image/x-icon' href="{!! asset('beauty/img/favicon.ico') !!}" />
</head>

<body>

{{--<nav class="navbar navbar-expand-lg main-navbar sticky">--}}
{{--    <div class="form-inline mr-auto"><h1>{!! config('company.bank.name') !!}</h1>--}}
{{--    </div>--}}
{{--    <ul class="navbar-nav navbar-right">--}}





{{--    </ul>--}}
{{--</nav>--}}


{{--<div class="main-sidebar sidebar-style-2">--}}
{{--    <aside id="sidebar-wrapper">--}}
{{--        <div class="sidebar-brand">--}}
{{--            <img alt="image" src="{!! asset('beauty/img/logo_company_sm.jpg') !!}" width="250px" class="header-logo" />--}}
{{--        </div>--}}
{{--    </aside>--}}
{{--</div>--}}




<div class="loader"></div>
<div id="app">




    <section class="section">
        <img alt="image" src="{!! asset('beauty/img/logo_company_sm.jpg') !!}" width="350px" height="100px" class="header-logo" />
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Admin Login</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Employee ID</label>
                                    <input id="employee_id" type="text" class="form-control" name="employee_id" tabindex="1" required>
                                    <div class="invalid-feedback">
                                        Please fill in your employee id
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <div class="custom-control custom-checkbox">--}}
{{--                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">--}}
{{--                                        <label class="custom-control-label" for="remember-me">Remember Me</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>

                                @include('partials.error-msg')
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
</div>
<!-- General JS Scripts -->
<script src="{!! asset('beauty/js/app.min.js') !!}"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<!-- Template JS File -->
<script src="{!! asset('beauty/js/scripts.js') !!}"></script>
<!-- Custom JS File -->
<script src="{!! asset('beauty/js/custom.js') !!}"></script>
</body>
</html>
