<?php

app()->get('/', function () {
    return redirect('/dashboard');
});

app()->get('/dashboard', [
    'middleware' => 'web-auth',
    function () {
        // user is logged in
        return render("pages.dashboard.index");
    }
]);

app()->get('/categorias','Categorias\CategoriaController@index');
