<nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top">
    <div class="container-fluid">

        <div class="d-none d-lg-block">
            <a class="navbar-brand ms-3" href="#">
                <img src="/img/Observer-None.png" alt="" width="40px">
                <span>Observer.</span>
            </a>
        </div>

        {{-- start Left Side OffCanvas --}}
        <a class="btn d-lg-none" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
            aria-controls="offcanvasExample">
            <i class="bi bi-list"></i>
        </a>
        {{-- end Left Side OffCanvas --}}

        <div class="d-lg-none">
            <a class="navbar-brand" href="#">
                <img src="/img/Observer-None.png" alt="" width="40px">
                <span>Observer.</span>
            </a>
        </div>

        <div class="d-flex justify-content-end align-items-center btn-group me-3">
            <a href="#" class=" text-decoration-none text-dark   px-2 mx-3" role="button" data-bs-toggle="dropdown">
                <span>Hi, {{ auth()->user()->name }}</span>
                <i class="bi bi-caret-down-fill"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item btn-primer-trans" href="#">
                        <div class="row">
                            <div class="col-sm-2">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div class="col">
                                My Profile
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item btn-primer-trans" href="#">
                        <div class="row">
                            <div class="col-sm-2">
                                <i class="bi bi-sliders2"></i>
                            </div>
                            <div class="col">
                                Settings
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="dropdown-item btn-primer-trans" type="submit">
                            <div class="row">
                                <div class="col">
                                    Sign Out
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <i class="bi bi-box-arrow-left"></i>
                                </div>
                            </div>
                        </button>
                    </form>
                </li>
            </ul>
        </div>


    </div>
</nav>

{{-- Menu Browser --}}
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Navigation Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav mt-4">
            <li class="nav-item">
                <a href="/home" class="nav-link d-flex align-items-center {{ $title === 'Home' ? 'active' : '' }}">
                    <i class="bi bi-house-fill me-3"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="/employee"
                    class="nav-link d-flex align-items-center {{ $title === 'Employee' ? 'active' : '' }}">
                    <i class='bi bi-people-fill me-3'></i>
                    Employee
                </a>
            </li>
            <li class="nav-item">
                <a href="/absensi"
                    class="nav-link d-flex align-items-center {{ $title === 'Absensi' ? 'active' : '' }}">
                    <i class='bi bi-clipboard2-data-fill me-3'></i>
                    Absensi
                </a>
            </li>
            <li class="nav-item">
                <a href="/potongan"
                    class="nav-link d-flex align-items-center {{ $title === 'Potongan' ? 'active' : '' }}">
                    <i class='bi bi-pie-chart-fill me-3'></i>
                    Potongan
                </a>
            </li>
            <li class="nav-item">
                <a href="/salary" class="nav-link d-flex align-items-center {{ $title === 'Salary' ? 'active' : '' }}">
                    <i class='bi bi-currency-exchange me-3'></i>
                    Salary
                </a>
            </li>
            <li class="nav-item">
                <a href="/report" class="nav-link d-flex align-items-center {{ $title === 'Report' ? 'active' : '' }}">
                    <i class="bi bi-file-earmark-bar-graph-fill me-3"></i>
                    Report
                </a>
            </li>
        </ul>
    </div>
</div>
{{-- Menu Browser --}}