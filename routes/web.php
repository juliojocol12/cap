<?php

use Illuminate\Support\Facades\Route;
//Agregamos los controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\InfanteController;
use App\Http\Controllers\PuebloController;
use App\Http\Controllers\DatospersonalespacienteController;
use App\Http\Controllers\DatosfamiliareController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('infantes', InfanteController::class);
    Route::resource('pueblos', PuebloController::class);
    Route::resource('pacientes', DatospersonalespacienteController::class);
    Route::resource('datosfamiliares', DatosfamiliareController::class);
});