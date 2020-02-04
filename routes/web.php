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
    return view('pages.index');
});

Route::get('/nuevo_evento', function() {
	return view('admin.pages.nuevo_evento');
});

Route::post('/crear_post',[
    'uses'=>'EventosController@create',
    'as'=>'eventos.crear_nuevo'
]);