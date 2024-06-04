<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log; 
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    //
    function index(){
        $modules = Module::all();
        return view('index',["modules"=> Module::all()]);
    }
    function create(){

        return view('create');
    }

    function store(Request $request){
        $module = new Module();
        
        $module->intitule = $request->intitule;
        $module->date_debut = $request->date_debut;
        $module->date_fin = $request->date_fin;
        $module->save();
        
        return redirect('/index');
    }

    function edit($id){
        $module = Module::where('numero','=',$id)->get();
        //DB::table('items')->where('something', 'value')->get();
        
        return view('edit', ["module"=>$module]);
    }

    function update(Request $request,$id){
        Log::info($request->intitule);
        Log::info($id);
        $module = Module::where('numero','=',$id);
        //$module->intitule = $request->intitule;
        //$module->date_debut = $request->date_debut;
        //$module->date_fin = $request->date_fin;

        $module->update(["intitule" => $request->intitule , "date_debut"=> $request->date_debut ,"date_fin"=> $request->date_fin]);
        
        return redirect('/index');
    }
    function delete($id){
        $module = Module::where('numero','=',$id);
        $module->delete();
        return redirect('/index');
    }



}
