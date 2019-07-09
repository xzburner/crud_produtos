@extends('principal')

@section('conteudo-principal')

<div id="line-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center">
                <h1><b>Adicionar Categorias</b></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="active">Adicionar Categorias</li>
                </ol>
                <br>

            </div>
        </div>

<form method="post" action="{{url('/categorias/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="titulo">Nome</label>
        <input value="{{old('nome')}}" id="nome" class="form-control" name="nome" type="text">

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>

    <button class="btn btn-default btn-sm pull-left" type="submit">Enviar</button>

</form>

@endsection
