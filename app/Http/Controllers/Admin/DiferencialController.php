<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use File;
use App\Models\Diferencial;

class DiferencialController extends Controller
{
    public function index(){
        $diferencial = Diferencial::all();
        return view('admin.diferencial.index', compact('diferencial'));
    }
    public function lista(){
        $lista_diferencial = Diferencial::all();
        return (string) $lista_diferencial;
    }
    public function editar($id_diferencial){
        $lista_diferencial = Diferencial::findOrFail($id_diferencial);
        return (string) $lista_diferencial;
    }
    public function atualizar(Request $request, $id_diferencial){
        $diferencial = Diferencial::findOrFail($id_diferencial);
        $diferencial->update($request->all());       
    }
    public function excluir(Request $request, $id_diferencial){
        $diferencial = Diferencial::findOrFail($id_diferencial);
        $diferencial->delete();        
    }
    public function adicionar(Request $request){
        Diferencial::create($request->all());  
    }
    public function upload(Request $request){
        if($request->hasFile('icone_dif') && $request->file('icone_dif')->isValid()){
            $name = '_contrato_empresa_'.kebab_case(date('Y-m-d'));
            $extensionfile = 'svg';
            $nameFile = "{$name}.{$extensionfile}";
            $upload = $request->icone_dif->storeAs('public/uploads', $nameFile);
            //return Storage::put('public/uploads', $file);
            //return Storage::putFileAs('public/uploads', new File('/path/to/photo'), $nameFile);
            return Storage::putFileAs(
                'public/uploads', $request->file('icone_dif'), 'icones'.kebab_case(date('Y-m-d H-i-s')).'.svg'
            );            

        }   
    }       
}
