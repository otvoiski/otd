@extends('layout')

@section('title', 'Error 404')

@section('content')
<div class="container">
  <img class="col-12" src="{{ url('') }}/img/404.png" alt="404">
  <div class="text-center ">
    <h1 class="font-weight-light">Página não encontrada :(</h1>
  </div>
</div>
@endsection
