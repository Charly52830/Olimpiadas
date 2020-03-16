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
}) -> name('eventos.nuevo_evento');

Route::post('/crear_post',[
    'uses'=>'EventosController@create',
    'as'=>'eventos.crear_nuevo'
]);

Route::post('eliminar_evento',[
	'uses' => 'EventosController@delete',
	'as' => 'eventos.eliminar_evento'
]);

Route::get('ver_eventos_admin',[
	'uses' => 'EventosController@show_all',
	'as' => 'eventos.ver_eventos_admin'
]);

Route::get('ver_evento_admin/{id_evento}', [
	'uses' => 'EventosController@show',
	'as' => 'eventos.ver_evento_admin'
]);
