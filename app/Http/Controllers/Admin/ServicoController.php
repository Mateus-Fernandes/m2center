<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Servico;

class ServicoController extends Controller
{
    public function index(){
        $servico = Servico::all();
        return view('admin.servico.index', compact('servico'));
    }
    public function lista(){
        $lista_servico = Servico::all();
        return (string) $lista_servico;
    }
    public function editar($id_servico){
        $lista_servico = Servico::findOrFail($id_servico);
        return (string) $lista_servico;
    }
    public function atualizar(Request $request, $id_servico){
        $servico = Servico::findOrFail($id_servico);
        $servico->update($request->all());       
    }
    public function excluir(Request $request, $id_servico){
        $servico = Servico::findOrFail($id_servico);
        $servico->delete();        
    }
    public function adicionar(Request $request){
        Servico::create($request->all());  
    }         
}
