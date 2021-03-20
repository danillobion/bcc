<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index()
    {
        return view('documento');
    }
    public function indexAdmin()
    {
        return view('admin.documento');
    }
}
