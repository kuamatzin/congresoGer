@extends('master')

@section('content')
<h1 class="text-center mt-5 mb-5">Fechas importantes</h1>

<table class="table mb-5">
    <thead class="bg-ridit">
        <tr>
        <th scope="col">Fecha</th>
        <th scope="col">Evento</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">24 de abril</th>
            <td>Emisión de la convocatoria</td>
        </tr>
        <tr>
            <th scope="row">24 de abril al 30 de junio</th>
            <td>Presentación de resumen</td>
        </tr>
        <tr>
            <th scope="row">15 de julio</th>
            <td>Publicación de la evaluación académica de los resúmenes</td>
        </tr>
        <tr>
            <th scope="row">15 de agosto</th>
            <td>Entrega de la ponencia en extenso</td>
        </tr>
        <tr>
            <th scope="row">26 al 28 de septiembre</th>
            <td>Realización del Congreso</td>
        </tr>
    </tbody>
    </table>
</table>

@endsection