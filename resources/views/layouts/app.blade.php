<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- App css -->
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{url('plugins/switchery/switchery.min.css')}}">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{url('assets/js/modernizr.min.js')}}"></script>

    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                            <!--Zircos-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="{{url('/')}}" class="logo">
                            <h2 style="color: #fff">{{ config('app.name', 'Laravel') }}</h2>
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="navbar-c-items">
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="Search..." class="form-control">
                                     <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>

                            <li class="dropdown navbar-c-items">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="{{url('assets/images/users/avatar-5.jpg')}}" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li class="text-center">
                                        <h5>Hi, {{Auth::user()->name}}</h5>
                                    </li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                        

                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>
                    <!-- end menu-extras -->

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-account-multiple"></i>Pengguna</a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{url('jabatan')}}">Jabatan</a>
                                    </li>
                                    <li>
                                        <a href="{{url('golongan')}}">Golongan</a>
                                    </li>
                                    <li>
                                        <a href="{{url('pegawai')}}">Pegawai</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-diamond"></i>Penggajian</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li>
                                                <span>Tunjangan</span>
                                            </li>
                                            <li><a href="{{url('tunjangan')}}">Tunjangan</a></li>
                                            <li><a href="{{url('tunjangan_pegawai')}}">Tunjangan Pegawai</a></li>
                                            <li>
                                                <span>Lembur</span>
                                            </li>
                                            <li><a href="{{url('kategori_lembur')}}">Kategori Lembur</a></li>
                                            <li><a href="{{url('lembur_pegawai')}}">Lembur Pegawai</a></li>
                                            <li>
                                                <span>Penggajian</span>
                                            </li>
                                            <li><a href="{{url('penggajian')}}">Transaksi</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->
        <br><br>
        <footer class="footer text-right">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                                © 2017. CodingByGilaCoding.
                    </div>
                </div>
            </div>

        </footer>
        <br><br><br><br>
        @yield('content')
        </div>



        <!-- jQuery  -->
        <script src="{{url('assets/js/jquery.min.js')}}"></script>
        <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{url('assets/js/detect.js')}}"></script>
        <script src="{{url('assets/js/fastclick.js')}}"></script>
        <script src="{{url('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{url('assets/js/waves.js')}}"></script>
        <script src="{{url('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{url('assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{url('plugins/switchery/switchery.min.js')}}"></script>

        <!-- Counter js  -->
        <script src="{{url('plugins/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{url('plugins/counterup/jquery.counterup.min.js')}}"></script>

        <!--Morris Chart-->
		<script src="{{url('plugins/morris/morris.min.js')}}"></script>
		<script src="{{url('plugins/raphael/raphael-min.js')}}"></script>

        <!-- Dashboard init -->
        <script src="{{url('assets/pages/jquery.dashboard.js')}}"></script>

        <!-- App js -->
        <script src="{{url('assets/js/jquery.core.js')}}"></script>
        <script src="{{url('assets/js/jquery.app.js')}}"></script>

    </body>
</html>