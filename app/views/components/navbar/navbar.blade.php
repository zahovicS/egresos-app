<!-- Navbar-->
<header class="app-header">
    <a class="app-header__logo" href="#!">Egresos-app</a>
    <!-- Sidebar toggle button-->
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar">
    </a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        <!--Search Menu-->
        {{-- @include('components.navbar.search') --}}
        <!--Notification Menu-->
        {{-- @include('components.navbar.notifications') --}}
        <!-- User Menu-->
        @if (auth()->status())
            @include('components.navbar.userdropdown')
        @endif
    </ul>
</header>
