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

app()->group('/categorias', [
    'namespace' => '\App\Controllers\Categorias',
    'middleware' => 'web-auth',
    function () {
        app()->get('/', ['name' => 'categorias.index', 'CategoriaController@index']);
        app()->get('categoriaDataTable', ['name' => 'categorias.categoriaDataTable', 'CategoriaController@categoriaDataTable']);
        app()->get('crear', ['name' => 'categorias.crear', 'CategoriaController@crear']);
        app()->post('guardar', ['name' => 'categorias.guardar', 'CategoriaController@guardar']);
        app()->get('editar/{encriptedId}', ['name' => 'categorias.editar', 'CategoriaController@editar']);
        app()->post('actualizar/{encriptedId}', ['name' => 'categorias.actualizar', 'CategoriaController@actualizar']);
        app()->get('desactivar/{encriptedId}', ['name' => 'categorias.desactivar', 'CategoriaController@desactivar']);
        app()->get('activar/{encriptedId}', ['name' => 'categorias.activar', 'CategoriaController@activar']);
    }
]);
