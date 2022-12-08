<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Master</div>
                <a class="nav-link {{ Request::is('location*')? 'active' : '' }}" href="/location">
                    <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div>
                    Master Location
                </a>
                <a class="nav-link {{ Request::is('area*')? 'active' : '' }}"  href="/area">
                    <div class="sb-nav-link-icon"><i class="fas fa-map-marker"></i></div>
                    Master Area
                </a>
                <div class="sb-sidenav-menu-heading">Monitoring</div>
                <a class="nav-link {{ Request::is('monitoring*')? 'active' : '' }}" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-desktop"></i></div>
                    Monitoring
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ auth()->user()->name }}
        </div>
    </nav>
</div>