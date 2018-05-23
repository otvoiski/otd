@extends('layout')

@section('title', 'Plano de {{  $ano  }}')

@section('content')
    @component('chart')
        @section('chart-valor')
        [205.52, 159.61, 96.40, 15.10, 249.00, 0, 0, 0, 0, 0, 0, 0]
        @endsection
    @endcomponent
    <div class="row">
        <div class="col d-flex justify-content-start">
            <h3 class="text-dark font-weight-light">Plano de {{ $ano }}</h3>
        </div>
    </div>
    <hr>
    @forelse($meses as $mes)
        @if($mes->update_at == null)
            <div class="form-group"><a href="{{  URL::to('/$ano/$mes->apelido')  }}" class="btn btn-info col-12">$mes->mes</a></div>
        @else
            <div class="form-group"><a href="{{  URL::to('/$ano/$mes->apelido')  }}" class="btn btn btn-outline-info col-12">$mes->mes</a></div>
        @endif
    @empty
        <h3 class="text-center"> Mêses não foram cadastrados, favor contactar o administrador.</h3>
    @endforelse
@endsection
