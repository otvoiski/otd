@extends('layout')

@section('title', 'Cadastrar ano vigente')

@section('content')
<form action="/cadastrar/ano" method="post">
  {{ csrf_field() }}
  <div class="input-group">
    <input class="form-control" type="text" name="ano" value="" placeholder="Ano">
    <div class="input-group-append">
      <button type="submit" class="btn btn-outline-primary">Iniciar</button>
    </div>
  </div>
  <br>
  <a href="/" class="form-control btn btn-danger">Cancelar</a>
</form>
@endsection
