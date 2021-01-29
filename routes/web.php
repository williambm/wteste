<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Criamos uma rota fornecendo o caminho, o controller@actionDoController
Route::get('/', 'SitePublicoController@paginaPrincipal');

Route::get('/vitrine', 'SitePublicoController@produtos');

Route::get('/info', 'SitePublicoController@informacoes');

Route::get('/parametros', 'ParametrosController@acessandoParametrosViaRequest');

Route::get('/formulario', 'ParametrosController@formularioExibir');

Route::post('/formularioReceber', 'ParametrosController@formularioReceber');

Route::get('/produto/listar', 'ProdutoController@listar');

Route::get('/listagem-usuario', 'UserController@listUser');

Route::get('/contatos', 'UserController@contatos');

Route::get('/admin/cursos', 'Admin\CursoController@index')->name('admin.cursos');
Route::get('/admin/cursos/adicionar', 'Admin\CursoController@adicionar')->name('admin.cursos.adicionar');
Route::post('/admin/cursos/salvar', 'Admin\CursoController@salvar')->name('admin.cursos.salvar');
Route::get('/admin/cursos/editar/{id}', 'Admin\CursoController@editar')->name('admin.cursos.editar');
Route::put('/admin/cursos/atualizar/{id}', 'Admin\CursoController@atualizar')->name('admin.cursos.atualizar');
Route::get('/admin/cursos/deletar/{id}', 'Admin\CursoController@deletar')->name('admin.cursos.deletar');





