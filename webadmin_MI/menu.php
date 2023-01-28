        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?page=dashboard">
            <div class="sidebar-brand-icon rotate-n">
                <img src="img/MI.png" alt="" width="50px">
            </div>
            <div class="sidebar-brand-text mx-3">Manajemen Informatika </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if(str_contains($_SERVER['QUERY_STRING'], 'page=dashboard')) { print('active'); } ?>">
            <a class="nav-link" href="index.php?page=dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Profile
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item <?php if(str_contains($_SERVER['QUERY_STRING'], 'page=detailprofil')) { print('active'); } ?>">
            <a class="nav-link collapsed" href="index.php?page=detailprofil">
                <i class="fas fa-fw fa-cog"></i>
                <span>Data Profile</span>
            </a>
        </li>

        <li class="nav-item <?php if(str_contains($_SERVER['QUERY_STRING'], 'page=sosmed')) { print('active'); } ?>">
            <a class="nav-link collapsed" href="index.php?page=sosmed">
                <i class="fas fa-fw fa-cog"></i>
                <span>Data Sosial Media</span>
            </a>
        </li>



        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Kemahasiswaan
        </div>

        <li class="nav-item <?php if(str_contains($_SERVER['QUERY_STRING'], 'page=dataprestasi')) { print('active'); } ?>">
            <a class="nav-link" href="index.php?page=dataprestasi">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Data Prestasi</span></a>
        </li>

        <li class="nav-item <?php if(str_contains($_SERVER['QUERY_STRING'], 'page=tahunangkatan')) { print('active'); } ?>">
            <a class="nav-link collapsed" href="index.php?page=tahunangkatan">
                <i class="fas fa-fw fa-cog"></i>
                <span>Set Tahun Angkatan</span>
            </a>
        </li>

        <li class="nav-item <?php if(str_contains($_SERVER['QUERY_STRING'], 'page=datamahasiswa')) { print('active'); } ?>">
            <a class="nav-link" href="index.php?page=datamahasiswa">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Mahasiswa</span></a>
        </li>


        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Info
        </div>

        <li class="nav-item <?php if(str_contains($_SERVER['QUERY_STRING'], 'page=berita')) { print('active'); } ?>">
            <a class="nav-link" href="index.php?page=berita">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Berita</span></a>
        </li>

        <li class="nav-item <?php if(str_contains($_SERVER['QUERY_STRING'], 'poster')) { print('active'); } ?>">
            <a class="nav-link" href="index.php?page=poster">
                <i class="fas fa-fw fa-table"></i>
                <span>Poster</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>

        </div>