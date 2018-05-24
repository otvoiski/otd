@extends('layout')

@section('title', 'Cadastrar Credito')
@section('path')
  <a href="{{   URL::to($ano)   }}"> {{ $ano }}</a> / <a href="{{   URL::to($ano.'/'.$mes)   }}"> {{ $mes }}</a> / <a href="{{   URL::to($ano.'/'.$mes.'/cadastrar/credito')   }}"> {{ 'Cadastrar Credito' }}</a> /
@endsection
@section('content')
<div class="col d-flex justify-content-start">
  <h3 class="text-dark font-weight-light">Cadastrar Debito - {{ $ano }}</h3>
</div>
<br>
<form action="{{URL::to($ano."/".$mes."/cadastrar/credito")}}" method="post">
  {{ csrf_field() }}
  <div class="input-group">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">{{ $mesNome }}</span>
    </div>
    <input class="form-control" type="text" name="credito" value="{{ $credito }}" placeholder="Valor">
  </div>
  <div  class="text-right text-dark">
    <small><i>Valor não pode ter vírgula  (,)</i></small>
  </div>
  <br>
  <br>
      <button type="submit" class="form-control btn btn-outline-info">Inserir</button>
  <br>
  <br>
      <a href="{{ URL::to($ano.'/'.$mes) }}" class="form-control btn btn-danger">Cancelar</a>
</form>
@endsection
