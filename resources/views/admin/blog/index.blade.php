@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1>Blog</h1>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Blog</a></li>
    </ol>
@stop

@section('content')
        <blog-vue></blog-vue>
@stop