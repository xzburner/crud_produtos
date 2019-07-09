
@extends('principal')

@section('conteudo-principal')
{{-- Vai pegar o conteudo que estiver dentro da
    section e jogar dentro do yield
--}}
<div id="line-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center">
                <h1><b>Produtos</b></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="active">Produtos</li>
                </ol>
                <br>
                <a href="{{url('/posts/form-adicionar')}}"
                   class="btn btn-default btn-sm pull-right">
                    <span class="glyphicon glyphicon-plus"></span> Adicionar</a>

            </div>
        </div>
<table class="table table-dark">
    <tr>
        <th>Id</th>
        <th>Produto</th>
        <th>Categoria</th>
        <th>Preço</th>
        <th>Opções</th>
    </tr>
    @forelse ($posts as $post)
        <tr>
            <td> {{$post->id}} </td>
            <td> {{$post->nome}} </td>
            <td> {{$post->categoria->nome}} </td>
            <td> R$ {{$post->preco}} </td>
            {{-- <td> {{$post->created_at}} </td> --}}
            <td>
                <a class="btn btn-outline-secondary" href="{{url('/posts/editar/' . $post->id)}}">
                    Editar
                </a>
                <a class="btn btn-outline-secondary" href="{{url('/posts/excluir/' . $post->id)}}">
                    Excluir
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">Sem produtos cadastrados.</td>
        </tr>
    @endforelse
</table>
@endsection
