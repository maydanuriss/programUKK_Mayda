<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-coffee"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><span>Caffe Mayda</span></div>
    </a>
    <?php if(session()->role == 'kasir') :?>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="/pesanan">
            <i class="fas fa-fw fa-book"></i>
            <span>Pesanan</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="/laporan">
            <i class="fas fa-fw fa-table"></i>
            <span>Laporan</span>
        </a>
    </li>
    <?php endif ;?>
    <?php if(session()->role == 'manager') :?>
        <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="/menu">
            <i class="fas fa-fw fa-utensils"></i>
            <span>Menu</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="/pesanan">
            <i class="fas fa-fw fa-book"></i>
            <span>Pesanan</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="/laporan">
            <i class="fas fa-fw fa-table"></i>
            <span>Laporan</span>
        </a>
    </li>
    <?php endif ;?>
    <?php if(session()->role == 'admin') :?>
        <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="/user">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="/menu">
            <i class="fas fa-fw fa-utensils"></i>
            <span>Menu</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="/pesanan">
            <i class="fas fa-fw fa-book"></i>
            <span>Pesanan</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="/laporan">
            <i class="fas fa-fw fa-table"></i>
            <span>Laporan</span>
        </a>
    </li>
    <?php endif ;?>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>