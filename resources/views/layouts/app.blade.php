<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>NRBG Career - Admin Dashboard</title>
    <!-- Bootstrap CSS-->
    <link href="{!! asset('assets/bootstrap-4.3.1/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{!! asset('beauty/css/app.min.css') !!}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{!! asset('beauty/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('beauty/css/components.css') !!}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{!! asset('beauty/css/custom.css') !!}">
    <link rel='shortcut icon' type='image/x-icon' href="{!! asset('beauty/img/favicon.ico') !!}"/>

{{--    <link href="{!! asset('assets/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') !!}" rel="stylesheet" type="text/css" />--}}
    <link href="{!! asset('assets/DataTables-1.10.18/css/jquery.dataTables.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/jquery-ui-1.12.1/jquery-ui.css') !!}" rel="stylesheet" type="text/css" />


</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar sticky">

            <div class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="form-inline mr-auto"><h1>Career Admin Portal</h1>

                {{--                <ul class="navbar-nav mr-3">--}}
                {{--                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg--}}
                {{--									collapse-btn"> <i data-feather="align-justify"></i></a></li>--}}
                {{--                    <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">--}}
                {{--                            <i data-feather="maximize"></i>--}}
                {{--                        </a></li>--}}
                {{--                    <li>--}}
                {{--                            <div class="search-element">--}}
                {{--                                {!! config('company.bank.name') !!}--}}
                {{--                            </div>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
            </div>
            <ul class="navbar-nav navbar-right">


                <li class="nav-item"><i><span style="font-weight: bold; color: #721c24">{!! $user->name !!}</span></i></li>
                <li class="nav-item">

                    <a href="{!! url('logout') !!}" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>


                    {{--                    <a class="nav-link logout" href="{{ route('logout') }}" onclick="event.preventDefault();--}}
                    {{--                                                     document.getElementById('logout-form').submit();"> <span class="d-none d-sm-inline text-black">Logout</span><i class="fa fa-sign-out"></i></a>--}}

                    {{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                    {{--                        @csrf--}}
                    {{--                    </form>--}}
                </li>

                {{--                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"--}}
                {{--                                                             class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>--}}
                {{--                        <span class="badge headerBadge1">--}}
                {{--                6 </span> </a>--}}
                {{--                    <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">--}}
                {{--                        <div class="dropdown-header">--}}
                {{--                            Messages--}}
                {{--                            <div class="float-right">--}}
                {{--                                <a href="#">Mark All As Read</a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="dropdown-list-content dropdown-list-message">--}}
                {{--                            <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar--}}
                {{--											text-white"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">--}}
                {{--                  </span> <span class="dropdown-item-desc"> <span class="message-user">John--}}
                {{--                      Deo</span>--}}
                {{--                    <span class="time messege-text">Please check your mail !!</span>--}}
                {{--                    <span class="time">2 Min Ago</span>--}}
                {{--                  </span>--}}
                {{--                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">--}}
                {{--                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">--}}
                {{--                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah--}}
                {{--                      Smith</span> <span class="time messege-text">Request for leave--}}
                {{--                      application</span>--}}
                {{--                    <span class="time">5 Min Ago</span>--}}
                {{--                  </span>--}}
                {{--                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">--}}
                {{--                    <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">--}}
                {{--                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob--}}
                {{--                      Ryan</span> <span class="time messege-text">Your payment invoice is--}}
                {{--                      generated.</span> <span class="time">12 Min Ago</span>--}}
                {{--                  </span>--}}
                {{--                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">--}}
                {{--                    <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">--}}
                {{--                  </span> <span class="dropdown-item-desc"> <span class="message-user">Lina--}}
                {{--                      Smith</span> <span class="time messege-text">hii John, I have upload--}}
                {{--                      doc--}}
                {{--                      related to task.</span> <span class="time">30--}}
                {{--                      Min Ago</span>--}}
                {{--                  </span>--}}
                {{--                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">--}}
                {{--                    <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">--}}
                {{--                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa--}}
                {{--                      Joshi</span> <span class="time messege-text">Please do as specify.--}}
                {{--                      Let me--}}
                {{--                      know if you have any query.</span> <span class="time">1--}}
                {{--                      Days Ago</span>--}}
                {{--                  </span>--}}
                {{--                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">--}}
                {{--                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">--}}
                {{--                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah--}}
                {{--                      Smith</span> <span class="time messege-text">Client Requirements</span>--}}
                {{--                    <span class="time">2 Days Ago</span>--}}
                {{--                  </span>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                        <div class="dropdown-footer text-center">--}}
                {{--                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                {{--                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"--}}
                {{--                                                             class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>--}}
                {{--                    </a>--}}
                {{--                    <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">--}}
                {{--                        <div class="dropdown-header">--}}
                {{--                            Notifications--}}
                {{--                            <div class="float-right">--}}
                {{--                                <a href="#">Mark All As Read</a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="dropdown-list-content dropdown-list-icons">--}}
                {{--                            <a href="#" class="dropdown-item dropdown-item-unread"> <span--}}
                {{--                                    class="dropdown-item-icon bg-primary text-white"> <i class="fas--}}
                {{--												fa-code"></i>--}}
                {{--                  </span> <span class="dropdown-item-desc"> Template update is--}}
                {{--                    available now! <span class="time">2 Min--}}
                {{--                      Ago</span>--}}
                {{--                  </span>--}}
                {{--                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far--}}
                {{--												fa-user"></i>--}}
                {{--                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik--}}
                {{--                      Sugiharto</b> are now friends <span class="time">10 Hours--}}
                {{--                      Ago</span>--}}
                {{--                  </span>--}}
                {{--                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i--}}
                {{--                                        class="fas--}}
                {{--												fa-check"></i>--}}
                {{--                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has--}}
                {{--                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12--}}
                {{--                      Hours--}}
                {{--                      Ago</span>--}}
                {{--                  </span>--}}
                {{--                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i--}}
                {{--                                        class="fas fa-exclamation-triangle"></i>--}}
                {{--                  </span> <span class="dropdown-item-desc"> Low disk space. Let's--}}
                {{--                    clean it! <span class="time">17 Hours Ago</span>--}}
                {{--                  </span>--}}
                {{--                            </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas--}}
                {{--												fa-bell"></i>--}}
                {{--                  </span> <span class="dropdown-item-desc"> Welcome to Otika--}}
                {{--                    template! <span class="time">Yesterday</span>--}}
                {{--                  </span>--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                {{--                        <div class="dropdown-footer text-center">--}}
                {{--                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                {{--                <li class="dropdown"><a href="#" data-toggle="dropdown"--}}
                {{--                                        class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"--}}
                {{--                                                                                                         class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>--}}
                {{--                    <div class="dropdown-menu dropdown-menu-right pullDown">--}}
                {{--                        <div class="dropdown-title">Hello Sarah Smith</div>--}}
                {{--                        <a href="profile.html" class="dropdown-item has-icon"> <i class="far--}}
                {{--										fa-user"></i> Profile--}}
                {{--                        </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>--}}
                {{--                            Activities--}}
                {{--                        </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>--}}
                {{--                            Settings--}}
                {{--                        </a>--}}
                {{--                        <div class="dropdown-divider"></div>--}}
                {{--                        <a href="{!! 'logout' !!}" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>--}}
                {{--                            Logout--}}
                {{--                        </a>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <img alt="image" src="{!! asset('beauty/img/logo_company_sm.jpg') !!}" width="250px" class="header-logo" />
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Main</li>
                    <li class="dropdown active">
                        <a href="{!! url('home') !!}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown font-weight-bold text-dark"><i
                                data-feather="briefcase"></i><span>Security</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{!! url('register') !!}">Add User</a></li>
                            <li><a class="nav-link" href="{!! url('admin/changePasswordIndex') !!}">Change Password</a></li>
                            <li><a class="nav-link" href="{!! url('admin/resetPasswordIndex') !!}">Reset Password</a></li>
                            <li><a class="nav-link" href="#">Manage Permission</a></li>
                            <li><a class="nav-link" href="{!! url('admin/databaseBKPIndex') !!}">Database Backup</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown font-weight-bold text-dark"><i data-feather="command"></i><span>Bangladesh Demography</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="#">Division</a></li>
                            <li><a class="nav-link" href="#">District</a></li>
                            <li><a class="nav-link" href="{!! url('bangladesh/PoliceStationIndex') !!}">Police Station</a></li>
                            <li><a class="nav-link" href="{!! url('bangladesh/PostOfficeIndex') !!}">Post Office</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown font-weight-bold text-dark"><i data-feather="mail"></i><span>Education</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link text-dark" href="#">University</a></li>
                            <li><a class="nav-link text-dark" href="#">Boards</a></li>
                            <li><a class="nav-link text-dark" href="#">Groups</a></li>
                            <li><a class="nav-link text-dark" href="#">Subject</a></li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown font-weight-bold text-dark"><i data-feather="feather"></i><span>Jobs</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="#">New Job Circular</a></li>
                            <li><a class="nav-link" href="#">Job Circular Details</a></li>
                            <li><a class="nav-link" href="#">Eligible Criteria</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown font-weight-bold text-dark"><i data-feather="feather"></i><span>Support</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{!! url('support/requestResponseIndex') !!}">Support Response</a></li>
                        </ul>
                    </li>



                    <li class="menu-header">Applicants</li>
                    <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown font-weight-bold text-dark"><i data-feather="copy"></i><span>Profile</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link font-weight-bold text-dark" href="{!! url('profile/personalInfoIndex') !!}">Registered Profiles</a></li>
                            <li><a class="nav-link font-weight-bold text-dark" href="{!! url('profile/shortListIndex') !!}">Search Verified List</a></li>
{{--                            <li><a class="nav-link font-weight-bold text-dark" href="#">Applications</a></li>--}}
                            <li><a class="nav-link font-weight-bold text-dark" href="{!! url('profile/eligibleCandidatesIndex') !!}">Eligible Candidates</a></li>
                            <li><a class="nav-link font-weight-bold text-dark" href="{!! url('profile/rejectCandidatesIndex') !!}">Rejected Candidates</a></li>
                            <li><a class="nav-link font-weight-bold text-dark" href="#">Exam Process</a></li>
                        </ul>
                    </li>
                    {{--                    <li class="dropdown">--}}
                    {{--                        <a href="#" class="menu-toggle nav-link has-dropdown"><i--}}
                    {{--                                data-feather="shopping-bag"></i><span>Advanced</span></a>--}}
                    {{--                        <ul class="dropdown-menu">--}}
                    {{--                            <li><a class="nav-link" href="avatar.html">Avatar</a></li>--}}
                    {{--                            <li><a class="nav-link" href="card.html">Card</a></li>--}}
                    {{--                            <li><a class="nav-link" href="modal.html">Modal</a></li>--}}
                    {{--                            <li><a class="nav-link" href="sweet-alert.html">Sweet Alert</a></li>--}}
                    {{--                            <li><a class="nav-link" href="toastr.html">Toastr</a></li>--}}
                    {{--                            <li><a class="nav-link" href="empty-state.html">Empty State</a></li>--}}
                    {{--                            <li><a class="nav-link" href="multiple-upload.html">Multiple Upload</a></li>--}}
                    {{--                            <li><a class="nav-link" href="pricing.html">Pricing</a></li>--}}
                    {{--                            <li><a class="nav-link" href="tabs.html">Tab</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li><a class="nav-link" href="blank.html"><i data-feather="file"></i><span>Blank Page</span></a></li>--}}
                    {{--                    <li class="menu-header">Otika</li>--}}
                    {{--                    <li class="dropdown">--}}
                    {{--                        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Forms</span></a>--}}
                    {{--                        <ul class="dropdown-menu">--}}
                    {{--                            <li><a class="nav-link" href="basic-form.html">Basic Form</a></li>--}}
                    {{--                            <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>--}}
                    {{--                            <li><a class="nav-link" href="forms-editor.html">Editor</a></li>--}}
                    {{--                            <li><a class="nav-link" href="forms-validation.html">Validation</a></li>--}}
                    {{--                            <li><a class="nav-link" href="form-wizard.html">Form Wizard</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="dropdown">--}}
                    {{--                        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Tables</span></a>--}}
                    {{--                        <ul class="dropdown-menu">--}}
                    {{--                            <li><a class="nav-link" href="basic-table.html">Basic Tables</a></li>--}}
                    {{--                            <li><a class="nav-link" href="advance-table.html">Advanced Table</a></li>--}}
                    {{--                            <li><a class="nav-link" href="datatables.html">Datatable</a></li>--}}
                    {{--                            <li><a class="nav-link" href="export-table.html">Export Table</a></li>--}}
                    {{--                            <li><a class="nav-link" href="editable-table.html">Editable Table</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="dropdown">--}}
                    {{--                        <a href="#" class="menu-toggle nav-link has-dropdown"><i--}}
                    {{--                                data-feather="pie-chart"></i><span>Charts</span></a>--}}
                    {{--                        <ul class="dropdown-menu">--}}
                    {{--                            <li><a class="nav-link" href="chart-amchart.html">amChart</a></li>--}}
                    {{--                            <li><a class="nav-link" href="chart-apexchart.html">apexchart</a></li>--}}
                    {{--                            <li><a class="nav-link" href="chart-echart.html">eChart</a></li>--}}
                    {{--                            <li><a class="nav-link" href="chart-chartjs.html">Chartjs</a></li>--}}
                    {{--                            <li><a class="nav-link" href="chart-sparkline.html">Sparkline</a></li>--}}
                    {{--                            <li><a class="nav-link" href="chart-morris.html">Morris</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="dropdown">--}}
                    {{--                        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="feather"></i><span>Icons</span></a>--}}
                    {{--                        <ul class="dropdown-menu">--}}
                    {{--                            <li><a class="nav-link" href="icon-font-awesome.html">Font Awesome</a></li>--}}
                    {{--                            <li><a class="nav-link" href="icon-material.html">Material Design</a></li>--}}
                    {{--                            <li><a class="nav-link" href="icon-ionicons.html">Ion Icons</a></li>--}}
                    {{--                            <li><a class="nav-link" href="icon-feather.html">Feather Icons</a></li>--}}
                    {{--                            <li><a class="nav-link" href="icon-weather-icon.html">Weather Icon</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="menu-header">Media</li>--}}
                    {{--                    <li class="dropdown">--}}
                    {{--                        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="image"></i><span>Gallery</span></a>--}}
                    {{--                        <ul class="dropdown-menu">--}}
                    {{--                            <li><a class="nav-link" href="light-gallery.html">Light Gallery</a></li>--}}
                    {{--                            <li><a href="gallery1.html">Gallery 2</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="dropdown">--}}
                    {{--                        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="flag"></i><span>Sliders</span></a>--}}
                    {{--                        <ul class="dropdown-menu">--}}
                    {{--                            <li><a href="carousel.html">Bootstrap Carousel.html</a></li>--}}
                    {{--                            <li><a class="nav-link" href="owl-carousel.html">Owl Carousel</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li><a class="nav-link" href="timeline.html"><i data-feather="sliders"></i><span>Timeline</span></a></li>--}}
                    {{--                    <li class="menu-header">Maps</li>--}}
                    {{--                    <li class="dropdown">--}}
                    {{--                        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="map"></i><span>Google--}}
                    {{--                  Maps</span></a>--}}
                    {{--                        <ul class="dropdown-menu">--}}
                    {{--                            <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>--}}
                    {{--                            <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>--}}
                    {{--                            <li><a href="gmaps-geocoding.html">Geocoding</a></li>--}}
                    {{--                            <li><a href="gmaps-geolocation.html">Geolocation</a></li>--}}
                    {{--                            <li><a href="gmaps-marker.html">Marker</a></li>--}}
                    {{--                            <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>--}}
                    {{--                            <li><a href="gmaps-route.html">Route</a></li>--}}
                    {{--                            <li><a href="gmaps-simple.html">Simple</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li><a class="nav-link" href="vector-map.html"><i data-feather="map-pin"></i><span>Vector--}}
                    {{--                  Map</span></a></li>--}}
                    {{--                    <li class="menu-header">Pages</li>--}}
                    {{--                    <li class="dropdown">--}}
                    {{--                        <a href="#" class="menu-toggle nav-link has-dropdown"><i--}}
                    {{--                                data-feather="user-check"></i><span>Auth</span></a>--}}
                    {{--                        <ul class="dropdown-menu">--}}
                    {{--                            <li><a href="auth-login.html">Login</a></li>--}}
                    {{--                            <li><a href="auth-register.html">Register</a></li>--}}
                    {{--                            <li><a href="auth-forgot-password.html">Forgot Password</a></li>--}}
                    {{--                            <li><a href="auth-reset-password.html">Reset Password</a></li>--}}
                    {{--                            <li><a href="subscribe.html">Subscribe</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="dropdown">--}}
                    {{--                        <a href="#" class="menu-toggle nav-link has-dropdown"><i--}}
                    {{--                                data-feather="alert-triangle"></i><span>Errors</span></a>--}}
                    {{--                        <ul class="dropdown-menu">--}}
                    {{--                            <li><a class="nav-link" href="errors-503.html">503</a></li>--}}
                    {{--                            <li><a class="nav-link" href="errors-403.html">403</a></li>--}}
                    {{--                            <li><a class="nav-link" href="errors-404.html">404</a></li>--}}
                    {{--                            <li><a class="nav-link" href="errors-500.html">500</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="dropdown">--}}
                    {{--                        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="anchor"></i><span>Other--}}
                    {{--                  Pages</span></a>--}}
                    {{--                        <ul class="dropdown-menu">--}}
                    {{--                            <li><a class="nav-link" href="create-post.html">Create Post</a></li>--}}
                    {{--                            <li><a class="nav-link" href="posts.html">Posts</a></li>--}}
                    {{--                            <li><a class="nav-link" href="profile.html">Profile</a></li>--}}
                    {{--                            <li><a class="nav-link" href="contact.html">Contact</a></li>--}}
                    {{--                            <li><a class="nav-link" href="invoice.html">Invoice</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="dropdown">--}}
                    {{--                        <a href="#" class="menu-toggle nav-link has-dropdown"><i--}}
                    {{--                                data-feather="chevrons-down"></i><span>Multilevel</span></a>--}}
                    {{--                        <ul class="dropdown-menu">--}}
                    {{--                            <li><a href="#">Menu 1</a></li>--}}
                    {{--                            <li class="dropdown">--}}
                    {{--                                <a href="#" class="has-dropdown">Menu 2</a>--}}
                    {{--                                <ul class="dropdown-menu">--}}
                    {{--                                    <li><a href="#">Child Menu 1</a></li>--}}
                    {{--                                    <li class="dropdown">--}}
                    {{--                                        <a href="#" class="has-dropdown">Child Menu 2</a>--}}
                    {{--                                        <ul class="dropdown-menu">--}}
                    {{--                                            <li><a href="#">Child Menu 1</a></li>--}}
                    {{--                                            <li><a href="#">Child Menu 2</a></li>--}}
                    {{--                                        </ul>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li><a href="#"> Child Menu 3</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                </ul>
            </aside>
        </div>
        <!-- Main Content -->
        <div class="main-content">
            <section class="section">

                {{--                <div class="row">--}}
                {{--                    <div class="col-12 col-sm-12 col-lg-12">--}}
                {{--                        <div class="card ">--}}
                {{--                            <div class="card-header">--}}
                {{--                                <h4>Revenue chart</h4>--}}
                {{--                                <div class="card-header-action">--}}
                {{--                                    <div class="dropdown">--}}
                {{--                                        <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>--}}
                {{--                                        <div class="dropdown-menu">--}}
                {{--                                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>--}}
                {{--                                            <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>--}}
                {{--                                            <div class="dropdown-divider"></div>--}}
                {{--                                            <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i>--}}
                {{--                                                Delete</a>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <a href="#" class="btn btn-primary">View All</a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <div class="card-body">--}}
                {{--                                <div class="row">--}}
                {{--                                    <div class="col-lg-9">--}}
                {{--                                        <div id="chart1"></div>--}}
                {{--                                        <div class="row mb-0">--}}
                {{--                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">--}}
                {{--                                                <div class="list-inline text-center">--}}
                {{--                                                    <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"--}}
                {{--                                                                                            class="col-green"></i>--}}
                {{--                                                        <h5 class="m-b-0">$675</h5>--}}
                {{--                                                        <p class="text-muted font-14 m-b-0">Weekly Earnings</p>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">--}}
                {{--                                                <div class="list-inline text-center">--}}
                {{--                                                    <div class="list-inline-item p-r-30"><i data-feather="arrow-down-circle"--}}
                {{--                                                                                            class="col-orange"></i>--}}
                {{--                                                        <h5 class="m-b-0">$1,587</h5>--}}
                {{--                                                        <p class="text-muted font-14 m-b-0">Monthly Earnings</p>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">--}}
                {{--                                                <div class="list-inline text-center">--}}
                {{--                                                    <div class="list-inline-item p-r-30"><i data-feather="arrow-up-circle"--}}
                {{--                                                                                            class="col-green"></i>--}}
                {{--                                                        <h5 class="mb-0 m-b-0">$45,965</h5>--}}
                {{--                                                        <p class="text-muted font-14 m-b-0">Yearly Earnings</p>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <div class="col-lg-3">--}}
                {{--                                        <div class="row mt-5">--}}
                {{--                                            <div class="col-7 col-xl-7 mb-3">Total customers</div>--}}
                {{--                                            <div class="col-5 col-xl-5 mb-3">--}}
                {{--                                                <span class="text-big">8,257</span>--}}
                {{--                                                <sup class="col-green">+09%</sup>--}}
                {{--                                            </div>--}}
                {{--                                            <div class="col-7 col-xl-7 mb-3">Total Income</div>--}}
                {{--                                            <div class="col-5 col-xl-5 mb-3">--}}
                {{--                                                <span class="text-big">$9,857</span>--}}
                {{--                                                <sup class="text-danger">-18%</sup>--}}
                {{--                                            </div>--}}
                {{--                                            <div class="col-7 col-xl-7 mb-3">Project completed</div>--}}
                {{--                                            <div class="col-5 col-xl-5 mb-3">--}}
                {{--                                                <span class="text-big">28</span>--}}
                {{--                                                <sup class="col-green">+16%</sup>--}}
                {{--                                            </div>--}}
                {{--                                            <div class="col-7 col-xl-7 mb-3">Total expense</div>--}}
                {{--                                            <div class="col-5 col-xl-5 mb-3">--}}
                {{--                                                <span class="text-big">$6,287</span>--}}
                {{--                                                <sup class="col-green">+09%</sup>--}}
                {{--                                            </div>--}}
                {{--                                            <div class="col-7 col-xl-7 mb-3">New Customers</div>--}}
                {{--                                            <div class="col-5 col-xl-5 mb-3">--}}
                {{--                                                <span class="text-big">684</span>--}}
                {{--                                                <sup class="col-green">+22%</sup>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="row">--}}
                {{--                    <div class="col-12 col-sm-12 col-lg-4">--}}
                {{--                        <div class="card">--}}
                {{--                            <div class="card-header">--}}
                {{--                                <h4>Chart</h4>--}}
                {{--                            </div>--}}
                {{--                            <div class="card-body">--}}
                {{--                                <div id="chart4" class="chartsh"></div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-sm-12 col-lg-4">--}}
                {{--                        <div class="card">--}}
                {{--                            <div class="card-header">--}}
                {{--                                <h4>Chart</h4>--}}
                {{--                            </div>--}}
                {{--                            <div class="card-body">--}}
                {{--                                <div class="summary">--}}
                {{--                                    <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">--}}
                {{--                                        <div id="chart3" class="chartsh"></div>--}}
                {{--                                    </div>--}}
                {{--                                    <div data-tab-group="summary-tab" id="summary-text">--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-sm-12 col-lg-4">--}}
                {{--                        <div class="card">--}}
                {{--                            <div class="card-header">--}}
                {{--                                <h4>Chart</h4>--}}
                {{--                            </div>--}}
                {{--                            <div class="card-body">--}}
                {{--                                <div id="chart2" class="chartsh"></div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                @yield('content')




                {{--                <div class="row">--}}
                {{--                    <div class="col-md-6 col-lg-12 col-xl-6">--}}
                {{--                        <!-- Support tickets -->--}}
                {{--                        <div class="card">--}}
                {{--                            <div class="card-header">--}}
                {{--                                <h4>Support Ticket</h4>--}}
                {{--                                <form class="card-header-form">--}}
                {{--                                    <input type="text" name="search" class="form-control" placeholder="Search">--}}
                {{--                                </form>--}}
                {{--                            </div>--}}
                {{--                            <div class="card-body">--}}
                {{--                                <div class="support-ticket media pb-1 mb-3">--}}
                {{--                                    <img src="assets/img/users/user-1.png" class="user-img mr-2" alt="">--}}
                {{--                                    <div class="media-body ml-3">--}}
                {{--                                        <div class="badge badge-pill badge-success mb-1 float-right">Feature</div>--}}
                {{--                                        <span class="font-weight-bold">#89754</span>--}}
                {{--                                        <a href="javascript:void(0)">Please add advance table</a>--}}
                {{--                                        <p class="my-1">Hi, can you please add new table for advan...</p>--}}
                {{--                                        <small class="text-muted">Created by <span class="font-weight-bold font-13">John--}}
                {{--                          Deo</span>--}}
                {{--                                            &nbsp;&nbsp; - 1 day ago</small>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="support-ticket media pb-1 mb-3">--}}
                {{--                                    <img src="assets/img/users/user-2.png" class="user-img mr-2" alt="">--}}
                {{--                                    <div class="media-body ml-3">--}}
                {{--                                        <div class="badge badge-pill badge-warning mb-1 float-right">Bug</div>--}}
                {{--                                        <span class="font-weight-bold">#57854</span>--}}
                {{--                                        <a href="javascript:void(0)">Select item not working</a>--}}
                {{--                                        <p class="my-1">please check select item in advance form not work...</p>--}}
                {{--                                        <small class="text-muted">Created by <span class="font-weight-bold font-13">Sarah--}}
                {{--                          Smith</span>--}}
                {{--                                            &nbsp;&nbsp; - 2 day ago</small>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="support-ticket media pb-1 mb-3">--}}
                {{--                                    <img src="assets/img/users/user-3.png" class="user-img mr-2" alt="">--}}
                {{--                                    <div class="media-body ml-3">--}}
                {{--                                        <div class="badge badge-pill badge-primary mb-1 float-right">Query</div>--}}
                {{--                                        <span class="font-weight-bold">#85784</span>--}}
                {{--                                        <a href="javascript:void(0)">Are you provide template in Angular?</a>--}}
                {{--                                        <p class="my-1">can you provide template in latest angular 8.</p>--}}
                {{--                                        <small class="text-muted">Created by <span class="font-weight-bold font-13">Ashton Cox</span>--}}
                {{--                                            &nbsp;&nbsp; -2 day ago</small>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="support-ticket media pb-1 mb-3">--}}
                {{--                                    <img src="assets/img/users/user-6.png" class="user-img mr-2" alt="">--}}
                {{--                                    <div class="media-body ml-3">--}}
                {{--                                        <div class="badge badge-pill badge-info mb-1 float-right">Enhancement</div>--}}
                {{--                                        <span class="font-weight-bold">#25874</span>--}}
                {{--                                        <a href="javascript:void(0)">About template page load speed</a>--}}
                {{--                                        <p class="my-1">Hi, John, can you work on increase page speed of template...</p>--}}
                {{--                                        <small class="text-muted">Created by <span class="font-weight-bold font-13">Hasan--}}
                {{--                          Basri</span>--}}
                {{--                                            &nbsp;&nbsp; -3 day ago</small>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                            <a href="javascript:void(0)" class="card-footer card-link text-center small ">View--}}
                {{--                                All</a>--}}
                {{--                        </div>--}}
                {{--                        <!-- Support tickets -->--}}
                {{--                    </div>--}}
                {{--                    <div class="col-md-6 col-lg-12 col-xl-6">--}}
                {{--                        <div class="card">--}}
                {{--                            <div class="card-header">--}}
                {{--                                <h4>Projects Payments</h4>--}}
                {{--                            </div>--}}
                {{--                            <div class="card-body">--}}
                {{--                                <div class="table-responsive">--}}
                {{--                                    <table class="table table-hover mb-0">--}}
                {{--                                        <thead>--}}
                {{--                                        <tr>--}}
                {{--                                            <th>#</th>--}}
                {{--                                            <th>Client Name</th>--}}
                {{--                                            <th>Date</th>--}}
                {{--                                            <th>Payment Method</th>--}}
                {{--                                            <th>Amount</th>--}}
                {{--                                        </tr>--}}
                {{--                                        </thead>--}}
                {{--                                        <tbody>--}}
                {{--                                        <tr>--}}
                {{--                                            <td>1</td>--}}
                {{--                                            <td>John Doe </td>--}}
                {{--                                            <td>11-08-2018</td>--}}
                {{--                                            <td>NEFT</td>--}}
                {{--                                            <td>$258</td>--}}
                {{--                                        </tr>--}}
                {{--                                        <tr>--}}
                {{--                                            <td>2</td>--}}
                {{--                                            <td>Cara Stevens--}}
                {{--                                            </td>--}}
                {{--                                            <td>15-07-2018</td>--}}
                {{--                                            <td>PayPal</td>--}}
                {{--                                            <td>$125</td>--}}
                {{--                                        </tr>--}}
                {{--                                        <tr>--}}
                {{--                                            <td>3</td>--}}
                {{--                                            <td>--}}
                {{--                                                Airi Satou--}}
                {{--                                            </td>--}}
                {{--                                            <td>25-08-2018</td>--}}
                {{--                                            <td>RTGS</td>--}}
                {{--                                            <td>$287</td>--}}
                {{--                                        </tr>--}}
                {{--                                        <tr>--}}
                {{--                                            <td>4</td>--}}
                {{--                                            <td>--}}
                {{--                                                Angelica Ramos--}}
                {{--                                            </td>--}}
                {{--                                            <td>01-05-2018</td>--}}
                {{--                                            <td>CASH</td>--}}
                {{--                                            <td>$170</td>--}}
                {{--                                        </tr>--}}
                {{--                                        <tr>--}}
                {{--                                            <td>5</td>--}}
                {{--                                            <td>--}}
                {{--                                                Ashton Cox--}}
                {{--                                            </td>--}}
                {{--                                            <td>18-04-2018</td>--}}
                {{--                                            <td>NEFT</td>--}}
                {{--                                            <td>$970</td>--}}
                {{--                                        </tr>--}}
                {{--                                        <tr>--}}
                {{--                                            <td>6</td>--}}
                {{--                                            <td>--}}
                {{--                                                John Deo--}}
                {{--                                            </td>--}}
                {{--                                            <td>22-11-2018</td>--}}
                {{--                                            <td>PayPal</td>--}}
                {{--                                            <td>$854</td>--}}
                {{--                                        </tr>--}}
                {{--                                        <tr>--}}
                {{--                                            <td>7</td>--}}
                {{--                                            <td>--}}
                {{--                                                Hasan Basri--}}
                {{--                                            </td>--}}
                {{--                                            <td>07-09-2018</td>--}}
                {{--                                            <td>Cash</td>--}}
                {{--                                            <td>$128</td>--}}
                {{--                                        </tr>--}}
                {{--                                        </tbody>--}}
                {{--                                    </table>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </section>
{{--            <div class="settingSidebar">--}}
{{--                <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>--}}
{{--                </a>--}}
{{--                <div class="settingSidebar-body ps-container ps-theme-default">--}}
{{--                    <div class=" fade show active">--}}
{{--                        <div class="setting-panel-header">Setting Panel--}}
{{--                        </div>--}}
{{--                        <div class="p-15 border-bottom">--}}
{{--                            <h6 class="font-medium m-b-10">Select Layout</h6>--}}
{{--                            <div class="selectgroup layout-color w-50">--}}
{{--                                <label class="selectgroup-item">--}}
{{--                                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>--}}
{{--                                    <span class="selectgroup-button">Light</span>--}}
{{--                                </label>--}}
{{--                                <label class="selectgroup-item">--}}
{{--                                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">--}}
{{--                                    <span class="selectgroup-button">Dark</span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="p-15 border-bottom">--}}
{{--                            <h6 class="font-medium m-b-10">Sidebar Color</h6>--}}
{{--                            <div class="selectgroup selectgroup-pills sidebar-color">--}}
{{--                                <label class="selectgroup-item">--}}
{{--                                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">--}}
{{--                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"--}}
{{--                                          data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>--}}
{{--                                </label>--}}
{{--                                <label class="selectgroup-item">--}}
{{--                                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>--}}
{{--                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"--}}
{{--                                          data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="p-15 border-bottom">--}}
{{--                            <h6 class="font-medium m-b-10">Color Theme</h6>--}}
{{--                            <div class="theme-setting-options">--}}
{{--                                <ul class="choose-theme list-unstyled mb-0">--}}
{{--                                    <li title="white" class="active">--}}
{{--                                        <div class="white"></div>--}}
{{--                                    </li>--}}
{{--                                    <li title="cyan">--}}
{{--                                        <div class="cyan"></div>--}}
{{--                                    </li>--}}
{{--                                    <li title="black">--}}
{{--                                        <div class="black"></div>--}}
{{--                                    </li>--}}
{{--                                    <li title="purple">--}}
{{--                                        <div class="purple"></div>--}}
{{--                                    </li>--}}
{{--                                    <li title="orange">--}}
{{--                                        <div class="orange"></div>--}}
{{--                                    </li>--}}
{{--                                    <li title="green">--}}
{{--                                        <div class="green"></div>--}}
{{--                                    </li>--}}
{{--                                    <li title="red">--}}
{{--                                        <div class="red"></div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="p-15 border-bottom">--}}
{{--                            <div class="theme-setting-options">--}}
{{--                                <label class="m-b-0">--}}
{{--                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"--}}
{{--                                           id="mini_sidebar_setting">--}}
{{--                                    <span class="custom-switch-indicator"></span>--}}
{{--                                    <span class="control-label p-l-10">Mini Sidebar</span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="p-15 border-bottom">--}}
{{--                            <div class="theme-setting-options">--}}
{{--                                <label class="m-b-0">--}}
{{--                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"--}}
{{--                                           id="sticky_header_setting">--}}
{{--                                    <span class="custom-switch-indicator"></span>--}}
{{--                                    <span class="control-label p-l-10">Sticky Header</span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">--}}
{{--                            <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">--}}
{{--                                <i class="fas fa-undo"></i> Restore Default--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                <a href="{!! url('www.nrbglobalbank.com') !!}">{!! config('company.bank.name') !!}</a></a>
            </div>
            <div class="footer-right">
            </div>
        </footer>
    </div>
</div>
<script type="text/javascript" src="{!! asset('assets/bootstrap-4.3.1/js/bootstrap.min.js') !!}"></script>
<!-- General JS Scripts -->
<script src="{!! asset('beauty/js/app.min.js') !!}"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<script src="{!! asset('beauty/js/page/index.js') !!}"></script>
<!-- Template JS File -->
<script src="{!! asset('beauty/js/scripts.js') !!}"></script>
<!-- Custom JS File -->
<script src="{!! asset('beauty/js/custom.js') !!}"></script>

<script type="text/javascript" src="{!! asset('assets/DataTables-1.10.18/js/jquery.dataTables.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('assets/DataTables-1.10.18/js/dataTables.jqueryui.min.js') !!}"></script>

@stack('scripts')
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
