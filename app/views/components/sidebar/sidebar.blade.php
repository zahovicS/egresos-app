<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
{{-- <div class="app-menu">
    <div class="navbar-vertical navbar nav-dashboard">
        <div class="h-100" data-simplebar="">
            <!-- Brand logo -->
            <a class="navbar-brand" href="#!">
                <img class="img-fluid" src="{{ PublicPath('assets/images/brand/logo/logo.png') }}" alt="das">
            </a>
            <!-- Navbar nav -->
            <ul class="navbar-nav flex-column" id="sideNavbar">
                @each('components.sidebar.menu-item', getMenu(), 'item')
            </ul>
        </div>
    </div>
</div> --}}

<aside class="app-sidebar">
    @if (auth()->status())
        <div class="app-sidebar__user">
            <img class="app-sidebar__user-avatar" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
            <div>
                <p class="app-sidebar__user-name">John Doe</p>
                <p class="app-sidebar__user-designation">Frontend Developer</p>
            </div>
        </div>
    @else
        <div class="app-sidebar__user">
            <img class="app-sidebar__user-avatar" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
            <div>
                <p class="app-sidebar__user-name">John Doe</p>
                <p class="app-sidebar__user-designation">Frontend Developer</p>
            </div>
        </div>
    @endif
    <ul class="app-menu">
        @each('components.sidebar.menu-item', getMenu(), 'item')
        {{--
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon bi bi-laptop"></i>
                <span class="app-menu__label">UI Elements</span><i class="treeview-indicator bi bi-chevron-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon bi bi-circle-fill"></i>
                        Bootstrap Elements</a></li>
            </ul>
        </li>
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon bi bi-file-earmark"></i><span class="app-menu__label">Pages</span><i
                    class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item active" href="blank-page.html"><i class="icon bi bi-circle-fill"></i>
                        Blank Page</a></li>
                <li><a class="treeview-item" href="page-login.html"><i class="icon bi bi-circle-fill"></i> Login
                        Page</a></li>
            </ul>
        </li> --}}
    </ul>
</aside>
