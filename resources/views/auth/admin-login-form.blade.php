<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href={!! asset('assets/images/icons/favicon.ico') !!}/>
    <!--===============================================================================================-->
    <link href="{!! asset('assets/bootstrap-4.3.1/css/bootstrap.min.css') !!}" rel="stylesheet">

{{--    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">--}}
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={!! asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}>
    <!--===============================================================================================-->
{{--    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">--}}
<!--===============================================================================================-->
{{--    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">--}}
<!--===============================================================================================-->
{{--    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">--}}
<!--===============================================================================================-->
    {{--    <link rel="stylesheet" type="text/css" href="css/util.css">--}}
    <link rel="stylesheet" type="text/css" href={!! asset('assets/css/login.css') !!}>
    <!--===============================================================================================-->
</head>
<body>
<div style="background-color: #f7ff00;height: 2px">&nbsp;</div>
<nav class="navbar navbar-expand-lg navbar-mainbg" style="background-color: #F6FFED">
    <img src="{!! asset('assets/images/logo_NRB_Global_Bank.jpg') !!}"  height="60px" alt="Responsive image">
    <div class="collapse navbar-collapse justify-content-center">

        <div class="justify-content-center">
            <div class="description">
                <h5 style="color: #522121" class="text-center; font-weight-bold">
                    Welcome to NRBG eRecruitment Admin Panel
                </h5>
            </div>
        </div>
    </div>

    <img src="{!! asset('assets/images/logo_NRB_Global_Bank.jpg') !!}"  height="60px" alt="Responsive image">
</nav>
<div style="background-color: #f7ff00;height: 2px">&nbsp;</div>

<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="{!! asset('assets/images/login-transparent.png') !!}" class="brand_logo" alt="Logo">
                </div>
            </div>


            <div class="d-flex justify-content-center form_container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="name" class="form-control input_user" value="" placeholder="username">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <div class="custom-control custom-checkbox">--}}
{{--                            <input type="checkbox" class="custom-control-input" id="customControlInline">--}}
{{--                            <label class="custom-control-label" for="customControlInline">Remember me</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" name="button" class="btn login_btn">Login</button>
                    </div>
                </form>
            </div>
@include('partials.error-msg')
{{--            <div class="mt-4">--}}
{{--                <div class="d-flex justify-content-center links">--}}
{{--                    Don't have an account? <a href="#" class="ml-2">Sign Up</a>--}}
{{--                </div>--}}
{{--                <div class="d-flex justify-content-center links">--}}
{{--                    <a href="#">Forgot your password?</a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src={!! asset('assets/js/jquery-3.4.1.min.js') !!}></script>
<!--===============================================================================================-->
{{--<script src="vendor/bootstrap/js/popper.js"></script>--}}
<script src="{!! asset('assets/bootstrap-4.3.1/js/bootstrap.min.js') !!}"></script>
<!--===============================================================================================-->
{{--<script src="vendor/select2/select2.min.js"></script>--}}
<!--===============================================================================================-->
{{--<script src="vendor/tilt/tilt.jquery.min.js"></script>--}}
{{--<script >--}}
{{--    $('.js-tilt').tilt({--}}
{{--        scale: 1.1--}}
{{--    })--}}
{{--</script>--}}
<!--===============================================================================================-->
{{--<script src="js/main.js"></script>--}}

</body>
</html>
