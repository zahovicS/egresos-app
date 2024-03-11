<?php

app()->group('/auth', function () {
    app()->get('/login', 'Auth\LoginController@show');
    app()->post('/login', 'Auth\LoginController@store');
    // app()->get('/register', 'Auth\RegisterController@show');
    // app()->post('/register', 'Auth\RegisterController@store');
    app()->get('/logout', 'Auth\LoginController@logout');
    // Reset and recover account will be added later
});
