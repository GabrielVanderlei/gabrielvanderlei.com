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

Route::get('/', 'BlogController@index')->name('blog.inicio');
Route::get('/sobre', 'BlogController@sobre')->name('blog.sobre');
Route::get('/portfolio', 'PortfolioController@portfolio')->name('blog.portfolio');
Route::get('/contato', 'ContatoController@contato')->name('blog.contato');
Route::get('/produtos', 'ProdutoController@produtos')->name('blog.produtos');
Route::get('/produtos/{slug}', 'ProdutoController@verProduto')->name('blog.produtos.ver');
Route::get('/blog', 'BlogController@postagens')->name('blog.postagens');
Route::get('/blog/{slug}', 'BlogController@verPostagem')->name('blog.postagens.ver');

Route::group(['prefix' => 'administracao'], function () {
    Auth::routes();
});

Route::get('/administracao', 'HomeController@index')->name('admin');
Route::get('/administracao/portfolio', 'PortfolioController@listar')->name('admin.portfolio');
Route::get('/administracao/portfolio/novo', 'PortfolioController@novo')->name('admin.portfolio.novo');
Route::post('/administracao/portfolio/adicionar', 'PortfolioController@adicionar')->name('admin.portfolio.adicionar');
Route::get('/administracao/portfolio/{id}', 'PortfolioController@ver')->where('id', '[0-9]+')->name('admin.portfolio.ver');
Route::post('/administracao/portfolio/{id}/editar', 'PortfolioController@editar')->where('id', '[0-9]+')->name('admin.portfolio.editar');
Route::get('/administracao/portfolio/{id}/excluir', 'PortfolioController@excluir')->where('id', '[0-9]+')->name('admin.portfolio.excluir');

Route::get('/administracao/produtos', 'ProdutoController@listar')->name('admin.produtos');
Route::get('/administracao/contato', 'ContatoController@listar')->name('admin.contatos');
Route::get('/administracao/postagens', 'BlogController@listar')->name('admin.postagens');
Route::get('/administracao/pedidos', 'VendasController@listar')->name('admin.pedidos');

