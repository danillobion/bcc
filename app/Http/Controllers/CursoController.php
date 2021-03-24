<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Auth;
use App\User;

class CursoController extends Controller
{
    public function index()
    {
        $resultado = Curso::find(1);
        if(!isset($resultado->texto)){
            return view('curso', ['texto' => "Nenhum texto cadastrado"]);
        }else{
            return view('curso',['texto' => $resultado->texto]);
        }
    }

    //Admin ------------------------------------------------------------------------------------------------------------------------
    public function indexAdmin()
    {
        $resultado = Curso::find(1);
        if(!isset($resultado->texto)){
            return view('admin.curso', ['texto' => "Nenhum texto cadastrado"]);
        }else{
            return view('admin.curso',['texto' => $resultado->texto]);
        }
    }
    public function update(Request $request){
        $validator = $request->validate([
            'texto' => 'required'
        ]);
        
        if(Curso::count() > 0){
            $resultado = Curso::where('id','=',1)->update(['texto' => $request->texto, 'user_id' => Auth::user()->id]);
        }else{
            $resultado = Curso::create(['texto' => $request->texto, 'user_id' => Auth::user()->id]);
        }
        session()->flash('sucesso', "A seção Curso foi atualizada");
        return redirect()->back();
    }
}
