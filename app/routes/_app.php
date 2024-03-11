<?php

app()->get('/', function () {
    return redirect('/dashboard');
});

app()->group('/dashboard', [
    'namespace' => 'App\Controllers\Dashboard',
    'middleware' => 'web-auth',
    function () {
        app()->get('/', 'DashboardController@index');
    }
]);


app()->group('/perfil', [
    'namespace' => 'App\Controllers\Perfil',
    'middleware' => 'web-auth',
    function () {
        app()->get('/', 'PerfilController@index');
    }
]);
