@extends('adminlte::page')

@section('title', 'Diferenciais')

@section('content_header')
    <h1>Diferenciais</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Diferenciais</a></li>
    </ol>
@stop

@section('content')
        <diferencial-vue diferencials="{{$diferencial}}"></diferencial-vue>
@stop