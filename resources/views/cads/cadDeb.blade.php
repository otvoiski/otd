@extends('layout')

@section('title', 'Cadastrar Debito')

@section('content')
<div class="col d-flex justify-content-start">
  <h3 class="text-dark font-weight-light">Cadastrar Debito - {{ $ano }}</h3>
</div>
<br>
<form action="/cadastrar/debito/aplicar" method="post">
  <div class="input-group">
    <input class="form-control col-8" type="text" name="descricao" value="" placeholder="Descrição">
    <input class="form-control col-4" type="number" name="valor" value="" placeholder="Valor">
  </div>
  <br>
  <br>
      <button type="button" class="form-control btn btn-outline-primary">Inserir</button>
  <br>
  <br>
      <a href="/" class="form-control btn btn-danger">Cancelar</a>
</form>
@endsection
