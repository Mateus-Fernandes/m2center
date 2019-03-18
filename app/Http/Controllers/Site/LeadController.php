<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\FeedbackRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Lead;

class LeadController extends Controller
{
    public function index(){
        return view('admin.leads.index');
    }
    public function lista(){
        $lista_lead = Lead::all();
        return (string) $lista_lead;
    }
    public function excluir(Request $request, $id_lead){
        $lead = Lead::findOrFail($id_lead);
        $lead->delete();        
    }
    public function adicionar(FeedbackRequest $request){
        //Lead::create($request->all());
        $lead = new Lead();
        $lead->nome_lead = $request['nome_lead'];
        $lead->email_lead = $request['email_lead'];
        $lead->telefone_lead = $request['telefone_lead'];
        $lead->mensagem_lead = $request['mensagem_lead'];
        return response()->json([
            'success' => $lead->save()
        ]);        
    }
}
