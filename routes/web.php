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
    return view('welcome');
});

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('blog/{blog}', function ($blog) {
    return view('blog',["blog"=>$blog]);
});

Route::get('blog2/{blog}/{nombre}', function ($blog, $nombre) {
    return view('blog2',["blog"=>$blog, 'nombre'=>$nombre]);
})-> where(array('nombre'=>'[a-zA-Z]+', 'blog'=>'[a-zA-Z]+'));

Route::get('saludo', 'Controller@saludo');