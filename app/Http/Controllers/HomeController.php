<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\personale;
use App\Models\Infante;
use App\Models\DatosPersonalesPaciente;
use App\Models\DatosFamiliare;
use App\Models\fcprenatalpostparto;
use App\Models\controle;
use App\Models\fcevaluacionposparto;
use App\Models\controlposparto;
use App\Models\Pueblo;
use App\Models\establecimientosaludo;
use App\Models\vacuna;
use App\Models\vacunainfante;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:home-personal', ['only'=>['personalhome']]);
        $this->middleware('permission:home-infantes', ['only'=>['infanteshome']]);
        $this->middleware('permission:home-pacientes', ['only'=>['pacienteshome']]);
        $this->middleware('permission:home-familiares', ['only'=>['familiareshome']]);
        $this->middleware('permission:home-prenatal', ['only'=>['prenatalhome']]);
        $this->middleware('permission:home-controlprenatal', ['only'=>['controlprenatalhome']]);
        $this->middleware('permission:home-posparto', ['only'=>['pospartohome']]);
        $this->middleware('permission:home-controlposparto', ['only'=>['controlpospartohome']]);
        $this->middleware('permission:home-pueblo', ['only'=>['pueblohome']]);
        $this->middleware('permission:home-establecimiento', ['only'=>['establecimientohome']]);
        $this->middleware('permission:home-vacunas', ['only'=>['vacunashome']]);
        $this->middleware('permission:home-vacunainfante', ['only'=>['vacunainfantehome']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cantusuarios = User::count();  
        $cant_roles = Role::count();    
        $cant_personales = personale::count();
        $cant_infantes = Infante::count();
        $cant_pacientes = DatosPersonalesPaciente::count();
        $cant_familiares = DatosFamiliare::count();
        $cant_prenatal = fcprenatalpostparto::count();
        $cant_controlprenatal = controle::count();
        $cant_posparto = fcevaluacionposparto::count();
        $cant_controlposparto = controlposparto::count();
        $cant_pueblo = Pueblo::count();
        $cant_establecimiento = establecimientosaludo::count();
        $cant_vacunas = vacuna::count();
        $cant_vacunainfante = vacunainfante::count();
        return view('home', compact('cant_infantes','cant_personales','cant_roles','cantusuarios','cant_familiares','cant_pacientes','cant_prenatal','cant_controlprenatal','cant_posparto','cant_controlposparto','cant_pueblo','cant_establecimiento','cant_vacunas','cant_vacunainfante'));
    }
    public function vacunainfantehome()
    {
        return view('home.vacunainfantes');
    }


    public function vacunashome()
    {
        return view('home.vacunas');
    }

    public function personalhome()
    {
        return view('home.personal');
    }

    public function infanteshome()
    {
        return view('home.infantes');
    }
    
    public function pacienteshome()
    {
        return view('home.pacientes');
    }

    public function familiareshome()
    {
        return view('home.familiares');
    }

    public function prenatalhome()
    {
        return view('home.prenatal');
    }

    public function controlprenatalhome()
    {
        return view('home.controlprenatal');
    }

    public function pospartohome()
    {
        return view('home.posparto');
    }

    public function controlpospartohome()
    {
        return view('home.controlposparto');
    }
    
    public function pueblohome()
    {
        return view('home.pueblo');
    }

    public function establecimientohome()
    {
        return view('home.establecimiento');
    }
}
