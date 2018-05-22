@extends('layout')

@section('title', 'Inicio')

@section('content')

<div class="row">
  <div class="col d-flex justify-content-start">
    <h3 class="text-dark font-weight-light">{{$mes}} - {{$ano}}</h3>
  </div>
  <div class="col d-flex justify-content-end">
    <a class="btn btn-info" href="{{url("")}}/{{$ano}}/cadastrar/debito" name="Cadastrar">Cadastrar</a>
  </div>
</div>

<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Descrição</th>
      <th>Valor</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @forelse($debitos as $debito)
        <tr>
          <td>{{ $debito->descricao }}</td>
          <td>{{ $debito->valor }}</td>
          <td>
              <a href="{{url("")}}/{{   $debito->ano    }}/remover/debito/{{   $debito->id    }}">
                  <img src="{{url("")}}/img/remove.png" alt="Remover" title="Remover" class="img-rounded center-block">
              </a>
          </td>
        </tr>
    @empty
        <tr>
            <td> <i>Clique em <a href="{{url("")}}/{{$ano}}cadastrar/debito"><b>cadastrar</b></a> para inserir um debito.</i> </td>
        </tr>
    @endforelse
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
@endsection
