<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importar o modelo categoria
use App\Categoria;

//Importando a classe de Validação
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    /**
     * Retorna todos as categorias cadastradas
     */
    public function categorias()
    {

        $dados = Categoria::all();
        return view('categorias.categorias')->with('categorias', $dados);
    }

    /**
     * Chama a view com o formulario de adicionar
     *
     */
    public function formAdicionar()
    {
        return view('categorias.form-adicionar');
    }

    /**
     * Método que vai adicionar uma categoria no BD
     */
    public function adicionar(CategoriaRequest $request)
    {

        //Atribuição em massa
        Categoria::create($request->input());

        return redirect()->action('CategoriaController@categorias');

    }

    public function excluir($id)
    {
        //Excluir via eloquent quando tem o id
        Categoria::destroy($id);

        return redirect()->action('CategoriaController@categorias');
    }

    public function form_editar($id)
    {

        //Buscar o post no BD pelo id
        $categoria = Categoria::find($id);

        //chamando a view e passando o dado do post
        return view('categorias.form-editar')->with('categoria', $categoria);

    }

    public function editar(CategoriaRequest $request)
    {

        //Via atribuicao em massa
        Categoria::find($request->id)->update($request->input());

        return redirect()->action('CategoriaController@categorias');
    }
}
