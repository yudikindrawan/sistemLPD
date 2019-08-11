<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
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

                @include('layouts.sidebar')
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
    @include('layouts.scripts')
    </body>
</html>