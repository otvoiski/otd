@extends('layout')

@section('title', 'Inicio')

@section('content')

<div class="row">
  <div class="col d-flex justify-content-start">
    <h3 class="text-dark font-weight-light">Janeiro - 2018</h3>
  </div>
  <div class="col d-flex justify-content-end">
    <a class="btn btn-info" href="cadastrar/debito" name="Cadastrar">Cadastrar</a>
  </div>
</div>

<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col-6 col-md-8">Descrição</th>
      <th scope="col-2 col-md-4">Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mercado</td>
      <td>R$ 756,00</td>
    </tr>
    <tr>
      <td>Internet</td>
      <td>R$ 120,00</td>
    </tr>
    <tr>
      <td>Instalação Internet</td>
      <td>R$ 75,00</td>
    </tr>
    <tr>
      <td class="text-dark font-weight-light text-right">Debito</td>
      <td><h4 class="text-dark font-weight-light">R$ 951,00</h4></td>
    </tr>
    <tr>
      <td class="text-dark font-weight-light text-right">Credito</td>
      <td><h4 class="text-dark font-weight-light">R$ 1.200,00</h4></td>
    </tr>
    <tr>
      <td class="text-dark font-weight-light text-right">Total</td>
      <td><h4 class="text-dark font-weight-light">R$ 249,00</h4></td>
    </tr>
  </tbody>
</table>
@endsection
