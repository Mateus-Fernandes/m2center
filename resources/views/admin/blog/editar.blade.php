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
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                <h3>Editar Post - {{$blog->titulo_blog}}</h3>
                </div>
                <div class="box-body">
                    <form action="{{ url('admin/blog/editarbanco/') }}/{{ $blog->id}}" method="POST">
                        @csrf
                        <div class="group">      
                            <input type="text" required name="titulo_blog" value="{{$blog->titulo_blog}}">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Título do Post:</label>
                        </div>
                        <blog-upload imagem_blogs="{{$blog->imagem_blog}}"></blog-upload>
                        <blog-upload2></blog-upload2>
                        <input type="hidden" value="1" name="user_id">
                        <div class="group">
                            <textarea id="historia" name="historia" class="form-control">{{$blog->texto_blog}}</textarea>
                            <input type="hidden" id="historiatexto" name="historiatexto">  
                        </div>
                        <button type="submit" class="btn btn-success">ENVIAR</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
@stop