<!doctype html>
<html lang="en">


<!-- Mirrored from pixner.net/paylio/paylio-dashboard/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Mar 2023 01:29:24 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/arafat-font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @livewireStyles
</head>

<body>
    <!-- start preloader -->
    {{-- <div class="preloader" id="preloader"></div> --}}
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section body-collapse">
        <div class="overlay">
            <div class="container-fruid">
                <div class="row d-flex header-area">
                    <div class="navbar-area d-flex align-items-center justify-content-between">
                        <div class="sidebar-icon">
                            <img src="{{ asset('assets/images/icon/menu.png') }}" alt="icon">
                        </div>
                        <form action="#" class="flex-fill">
                            <div class="form-group d-flex align-items-center">
                                <img src="{{ asset('assets/images/icon/search.png') }}" alt="icon">
                                <input type="text" placeholder="Type to search...">
                            </div>
                        </form>
                        <div class="dashboard-nav">
                            <div class="single-item language-area">
                                <div class="language-btn">
                                    <img src="{{ asset('assets/images/icon/lang.png') }}" alt="icon">
                                </div>
                                <ul class="main-area language-content">
                                    <li>English</li>
                                </ul>
                            </div>

                            <div class="single-item user-area">
                                <div class="profile-area d-flex align-items-center">
                                    <span class="user-profile">
                                        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}"
                                            style="height:40px;width:40px;border-radius:50%;" alt="User">
                                    </span>
                                    <i class="fa-solid fa-sort-down"></i>
                                </div>
                                <div class="main-area user-content">
                                    <div class="head-area d-flex align-items-center">
                                        <div class="profile-img">
                                            <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}"
                                                alt="User">
                                        </div>
                                        <div class="profile-head">
                                            <a href="javascript:void(0)">
                                                <h5>{{ ucwords(Auth::user()->name) }}</h5>
                                            </a>
                                            <p class="wallet-id">Wallet ID: {{ Auth::user()->id_number }}</p>
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="border-area">
                                            <a href="account.html"><i class="fas fa-cog"></i>Settings</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();"><i
                                                    class="fas fa-sign-out"></i>Logout</a>


                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-wrapper">
                        <div class="close-btn">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="sidebar-logo">

                            <img src="{{ asset('logo.webp') }}" style="width: 185px;margin-top:-30px;" alt="logo">

                        </div>
                        @role('administrator')
                            @include('layouts.admin-menu')
                        @endrole
                        @role('user')
                            @include('layouts.user-menu')
                        @endrole
                        <ul class="bottom-item">
                            <li>
                                <a href="{{ url('account-profile') }}">
                                    <img src="{{ asset('assets/images/icon/account.png') }}" alt="Account">
                                    <span>Account</span>
                                </a>
                            </li>

                            <li>
                                <a href="j{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-forms').submit();">
                                    <img src="{{ asset('assets/images/icon/quit.png') }}" alt="Quit">
                                    <span>Quit</span>
                                </a>
                            </li>


                            <form id="logout-forms" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                        <div class="pt-120">
                            <div class="invite-now">
                                <div class="img-area">
                                    <img src="{{ asset('assets/images/invite-now-illus.png') }}" alt="Image">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    <!-- Dashboard Section start -->
    {{--  --}}
    @yield('content')
    {{-- </section> --}}
    <!-- Dashboard Section end -->

    <!--==================================================================-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/waypoint.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/plugin.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    @livewireScripts
</body>


</html>
