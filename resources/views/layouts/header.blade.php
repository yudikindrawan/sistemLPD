<div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class=""><img width="42" class="rounded-circle" src="{{ asset ('lpd.jpg')}}" alt=""><b> LPD Desa Tojan</b></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper"> </div>
                    <ul class="header-menu nav">
                        <li class="nav-item"></li>
                        <li class="btn-group nav-item"></li>
                        <li class="dropdown nav-item"></li>
                    </ul>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="{{ asset ('assets/production/images/user.png') }}" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ route('changepass')}}"><button type="button" tabindex="0" class="dropdown-item">Ubah Password</button></a>
                                            {{-- <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <a href=""><button type="button" tabindex="0" class="dropdown-item">Lihat Profil</button></a> --}}
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a href="{{ route('logout')}}"><button type="button" tabindex="0" class="dropdown-item">Logout</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                  <br>
                                    <div class="widget-heading">
                                        Hai, {{ Auth::user()->nama}}
                                    </div>
                                    <p style="font-size:10px">{{ Auth::user()->roles->nama_roles}}</p>
                                </div>
                                {{-- <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
