@extends('principal')

@section('conteudo-principal')

<div id="line-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center">
                <h1><b>Editar Categoria</b></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="active">Editar Categoria</li>
                </ol>
                <br>

            </div>
        </div>

<form method="post" action="{{url('/categorias/editar')}}">

    @csrf

    <input type="hidden" name="id" value="{{$categoria->id}}">

    <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" class="form-control" name="nome" type="text"
        value="{{$categoria->nome}}">

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-default btn-sm pull-left" type="submit">Enviar</button>

</form>

@endsection
