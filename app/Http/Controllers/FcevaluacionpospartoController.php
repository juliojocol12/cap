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
        $this->middleware('permission:ver-fcevaluacionposparto', ['only'=>['index']]);
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
        $cant_posparto = fcevaluacionposparto::count();
        if($cant_posparto === 0)
        {
            $texto = trim($request->get('texto'));
            $fcevaluacionpospartos = fcevaluacionposparto::select('idFCEvaluacionPosparto','FechaEvaluacionPosparto','Numerodireccion','NombresPaciente','ApellidosPaciente','CUI','HemorragiaVaginal','DolordeCabeza','VisionBorrosa','Convulsion','DolorAbdominal','PresionArterialSignos','Fiebre','Coagulos','RegistroReferencia','NombreServicio','DiasDespuesParto','EstablecimientoSalud_id','Medico',
            'HeridaOperatoria','InvolucionUterina','PresionArterial','FrecuenciaCardiaca','Temperatura',
            'ExamenMamas','ExamenGinecologico','LactanciaMaterna','PorqueNoLactanciaMaterna','Diagnostico',
            'ConductaTratamiento','SulfatoFerroso','AcidoFolico','OtroMedicamento','Tdap','ConsejeriaPF_Posparto','ConsejeriaLactanciaAlimentacion','ConsejeriaLactanciaMujerVIH','ConsejeriaMujerVIH','Estado','AtencionPsicologica','ObservacionAtencion','Seguimiento','ObservacionSeguimiento')
            ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','fcevaluacionpospartos.DatosPersonalesPacientes_id')
            ->where('CUI','LIKE','%'.$texto.'%')
            ->paginate(10);
            return view('pospartos.index', compact('fcevaluacionpospartos','texto'));
        }
        else{
            $texto = trim($request->get('texto'));
            $fcevaluacionpospartos = fcevaluacionposparto::select('idFCEvaluacionPosparto','FechaEvaluacionPosparto','Numerodireccion','NombresPaciente','ApellidosPaciente','CUI','HemorragiaVaginal','DolordeCabeza','VisionBorrosa','Convulsion','DolorAbdominal','PresionArterialSignos','Fiebre','Coagulos','RegistroReferencia','NombreServicio','DiasDespuesParto','EstablecimientoSalud_id','Medico',
            'HeridaOperatoria','InvolucionUterina','PresionArterial','FrecuenciaCardiaca','Temperatura',
            'ExamenMamas','ExamenGinecologico','LactanciaMaterna','PorqueNoLactanciaMaterna','Diagnostico',
            'ConductaTratamiento','SulfatoFerroso','AcidoFolico','OtroMedicamento','Tdap','ConsejeriaPF_Posparto','ConsejeriaLactanciaAlimentacion','ConsejeriaLactanciaMujerVIH','ConsejeriaMujerVIH','Estado','AtencionPsicologica','ObservacionAtencion','Seguimiento','ObservacionSeguimiento')
            ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','fcevaluacionpospartos.DatosPersonalesPacientes_id')
            ->where('CUI','LIKE','%'.$texto.'%')
            ->where('Estado','Si')
            ->paginate(10);
            return view('pospartos.index', compact('fcevaluacionpospartos','texto'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datospacientes = datospersonalespaciente::all()->where('Stado','Si');
        $establecimientosaludos = establecimientosaludo::all()->where('Estado','Si');
        $usuarios = User::all()->where('Estado','Si');
        $personaless = personale::all()->where('Cargo','=','Doctor')->where('Estado','Si');

        return view ('pospartos.crear')->with('establecimientosaludos',$establecimientosaludos)->with('datospacientes',$datospacientes)->with('usuarios',$usuarios)->with('personaless',$personaless);
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
            'Medico' => 'required',
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
			'Estado',
            'AtencionPsicologica' => 'required',
            'ObservacionAtencion' => 'TextoRule4',
            'Seguimiento' => 'required',
            'ObservacionSeguimiento' => 'TextoRule4',
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

        $datospacientes = datospersonalespaciente::all()->where('Estado','Si');
        $establecimientosaludos = establecimientosaludo::all()->where('Estado','Si');   
        $usuarios = User::all()->where('Estado','Si');
        $pueblos = Pueblo::all()->where('Estado','Si');
        $personaless = personale::all()->where('Cargo','=','Doctor')->where('Estado','Si');
        return view ('pospartos.show', compact('fcevaluacionposparto'))->with('establecimientosaludos',$establecimientosaludos)->with('datospacientes',$datospacientes)->with('usuarios',$usuarios)->with('personaless',$personaless)->with('pueblos',$pueblos);
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
        $datospacientes = datospersonalespaciente::all()->where('Estado','Si');
        $establecimientosaludos = establecimientosaludo::all()->where('Estado','Si');
        $usuarios = User::all()->where('Estado','Si');
        $pueblos = Pueblo::all()->where('Estado','Si');
        $personaless = personale::all()->where('Cargo','=','Doctor')->where('Estado','Si');
        return view ('pospartos.editar', compact('fcevaluacionposparto'))->with('establecimientosaludos',$establecimientosaludos)->with('datospacientes',$datospacientes)->with('usuarios',$usuarios)->with('personaless',$personaless)->with('pueblos',$pueblos);
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
            'Medico' => 'required',
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
			'Estado',
            'AtencionPsicologica' => 'required',
            'ObservacionAtencion' => 'TextoRule4',
            'Seguimiento' => 'required',
            'ObservacionSeguimiento' => 'TextoRule4',
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
        $posparto = fcevaluacionposparto::findOrFail($idFCEvaluacionPosparto);
        $posparto->Estado='No';
        $posparto->update();
        return redirect()->route('pospartos.index')->with('status');
    }
}
