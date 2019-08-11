<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistem LPD | Tojan</title>

        <!-- Bootstrap -->
        <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset('assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="{{ asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
        
        <!-- Custom Theme Style -->
        <link href="{{ asset('assets/build/css/custom.min.css')}}" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Sistem LPD!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                <div class="profile_pic">
                    <img src="{{ asset ('assets/production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2>John Doe</h2>
                </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="backend/default/index.html">Dashboard</a></li>
                        <li><a href="backend/default/index2.html">Dashboard2</a></li>
                        <li><a href="backend/default/index3.html">Dashboard3</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="backend/default/form.html">General Form</a></li>
                        <li><a href="backend/default/form_advanced.html">Advanced Components</a></li>
                        <li><a href="backend/default/form_validation.html">Form Validation</a></li>
                        <li><a href="backend/default/form_wizards.html">Form Wizard</a></li>
                        <li><a href="backend/default/form_upload.html">Form Upload</a></li>
                        <li><a href="backend/default/form_buttons.html">Form Buttons</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="backend/default/general_elements.html">General Elements</a></li>
                        <li><a href="backend/default/media_gallery.html">Media Gallery</a></li>
                        <li><a href="backend/default/typography.html">Typography</a></li>
                        <li><a href="backend/default/icons.html">Icons</a></li>
                        <li><a href="backend/default/glyphicons.html">Glyphicons</a></li>
                        <li><a href="backend/default/widgets.html">Widgets</a></li>
                        <li><a href="backend/default/invoice.html">Invoice</a></li>
                        <li><a href="backend/default/inbox.html">Inbox</a></li>
                        <li><a href="backend/default/calendar.html">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="backend/default/tables.html">Tables</a></li>
                        <li><a href="backend/default/tables_dynamic.html">Table Dynamic</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="backend/default/chartjs.html">Chart JS</a></li>
                        <li><a href="backend/default/chartjs2.html">Chart JS2</a></li>
                        <li><a href="backend/default/morisjs.html">Moris JS</a></li>
                        <li><a href="backend/default/echarts.html">ECharts</a></li>
                        <li><a href="backend/default/other_charts.html">Other Charts</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="backend/default/fixed_sidebar.html">Fixed Sidebar</a></li>
                        <li><a href="backend/default/fixed_footer.html">Fixed Footer</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
                <div class="menu_section">
                    <h3>Live On</h3>
                    <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="backend/default/e_commerce.html">E-commerce</a></li>
                        <li><a href="backend/default/projects.html">Projects</a></li>
                        <li><a href="backend/default/project_detail.html">Project Detail</a></li>
                        <li><a href="backend/default/contacts.html">Contacts</a></li>
                        <li><a href="backend/default/profile.html">Profile</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="backend/default/page_403.html">403 Error</a></li>
                        <li><a href="backend/default/page_404.html">404 Error</a></li>
                        <li><a href="backend/default/page_500.html">500 Error</a></li>
                        <li><a href="backend/default/plain_page.html">Plain Page</a></li>
                        <li><a href="backend/default/login.html">Login Page</a></li>
                        <li><a href="backend/default/pricing_tables.html">Pricing Tables</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#level1_1">Level One</a>
                            <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li class="sub_menu"><a href="backend/default/level2.html">Level Two</a>
                                </li>
                                <li><a href="#level2_1">Level Two</a>
                                </li>
                                <li><a href="#level2_2">Level Two</a>
                                </li>
                            </ul>
                            </li>
                            <li><a href="#level1_2">Level One</a>
                            </li>
                        </ul>
                    </li>                  
                    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                    </ul>
                </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
            <div class="nav_menu">
                <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset ('assets/production/images/img.jpg')}}" alt="">John Doe
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"> Profile</a></li>
                        <li><a href="javascript:;">Help</a></li>
                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                    </li>
                </ul>
                </nav>
            </div>
            </div>
            <!-- /top navigation -->
            <!--/content----->
                @yield('content')
            <!--/content----->
            <!-- footer content -->
            <footer>
            <div class="pull-right">
                Lembaga Perkreditan Desa - Adat Tojan
            </div>
            <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('assets/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{ asset('assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- morris.js -->
    <script src="{{ asset('assets/vendors/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/morris.js/morris.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('assets/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('assets/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('assets/vendors/DateJS/build/date.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/build/js/custom.min.js') }}"></script>

    </body>
</html>