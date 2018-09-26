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

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

	Route::get('/', 'Admin\AdminController@index');

	Route::resource('usuarios', 'Admin\UsuarioController');
	Route::get('usuarios/papel/{id}', ['as'=>'usuarios.papel','uses'=>'Admin\UsuarioController@papel']);
	Route::post('usuarios/papel/{papel}', ['as'=>'usuarios.papel.store','uses'=>'Admin\UsuarioController@papelStore']);
	Route::delete('usuarios/papel/{usuario}/{papel}', ['as'=>'usuarios.papel.destroy','uses'=>'Admin\UsuarioController@papelDestroy']);
	Route::post('/usuarios/busca', 'Admin\UsuarioController@busca');

	Route::resource('papeis', 'Admin\PapelController');
	Route::get('papeis/permissao/{id}', ['as'=>'papeis.permissao','uses'=>'Admin\PapelController@permissao']);
	Route::post('papeis/permissao/{permissao}', ['as'=>'papeis.permissao.store','uses'=>'Admin\PapelController@permissaoStore']);
	Route::delete('papeis/permissao/{papel}/{permissao}', ['as'=>'papeis.permissao.destroy','uses'=>'Admin\PapelController@permissaoDestroy']);

	Route::resource('infratores', 'Admin\infratorController');

	Route::resource('processos', 'Admin\ProcessoController');
	Route::post('/processos/store','Admin\ProcessoController@store');
	Route::get('/processos/store','Admin\ProcessoController@store');
	Route::post('/processos/busca', 'Admin\ProcessoController@busca');
	Route::post('/processos/show', 'Admin\ProcessoController@show');

	Route::post('/processos/fetch', 'Admin\ProcessoController@fetch')->name('processos.fetch');

});
