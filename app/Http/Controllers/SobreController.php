<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sobre;
use Auth;
use App\User;

class SobreController extends Controller
{
    public function index()
    {
        $resultado = Sobre::find(1);
        return view('sobre',['texto' => $resultado->texto]);
    }

    //Admin ------------------------------------------------------------------------------------------------------------------------
    public function indexAdmin()
    {
        $resultado = Sobre::find(1);
        return view('admin.sobre',['texto' => $resultado->texto]);
    }
    public function update(Request $request){
        //verificar se o texto tá igual
        //verificar se o texto tá em branco
        //verificar se o texto atingiu o limite do campo de 10000 caractere
        $validator = $request->validate([
            'texto' => 'required'
        ]);
        
        if(Sobre::count() > 0){
            $resultado = Sobre::where('id','=',1)->update(['texto' => $request->texto, 'user_id' => Auth::user()->id]);
        }else{
            $resultado = Sobre::create(['texto' => $request->texto, 'user_id' => Auth::user()->id]);
        }
        session()->flash('sucesso', "A seção Sobre foi atualizada");
        return redirect()->back();
    }
}
