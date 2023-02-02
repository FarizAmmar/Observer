<nav class="col-md-3 col-lg-2 ps-3 pe-3 sidebar bg-light ">
    <ul class="nav nav-pills flex-column pt-4 d-md-none d-lg-block">
        <li class="nav-item">
            <a href="/home" class="nav-link d-flex align-items-center {{ $title === 'Home' ? 'active' : '' }}">
                <i class="bi bi-house-fill me-3"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="/employee" class="nav-link d-flex align-items-center {{ $title === 'Employee' ? 'active' : '' }}">
                <i class='bi bi-people-fill me-3'></i>
                Employee
            </a>
        </li>
        <li class="nav-item">
            <a href="/absensi" class="nav-link d-flex align-items-center {{ $title === 'Absensi' ? 'active' : '' }}">
                <i class='bi bi-clipboard2-data-fill me-3'></i>
                Absensi
            </a>
        </li>
        <li class="nav-item">
            <a href="/potongan" class="nav-link d-flex align-items-center {{ $title === 'Potongan' ? 'active' : '' }}">
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
</nav>
