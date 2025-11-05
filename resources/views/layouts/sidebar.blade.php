<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-tasks"></i>
                </div>
                <div class="sidebar-brand-text mx-3">M-tugas <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ $menuDashboard ?? '' }}">
                <a class="nav-link" href="{{ route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
              Menu Admin
            </div>

            <li class="nav-item {{ $menuAdminUser ?? '' }}">
                <a class="nav-link" href="{{ route('user')}}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data User</span></a>
            </li>

           
            <li class="nav-item {{ $menuAdminTugas ?? '' }}">
                <a class="nav-link" href="{{ route('tugas')}}">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Data Tugas</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

             <!-- Heading 2 -->
            <div class="sidebar-heading">
              Menu Karyawan
            </div>

            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>DATA TUGAS</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->