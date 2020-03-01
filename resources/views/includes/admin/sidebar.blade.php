<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img id="berbaris" src="{{ url('frontend/img/berbaris-1.png') }}" style="width: 100%;" alt="ber-baris">
    </a>

  <!-- Divider -->
    <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
    <li class="nav-item @yield('dashboard')">
        <a class="nav-link" href=" {{ route('admin-dashboard') }} ">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

  <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item @yield('restaurant')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#actionResto"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-hotel"></i>
            <span>Restaurant</span>
        </a>
        <div id="actionResto" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">            
                <a class="collapse-item" href="">Status</a>
                <a class="collapse-item" href="">Data</a>
            </div>
        </div>
    </li>

  <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item @yield('customer')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#actionCustomer"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-user"></i>
            <span>Customer</span>
        </a>
        <div id="actionCustomer" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">                
                <a class="collapse-item" href="">Status</a>
                <a class="collapse-item" href="">Data</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item @yield('administrator')">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#actionAdmin"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Administrator</span>
        </a>
        <div id="actionAdmin" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">            
                <a class="collapse-item" href="{{ route('admin-status') }}">Status</a>
                <a class="collapse-item" href="{{ route('administrator.index') }}">Data</a>
            </div>
        </div>
    </li>

  <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->