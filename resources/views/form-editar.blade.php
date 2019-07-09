@extends('principal')

@section('conteudo-principal')

<h2>Editar Post</h2>
<hr />

<form method="post" action="{{url('/posts/editar')}}">

    @csrf

    <input type="hidden" name="id" value="{{$post->id}}">

    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input id="titulo" class="form-control" name="titulo" type="text"
        value="{{$post->titulo}}">

        @error('titulo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="categoria">Categoria</label>
        <select id="categoria" class="form-control" name="categoria_id">
            <option value="">Selecione</option>

            @foreach ($categorias as $categoria)

                <option value="{{$categoria->id}}"
                    {{ ($categoria->id == $post->categoria_id) ? 'selected' : '' }}
                    >
                    {{$categoria->nome}}
                </option>

            @endforeach

        </select>

        @error('categoria_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>

    <div class="form-group">
        <label for="texto">Texto</label>
        <textarea id="texto" class="form-control" rows="3"
        name="texto">{{$post->texto}}</textarea>

        @error('texto')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@endsection
