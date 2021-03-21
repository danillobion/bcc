<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        return view('professor');
    }
    public function indexAdmin()
    {
        //return view('admin.projeto');
    }
}
