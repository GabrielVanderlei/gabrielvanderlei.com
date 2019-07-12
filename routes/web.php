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

# Geral
Route::get('/', 'BlogController@index')->name('blog.inicio');
Route::get('/sobre', 'BlogController@sobre')->name('blog.sobre');
Route::get('/quem-sou-eu', 'PortfolioController@portfolio')->name('blog.portfolio');
Route::get('/contato', 'ContatoController@contato')->name('blog.contato');
Route::get('/produtos', 'ProdutoController@produtos')->name('blog.produtos');
Route::get('/produtos/{slug}', 'ProdutoController@verProduto')->name('blog.produtos.ver');
Route::get('/blog', 'BlogController@postagens')->name('blog.postagens');
Route::get('/blog/{slug}', 'BlogController@verPostagem')->name('blog.postagens.ver');

Route::group(['prefix' => 'administracao'], function () {
    Auth::routes();
});

Route::get('/administracao', 'HomeController@index')->name('admin');

# Portfólio
Route::get('/administracao/portfolio', 'PortfolioController@listar')->name('admin.portfolio');
Route::get('/administracao/portfolio/novo', 'PortfolioController@novo')->name('admin.portfolio.novo');
Route::post('/administracao/portfolio/adicionar', 'PortfolioController@adicionar')->name('admin.portfolio.adicionar');
Route::get('/administracao/portfolio/{id}', 'PortfolioController@ver')->where('id', '[0-9]+')->name('admin.portfolio.ver');
Route::post('/administracao/portfolio/{id}/editar', 'PortfolioController@editar')->where('id', '[0-9]+')->name('admin.portfolio.editar');
Route::get('/administracao/portfolio/{id}/excluir', 'PortfolioController@excluir')->where('id', '[0-9]+')->name('admin.portfolio.excluir');

# Produtos
Route::get('/administracao/produtos', 'ProdutoController@listar')->name('admin.produtos');
Route::get('/administracao/produtos/novo', 'ProdutoController@novo')->name('admin.produtos.novo');
Route::post('/administracao/produtos/adicionar', 'ProdutoController@adicionar')->name('admin.produtos.adicionar');
Route::get('/administracao/produtos/{id}', 'ProdutoController@ver')->where('id', '[0-9]+')->name('admin.produtos.ver');
Route::post('/administracao/produtos/{id}/editar', 'ProdutoController@editar')->where('id', '[0-9]+')->name('admin.produtos.editar');
Route::get('/administracao/produtos/{id}/excluir', 'ProdutoController@excluir')->where('id', '[0-9]+')->name('admin.produtos.excluir');

# Postagens
Route::get('/administracao/postagens', 'PostagemController@listar')->name('admin.blog');
Route::get('/administracao/postagens/novo', 'PostagemController@novo')->name('admin.blog.novo');
Route::post('/administracao/postagens/adicionar', 'PostagemController@adicionar')->name('admin.blog.adicionar');
Route::get('/administracao/postagens/{id}', 'PostagemController@ver')->where('id', '[0-9]+')->name('admin.blog.ver');
Route::post('/administracao/postagens/{id}/editar', 'PostagemController@editar')->where('id', '[0-9]+')->name('admin.blog.editar');
Route::get('/administracao/postagens/{id}/excluir', 'PostagemController@excluir')->where('id', '[0-9]+')->name('admin.blog.excluir');

# Contatos
Route::get('/administracao/contatos', 'ContatoController@listar')->name('admin.contatos');
Route::get('/administracao/contatos/novo', 'ContatoController@novo')->name('admin.contatos.novo');
Route::post('/contato/adicionar', 'ContatoController@adicionar')->name('blog.contatos.adicionar'); // Blog
Route::get('/administracao/contatos/{id}', 'ContatoController@ver')->where('id', '[0-9]+')->name('admin.contatos.ver');
Route::post('/administracao/contatos/{id}/editar', 'ContatoController@editar')->where('id', '[0-9]+')->name('admin.contatos.editar');
Route::get('/administracao/contatos/{id}/excluir', 'ContatoController@excluir')->where('id', '[0-9]+')->name('admin.contatos.excluir');

