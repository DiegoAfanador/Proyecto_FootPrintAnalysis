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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routes

Route::middleware(['auth'])->group(function(){

	//Roles
	Route::post('roles/store','RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles','RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create','RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}','RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}','RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');


	//Users

	Route::get('users','UserController@index')->name('users.index')
		->middleware('permission:users.index');

	Route::put('users/{user}','UserController@update')->name('users.update')
		->middleware('permission:users.edit');

	Route::get('users/{user}','UserController@show')->name('users.show')
		->middleware('permission:users.show');

	Route::delete('users/{user}','UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');

	Route::get('users/{user}/edit','UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');	


		//Formato de salud
	Route::post('formatos/store','FormatoController@store')->name('formatos.store')
		->middleware('permission:formatos.create');

	Route::get('formatos','FormatoController@index')->name('formatos.index')
		->middleware('permission:formatos.index');

	Route::get('formatos/create','FormatoController@create')->name('formatos.create')
		->middleware('permission:formatos.create');

	Route::put('formatos/{formato}','FormatoController@update')->name('formatos.update')
		->middleware('permission:formatos.edit');

	Route::get('formatos/{formato}','FormatoController@show')->name('formatos.show')
		->middleware('permission:formatos.show');

	Route::delete('formatos/{formato}','FormatoController@destroy')->name('formatos.destroy')
		->middleware('permission:formatos.destroy');

	Route::get('formatos/{formato}/edit','FormatoController@edit')->name('formatos.edit')
		->middleware('permission:formatos.edit');


	//Nutricion
	Route::post('nutricions/store','NutricionController@store')->name('nutricions.store')
		->middleware('permission:nutricions.create');

	Route::get('nutricions','NutricionController@index')->name('nutricions.index')
		->middleware('permission:nutricions.index');

	Route::get('nutricions/create','NutricionController@create')->name('nutricions.create')
		->middleware('permission:nutricions.create');

	Route::put('nutricions/{nutricion}','NutricionController@update')->name('nutricions.update')
		->middleware('permission:nutricions.edit');

	Route::get('nutricions/{nutricion}','NutricionController@show')->name('nutricions.show')
		->middleware('permission:nutricions.show');

	Route::delete('nutricions/{nutricion}','NutricionController@destroy')->name('nutricions.destroy')
		->middleware('permission:nutricions.destroy');

	Route::get('nutricions/{nutricion}/edit','NutricionController@edit')->name('nutricions.edit')
		->middleware('permission:nutricions.edit');


	//Analisis
	Route::post('analisis/store','AnalisiController@store')->name('analisis.store')
		->middleware('permission:analisis.create');

	Route::get('analisis','AnalisiController@index')->name('analisis.index')
		->middleware('permission:analisis.index');

	Route::get('analisis/create','AnalisiController@create')->name('analisis.create')
		->middleware('permission:analisis.create');

	Route::put('analisis/{analisi}','AnalisiController@update')->name('analisis.update')
		->middleware('permission:analisis.edit');

	Route::get('analisis/{analisi}','AnalisiController@show')->name('analisis.show')
		->middleware('permission:analisis.show');

	Route::delete('analisis/{analisi}','AnalisiController@destroy')->name('analisis.destroy')
		->middleware('permission:analisis.destroy');

	Route::get('analisis/{analisi}/edit','AnalisiController@edit')->name('analisis.edit')
		->middleware('permission:analisis.edit');


	//Tabulacion
	Route::post('tabulacions/store','TabulacionController@store')->name('tabulacions.store')
		->middleware('permission:tabulacions.create');

	Route::get('tabulacions','TabulacionController@index')->name('tabulacions.index')
		->middleware('permission:tabulacions.index');

	Route::get('tabulacions/create','TabulacionController@create')->name('tabulacions.create')
		->middleware('permission:tabulacions.create');

	Route::put('tabulacions/{tabulacion}','TabulacionController@update')->name('tabulacions.update')
		->middleware('permission:tabulacions.edit');

	Route::get('tabulacions/{tabulacion}','TabulacionController@show')->name('tabulacions.show')
		->middleware('permission:tabulacions.show');

	Route::delete('tabulacions/{tabulacion}','TabulacionController@destroy')->name('tabulacions.destroy')
		->middleware('permission:tabulacions.destroy');

	Route::get('tabulacions/{tabulacion}/edit','TabulacionController@edit')->name('tabulacions.edit')
		->middleware('permission:tabulacions.edit');


	//Evaluacion funcional
	Route::post('evaluacions/store','EvaluacionController@store')->name('evaluacions.store')
		->middleware('permission:evaluacions.create');

	Route::get('evaluacions','EvaluacionController@index')->name('evaluacions.index')
		->middleware('permission:evaluacions.index');

	Route::get('evaluacions/create','EvaluacionController@create')->name('evaluacions.create')
		->middleware('permission:evaluacions.create');

	Route::put('evaluacions/{evaluacion}','EvaluacionController@update')->name('evaluacions.update')
		->middleware('permission:evaluacions.edit');

	Route::get('evaluacions/{evaluacion}','EvaluacionController@show')->name('evaluacions.show')
		->middleware('permission:evaluacions.show');

	Route::delete('evaluacions/{evaluacion}','EvaluacionController@destroy')->name('evaluacions.destroy')
		->middleware('permission:evaluacions.destroy');

	Route::get('evaluacions/{evaluacion}/edit','EvaluacionController@edit')->name('evaluacions.edit')
		->middleware('permission:evaluacions.edit');

	//Problematica
	Route::post('problematicas/store','ProblematicaController@store')->name('problematicas.store')
		->middleware('permission:problematicas.create');

	Route::get('problematicas','ProblematicaController@index')->name('problematicas.index')
		->middleware('permission:problematicas.index');

	Route::get('problematicas/create','ProblematicaController@create')->name('problematicas.create')
		->middleware('permission:problematicas.create');

	Route::put('problematicas/{problematica}','ProblematicaController@update')->name('problematicas.update')
		->middleware('permission:problematicas.edit');

	Route::get('problematicas/{problematica}','ProblematicaController@show')->name('problematicas.show')
		->middleware('permission:problematicas.show');

	Route::delete('problematicas/{problematica}','ProblematicaController@destroy')->name('problematicas.destroy')
		->middleware('permission:problematicas.destroy');

	Route::get('problematicas/{problematica}/edit','ProblematicaController@edit')->name('problematicas.edit')
		->middleware('permission:problematicas.edit');

	//Recomendacion
	Route::post('recomendacions/store','RecomendacionController@store')->name('recomendacions.store')
		->middleware('permission:recomendacions.create');

	Route::get('recomendacions','RecomendacionController@index')->name('recomendacions.index')
		->middleware('permission:recomendacions.index');

	Route::get('recomendacions/create','RecomendacionController@create')->name('recomendacions.create')
		->middleware('permission:recomendacions.create');

	Route::put('recomendacions/{recomendacion}','RecomendacionController@update')->name('recomendacions.update')
		->middleware('permission:recomendacions.edit');

	Route::get('recomendacions/{recomendacion}','RecomendacionController@show')->name('recomendacions.show')
		->middleware('permission:recomendacions.show');

	Route::delete('recomendacions/{recomendacion}','RecomendacionController@destroy')->name('recomendacions.destroy')
		->middleware('permission:recomendacions.destroy');

	Route::get('recomendacions/{recomendacion}/edit','RecomendacionController@edit')->name('recomendacions.edit')
		->middleware('permission:recomendacions.edit');
});


