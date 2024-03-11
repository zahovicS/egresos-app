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
    <style>
        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            margin: 2px 0;
            white-space: nowrap;
            justify-content: flex-end;
        }

        @media screen and (max-width: 767px) {

            div.dataTables_wrapper div.dataTables_length,
            div.dataTables_wrapper div.dataTables_filter,
            div.dataTables_wrapper div.dataTables_info,
            div.dataTables_wrapper div.dataTables_paginate {
                text-align: center;
            }

            div.dataTables_wrapper div.dataTables_paginate ul.pagination {
                justify-content: center !important;
            }
        }

        table.dataTable>tbody>tr.child ul.dtr-details {
            display: inline-block;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        table.dataTable .dt-paging .paging_full_numbers{
            width: fit-content;
        }
        table.dataTable>tbody>tr.child ul.dtr-details {
            width: 100%;
        }
    </style>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                const $loader = document.querySelector("#loader-screen");
                $loader.classList.replace('show-loader', 'hide-loader');
                setTimeout(() => {
                    $loader.remove();
                }, 400);
            }, 1000);
        });
    </script>
    <!-- Page specific javascripts-->
    @yield('scripts')
</body>

</html>
