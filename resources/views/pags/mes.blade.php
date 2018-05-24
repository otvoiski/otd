@extends('layout')

@section('title', $mes->mes ." - ". $ano)
@section('path')
    <a href="{{   URL::to($ano)   }}"> {{ $ano }}</a> / <a href="{{   URL::to($ano.'/'.$mes->apelido)   }}"> {{ $mes->apelido }}</a> /
@endsection
@section('content')
    {{--Alerta--}}
@if(isset($err))
    @if($err == 0)
        @component('alert')
            @section('class','alert-success')
            <b>Sucesso</b> ao inserir o debito
        @endcomponent
    @endif
    @if($err == 1)
        @component('alert')
            @section('class','alert-danger')
            <b>Falha</b> ao inserir o debito
        @endcomponent
    @endif
@endif
{{--Body--}}
<div class="row">
  <div class="col d-flex justify-content-start">
    <h3 class="text-dark font-weight-light">{{$mes->mes}} - {{$ano}}</h3>
  </div>
  <div class="col d-flex justify-content-end">
    <a class="btn btn-info" href="{{URL::to($ano."/".$mes->apelido."/cadastrar/debito")}}" name="Cadastrar">Cadastrar</a>
  </div>
</div>

<br>


@if($mes->debito == 0)
    <div class="text-center">
        <i>Clique em <a href="{{URL::to($ano."/".$mes->apelido."/cadastrar/debito")}}"><b>cadastrar</b></a> para inserir um debito.</i>
    </div>
@else
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Descrição</th>
          <th>Valor</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($debitos as $debito)
            <tr>
              <td>{{ $debito->descricao }}</td>
              <td>{{ $debito->valor }}</td>
              <td>
                  <a href="{{URL::to($ano."/".$mes->apelido."/remover/debito/".$debito->id)}}">
                      <img src="{{URL::to("/img/remove.png")}}" alt="Remover" title="Remover" width="20" class="img-rounded center-block">
                  </a>
              </td>
            </tr>
        @endforeach
        <tr>
          <td class="text-dark font-weight-light text-right">Debito</td>
          <td><h4 class="text-dark font-weight-light">R$ {{ $mes->debito }}</h4></td>
          <th></th>
        </tr>
        <tr>
          <td class="text-dark font-weight-light text-right">Credito</td>
          <td><h4 class="text-dark font-weight-light ">R$ {{ $mes->credito }}</h4></td>
          <th></th>
        </tr>
        <tr>
          <td class="text-dark font-weight-light text-right">Total</td>
            @if( ($mes->credito - $mes->debito) < 0)
                <td><h4 class="text-danger font-weight-light">R$ {{ $mes->credito - $mes->debito }}</h4></td>
            @else
                <td><h4 class="text-dark font-weight-light ">R$ {{ $mes->credito - $mes->debito }}</h4></td>
            @endif
          <th></th>
        </tr>
      </tbody>
    </table>
@endif
@endsection
