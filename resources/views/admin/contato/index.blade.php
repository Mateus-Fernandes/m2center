@extends('adminlte::page')

@section('title', 'Contato')

@section('content_header')
    <h1>Contato</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Contato</a></li>
    </ol>
@stop

@section('content')
        <contato-vue contato="{{$contato}}"></contato-vue>
@stop