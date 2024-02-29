<!DOCTYPE html>
<html lang="es">

<head>
    <title>{{ _env("APP_NAME", "Sistema") }} - @yield('title', 'inicio')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ assets_path('css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="{{ assets_path('css/remixicon.css') }}">
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    @yield('content')
    <!-- Essential javascripts for application to work-->
    <script src="{{ assets_path('js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ assets_path('js/bootstrap.min.js') }}"></script>
    <script src="{{ assets_path('js/main.js') }}"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript">
        // Login Page Flipbox control
        $('.login-content [data-toggle="flip"]').click(function() {
            $('.login-box').toggleClass('flipped');
            return false;
        });

        document.querySelectorAll("input").forEach(element => {
            setTimeout(() => {
                element.removeAttribute("readonly");
            }, 500);
        });
    </script>
</body>

</html>
