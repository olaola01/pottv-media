<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Pottv Media" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/image/logo/favicon.ico')}}">

    <!-- App css -->

    @yield('css')

    <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>

    <!-- icons -->
    <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>

</head>

<!-- body start -->
<body class="loading" data-layout-color="light" data-layout-mode="default" data-layout-size="fluid"
      data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default'
      data-sidebar-user='true'>

<!-- Begin page -->
<div id="wrapper">


    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-end mb-0">

            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown"
                   href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('admin/assets/images/users/user-1.jpg')}}" alt="user-image"
                         class="rounded-circle">
                    <span class="pro-user-name ms-1">
                        {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          class="d-none">
                        @csrf
                    </form>
                    <!-- item-->
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>


        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="{{asset('assets/image/logo/logo.jpg')}}" alt="" height="100">
                            </span>
                <span class="logo-lg">
                                <img src="{{asset('assets/image/logo/logo.jpg')}}" alt="" height="80">
                            </span>
            </a>
            <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{asset('assets/image/logo/logo.jpg')}}" alt="" height="100">
                            </span>
                <span class="logo-lg">
                                <img src="{{asset('assets/image/logo/logo.jpg')}}" alt="" height="80">
                            </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
            <li>
                <button class="button-menu-mobile disable-btn waves-effect">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <h4 class="page-title-main">@yield('title')</h4>
            </li>

        </ul>

        <div class="clearfix"></div>

    </div>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="h-100" data-simplebar>
            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul id="side-menu">

                    <li class="menu-title">Navigation</li>

                    <li>
                        <a href="{{route('dashboard')}}">
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('posts.index')}}">
                            <i class="mdi mdi-post"></i>
                            <span> Posts </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('categories.index')}}">
                            <i class="mdi mdi-table"></i>
                            <span> Categories </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('tags.index')}}">
                            <i class="mdi mdi-code-tags"></i>
                            <span> Tags </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('posts.trashed')}}">
                            <i class="mdi mdi-trash-can"></i>
                            <span> Trashed Posts </span>
                        </a>
                    </li>

                    <li>
                        <a href="#adminSettings" data-bs-toggle="collapse">
                            <i class="mdi mdi-database-settings"></i>
                            <span> Admin Settings </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="adminSettings">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="auth-register.html">All Admins</a>
                                </li>
                                <li>
                                    <a href="auth-login.html">Create New Admin</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>


</div>
<!-- END wrapper -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor -->
<script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

@yield('script')
<!-- knob plugin -->
<script src="{{asset('admin/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

<!--Morris Chart-->
{{--<script src="{{asset('admin/assets/libs/morris.js06/morris.min.js')}}"></script>--}}
{{--<script src="{{asset('admin/assets/libs/raphael/raphael.min.js')}}"></script>--}}

<!-- Dashboar init js-->
<script src="{{asset('admin/assets/js/pages/dashboard.init.js')}}"></script>

<!-- App js-->
<script src="{{asset('admin/assets/js/app.min.js')}}"></script>

</body>
</html>
