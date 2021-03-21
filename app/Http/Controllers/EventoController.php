<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        return view('evento');
    }
    public function indexAdmin()
    {
        return view('admin.evento');
    }
}
