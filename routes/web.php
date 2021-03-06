<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Pantalla Principal';
});

Route::get('/login', function () {
    return 'Login Usuario';
});

Route::get('/logout', function () {
    return 'Logout Usuario';
});

Route::get('/catalog', function () {
    return 'Listado películas';
});

Route::get('/catalog/show/{id}', function ($id) {
    return 'Ver detalle película' {id};
})->where('id', '[0-9]+');;

Route::get('/catalog/create', function () {
    return 'Añadir película';
});

Route::get('/catalog/edit/{id}', function ($id) {
    return 'Modificar película' {id};
})->where('id', '[0-9]+');;