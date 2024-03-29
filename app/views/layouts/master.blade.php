<!DOCTYPE html>
<html lang="es">

<head>
    <title>{{ _env('APP_NAME', 'Sistema') }} - @yield('title', 'inicio')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ assets_path('css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="{{ assets_path('css/remixicon.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @yield('style')
    <script src="{{ assets_path('js/app/main.js') }}"></script>
</head>

<body class="app sidebar-mini">
    @include('components.loaders.default')
    @include('components.notificaciones.default')
    @include('components.navbar.navbar')
    @include('components.sidebar.sidebar')
    <main class="app-content">
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{ assets_path('js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ assets_path('js/bootstrap.min.js') }}"></script>
    <script src="{{ assets_path('js/plugins/jquery.dataTables.min.js') }}"></script>
    <script src="{{ assets_path('js/main.js') }}"></script>
    <script src="{{ assets_path('js/app/init.js') }}"></script>
    <!-- Page specific javascripts-->
    @yield('scripts')
</body>

</html>
