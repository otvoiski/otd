
@extends('layout')

@section('title', 'Inicio')

@section('content')
    @if(   false    )
        @component('alert')
            @section('class','alert-success')
            <strong>Holy guacamole!</strong> You should check in on some of those fields below
        @endcomponent
    @endif
    @forelse($anos as $ano)
        <a href="/{{$ano->ano}}" class="btn btn-outline-info my-2 col-sm-12">{{$ano->ano}}</a>
    @empty
        <h3 class="text-center text-dark font-weight-light">Bem vindo ao OTD, seu gerenciador de debitos!
            <br>
        <a href="{{ URL::to('cadastrar/ano') }}">Clique aqui</a> para adicionar um Ano e começar seu orçamento. </h3>
    @endforelse
@endsection
