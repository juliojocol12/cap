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
use App\Http\Controllers\ControlpospartoController;
use App\Http\Controllers\FichamspasriegoController;

use App\Http\Controllers\EventosController;
use App\Http\Controllers\VacunaController;
use App\Http\Controllers\VacunainfanteController;

use App\Http\Controllers\AbortoController;
use App\Http\Controllers\ReportesController;

use App\Http\Controllers\MuertematernaController;
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
    Route::get('fcprenatalpostpartos/pdf/{idFCPrenatalPostpartos}', [App\Http\Controllers\FcprenatalpostpartoController::class, 'pdf'])->name('fcprenatalpostpartos.pdf');
    Route::resource('fcprenatalpostpartos', FcprenatalpostpartoController::class);
    Route::resource('controles', ControleController::class);
    Route::resource('pospartos', FcevaluacionpospartoController::class);
    Route::resource('controlpospartos', ControlpospartoController::class);

    Route::resource('fichamspasriesgos', FichamspasriegoController::class);
    Route::resource('vacunas', VacunaController::class);
    Route::get('total/vacunas', [App\Http\Controllers\VacunaController::class, 'total'])->name('vacunas.total');
    Route::resource('vacunainfantes', VacunainfanteController::class);

    Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index']);
    Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store']);
    Route::resource('reportes', ReportesController::class);
    

    //Route::resource('evento', EventoController::class);
    Route::resource('eventos', EventosController::class);
    Route::resource('abortos', AbortoController::class);
    Route::resource('muertematernas', MuertematernaController::class);
    
    Route::get('edad/pacientes', [App\Http\Controllers\DatospersonalespacienteController::class, 'edad'])->name('pacientes.edad');
    
    //rutas para vistas de reportes
    Route::get('r1/reportes', [App\Http\Controllers\ReportesController::class, 'r1'])->name('reportes.r1');
    Route::get('r2/reportes', [App\Http\Controllers\ReportesController::class, 'r2'])->name('reportes.r2');
    Route::get('r3/reportes', [App\Http\Controllers\ReportesController::class, 'r3'])->name('reportes.r3');
    Route::get('r4/reportes', [App\Http\Controllers\ReportesController::class, 'r4'])->name('reportes.r4');
    Route::get('r5/reportes', [App\Http\Controllers\ReportesController::class, 'r5'])->name('reportes.r5');
    Route::get('r6/reportes', [App\Http\Controllers\ReportesController::class, 'r6'])->name('reportes.r6');
    Route::get('r7/reportes', [App\Http\Controllers\ReportesController::class, 'r7'])->name('reportes.r7');
    Route::get('r8/reportes', [App\Http\Controllers\ReportesController::class, 'r8'])->name('reportes.r8');
    Route::get('r9/reportes', [App\Http\Controllers\ReportesController::class, 'r9'])->name('reportes.r9');
    Route::get('r10/reportes', [App\Http\Controllers\ReportesController::class, 'r10'])->name('reportes.r10');
    Route::get('r11/reportes', [App\Http\Controllers\ReportesController::class, 'r11'])->name('reportes.r11');
    Route::get('r12/reportes', [App\Http\Controllers\ReportesController::class, 'r12'])->name('reportes.r12');
    Route::get('r13/reportes', [App\Http\Controllers\ReportesController::class, 'r13'])->name('reportes.r13');

    //rutas para generar reportes
    Route::get('pdf1/reportes', [App\Http\Controllers\ReportesController::class, 'pdf1'])->name('datospersonalespacientes.pdf1');
    Route::get('pdf3/reportes', [App\Http\Controllers\ReportesController::class, 'pdf3'])->name('altoriesgo.pdf3');
    Route::get('pdf4/reportes', [App\Http\Controllers\ReportesController::class, 'pdf4'])->name('datospersonalespacientes.pdf4');
    Route::get('pdf13/reportes', [App\Http\Controllers\ReportesController::class, 'pdf13'])->name('vacunas.pdf13');
    Route::get('pdf2/reportes', [App\Http\Controllers\ReportesController::class, 'pdf2'])->name('pacientes.pdf2');
    Route::get('pdf5/reportes', [App\Http\Controllers\ReportesController::class, 'pdf5'])->name('posparto.pdf5');
    Route::get('pdf6/reportes', [App\Http\Controllers\ReportesController::class, 'pdf6'])->name('nacidos.pdf6');
    Route::get('pdf8/reportes', [App\Http\Controllers\ReportesController::class, 'pdf8'])->name('vacunainfante.pdf8');


    Route::get('pdf10/reportes', [App\Http\Controllers\ReportesController::class, 'pdf10'])->name('abortos.pdf10');
 
});