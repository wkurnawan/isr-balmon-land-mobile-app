<div class="horizontal-menu">
    <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html">
                    <img src="{{ asset('plus') }}/assets/images/kominfo.png" style="width: 50%" alt="logo" />
                    <span class="font-12 d-block font-weight-light"><b>ISR - Landmobile</b></span>
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img
                        src="{{ asset('plus') }}/assets/images/kominfo.png" style="width: 50%" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block"></li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="{{ asset('plus') }}/assets/images/faces/face1.jpg" alt="image" />
                            </div>
                            <div class="nav-profile-text">
                                <p class="text-black font-weight-semibold m-0"> Olson jass </p>
                                <span class="font-13 online-color">online <i class="mdi mdi-chevron-down"></i></span>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary text-white mb-4">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
                        <a class="nav-link" href="/users">Data Users</a>
                    </li>
                    <li class="nav-item {{ Request::is('landmobile*') ? 'active' : '' }}">
                        <a class="nav-link" href="/landmobile">Data Landmobiles</a>
                    </li>
                    <li class="nav-item {{ Request::is('grafik*') ? 'active' : '' }}">
                        <a class="nav-link" href="/grafik">Grafik</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
