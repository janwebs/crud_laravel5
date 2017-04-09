<?php

Route::get('/', function () {
    return view('welcome');
});

// grupo de rutas
Route::group(['prefix' => 'admin'], function(){
	// resource recibe dos parámetros, el modelo y el controlador a usar
	Route::resource('personas', 'PersonasController');
	Route::get('personas/{id}/destroy', [
		'uses' 	=> 'PersonasController@destroy',
		'as'	=> 'admin.personas.destroy'
	]);
});