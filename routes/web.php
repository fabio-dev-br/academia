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

Route::get('home', 'HomeController@index')->name('home');

Route::get('despesas', 'DespesasController@index');

Route::get('clientes', 'ClientesController@index');//->name('home');
Route::get('clientes/novo', 'ClientesController@novo');
Route::get('clientes/{cliente}/editar', 'ClientesController@editar');
Route::post('clientes/salvar', 'ClientesController@salvar');
Route::patch('clientes/{cliente}', 'ClientesController@atualizar');
Route::delete('clientes/{cliente}', 'ClientesController@deletar');

Route::get('funcionarios', 'FuncionariosController@index');
Route::get('funcionarios/novo', 'FuncionariosController@novo');
Route::get('funcionarios/{funcionario}/editar', 'FuncionariosController@editar');
Route::post('funcionarios/salvar', 'FuncionariosController@salvar');
Route::patch('funcionarios/{funcionario}', 'FuncionariosController@atualizar');
Route::delete('funcionarios/{funcionario}', 'FuncionariosController@deletar');

Route::get('usuarios', 'UsuariosController@index');
Route::get('usuarios/novo', 'UsuariosController@novo');
Route::get('usuarios/{usuario}/editar', 'UsuariosController@editar');
Route::post('usuarios/salvar', 'UsuariosController@salvar');
Route::patch('usuarios/{usuario}', 'UsuariosController@atualizar');
Route::delete('usuarios/{usuario}', 'UsuariosController@deletar');

Route::get('patrimonios', 'PatrimoniosController@index');
Route::get('patrimonios/novo', 'PatrimoniosController@novo');
Route::get('patrimonios/{patrimonio}/editar', 'PatrimoniosController@editar');
Route::post('patrimonios/salvar', 'PatrimoniosController@salvar');
Route::patch('patrimonios/{patrimonio}', 'PatrimoniosController@atualizar');
Route::delete('patrimonios/{patrimonio}', 'PatrimoniosController@deletar');

Route::get('salas', 'SalasController@index');
Route::get('salas/novo', 'SalasController@novo');
Route::get('salas/{sala}/editar', 'SalasController@editar');
Route::post('salas/salvar', 'SalasController@salvar');
Route::patch('salas/{sala}', 'SalasController@atualizar');
Route::delete('salas/{sala}', 'SalasController@deletar');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
