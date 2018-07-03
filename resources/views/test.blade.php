@extends('master')

@section('content')
<div class="row">
    <div class="col-md-8">
        <img src="/poster.jpg" alt="" class="img-fluid">
    </div>
    
    <div class="col-md-4">
        <a href="ConvocatoriaRIDIT.pdf" download target="_blank">
            <button class="btn btn-success">Descargar Convocatoria</button>
        </a>
        <div class="card-header bg-ridit text-white mt-5">
            Contacto
        </div>
        <div class="card">
            <example></example>
        </div>
    </div>
</div>
<!--
<div class="row mt-5">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-ridit text-white">
                Publicaciones
            </div>
            <div class="card-body bg-light">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light">Investigaciones de Economía de la Educación</li>
                    <li class="list-group-item bg-light">Número especial RSES</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-ridit text-white">
                Hazte Socio
            </div>
            <div class="card-body bg-light">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light">Ventajas</li>
                    <li class="list-group-item bg-light">Asociarte</li>
                </ul>
            </div>
        </div>
    </div>
</div>
-->
@endsection