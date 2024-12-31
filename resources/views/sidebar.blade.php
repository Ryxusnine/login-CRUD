<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <img src="{{ asset('assets/img/slotonlinegacor.png') }}" height="35px" alt="logo">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <div class="h5 text-center my-3">Selamat Datang, {{ auth()->user()->username }}</div>

    <ul class="menu-inner py-1 mt-3">
        <li class="menu-item mb-3 {{ Route::is('dashboard.index') ? 'active' : '' }}">
            <a href="{{ route('dashboard.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item mb-3 {{ Route::is('kritikdansaran.index') ? 'active' : '' }}">
            <a href="{{ route('kritikdansaran.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Kritik & Saran</div>
            </a>
        </li>
        <li class="menu-item mb-3 {{ Route::is('about.index') ? 'active' : '' }}">
            <a href="{{ route('about.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Documentation">Tentang Kami</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('logout.proses') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div data-i18n="Documentation">Logout</div>
            </a>
        </li>
    </ul>
</aside>
