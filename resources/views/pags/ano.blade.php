@extends('layout')

@section('title')Plano de {{  $ano  }}@endsection

@section('content')
    @component('chart')
        @section('chart-valor')
             {{  '['.implode(',',$total).']'  }}
        @endsection
    @endcomponent
    <div class="row">
        <div class="col d-flex justify-content-start">
            <h3 class="text-dark font-weight-light">Plano de {{ $ano }}</h3>
        </div>
    </div>
    <hr>
    @forelse($meses as $mes)
        @if($mes->total != 0)
            <div class="form-group"><a href="{{  URL::to('/'.$ano.'/'.$mes->apelido) }}" class="btn btn-info col-12">{{ $mes->mes }}</a></div>
        @else
            <div class="form-group"><a href="{{  URL::to('/'.$ano.'/'.$mes->apelido)  }}" class="btn btn btn-outline-info col-12">{{ $mes->mes }}</a></div>
        @endif
    @empty
        <h3 class="text-center"> Mêses não foram cadastrados, favor contatar o administrador.</h3>
    @endforelse
@endsection
