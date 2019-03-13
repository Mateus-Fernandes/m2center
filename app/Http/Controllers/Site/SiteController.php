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
}
