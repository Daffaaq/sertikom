<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-tosca sidebar sidebar-dark accordion" id="accordionSidebar"
            style="background-color: #40E0D0;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-text mx-3">Arsip Surat</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{ Request::routeIs('arsip_surat.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('arsip_surat.index') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Arsip</span></a>
            </li>
            <li class="nav-item {{ Request::routeIs('kategori_surats.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('kategori_surats.index') }}">
                    <i class="fas fa-fw fa-envelope-open-text"></i>
                    <span>Kategori Surat</span></a>
            </li>
            <li class="nav-item {{ Request::routeIs('kategori_surats.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('kategori_surats.index') }}">
                    <i class="fas fa-fw fa-envelope-open-text"></i>
                    <span>About</span></a>
            </li>





            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            {{-- <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
                    and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                    Pro!</a>
            </div> --}}
            <li class="nav-item">


            </li>

        </ul>
        <!-- End of Sidebar -->
</body>
