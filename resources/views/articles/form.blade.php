
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

<div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
    {!! Form::label('tipo', 'Tipo de publicación') !!}
    {!! Form::select('tipo',[1 => 'Noticias Información Ciencia y Tecnología', 2 => 'Publicaciones RIDIT'], null, ['id' => 'tipo', 'class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('tipo') }}</small>
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

<div class="form-group{{ $errors->has('pdf') ? ' has-error' : '' }}">
    {!! Form::label('pdf', 'PDF') !!}
    {!! Form::file('pdf') !!}
    <small class="text-danger">{{ $errors->first('pdf') }}</small>
</div>


<button type="submit" class="btn btn-success">{{ $submitButtonText}}</button>