<div class="app-main">
  <div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
      <div class="logo-src"></div>
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
    <div class="scrollbar-sidebar">
      <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
        @if(Auth::user()->roles_id == 1)
          <li class="app-sidebar__heading">Dashboards</li>
            <li><a href="{{ route('dashboard')}}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
          <li class="app-sidebar__heading">Data Master</li>
              <li><a href="#"><i class="metismenu-icon pe-7s-diamond"></i>Data Master<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
                <ul>
                <li><a href="{{ route('debitur.index')}}"><i class="metismenu-icon"> </i>Data Debitur</a></li>
                </ul>
              </li>
          <li class="app-sidebar__heading">Transaksi</li>
            <li><a href=""><i class="metismenu-icon pe-7s-pendrive"></i>Transaksi<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
                <ul>
                  <li><a href="{{ route('transaksi.index')}}"><i class="metismenu-icon"></i>Kredit</a></li>
                  <li><a href="elements-dropdowns.html"><i class="metismenu-icon"> </i>Angsuran</a></li>
                </ul>
              </li>
            <li><a href="{{ route('bunga.index') }}"><i class="metismenu-icon pe-7s-display2"></i>Bunga Kredit</a></li>
        @elseif(Auth::user()->roles_id == 2 )
          <li class="app-sidebar__heading">Dashboards</li>
            <li><a href="{{ route('dashboard')}}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
          <li class="app-sidebar__heading">Data Master</li>
            <li><a href="#"><i class="metismenu-icon pe-7s-diamond"></i>Data Master<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
              <ul>
                <li><a href="{{ route('datauser.index')}}"><i class="metismenu-icon"></i>Data User</a></li>
              </ul>
            </li>
          <li class="app-sidebar__heading">Laporan</li>
            <li><a href="#"><i class="metismenu-icon pe-7s-note2"></i>Laporan LPD<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
              <ul>
                <li><a href="forms-controls.html"><i class="metismenu-icon pe-7s-mouse"></i>Laporan 1</a></li>
                <li><a href="forms-layouts.html"><i class="metismenu-icon pe-7s-eyedropper"></i>laporan 2</a></li>
                <li><a href="forms-validation.html"><i class="metismenu-icon pe-7s-pendrive"></i>laporan 3</a></li>
              </ul>
            </li>
        @endif
        </ul>
      </div>
    </div>
  </div> 