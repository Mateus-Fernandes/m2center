@extends('adminlte::page')

@section('title', 'Serviços')

@section('content_header')
    <h1>Serviços</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Serviços</a></li>
    </ol>
@stop

@section('content')
        <servico-vue servico="{{$servico}}"></servico-vue>
@stop