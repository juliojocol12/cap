<?php

namespace App\Http\Controllers;

use App\Models\controlposparto;

use App\Models\fcevaluacionposparto; 
use App\Models\User;
use App\Models\datospersonalespaciente;

use Illuminate\Http\Request;

class ControlpospartoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-controlposparto', ['only'=>['index']]);
        $this->middleware('permission:crear-controlposparto', ['only'=>['create','store']]);
        $this->middleware('permission:editar-controlposparto', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-controlposparto', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cant_contropos = controlposparto::count();
        if($cant_contropos === 0)
        {
            $texto = trim($request->get('texto'));
            $controlpospartos = controlposparto::select('idControlPosparto','NoControl','FCEvaluacionPosparto_id','SemanasDespuesParto','FechaVisita','InvolucionUterina','ExamenMamas','HeridaOperatiria','ExamenGInecológico','PresionArterial','MMHG','FrecuenciaCardiaca','Temperatura','LactanciaMaterna','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacuncacionTdapMadre','Medicamento','LactanciaMaternaExclusiva','PlanificacionFamiliarPosparto','AlimentacionMadreLactante','LactanciaMaternaVIH','MujerVIH','Usuario_id','Estado')->where('idControlPosparto','LIKE','%'.$texto.'%')->paginate(10);
            return view('controlpospartos.index', compact('controlpospartos','texto'));
        }
        else{
            $texto = trim($request->get('texto'));
            $controlpospartos = controlposparto::select('controlpospartos.idControlPosparto','controlpospartos.NoControl','controlpospartos.FCEvaluacionPosparto_id','controlpospartos.SemanasDespuesParto','controlpospartos.FechaVisita','controlpospartos.InvolucionUterina','controlpospartos.ExamenMamas','controlpospartos.HeridaOperatiria','controlpospartos.ExamenGInecológico','controlpospartos.PresionArterial','controlpospartos.MMHG','controlpospartos.FrecuenciaCardiaca','controlpospartos.Temperatura','controlpospartos.LactanciaMaterna','controlpospartos.ProblemasDetectados','controlpospartos.SulfatoFerroso','controlpospartos.AcidoFolico','controlpospartos.VacuncacionTdapMadre','controlpospartos.Medicamento','controlpospartos.LactanciaMaternaExclusiva','controlpospartos.PlanificacionFamiliarPosparto','controlpospartos.AlimentacionMadreLactante','controlpospartos.LactanciaMaternaVIH','controlpospartos.MujerVIH','controlpospartos.Usuario_id','controlpospartos.Estado','FechaEvaluacionPosparto','NombresPaciente','ApellidosPaciente','Numerodireccion')
            ->join('fcevaluacionpospartos', 'fcevaluacionpospartos.idFCEvaluacionPosparto', '=','controlpospartos.FCEvaluacionPosparto_id')
            ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','fcevaluacionpospartos.idFCEvaluacionPosparto')
            ->where('idControlPosparto','LIKE','%'.$texto.'%')
            ->where('controlpospartos.Estado','Si')->paginate(10);
            return view('controlpospartos.index', compact('controlpospartos','texto'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fcevaluacionpospartos = fcevaluacionposparto::all()->where('Estado','Si');
        $datospacientes = datospersonalespaciente::all()->where('Stado','Si');
        $usuarios = User::all()->where('Estado','Si');
        return view ('controlpospartos.crear')->with('fcevaluacionpospartos',$fcevaluacionpospartos)->with('datospacientes',$datospacientes)->with('usuarios',$usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'NoControl' => 'required|NumeroRule',
            'FCEvaluacionPosparto_id' => 'required',
            'SemanasDespuesParto' => 'required|NumeroRule',
            'FechaVisita' => 'required',
            'InvolucionUterina' => 'required|TextoRule3',
            'ExamenMamas' => 'required|TextoRule3',
            'HeridaOperatiria' => 'required|TextoRule3',
            'ExamenGInecológico' => 'TextoRule4',
            'PresionArterial' => 'required|DecimalRule',
            'MMHG' => 'required|DecimalRule',
            'FrecuenciaCardiaca' => 'required|DecimalRule',
            'Temperatura' => 'required|DecimalRule',
            'LactanciaMaterna' => 'required|TextoRule1',
            'ProblemasDetectados' => 'required|TextoRule3',
            'SulfatoFerroso' => 'required|NumeroRule',
            'AcidoFolico' => 'required|NumeroRule',
            'VacuncacionTdapMadre' => 'required|NumeroRule',
            'Medicamento' => 'required|TextoRule3',
            'LactanciaMaternaExclusiva' => 'required|TextoRule3',
            'PlanificacionFamiliarPosparto' => 'required|TextoRule3',
            'AlimentacionMadreLactante' => 'required|TextoRule3',
            'LactanciaMaternaVIH' => 'required|TextoRule3',
            'MujerVIH' => 'required|TextoRule3',
            'Usuario_id',
            'Estado',
        ]);
        
        controlposparto::create($request->all());

        return redirect()->route('controlpospartos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\controlposparto  $controlposparto
     * @param  int idControlPosparto
     * @return \Illuminate\Http\Response
     */
    public function show($idControlPosparto)
    {
        //
        $controlpospartos = controlposparto::select('idControlPosparto','NoControl','FCEvaluacionPosparto_id','idFCEvaluacionPosparto','SemanasDespuesParto','FechaVisita','InvolucionUterina','ExamenMamas','HeridaOperatiria','ExamenGInecológico','PresionArterial','MMHG','FrecuenciaCardiaca','Temperatura','LactanciaMaterna','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacuncacionTdapMadre','Medicamento','LactanciaMaternaExclusiva','PlanificacionFamiliarPosparto','AlimentacionMadreLactante','LactanciaMaternaVIH','MujerVIH','Usuario_id','Estado',)
        ->join('fcevaluacionpospartos', 'fcevaluacionpospartos.idFCEvaluacionPosparto', '=','controlpospartos.FCEvaluacionPosparto_id');


        $controlposparto = controlposparto::find($idControlPosparto);

        $fcevaluacionpospartos = fcevaluacionposparto::all()->where('Estado','Si');
        $datospacientes = datospersonalespaciente::all()->where('Stado','Si');
        $usuarios = User::all()->where('Estado','Si');

        return view ('controlpospartos.show', compact('controlposparto','controlpospartos'))->with('fcevaluacionpospartos',$fcevaluacionpospartos)->with('datospacientes',$datospacientes)->with('usuarios',$usuarios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\controlposparto  $controlposparto
     * @param  int idControlPosparto
     * @return \Illuminate\Http\Response
     */
    public function edit($idControlPosparto)
    {
        //
        $controlpospartos = controlposparto::select('idControlPosparto','NoControl','FCEvaluacionPosparto_id','idFCEvaluacionPosparto','SemanasDespuesParto','FechaVisita','InvolucionUterina','ExamenMamas','HeridaOperatiria','ExamenGInecológico','PresionArterial','MMHG','FrecuenciaCardiaca','Temperatura','LactanciaMaterna','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacuncacionTdapMadre','Medicamento','LactanciaMaternaExclusiva','PlanificacionFamiliarPosparto','AlimentacionMadreLactante','LactanciaMaternaVIH','MujerVIH','Usuario_id',)
        ->join('fcevaluacionpospartos', 'fcevaluacionpospartos.idFCEvaluacionPosparto', '=','controlpospartos.FCEvaluacionPosparto_id');


        $controlposparto = controlposparto::find($idControlPosparto);

        $fcevaluacionpospartos = fcevaluacionposparto::all()->where('Estado','Si');
        $datospacientes = datospersonalespaciente::all()->where('Stado','Si');
        $usuarios = User::all()->where('Estado','Si');

        return view ('controlpospartos.editar', compact('controlposparto','controlpospartos'))->with('fcevaluacionpospartos',$fcevaluacionpospartos)->with('datospacientes',$datospacientes)->with('usuarios',$usuarios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\controlposparto  $controlposparto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idControlPosparto)
    {
        //
        request()->validate([
            'NoControl' => 'required|NumeroRule',
            'FCEvaluacionPosparto_id' => 'required',
            'SemanasDespuesParto' => 'required|NumeroRule',
            'FechaVisita' => 'required',
            'InvolucionUterina' => 'required|TextoRule3',
            'ExamenMamas' => 'required|TextoRule3',
            'HeridaOperatiria' => 'required|TextoRule3',
            'ExamenGInecológico' => 'TextoRule4',
            'PresionArterial' => 'required|DecimalRule',
            'MMHG' => 'required|DecimalRule',
            'FrecuenciaCardiaca' => 'required|DecimalRule',
            'Temperatura' => 'required|DecimalRule',
            'LactanciaMaterna' => 'required|TextoRule1',
            'ProblemasDetectados' => 'required|TextoRule3',
            'SulfatoFerroso' => 'required|NumeroRule',
            'AcidoFolico' => 'required|NumeroRule',
            'VacuncacionTdapMadre' => 'required|NumeroRule',
            'Medicamento' => 'required|TextoRule3',
            'LactanciaMaternaExclusiva' => 'required|TextoRule3',
            'PlanificacionFamiliarPosparto' => 'required|TextoRule3',
            'AlimentacionMadreLactante' => 'required|TextoRule3',
            'LactanciaMaternaVIH' => 'required|TextoRule3',
            'MujerVIH' => 'required|TextoRule3',
            'Usuario_id',
            'Estado',
        ]);
        $input = $request->all();
        $controlposparto = controlposparto::find($idControlPosparto);
        $controlposparto->update($input);
        return redirect()->route('controlpospartos.index');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\controlposparto  $controlposparto
     * @param  int idControlPosparto
     * @return \Illuminate\Http\Response
     */
    public function destroy($idControlPosparto)
    {
        $controposparto = controlposparto::findOrFail($idControlPosparto);
        $controposparto->Estado='No';
        $controposparto->update();
        return redirect()->route('controlpospartos.index')->with('status');
    }
}
