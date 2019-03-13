@extends('adminlte::page')

@section('title', 'Quem Somos')

@section('content_header')
    <h1>Quem somos</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Quem Somos</a></li>
    </ol>
@stop

@section('content')
        <quem-somos quemsomos="{{$quemsomos}}"></quem-somos>
@stop