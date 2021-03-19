<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

//nao logado
Route::get('/', function () {
    if(Auth::user() != null){
        if(Auth::user()->tipo == 0){ //admin
            return redirect()->route('admin.index');
        }else if(Auth::user()->tipo == 1){ //convidado
            return redirect()->route('convidado.index');
        }
    }else{ //não logado
        return view('home');
    }
});
//logado
Route::group(['middleware' => 'auth'], function() {
    //admin
    Route::group(['middleware' => 'admin'], function() {
        Route::get('/admin/home', [HomeController::class, 'indexAdmin'])->name('admin.index')->middleware('admin');
    });
    //convidado
    Route::group(['middleware' => 'convidado'], function() {
        Route::get('/convidado/home', [HomeController::class, 'indexConvidado'])->name('convidado.index')->middleware('convidado');
    });
});