@extends('principal')

@section('conteudo-principal')

<div id="line-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center">
                <h1><b>Adicionar Produtos</b></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="active">Adicionar Produto</li>
                </ol>
                <br>

            </div>
        </div>

<form method="post" action="{{url('/posts/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="titulo">Produto</label>
        <input value="{{old('nome')}}" id="nome" class="form-control" name="nome" type="text">

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="categoria">Categoria</label>
        <select id="categoria" class="form-control" name="categoria_id">
            <option value="">Selecione</option>

            @foreach ($categorias as $categoria)

                <option value="{{$categoria->id}}"> {{$categoria->nome}} </option>

            @endforeach
        </select>

        @error('categoria_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="preco">Preço</label>
        <input id="preco" class="form-control" name="preco">{{old('')}}

        @error('preco')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-default btn-sm pull-left" type="submit">Enviar</button>

</form>

@endsection
