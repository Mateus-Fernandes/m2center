<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Quemsomos;
use App\Models\Blog;
use App\Models\Equipe;
use App\Models\Contato;
use App\Models\Servico;
use App\Models\Diferencial;

class SiteController extends Controller
{
    public function index(){
        return view('site.home.index');
    }
    public function envia(Request $request){
            \Mail::send('site.email.test',$request->all(), function($m) {
            $m->from('divulga@m2center.com.br', 'M2 Center');
            $m->subject('Contato enviado pelo site M2 Center- ');
            $m->to('mateusfernandes12@live.com');
            });

            return $request->all();
           
    }    
}
