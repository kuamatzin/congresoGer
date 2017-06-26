
<div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
    {!! Form::label('titulo', 'Título') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('titulo') }}</small>
</div>

<div class="form-group{{ $errors->has('subtitulo') ? ' has-error' : '' }}">
    {!! Form::label('subtitulo', 'Subtítulo') !!}
    {!! Form::text('subtitulo', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('subtitulo') }}</small>
</div>

<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
    {!! Form::label('url', 'URL') !!}
    {!! Form::text('url', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('url') }}</small>
</div>

<div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
    {!! Form::label('imagen', 'Imagen') !!}
    {!! Form::file('imagen') !!}
    <small class="text-danger">{{ $errors->first('imagen') }}</small>
</div>

@if(isset($article))
<div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
    {!! Form::label('fecha', 'Fecha') !!}
    {!! Form::select('fecha', ['1' => 'Enero', '2' => 'Febrero', '3' => 'Marzo', '4' => 'Abril', '5' => 'Mayo', '6' => 'Junio', '7' => 'Julio', '8' => 'Agosto', '9' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre'], $article->fecha->month, ['id' => 'fecha', 'class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('fecha') }}</small>
</div>
@else
<div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
    {!! Form::label('fecha', 'Fecha') !!}
    {!! Form::select('fecha', ['1' => 'Enero', '2' => 'Febrero', '3' => 'Marzo', '4' => 'Abril', '5' => 'Mayo', '6' => 'Junio', '7' => 'Julio', '8' => 'Agosto', '9' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre'], null, ['id' => 'fecha', 'class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('fecha') }}</small>
</div>
@endif


<button type="submit" class="btn btn-success">{{ $submitButtonText}}</button>