<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::bind('ingrediente',function($slug){
	return Nevera\Ingrediente::where('slug', $slug)->first();
});

Route::bind('user',function($id){
    return Nevera\User::find($id);
});

Route::bind('receta',function($id){
    return Nevera\Receta::find($id);
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/recetas', [
     'uses' => 'RecetasController@listado',
     'as' => 'listadoRecetas'
]);

Route::post('/resultados', [
    'uses' => 'ResultadosController@getResultados',
    'as' => 'resultados'
]);


// NEVERA
Route::get('nevera/show', [
    'uses' => 'NeveraController@show',
    'as' => 'nevera-show'
]);

Route::get('nevera/add/{ingrediente}', [
    'uses' => 'NeveraController@add',
    'as' => 'nevera-add'
]);

Route::get('nevera/del/{ingrediente}', [
    'uses' => 'NeveraController@del',
    'as' => 'nevera-del'
]);

Route::get('nevera/empty', [
    'uses' => 'NeveraController@empty',
    'as' => 'nevera-empty'
]);

//Route::get('/recetas', 'RecetasController@listado');

//Route::post('/resultados', 'ResultadosController@getResultados');

Route::auth();

Route::get('/home', [
    'uses' => 'HomeController@index',
    'as' =>  'home'
]);

Route::get('receta/list/{user}', [
    'uses' => 'RecetasController@list',
    'as' =>  'lista-recetas'
]);

Route::get('receta/{receta}', [
    'uses' => 'RecetasController@show',
    'as' =>  'receta'
]);




/*/ Ajax

Route::post('/AnadeIngrediente', 'NeveraController@anadirIngrediente');
Route::post('/VaciarNevera', 'NeveraController@vaciarNevera');
Route::post('/actualizarNevera', 'NeveraController@actualizarNevera');
*/