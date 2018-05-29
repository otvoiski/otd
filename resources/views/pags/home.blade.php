
@extends('layout')

@section('title', 'Inicio')

@section('content')
    @if(   $err    )
        @component('alert')
            @if($err == 1)
                @section('class','alert-success')
                <b>Sucesso</b> ao inserir o ano
            @endif
            @if($err == 2)
                @section('class','alert-danger')
                <b>Falha</b> ao inserir o ano
            @endif
        @endcomponent
    @endif
    @forelse($anos as $ano)
        <a href="{{ URL::to($ano->ano) }}" class="btn btn-outline-info my-2 col-sm-12">{{$ano->ano}}</a>
    @empty
        <h3 class="text-center text-dark font-weight-light">Bem vindo ao OTD, seu gerenciador de debitos!
            <br>
        <a href="{{ URL::to('cadastrar/ano') }}">Clique aqui</a> para adicionar um Ano e começar seu orçamento. </h3>
    @endforelse
@endsection
