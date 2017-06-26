@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/articulos/create" class="btn btn-success">Registrar artículo</a>
        <br><br>
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Artículos</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Subtítulo</th>
                                <th>URL</th>
                                <th>Imagen</th>
                                <th>Fecha</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $key => $article)
                            <tr>
                                <td>{{$article->titulo}}</td>
                                <td>{{$article->subtitulo}}</td>
                                <td>
                                    <a href="{{$article->url}}">{{$article->url}}</a>
                                </td>
                                <td>
                                    <img src="/uploads/{{$article->imagen}}" alt="" class="img-responsive" width="120px">
                                </td>
                                <td>{{$article->fecha->format('F')}}</td>
                                <td>
                                    <a  href="/articulos/{{$article->id}}/edit" class="btn btn-warning">Editar</a>
                                </td>
                                <td>
                                    <a href="/articulos/{{$article->id}}" class="btn btn-danger">button</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection