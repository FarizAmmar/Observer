<nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top">
    <div class="container-fluid">

        <div class="d-none d-lg-block">
            <a class="navbar-brand ms-3" href="#">
                {{-- Logo | Brand --}}
                <span>Store</span>
            </a>
        </div>

        {{-- start Left Side OffCanvas --}}
        <a class="btn d-lg-none" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
            aria-controls="offcanvasExample">
            <i class="bi bi-sliders"></i>
        </a>
        {{-- end Left Side OffCanvas --}}

        <div class="d-lg-none">
            <a class="navbar-brand" href="#">
                {{-- Logo | Brand --}}
                <span>Store</span>
            </a>
        </div>

        {{-- Main Menu --}}
        <div class="d-flex justify-content-end align-items-center me-3">
            <a href="#" class="btn text-dark" role="button" data-bs-toggle="dropdown">
                <i class="bi bi-list"></i>
                <span class="text-uppercase" style="opacity:75%;">Menu</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item btn-primer-trans" href="#">
                        <div class="row">
                            <div class="col-sm-2">
                                <i class="bi bi-inbox"></i>
                            </div>
                            <div class="col">
                                Contact
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item btn-primer-trans" href="#">
                        <div class="row">
                            <div class="col-sm-2">
                                <i class="bi bi-question"></i>
                            </div>
                            <div class="col">
                                FAQ
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- Menu Browser --}}
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        {{-- <ul class="navbar-nav mt-4">
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
        </ul> --}}
        <form action="#" method="POST">
            @method('filter')
            @csrf
            <div class="row py-4 mx-3 rounded" style="background: white">
                <div class="col-12">
                    <div class="row mx-3">
                        <div class="col-6 sb-title-items">
                            <b>Kategori</b>
                        </div>
                        <div class="col-6 sb-title-items d-flex justify-content-end">
                            <span>
                                <i class="bi bi-dot"></i>
                            </span>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <label class="form-check-label">
                                    Semua
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">
                                    Formal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">
                                    Kebaya
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">
                                    Baju Muslim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">
                                    Celana
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row mt-4 mx-3">
                        <div class="col-9 sb-title-items">
                            <b>Jenis -Jenis Kain</b>
                        </div>
                        <div class="col-3 sb-title-items d-flex justify-content-end">
                            <span>
                                <i class="bi bi-dot"></i>
                            </span>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" checked>
                                <label class="form-check-label">
                                    Semua
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">
                                    Formal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">
                                    Kebaya
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">
                                    Baju Muslim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label">
                                    Celana
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- Menu Browser --}}