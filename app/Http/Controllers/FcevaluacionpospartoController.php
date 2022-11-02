<?php

namespace App\Http\Controllers;

use App\Models\fcevaluacionposparto;
use App\Models\datospersonalespaciente;
use App\Models\establecimientosaludo;
use App\Models\fcprenatalpostparto;
use App\Models\User;
use App\Models\personale;
use App\Models\Pueblo;
use App\Models\Infante;
use Illuminate\Http\Request;

class FcevaluacionpospartoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-fcevaluacionposparto | crear-fcevaluacionposparto | editar-fcevaluacionposparto | borrar-fcevaluacionposparto', ['only'=>['index']]);
        $this->middleware('permission:crear-fcevaluacionposparto', ['only'=>['create','store']]);
        $this->middleware('permission:editar-fcevaluacionposparto', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-fcevaluacionposparto', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $texto = trim($request->get('texto'));

        $fcevaluacionpospartos = fcevaluacionposparto::select('idFCEvaluacionPosparto','FCPrenatalPostparto_id','FechaEvaluacionPosparto','NombresPaciente','ApellidosPaciente','CUI','HemorragiaVaginal','DolordeCabeza','VisionBorrosa','Convulsion','DolorAbdominal','PresionArterialSignos','Fiebre','Coagulos','RegistroReferencia','NombreServicio','DiasDespuesParto','EstablecimientoSalud_id','Personal_idD',
        'HeridaOperatoria','InvolucionUterina','PresionArterial','FrecuenciaCardiaca','Temperatura',
        'ExamenMamas','ExamenGinecologico','LactanciaMaterna','PorqueNoLactanciaMaterna','Diagnostico',
        'ConductaTratamiento','Usuario_id','SulfatoFerroso','AcidoFolico','OtroMedicamento','Tdap','ConsejeriaPF_Posparto','ConsejeriaLactanciaAlimentacion','ConsejeriaLactanciaMujerVIH','ConsejeriaMujerVIH',)
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','fcevaluacionpospartos.DatosPersonalesPacientes_id')
        ->where('CUI','LIKE','%'.$texto.'%')
        ->paginate(10);
        return view('pospartos.index', compact('fcevaluacionpospartos','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datospacientes = datospersonalespaciente::all();
        $establecimientosaludos = establecimientosaludo::all();
        $fcprenatalpostpartos = fcprenatalpostparto::all();
        $usuarios = User::all();
        $personaless = personale::all()->where('Cargo','=','Doctor');
        $infantes = Infante::all();

        return view ('pospartos.crear')->with('establecimientosaludos',$establecimientosaludos)->with('datospacientes',$datospacientes)->with('fcprenatalpostpartos',$fcprenatalpostpartos)->with('usuarios',$usuarios)->with('personaless',$personaless)->with('infantes',$infantes);
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
            'FCPrenatalPostparto_id' => 'required',
            'FechaEvaluacionPosparto' => 'required',
            'DatosPersonalesPacientes_id' => 'required',
            'HemorragiaVaginal' => 'required',
            'DolordeCabeza' => 'required',
            'VisionBorrosa' => 'required',
            'Convulsion' => 'required',
            'DolorAbdominal' => 'required',
            'PresionArterialSignos' => 'required',
            'Fiebre' => 'required',
            'Coagulos' => 'required',
            'RegistroReferencia' => 'required|TextoRule3',
            'NombreServicio' => 'required|TextoRule1',
            'DiasDespuesParto' => 'required|NumeroRule',
            'EstablecimientoSalud_id' => 'required',
            'Infantes_id' => 'required',
            'Personal_idD' => 'required',
            'HeridaOperatoria' => 'required|TextoRule3',
            'InvolucionUterina' => 'required|TextoRule3',
            'PresionArterial' => 'required|TextoRule3',
            'FrecuenciaCardiaca' => 'required|TextoRule3',
            'Temperatura' => 'required|DecimalRule',
            'ExamenMamas' => 'required|TextoRule3',
            'ExamenGinecologico' => 'required|TextoRule3',
            'LactanciaMaterna' => 'required',
            'PorqueNoLactanciaMaterna' => 'TextoRule4',
            'Diagnostico' => 'required|TextoRule3',
            'ConductaTratamiento' => 'required|TextoRule3',
            'Usuario_id' => 'required',
            'SulfatoFerroso' => 'required',
            'AcidoFolico' => 'required',
            'OtroMedicamento' => 'required',
            'Tdap' => 'required',
            'ConsejeriaPF_Posparto' => 'required',
            'ConsejeriaLactanciaAlimentacion' => 'required',
            'ConsejeriaLactanciaMujerVIH' => 'required',
            'ConsejeriaMujerVIH' => 'required',
        ]);
        
        fcevaluacionposparto::create($request->all());

        return redirect()->route('pospartos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fcevaluacionposparto  $fcevaluacionposparto
     * @param  int idFCEvaluacionPosparto
     * @return \Illuminate\Http\Response
     */
    public function show($idFCEvaluacionPosparto)
    {
        //
        $fcevaluacionposparto = fcevaluacionposparto::find($idFCEvaluacionPosparto);

        $datospacientes = datospersonalespaciente::all();
        $establecimientosaludos = establecimientosaludo::all();        
        $fcprenatalpostpartos = fcprenatalpostparto::all();
        $usuarios = User::all();
        $pueblos = Pueblo::all();
        $personaless = personale::all()->where('Cargo','=','Doctor');
        $infantes = Infante::all();
        return view ('pospartos.show', compact('fcevaluacionposparto'))->with('establecimientosaludos',$establecimientosaludos)->with('datospacientes',$datospacientes)->with('fcprenatalpostpartos',$fcprenatalpostpartos)->with('usuarios',$usuarios)->with('personaless',$personaless)->with('pueblos',$pueblos)->with('infantes',$infantes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fcevaluacionposparto  $fcevaluacionposparto
     * @param  int idFCEvaluacionPosparto
     * @return \Illuminate\Http\Response
     */
    public function edit($idFCEvaluacionPosparto)
    {
        //
        $fcevaluacionposparto = fcevaluacionposparto::find($idFCEvaluacionPosparto);
        $datospacientes = datospersonalespaciente::all();
        $establecimientosaludos = establecimientosaludo::all();        
        $fcprenatalpostpartos = fcprenatalpostparto::all();
        $usuarios = User::all();
        $pueblos = Pueblo::all();
        $personaless = personale::all()->where('Cargo','=','Doctor');
        $infantes = Infante::all();
        return view ('pospartos.editar', compact('fcevaluacionposparto'))->with('establecimientosaludos',$establecimientosaludos)->with('datospacientes',$datospacientes)->with('fcprenatalpostpartos',$fcprenatalpostpartos)->with('usuarios',$usuarios)->with('personaless',$personaless)->with('pueblos',$pueblos)->with('infantes',$infantes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fcevaluacionposparto  $fcevaluacionposparto
     * @param  int idFCEvaluacionPosparto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idFCEvaluacionPosparto)
    {
        //
        request()->validate([
            'FCPrenatalPostparto_id' => 'required',
            'FechaEvaluacionPosparto' => 'required',
            'DatosPersonalesPacientes_id' => 'required',
            'HemorragiaVaginal' => 'required',
            'DolordeCabeza' => 'required',
            'VisionBorrosa' => 'required',
            'Convulsion' => 'required',
            'DolorAbdominal' => 'required',
            'PresionArterialSignos' => 'required',
            'Fiebre' => 'required',
            'Coagulos' => 'required',
            'RegistroReferencia' => 'required|TextoRule3',
            'NombreServicio' => 'required|TextoRule1',
            'DiasDespuesParto' => 'required|NumeroRule',
            'EstablecimientoSalud_id' => 'required',
            'Infantes_id' => 'required',
            'Personal_idD' => 'required',
            'HeridaOperatoria' => 'required|TextoRule3',
            'InvolucionUterina' => 'required|TextoRule3',
            'PresionArterial' => 'required|TextoRule3',
            'FrecuenciaCardiaca' => 'required|TextoRule3',
            'Temperatura' => 'required|DecimalRule',
            'ExamenMamas' => 'required|TextoRule3',
            'ExamenGinecologico' => 'required|TextoRule3',
            'LactanciaMaterna' => 'required',
            'PorqueNoLactanciaMaterna' => 'TextoRule4',
            'Diagnostico' => 'required|TextoRule3',
            'ConductaTratamiento' => 'required|TextoRule3',
            'Usuario_id' => 'required',
            'SulfatoFerroso' => 'required',
            'AcidoFolico' => 'required',
            'OtroMedicamento' => 'required',
            'Tdap' => 'required',
            'ConsejeriaPF_Posparto' => 'required',
            'ConsejeriaLactanciaAlimentacion' => 'required',
            'ConsejeriaLactanciaMujerVIH' => 'required',
            'ConsejeriaMujerVIH' => 'required',
        ]);
        $input = $request->all();
        $fcevaluacionposparto = fcevaluacionposparto::find($idFCEvaluacionPosparto);
        $fcevaluacionposparto->update($input);
        return redirect()->route('pospartos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fcevaluacionposparto  $fcevaluacionposparto
     * @param  int idFCEvaluacionPosparto
     * @return \Illuminate\Http\Response
     */
    public function destroy($idFCEvaluacionPosparto)
    {
        //
        fcevaluacionposparto::find($idFCEvaluacionPosparto)->delete();
        return redirect()->route('pospartos.index')->with('status');
    }
}
