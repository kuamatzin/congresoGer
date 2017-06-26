@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Registrar nuevo artículo</h3>
            </div>
            <div class="panel-body">
                {!! Form::open(['url' => 'articulos', 'files' => true]) !!}
                    @include('articles.form', ['submitButtonText' => 'Registrar Artículo'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection