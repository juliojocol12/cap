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
use App\Models\Muertematerna;
use App\Models\evento; 
use App\Models\Aborto;
use App\Models\fichamspasriego;


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
        $this->middleware('permission:home-fichamspasriego', ['only'=>['fichamspasriegohome']]);
        $this->middleware('permission:home-Aborto', ['only'=>['abortohome']]);
        $this->middleware('permission:home-fullcalendar', ['only'=>['agendahome']]);
        $this->middleware('permission:home-usuario', ['only'=>['usuariohome']]);
        $this->middleware('permission:home-rol', ['only'=>['rolhome']]);
        $this->middleware('permission:home-personal', ['only'=>['personalhome']]);
        $this->middleware('permission:home-infante', ['only'=>['infanteshome']]);
        $this->middleware('permission:home-datospersonalespaciente', ['only'=>['pacienteshome']]);
        $this->middleware('permission:home-datosfamiliare', ['only'=>['familiareshome']]);
        $this->middleware('permission:home-fcprenatalpostparto', ['only'=>['prenatalhome']]);
        $this->middleware('permission:home-controle', ['only'=>['controlprenatalhome']]);
        $this->middleware('permission:home-fcevaluacionposparto', ['only'=>['pospartohome']]);
        $this->middleware('permission:home-controlposparto', ['only'=>['controlpospartohome']]);
        $this->middleware('permission:home-pueblo', ['only'=>['pueblohome']]);
        $this->middleware('permission:home-establecimientosaludo', ['only'=>['establecimientohome']]);
        $this->middleware('permission:home-vacunas', ['only'=>['vacunashome']]);
        $this->middleware('permission:home-vacunainfante', ['only'=>['vacunainfantehome']]);
        $this->middleware('permission:home-MuerteMaterna', ['only'=>['muertematernahome']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    
    {
        $cantusuarios = User::where('Estado','Si')->count();  
        $cant_roles = Role::where('Estado','Si')->count();    
        $cant_personales = personale::count();
        $cant_infantes = Infante::where('Estado','Si')->count();
        $cant_pacientes = DatosPersonalesPaciente::where('Stado','Si')->count();
        $cant_familiares = DatosFamiliare::where('Estado','Si')->count();
        $cant_prenatal = fcprenatalpostparto::where('Estado','Si')->count();
        $cant_controlprenatal = controle::where('Estado','Si')->count();
        $cant_posparto = fcevaluacionposparto::where('Estado','Si')->count();
        $cant_controlposparto = controlposparto::where('Estado','Si')->count();
        $cant_pueblo = Pueblo::where('Estado','Si')->count();
        $cant_establecimiento = establecimientosaludo::where('Estado','Si')->count();
        $cant_vacunas = vacuna::where('Estado','Si')->count();
        $cant_vacunainfante = vacunainfante::where('Tado','Si')->count();
        $cant_agenda = evento::count();
        $cant_aborto = Aborto::count();
        //$cant_muertematerna = Muertematerna::count();
        $cant_fichamspasriego = fichamspasriego::where('Estado','Si')->count();
        return view('home', compact('cant_infantes','cant_personales','cant_roles','cantusuarios','cant_familiares','cant_pacientes','cant_prenatal','cant_controlprenatal','cant_posparto','cant_controlposparto','cant_pueblo','cant_establecimiento','cant_vacunas','cant_vacunainfante','cant_agenda','cant_aborto','cant_fichamspasriego'));
    }
    public function fichamspasriegohome()
    {
        return view('home.fichamspasriego');
    }
    public function abortohome()
    {
        return view('home.aborto');
    }
    public function muertematernahome()
    {
        return view('home.muertematerna');
    }
    public function agendahome()
    {
        return view('home.agenda');
    }
    public function usuariohome()
    {
        return view('home.usuarios');
    }
    public function rolhome()
    {
        return view('home.roles');
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
    
    public function vacunainfantehome()
    {
        return view('home.vacunainfantes');
    }

    public function vacunashome()
    {
        return view('home.vacunas');
    }
}
