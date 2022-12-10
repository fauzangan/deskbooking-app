<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @can('admin')
                <div class="sb-sidenav-menu-heading">Master</div>
                <a class="nav-link {{ Request::is('location*')? 'active' : '' }}" href="/location">
                    <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div>
                    Master Location
                </a>
                <a class="nav-link {{ Request::is('area*')? 'active' : '' }}"  href="/area">
                    <div class="sb-nav-link-icon"><i class="fas fa-location-arrow"></i></div>
                    Master Area
                </a>
                <div class="sb-sidenav-menu-heading">Monitoring</div>
                <a class="nav-link {{ Request::is('monitoring*')? 'active' : '' }}" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-desktop"></i></div>
                    Monitoring
                </a>
                @endcan
                @can('karyawan')
                <div class="sb-sidenav-menu-heading">Master</div>
                <a class="nav-link {{ Request::is('reservation*')? 'active' : '' }}" href="/reservation">
                    <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div>
                    Reservation
                </a>
                @endcan
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ auth()->user()->name }}
        </div>
    </nav>
</div>