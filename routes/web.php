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

use App\Http\Controllers\PersonaleController;
use App\Http\Controllers\PrimercontrolpostpartoController;
use App\Http\Controllers\ConductapospartoController;
use App\Http\Controllers\PadecimientoinfanteController;
use App\Http\Controllers\ClasificacionpospartoController;
use App\Http\Controllers\ConsejeriapospartoController;
use App\Http\Controllers\EstablecimientosaludoController;
use App\Http\Controllers\FcprenatalpostpartoController;
use App\Http\Controllers\ControleController;
use App\Http\Controllers\FcevaluacionpospartoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ControlpospartoController;
use App\Http\Controllers\FichamspasriegoController;
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
    return view('auth/login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('infantes', InfanteController::class);
    Route::resource('personal', PersonaleController::class);
    Route::resource('primercontrolpostparto', PrimercontrolpostpartoController::class);
    Route::resource('conductaposparto', ConductapospartoController::class);
    Route::resource('padecimientoinfante', PadecimientoinfanteController::class);
    Route::resource('clasificacionposparto', ClasificacionpospartoController::class);
    Route::resource('conserjeriaposparto', ConsejeriapospartoController::class);
    Route::resource('establecimientosaludo', EstablecimientosaludoController::class);
    Route::resource('pueblos', PuebloController::class);
    Route::resource('pacientes', DatospersonalespacienteController::class);
    Route::resource('datosfamiliares', DatosfamiliareController::class);
    Route::resource('fcprenatalpostpartos', FcprenatalpostpartoController::class);
    Route::resource('controles', ControleController::class);
    Route::resource('pospartos', FcevaluacionpospartoController::class);
    Route::resource('controlpospartos', ControlpospartoController::class);
    Route::resource('fichamspasriesgos', FichamspasriegoController::class);
    
    //Route::resource('evento', EventoController::class);
    Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index']);
    Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store']);
    

    
});