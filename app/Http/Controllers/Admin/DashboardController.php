<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function index(){
        $dashboard = Dashboard::all();
        return view('admin.contato.index', compact('dashboard'));
    }

    public function lista(){
        $dashboard = Dashboard::all();
        return (string) $dashboard;
    }

    public function atualizar(Request $request){
        // Get the temporary path
        $dashboard = Dashboard::findOrFail(1);
        $dashboard->update($request->all());
        return response()->json([$dashboard->all()]);
    }
}
