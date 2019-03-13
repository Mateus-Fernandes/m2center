<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Equipe;


class EquipeController extends Controller
{
    public function index(){
        $equipes = Equipe::all();
        return view('admin.equipe.index', compact('equipes'));
    }
    public function lista(){
        $lista_equipe = Equipe::all();
        return (string) $lista_equipe;
    }
    public function editar($id_membro){
        $lista_equipe = Equipe::findOrFail($id_membro);
        return (string) $lista_equipe;
    }
    public function atualizar(Request $request, $id_membro){
        $equipe = Equipe::findOrFail($id_membro);
        $equipe->update($request->all());       
    }
    public function excluir(Request $request, $id_membro){
        $equipe = Equipe::findOrFail($id_membro);
        $equipe->delete();        
    }
    public function adicionar(Request $request){
        Equipe::create($request->all());  
    }                     
}
