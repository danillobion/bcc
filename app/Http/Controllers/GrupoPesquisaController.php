<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrupoPesquisaController extends Controller
{
    public function index()
    {
        return view('grupoDePesquisa');
    }
    public function indexAdmin()
    {
        return view('admin.grupoPesquisa');
    }
}
