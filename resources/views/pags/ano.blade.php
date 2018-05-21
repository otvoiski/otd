@extends('layout')

@section('title', 'Plano de 2018')

@section('content')

@component('chart')
  @section('chart-valor')
  [205.52, 159.61, 96.40, 15.10, 249.00, 0, 0, 0, 0, 0, 0, 0]
  @endsection
@endcomponent

<div class="row">
  <div class="col d-flex justify-content-start">
    <h3 class="text-dark font-weight-light">Plano de 2018</h3>
  </div>
  <div class="col d-flex justify-content-end">
    <a href="/cadastrar/mes" class="btn btn-success">Cadastrar</a>
  </div>
</div>
<hr>
<div class="form-group"><a href="/2018/jar" class="btn btn-info col-12">Janeiro</a></div>
<div class="form-group"><a href="/2018/fev" class="btn btn-info col-12">Feveiro</a></div>
<div class="form-group"><a href="/2018/mar" class="btn btn-info col-12">Março</a></div>
<div class="form-group"><a href="/2018/abr" class="btn btn-info col-12">Abril</a></div>
<div class="form-group"><a href="/2018/mai" class="btn btn-info col-12">Maio</a></div>

@endsection
