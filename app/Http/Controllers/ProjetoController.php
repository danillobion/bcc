<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function index()
    {
        return view('projeto');
    }
    public function indexAdmin()
    {
        return view('admin.projeto');
    }
}
