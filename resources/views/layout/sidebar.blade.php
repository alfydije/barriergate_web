<div class="sticky">
    <aside class="app-sidebar sidebar-scroll">
        <div class="main-sidebar-header active">

            <a class="desktop-logo logo-light active" href="index.html"><img src="{{ asset('images/SIMBAPAR-BLACK.png') }}" class="main-logo" alt="logo"></a>

            <a class="desktop-logo logo-dark active" href="index.html"><img src="{{ asset('images/SIMBAPAR-WHITE.png') }}" class="main-logo" alt="logo"></a>

            <a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="{{ asset('simbapar/assets/img/brand/pol-icon.png') }}" alt="logo"></a>

            <a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="{{ asset('simbapar/assets/img/brand/pol-icon.png') }}" alt="logo"></a>

        </div>
        <div class="main-sidemenu">
            <div class="main-sidebar-loggedin">
                <div class="app-sidebar__user">
                    <div class="dropdown user-pro-body text-center">
                        <div class="user-pic">
                            <img src="{{ asset(auth()->user()->user_profile ? auth()->user()->user_profile->image ? 'storage/' . auth()->user()->user_profile->image :'assets/images/default-profile.jpg' : 'assets/images/default-profile.jpg') }}" alt="user-img" class="rounded-circle mCS_img_loaded">
                        </div>
                        <div class="user-info">
                            <h6 class=" mb-0 text-dark">{{ auth()->user()->username }}</h6>
                            <span class="text-muted app-sidebar__user-name text-sm">{{ auth()->user()->email }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-navs ">
                <ul class="nav mx-5 nav-pills-circle">
                    <!-- <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Settings" aria-describedby="tooltip365540">
                        <a class="nav-link text-center m-2">
                            <i class="fe fe-settings"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Chat" aria-describedby="tooltip143427">
                        <a class="nav-link text-center m-2">
                            <i class="fe fe-mail"></i>
                        </a>
                    </li> -->
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Followers">
                        <a class="nav-link text-center m-2" href="{{ route('profile.index') }}">
                            <i class="fe fe-user"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Logout">
                        <a class="nav-link text-center m-2" href="{{ route('logout') }}">
                            <i class="fe fe-power"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
            <ul class="side-menu ">
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('dashboard.index') }}" data-sidebar="dashboard">
                        <i class="side-menu__icon fe fe-airplay"></i>
                        <span class="side-menu__label">Dasbor</span>
                    </a>
                </li>
                <li class="slide">
                    @if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('superAdmin'))
                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-user">
                            </i><span class="side-menu__label">Akun</span><i class="angle fe fe-chevron-down"></i>
                        </a>
                    @endif
                    <ul class="slide-menu">
                        @if(auth()->user()->hasRole('superAdmin'))
                            <li><a class="slide-item" data-sidebar="admin" href="{{ route('admin.index') }}">Admin</a></li>
                        @endif
                        @if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('superAdmin'))
                            <li><a class="slide-item" data-sidebar="pegawai" href="{{ route('pegawai.index') }}">Pegawai</a></li>
                            <li><a class="slide-item" data-sidebar="mahasiswa" href="{{ route('mahasiswa.index') }}">Mahasiswa</a></li>
                        @endif
                    </ul>
                </li>
                @if (auth()->user()->hasRole('admin'))
                    <li class="slide">
                        <a class="side-menu__item" href="{{ route('kendaraan.index') }}" data-sidebar="kendaraan">
                            <i class="side-menu__icon fe fe-layers"></i>
                            <span class="side-menu__label">Data Kendaraan</span>
                        </a>
                    </li>
                @endif
                @if (auth()->user()->hasRole('admin'))
                {{-- @if (auth()->user()->hasRole('superAdmin') || auth()->user()->hasRole('admin')) --}}
                    <li class="slide">
                        <a class="side-menu__item" href="{{ route('park.index') }}" data-sidebar="data-parkir">
                            <i class="side-menu__icon fe fe-menu"></i>
                            <span class="side-menu__label">Data Parkir</span>
                        </a>
                    </li>
                @endif
                @if (auth()->user()->hasRole('pegawai') || auth()->user()->hasRole('mahasiswa'))
                    <li class="slide">
                        <a class="side-menu__item" href="{{ route('park-history.index') }}" data-sidebar="riwayat-parkir">
                            <i class="side-menu__icon fe fe-file-text"></i>
                            <span class="side-menu__label">Riwayat Parkir</span>
                        </a>
                    </li>
                @endif
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
        </div>
    </aside>
</div>