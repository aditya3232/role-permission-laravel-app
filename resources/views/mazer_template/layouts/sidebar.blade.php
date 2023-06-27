<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html">
                        {{-- <img src="assets/images/logo/logo.png" alt="Logo" srcset=""> --}}
                        <img src="/assets/images/logo/polri.png">
                        <h4>Polresta Tidore</h4>
                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Dashboard</li>

                <li class="sidebar-item active ">
                    <a href="{{ route('admin.index') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title">Post Berita</li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Post Berita</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{ route('admin.berita.create') }}">Post Berita</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="form-element-input-group.html">Daftar Berita</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Master Data</li>

                <li class="sidebar-item  ">
                    <a href="{{ route('admin.formsidikjari.index') }}" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Pendaftaran Sidik Jari</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Permohonan SIM</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="ui-file-uploader.html" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Laporan Kehilangan</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="ui-file-uploader.html" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Laporan Tindak Kriminal</span>
                    </a>
                </li>
                <li class="sidebar-title">Admin</li>
                <li class="sidebar-item  ">
                    <a href="{{ route('admin.users.index') }}" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="{{ route('admin.roles.index') }}" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Roles</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="{{ route('admin.permissions.index') }}" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Permissions</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="{{ route('telescope') }}" class='sidebar-link' target="_blank">
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Logs</span>
                    </a>
                </li>





            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
