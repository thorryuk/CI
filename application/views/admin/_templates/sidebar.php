<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin_controller'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-spider"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_controller'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Admin  -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_controller/get_u'); ?>">
            <i class="fas fa-fw fa-list"></i>
            <span>Admin List</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_controller/temperature'); ?>">
            <i class="fas fa-fw fa-temperature-high"></i>
            <span>Temperature</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_controller/voltage'); ?>">
            <i class="fas fa-fw fa-bolt"></i>
            <span>Voltage</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_controller/vibrate'); ?>">
            <i class="fas fa-fw fa-square"></i>
            <span>Vibrate</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_controller/cctv'); ?>">
            <i class="fas fa-fw fa-video"></i>
            <span>CCTV</span></a>
    </li>

    <!-- Nav Item - Worker -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_controller/get_w'); ?>">
            <i class="fas fa-fw fa-list"></i>
            <span>Worker List</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->