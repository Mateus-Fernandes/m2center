@extends('adminlte::page')

@section('title', 'Equipe')

@section('content_header')
    <h1>Equipe</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Equipe</a></li>
    </ol>
@stop

@section('content')
        <equipe-vue equipes="{{$equipes}}"></equipe-vue>
@stop