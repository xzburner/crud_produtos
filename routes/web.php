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

//Chamando o controllador
Route::get('/sobre', 'PaginaBasicaController@sobre');
Route::get('/contato', 'PaginaBasicaController@contato');

//Rotas para parte de POSTS
Route::get('/posts', 'PostController@posts');
Route::get('/posts/form-adicionar', 'PostController@formAdicionar');
Route::post('/posts/adicionar', 'PostController@adicionar');
Route::get('/posts/excluir/{id}', 'PostController@excluir');
Route::get('/posts/editar/{id}', 'PostController@form_editar');
Route::post('/posts/editar', 'PostController@editar');

//Rotas para parte de CATEGORIA
Route::get('/categorias', 'CategoriaController@categorias');
Route::get('/categorias/form-adicionar', 'CategoriaController@formAdicionar');
Route::post('/categorias/adicionar', 'CategoriaController@adicionar');
Route::get('/categorias/excluir/{id}', 'CategoriaController@excluir');
Route::get('/categorias/editar/{id}', 'CategoriaController@form_editar');
Route::post('/categorias/editar', 'CategoriaController@editar');
