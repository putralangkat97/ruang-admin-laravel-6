<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('index') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('dist/img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item{{ request()->is('admin') ? ' active' : ''}}">
        <a class="nav-link" href="{{ route('index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Bootstrap UI</span>
        </a>
        <div id="collapseBootstrap" class="collapse
        @if (request()->is('admin/alerts') || request()->is('admin/buttons') || request()->is('admin/dropdowns') || request()->is('admin/modals') || request()->is('admin/popovers') || request()->is('admin/progress-bars'))
        show
        @endif" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Bootstrap UI</h6>
                <a class="collapse-item{{ request()->is('admin/alerts') ? ' active' : '' }}" href="{{ route('alerts') }}">Alerts</a>
                <a class="collapse-item{{ request()->is('admin/buttons') ? ' active' : '' }}" href="{{ route('buttons') }}">Buttons</a>
                <a class="collapse-item{{ request()->is('admin/dropdowns') ? ' active' : '' }}" href="{{ route('dropdowns') }}">Dropdowns</a>
                <a class="collapse-item{{ request()->is('admin/modals') ? ' active' : '' }}" href="{{ route('modals') }}">Modals</a>
                <a class="collapse-item{{ request()->is('admin/popovers') ? ' active' : '' }}" href="{{ route('popovers') }}">Popovers</a>
                <a class="collapse-item{{ request()->is('admin/progress-bars') ? ' active' : '' }}" href="{{ route('progress-bars') }}">Progress Bars</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
            aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Forms</span>
        </a>
        <div id="collapseForm" class="collapse
        @if (request()->is('admin/forms-basic') || request()->is('admin/forms-advanced'))
        show
        @endif" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Forms</h6>
                <a class="collapse-item{{ request()->is('admin/forms-basic') ? ' active' : '' }}" href="{{ route('forms-basic') }}">Form Basics</a>
                <a class="collapse-item{{ request()->is('admin/forms-advanced') ? ' active' : '' }}" href="{{ route('forms-advanced') }}">Form Advanceds</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
            aria-controls="collapseTable">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span>
        </a>
        <div id="collapseTable" class="collapse
        @if (request()->is('admin/simple-table') || request()->is('admin/datatables'))
        show
        @endif" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tables</h6>
                <a class="collapse-item{{ request()->is('admin/simple-table') ? ' active' : '' }}" href="{{ route('simple-table') }}">Simple Tables</a>
                <a class="collapse-item{{ request()->is('admin/datatables') ? ' active' : '' }}" href="{{ route('datatables') }}">DataTables</a>
            </div>
        </div>
    </li>
    <li class="nav-item{{ request()->is('admin/ui-colours') ? ' active' : ''}}">
        <a class="nav-link" href="{{ route('ui-colours') }}">
            <i class="fas fa-fw fa-palette"></i>
            <span>UI Colors</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Examples
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
            aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePage" class="collapse
        @if (request()->is('admin/404') || request()->is('admin/blank-page'))
        show
        @endif" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Example Pages</h6>
                <a class="collapse-item" href="{{ route('login') }}">Login</a>
                <a class="collapse-item" href="{{ route('register') }}">Register</a>
                <a class="collapse-item{{ request()->is('admin/404') ? ' active' : '' }}" href="{{ route('404') }}">404 Page</a>
                <a class="collapse-item{{ request()->is('admin/blank-page') ? ' active' : '' }}" href="{{ route('blank-page') }}">Blank Page</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>