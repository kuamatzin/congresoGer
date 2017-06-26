@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Editar Artículo: {{$article->titulo}}</h3>
        </div>
        <div class="panel-body">
            {!! Form::model($article, ['method' => 'PUT', 'url' => 'articulos/' . $article->id, 'files' => true]) !!}
                @include('articles.form', ['submitButtonText' => 'Guardar Artículo'])
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection