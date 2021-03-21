<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index()
    {
        return view('noticia');
    }
    public function indexAdmin()
    {
        return view('admin.noticia');
    }
}
