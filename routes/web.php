<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\GrupoPesquisaController;
use App\Http\Controllers\ProfessorController;
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
Route::get('/noticias', [NoticiaController::class, 'index'])->name('nl.noticia');
Route::get('/eventos', [EventoController::class, 'index'])->name('nl.evento');
Route::get('/projetos', [ProjetoController::class, 'index'])->name('nl.projeto');
Route::get('/professores', [ProfessorController::class, 'index'])->name('nl.professor');
Route::get('/laboratorios', [LaboratorioController::class, 'index'])->name('nl.laboratorio');
Route::get('/documentos', [DocumentoController::class, 'index'])->name('nl.documento');
/*Route::get('/midia', [MidiaController::class, 'index'])->name('nl.projeto');*/
Route::get('/grupo.de.pesquisa', [GrupoPesquisaController::class, 'index'])->name('nl.grupodepesquisa');
Route::get('/sobre', function(){return view('sobre');})->name('n1.sobre');
Route::get('/curso', function(){return view('curso');})->name('n1.curso');
Route::get('/localizar', function(){return view('localizar');})->name('n1.localizar');
Route::get('/contato', function(){return view('contato');})->name('n1.contato');

//logado
Route::group(['middleware' => 'auth'], function() {
    //admin
    Route::group(['middleware' => 'admin'], function() {
        Route::get('/admin/home', [HomeController::class, 'indexAdmin'])->name('admin.index')->middleware('admin');
        Route::get('/admin/noticia', [NoticiaController::class, 'indexAdmin'])->name('noticia.admin.index')->middleware('admin');
        Route::get('/admin/projeto', [ProjetoController::class, 'indexAdmin'])->name('projeto.admin.index')->middleware('admin');
        Route::get('/admin/evento', [EventoController::class, 'indexAdmin'])->name('evento.admin.index')->middleware('admin');
        Route::get('/admin/documento', [DocumentoController::class, 'indexAdmin'])->name('documento.admin.index')->middleware('admin');
        Route::get('/admin/laboratorio', [LaboratorioController::class, 'indexAdmin'])->name('laboratorio.admin.index')->middleware('admin');
        Route::get('/admin/grupos/pesquisa', [GrupoPesquisaController::class, 'indexAdmin'])->name('grupoDePesquisa.admin.index')->middleware('admin');
    });
    //convidado
    Route::group(['middleware' => 'convidado'], function() {
        Route::get('/convidado/home', [HomeController::class, 'indexConvidado'])->name('convidado.index')->middleware('convidado');
    });
});

Route::get('/midia', function(){return view('midia');})->name('midia');