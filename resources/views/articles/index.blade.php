@extends('layouts.app')

@section('content')
    <div class="container" id="app">
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
                                <th>Tipo de publicación</th>
                                <th>URL</th>
                                <th>Imagen</th>
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
                                    @if($article->tipo == 1)
                                        Noticias Ciencia y Tecnología
                                    @else
                                        Publicaciones RIDIT
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{$article->url}}">Ir a URL</a>
                                </td>
                                <td>
                                    @if($article->imagen == 'https://fbinstantarticles.files.wordpress.com/2016/05/screen_fast_mobile.jpg')
                                        <img width="70px" src="https://fbinstantarticles.files.wordpress.com/2016/05/screen_fast_mobile.jpg">
                                    @else
                                        <img width="70px" src="/uploads/{{$article->imagen}}">
                                    @endif
                                </td>
                                <td>
                                    <a  href="/articulos/{{$article->id}}/edit" class="btn btn-warning">Editar</a>
                                </td>
                                <td>
                                    <eliminar :id="{{$article->id}}"></eliminar>
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