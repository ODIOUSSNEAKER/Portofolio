<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Portofolio</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= isset($_SESSION['nama_lengkap']) ?
                                                $_SESSION['nama_lengkap'] : '' ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Home
                            <a href="?pg=home" class="nav-link">
                                <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            About
                            <a href="?pg=about" class="nav-link">
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">6</span>
                        </p>
                    </a>

                <li class="nav-item">
                    <a href="?pg=resume" class="nav-link"> class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Resume</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?pg=services" class="nav-link"> class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Services</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?pg=portofolio" class="nav-link"> class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Portofolio</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?pg=dropdown" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dropdown
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?pg=dropdown1" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dropdown 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?pg=dropdownn2" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dropdown 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?pg=dropdown3" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dropdown 3</p>
                            </a>
                        </li>
                    </ul>
                </li>
                </li>
                <li class="nav-item">
                    <a href="?pg=contact" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Contact</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?pg=logout" class="nav-link">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>Logout</p>
                    </a>
                    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>