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
    </div>
    <hr>
    <div class="form-group"><a href="/2018/jar" class="btn btn-info col-12">Janeiro</a></div>
    <div class="form-group"><a href="/2018/fev" class="btn btn-info col-12">Feveiro</a></div>
    <div class="form-group"><a href="/2018/mar" class="btn btn-info col-12">Março</a></div>
    <div class="form-group"><a href="/2018/abr" class="btn btn-info col-12">Abril</a></div>
    <div class="form-group"><a href="/2018/mai" class="btn btn-info col-12">Maio</a></div>
    <div class="form-group"><a href="/2018/jun" class="btn btn-outline-info col-12">Junho</a></div>
    <div class="form-group"><a href="/2018/jul" class="btn btn-outline-info col-12">Julho</a></div>
    <div class="form-group"><a href="/2018/ago" class="btn btn-outline-info col-12">Agosto</a></div>
    <div class="form-group"><a href="/2018/set" class="btn btn-outline-info col-12">Setembro</a></div>
    <div class="form-group"><a href="/2018/nov" class="btn btn-outline-info col-12">Novembro</a></div>
    <div class="form-group"><a href="/2018/dez" class="btn btn-outline-info col-12">Dezembro</a></div>
@endsection
