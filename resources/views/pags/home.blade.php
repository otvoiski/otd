@extends('layout')

@section('title', 'Inicio')

@section('content')

@component('alert')
@section('class','alert-success')
<strong>Holy guacamole!</strong> You should check in on some of those fields below
@endcomponent
<a href="/2018" class="btn btn-outline-info my-2 col-sm-12">2018</a>
@endsection
