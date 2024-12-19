<div class="min-h-screen bg-gray-100">
    <div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
        <div class="sidebar-header border-bottom">
            <div class="sidebar-brand text-center w-100">
                CRM
            </div>
            <button class="btn-close d-lg-none" type="button" data-coreui-dismiss="offcanvas" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()"></button>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard')}}">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                    </svg>
                    Dashboard
                </a>
            </li>
            @role("admin")
            <li class="nav-item"><a class="nav-link" href="{{ route('users.index')}}">
                    <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                    </svg>
                    Users
                </a>
            </li>
            @endrole
            <li class="nav-item"><a class="nav-link" href="{{ route('clients.index') }}">
                    <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                    </svg>
                    Clients
                </a></li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('projects.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                    </svg> Projects
                </a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('tasks.index') }}">
                    <svg class="icon me-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                    </svg>Tasks</a></li>
        </ul>
        <div class="sidebar-footer border-top d-none d-md-flex">
            <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
        </div>
    </div>
