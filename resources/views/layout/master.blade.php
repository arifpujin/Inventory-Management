<!DOCTYPE html>

<!--


	***** HAYO.. Mau Ngapain Buka Inpect Element? *****
   *********** JANGAN ISENG BUKA BUKA KODENYA ***********

//=========================================================//
//         //\\       ||====    ||      ||==========       //
//        //  \\      ||  //    ||      ||                 //
//       //    \\     || //     ||      ||========         //
//      //======\\    || \\     ||      ||                 //
//     //        \\   ||  \\    ||      ||                 //
//    //          \\  ||   \\   ||      ||                 //
//                                                         //
//        Created By Arif Puji Nugroho (Indonesia)         //
//     Website    : https://arifpujin.com/                 //
//     GitHub     : https://Github.com/arifpujin           //
//     Facebook   : https://facebook.com/arifpn            //
//     Instagram  : https://instagram.com/reallifeapn      //
//     Whatsapp   : +6285885994505                         //
//     Email      : arifpujinugroho@gmail.com              //
//=========================================================//

//    *****Inventory Management System for LAB TV FT UNY 2019**********
//        *****Proyek Akhir Skripsi || Proyek Mandiri UNY**********
//             ***** 5 Maret 2019 - Thesis Finish **********





-->











<html lang="en">

<head>
    <title>@yield('title') || UNYtechTV</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Arif Puji Nugroho">

    <!-- Favicon -->
    <link rel="icon" href="https://unytechtv.com/wp-content/uploads/2018/12/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://unytechtv.com/wp-content/uploads/2018/12/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="https://unytechtv.com/wp-content/uploads/2018/12/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="https://unytechtv.com/wp-content/uploads/2018/12/cropped-favicon-270x270.png" />

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    @yield('header')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>
    <!-- Pre-loader start -->
   <div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        @guest
                        <a href="https://unytechtv.com/">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Logo UNYtechTV" />
                        </a>
                        @else
                        <a href="#">
                            <img class="img-fluid" src="assets/images/logo.png" alt="Logo UNYtechTV" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                        @endguest
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                        @guest
                        <!--guest navbar-right-->
                        @else
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    @if(Auth::user()->level == 'admin')
                                        <span>{{ Auth::user()->username }}</span>
                                    @elseif(Auth::user()->level == 'pengurus')
                                        <!--img src="" class="img-radius" alt="User-Profile-Image"-->
                                        <span>{{ Auth::user()->mahasiswa->namapanggilan }}</span>
                                        <i class="ti-angle-down"></i>
                                    @elseif(Auth::user()->level == 'mahasiswa')
                                        <!--img src="" class="img-radius" alt="User-Profile-Image"-->
                                        <span>{{ Auth::user()->mahasiswa->namapanggilan }}</span>
                                        <i class="ti-angle-down"></i>
                                    @endif
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                    <a href="{{ route('logout') }}">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                </li>
                                </ul>
                            </li>
                        @endguest
                        </ul>
                    </div>
                </div>
            </nav>


            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a>
                        </div>
                        
                        <div class="pcoded-inner-navbar main-menu">
                            <!--For Slide Samping-->
                            @guest
                             <!--guest navigation left-->
                            @else
                                @if(Auth::user()->level == 'mahasiswa' || Auth::user()->level == 'pengurus')
                                    <div class="">
                                        <div class="main-menu-header">
                                            <!--img class="img-40 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image"-->
                                            <div class="user-details">
                                                <span><strong>{{ Auth::user()->mahasiswa->namapanggilan }}</strong></span>
                                                <span>{{ Auth::user()->mahasiswa->status_crew }} || {{ Auth::user()->username }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endguest

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation
                            </div>

                            <ul class="pcoded-item pcoded-left-item">
                                @guest
                                    @include('left-side.guest')
                                @else
                                    @if(Auth::user()->level == "admin")
                                        @include('left-side.admin')
                                    @elseif(Auth::user()->level == "pengurus")
                                        @include('left-side.pengurus')
                                    @elseif(Auth::user()->level == "mahasiswa")
                                        @include('left-side.mahasiswa')
                                    @endif
                                @endguest

                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                @yield('content')
                                </div>
                            </div>
                            <!-- Main-body end -->

                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="assets/bower_components/modernizr/js/css-scrollbars.js"></script>

    <!-- i18next.min.js -->
    <script type="text/javascript" src="assets/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="assets/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/demo-12.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>

    @yield('footer')
</body>

</html>