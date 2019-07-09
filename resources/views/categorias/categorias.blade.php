
@extends('principal')

@section('conteudo-principal')
{{-- Vai pegar o conteudo que estiver dentro da
    section e jogar dentro do yield
--}}

<div id="line-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center">
                <h1><b>Categorias</b></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="active">Categorias</li>
                </ol>
                <br>
                <a href="{{url('/categorias/form-adicionar')}}"
                   class="btn btn-default btn-sm pull-right">
                    <span class="glyphicon glyphicon-plus"></span> Adicionar</a>

            </div>
        </div>
<table class="table table-dark">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Opções</th>
    </tr>
    @forelse ($categorias as $categoria)
        <tr>
            <td> {{$categoria->id}} </td>
            <td> {{$categoria->nome}} </td>
            <td>
                <a class="btn btn-outline-secondary" href="{{url('/categorias/editar/' . $categoria->id)}}">
                    Editar
                </a>
                <a class="btn btn-outline-secondary" href="{{url('/categorias/excluir/' . $categoria->id)}}">
                    Excluir
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">Sem categorias cadastradas.</td>
        </tr>
    @endforelse
</table>
@endsection
