<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index(){
        $contato = Contato::all();
        return view('admin.contato.index', compact('contato'));
    }

    public function lista(){
        $listagemcontato = Contato::all();
        return (string) $listagemcontato;
  
    }

    public function atualizar(Request $request){
        // Get the temporary path
        $contato = Contato::findOrFail(1);
        $contato->update($request->all());
        return response()->json([$contato->all()]);
    }
}
