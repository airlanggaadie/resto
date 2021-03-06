<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ber-bariS</div> -->
        <img src="{{ url('frontend/img/berbaris-1.png') }}" style="width: 150px;" alt="ber-baris">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href=" {{ route('dashboard') }} ">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        MENU
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('hidangan') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Hidangan Utama</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesMenu"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Buat Daftar Menu</span>
        </a>
        <div id="collapseUtilitiesMenu" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pengaturan Menu</h6>
                <a class="collapse-item" href=" {{ route('hidanganbaru') }} ">Tambah Hidangan Baru</a>
                <a class="collapse-item" href=" {{ route('kategoribaru') }} ">Tambah Kategori Baru</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('riwayatpesanan')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Riwayat Hidangan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        RESERVASI
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
    <a class="nav-link" href="{{ route('reservasi') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Reservasi Meja</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesMeja"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Buat Daftar Meja</span>
        </a>
        <div id="collapseUtilitiesMeja" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pengaturan Meja</h6>
                <a class="collapse-item" href="{{route('mejabaru')}}">Tambah Meja Baru</a>
                <a class="collapse-item" href="{{route('kategorimeja')}}">Tambah Kategori Meja</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('riwayatmeja')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Riwayat Reservasi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Bantuan
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesHelp"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Bantuan Kami</span>
        </a>
        <div id="collapseUtilitiesHelp" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Bantuan</h6>
                <a class="collapse-item" href="{{route('pusatbantuan')}}">Pusat Bantuan</a>
                <a class="collapse-item" href="{{route('hubungikami')}}">Hubungi Ber-bariS</a>
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