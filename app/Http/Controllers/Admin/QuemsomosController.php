<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quemsomos;


class QuemsomosController extends Controller
{
    public function index(){
        $quemsomos = Quemsomos::all();
        return view('admin.quemsomos.index', compact('quemsomos'));
    }

    public function lista(){
        $listagemquem = Quemsomos::all();
        return (string) $listagemquem;
  
    }

    public function upload(Request $request){
        if($request->file('video')){
            $file = $request->file('video');
            return Storage::put('public/uploads', $file);
        }
        if($request->file('i_missao')){
            $file = $request->file('i_missao');
            return Storage::putFileAs(
                'public/uploads', $request->file('i_missao'), 'iconesmissao'.kebab_case(date('Y-m-d H-i-s')).'.svg'
            );             
        }
        if($request->file('i_valores')){
            $file = $request->file('i_valores');
            return Storage::putFileAs(
                'public/uploads', $request->file('i_valores'), 'iconesvalores'.kebab_case(date('Y-m-d H-i-s')).'.svg'
            );             
        }
        if($request->file('i_objetivo')){
            $file = $request->file('i_objetivo');
            return Storage::putFileAs(
                'public/uploads', $request->file('i_objetivo'), 'iconesobjetivo'.kebab_case(date('Y-m-d H-i-s')).'.svg'
            );             
        }
        if($request->file('i_meta')){
            $file = $request->file('i_meta');
            return Storage::putFileAs(
                'public/uploads', $request->file('i_meta'), 'iconesmeta'.kebab_case(date('Y-m-d H-i-s')).'.svg'
            );             
        }
        if($request->file('foto_membro')){
            $file = $request->file('foto_membro');
            return Storage::put('public/uploads', $file);         
        }
        if($request->file('imagem_serv')){
            $file = $request->file('imagem_serv');
            return Storage::put('public/uploads', $file);
        }
        if($request->file('icone_serv')){
            $file = $request->file('icone_serv');
            return Storage::putFileAs(
                'public/uploads', $request->file('icone_serv'), 'iconesserv'.kebab_case(date('Y-m-d H-i-s')).'.svg'
            );            
        }
        if($request->file('imagem_blog')){
            $file = $request->file('imagem_blog');
            return Storage::put('public/uploads', $file);
        }
        if($request->file('miniatura_blog')){
            $file = $request->file('miniatura_blog');
            return Storage::put('public/uploads', $file);             
        }
        if($request->file('icone_dif')){
            $file = $request->file('icone_dif');
            return Storage::putFileAs(
                'public/uploads', $request->file('icone_dif'), 'iconesdif'.kebab_case(date('Y-m-d H-i-s')).'.svg'
            );            
        }        
    }
    
    public function atualizar(Request $request){
        // Get the temporary path
        $quemsomos = Quemsomos::findOrFail(1);
        $quemsomos->update($request->all());
        return response()->json([$request->all()]);
    }
}
