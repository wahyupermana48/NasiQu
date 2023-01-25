 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ Route::is('dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item {{ Route::is('donation*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('donation.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Donations</span></a>
    </li>

    <li class="nav-item {{ Route::is('order*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('order.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Order</span></a>
    </li>

    <li class="nav-item {{ Route::is('category*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('category.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Product</span></a>
    </li>

    <li class="nav-item {{ Route::is('user*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Users</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->