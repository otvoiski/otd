@extends('layout')

@section('title', 'Inicio')

@section('content')
{{--Alerta--}}
@if(   $err    )
    @component('alert')
        @if($err == 1)
            @section('class','alert-success')
            <b>Sucesso</b> ao inserir o debito
        @endif
        @if($err == 2)
              @section('class','alert-danger')
            <b>Falha</b> ao inserir o debito
        @endif
    @endcomponent
@endif
{{--Body--}}
<div class="row">
  <div class="col d-flex justify-content-start">
    <h3 class="text-dark font-weight-light">{{$mes->mes}} - {{$ano}}</h3>
  </div>
  <div class="col d-flex justify-content-end">
    <a class="btn btn-info" href="{{url($ano."/".$mes->apelido."/cadastrar/debito")}}" name="Cadastrar">Cadastrar</a>
  </div>
</div>

<br>


@if($mes->total == 0)
    <div class="text-center">
        <i>Clique em <a href="{{url($ano."/".$mes->apelido."/cadastrar/debito")}}"><b>cadastrar</b></a> para inserir um debito.</i>
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
                  <a href="{{url("/".$debito->ano."/".$mes."/remover/debito/".$debito->id)}}">
                      <img src="{{url("/img/remove.png")}}" alt="Remover" title="Remover" class="img-rounded center-block">
                  </a>
              </td>
            </tr>
        @endforeach
        <tr>
          <td class="text-dark font-weight-light text-right">Debito</td>
          <td><h4 class="text-dark font-weight-light">R$ 951,00</h4></td>
          <th></th>
        </tr>
        <tr>
          <td class="text-dark font-weight-light text-right">Credito</td>
          <td><h4 class="text-dark font-weight-light">R$ 1.200,00</h4></td>
          <th></th>
        </tr>
        <tr>
          <td class="text-dark font-weight-light text-right">Total</td>
          <td><h4 class="text-dark font-weight-light">R$ 249,00</h4></td>
          <th></th>
        </tr>
      </tbody>
    </table>
@endif
@endsection
