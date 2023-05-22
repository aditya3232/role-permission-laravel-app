<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-2"></i>
        </a>

        <ul class="navbar-nav ms-auto mb-lg-0">
        </ul>

        <div class="dropdown">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="user-menu d-flex">
                    <div class="user-name text-end me-3">
                        <h6 class="mb-0 text-gray-600">Muhammad Aditya</h6>
                        <p class="mb-0 text-sm text-gray-600">Administrator</p>
                    </div>
                    <div class="user-img d-flex align-items-center">
                        <div class="avatar avatar-md">
                            <img src="http://167.71.195.79/assets/compiled/jpg/1.jpg" alt="avatar-icon">
                        </div>
                    </div>
                </div>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li>
                    <h6 class="dropdown-header">Halo, Adit!</h6>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                        Profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                        Settings</a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    {{-- <a class="dropdown-item" href="#">
                        <i class="icon-mid bi bi-box-arrow-left me-2"></i>Logout
                    </a> --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button class="btn"><i class="icon-mid bi bi-box-arrow-left me-2"></i>Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>