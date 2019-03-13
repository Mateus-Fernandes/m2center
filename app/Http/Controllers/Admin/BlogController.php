<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use Redirect;
class BlogController extends Controller
{
    public function index(){
        $blog = Blog::all();
        return view('admin.blog.index', compact('blog'));
    }
    public function lista(){
        $blog_servico = Blog::all();
        return (string) $blog_servico;
    }
    public function listapost($id_blog){
        $blog_servico = Blog::findOrFail($id_blog);
        return $blog_servico;
    }    
    public function editar($id_blog){
        $blog = Blog::findOrFail($id_blog);
        return view('admin.blog.editar', compact('blog'));
    }
    public function atualizar(Request $request, $id_blog){
        $blog = Blog::findOrFail($id_blog);
        $blog->update($request->all());       
    }
    public function excluir(Request $request, $id_blog){
        $blog = Blog::findOrFail($id_blog);
        $blog->delete();        
    }
    public function adicionar(Request $request){

        return view('admin.blog.adicionar');  
    }
    public function adicionarbanco(Request $request){
        $blog = new Blog;
        $blog->user_id = 1;
        $blog->titulo_blog = $request->titulo_blog;
        $blog->miniatura_blog = url('/').'/'.str_replace('public', 'storage', $request->miniatura_blog);
        $blog->imagem_blog = url('/').'/'.str_replace('public', 'storage', $request->imagem_blog);
        $blog->texto_blog = $request->historiatexto;
        $blog->save();
        //Blog::create();
        return view('admin.blog.index'); 
    }
    public function editarbanco(Request $request, $id_blog){
        $blog = Blog::findOrFail($id_blog);
        $blog->user_id = 1;
        $blog->titulo_blog = $request->titulo_blog;
        $blog->miniatura_blog = url('/').'/'.str_replace('public', 'storage', $request->miniatura_blog);
        $blog->imagem_blog = url('/').'/'.str_replace('public', 'storage', $request->imagem_blog);
        $blog->texto_blog = $request->historiatexto;
        $blog->save();
        return Redirect::to('admin/blog');
    }       
}
