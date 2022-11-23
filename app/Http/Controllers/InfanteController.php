<?php

namespace App\Http\Controllers;

use App\Models\infante;
use App\Models\datospersonalespaciente;
use App\Models\datosfamiliare;
use App\Models\vacunainfante;
use App\Models\vacuna;
use App\Models\establecimientosaludo;
use App\Models\personale;
use Illuminate\Http\Request;

class InfanteController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-infante', ['only'=>['index']]);
        $this->middleware('permission:crear-infante', ['only'=>['create','store']]);
        $this->middleware('permission:editar-infante', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-infante', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cant_infantes = infante::count();
        if($cant_infantes === 0)
        {
            $texto = trim($request->get('texto'));
            $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado','LugarNacimiento')
            ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
            ->where('CUI','LIKE','%'.$texto.'%')
            ->paginate(10);
            return view('infantes.index', compact('infantes','texto'));
        }
        else{
            $texto = trim($request->get('texto'));
            $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
            ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
            ->where('CUI','LIKE','%'.$texto.'%')
            ->where('Estado','Si')
            ->paginate(10);
            return view('infantes.index', compact('infantes','texto'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $datospacientes = datospersonalespaciente::all()->where('Stado','Si');
        $datosfamiliares = datosfamiliare::all()->where('Estado','Si');
        $personaless = personale::all()->where('Cargo','=','Doctor')->where('Estado','Si');
        $establecimientosaludos = establecimientosaludo::all()->where('Estado','Si');
        return view ('infantes.crear')->with('datosfamiliares',$datosfamiliares)->with('datospacientes',$datospacientes)->with('personaless',$personaless)->with('establecimientosaludos',$establecimientosaludos);
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
            'Nombres' => 'required|TextoRule1',
            'Apellidos' => 'required|TextoRule1',
            'Genero' => 'required|TextoRule1',
            'FechaNacimiento' => 'required',
            'HoraNaciemiento',
            'PesoLB' => 'required|DecimalRule',
            'Altura' => 'required|DecimalRule',
            'Observaciones',
            'FechaEgreso',
            'TipoSanguineo',
            'DatosPersonalesPacientes_id' => 'required',
            'idDatosFamiliares' => 'required',
            'Usuario_id',
            'Estado',
            'Personal_idD',
            'Establecimientoid',
            'LugarNacimiento'=> 'required|TextoRule3',
        ]);
        
        infante::create($request->all());

        return redirect()->route('infantes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\infante  $infant
     * 
     * @param  int  $idInfantes
     * @return \Illuminate\Http\Response
     */
    public function show($idInfantes)
    {
        //
        $infant = infante::find($idInfantes);

        $infantxx = infante::select('Nombre')
        ->join('personales', 'personales.idPersonal', '=','infantes.Personal_idD')
        ->find($idInfantes);

        $infantbc = infante::select('Nombre')
        ->join('establecimientosaludos', 'establecimientosaludos.idEstablecimientoSaludos', '=','infantes.Establecimientoid')
        ->find($idInfantes);


        $infantsss = infante::select('PesoLB')->find($idInfantes);

        $restacovid = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','Covid')->where('Infante_id',$idInfantes)->where('Tado','Si')->count('vacunainfantes.Vacunas_id');
        
        $restaTd = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','Td')->where('Infante_id',$idInfantes)->where('Tado','Si')->count('vacunainfantes.Vacunas_id');

        $restaInfluenza = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','Influenza')->where('Infante_id',$idInfantes)->where('Tado','Si')->count('vacunainfantes.Vacunas_id');

        $restaTdAp = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','TdAp')->where('Infante_id',$idInfantes)->where('Tado','Si')->count('vacunainfantes.Vacunas_id');

        $personaless = personale::all()->where('Cargo','=','Doctor')->where('Estado','Si');
        $establecimientosaludos = establecimientosaludo::all()->where('Estado','Si');
        $datospersonalespacientes = datospersonalespaciente::all()->where('Stado','Si');
        $datosfamiliares = datosfamiliare::all()->where('Estado','Si');
        return view ('infantes.show', compact('infant','infantsss','restacovid','restaTd','restaInfluenza','restaTdAp','infantxx','infantbc'))->with('datospersonalespacientes',$datospersonalespacientes)->with('datosfamiliares',$datosfamiliares)->with('personaless',$personaless)->with('establecimientosaludos',$establecimientosaludos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\infante  $infant
     * 
     * @param  int  $idInfantes
     * @return \Illuminate\Http\Response
     */
    public function edit($idInfantes)  
    {
        //
        $infant = infante::find($idInfantes);
        $datospacientes = datospersonalespaciente::all()->where('Stado','Si');
        $establecimientosaludos = establecimientosaludo::all()->where('Estado','Si');
        $datosfamiliares = datosfamiliare::all()->where('Estado','Si');
        $personaless = personale::all()->where('Cargo','=','Doctor')->where('Estado','Si');
        return view ('infantes.editar', compact('infant'))->with('datospacientes',$datospacientes)->with('datosfamiliares',$datosfamiliares)->with('personaless',$personaless)->with('establecimientosaludos',$establecimientosaludos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
    
     * @param  int  $idInfantes
     * @param  \App\Models\infante  $infant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idInfantes)
    {
        // 
        request()->validate([
            'Nombres' => 'required|TextoRule1',
            'Apellidos' => 'required|TextoRule1',
            'Genero' => 'required|TextoRule1',
            'FechaNacimiento' => 'required',
            'HoraNaciemiento',
            'PesoLB' => 'required||DecimalRule',
            'Altura' => 'required||DecimalRule',
            'Observaciones',
            'FechaEgreso',
            'TipoSanguineo',
            'DatosPersonalesPacientes_id' => 'required',
            'idDatosFamiliares' => 'required',
            'Usuario_id',
            'Estado',
            'Personal_idD',
            'Establecimientoid',
            'LugarNacimiento'=> 'required|TextoRule3',

        ]);
        $input = $request->all();
        $infant = infante::find($idInfantes);
        $infant->update($input);
        return redirect()->route('infantes.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $idInfantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($idInfantes)
    {
        $infantes = infante::findOrFail($idInfantes);
        $infantes->Estado='No';
        $infantes->update();
        return redirect()->route('infantes.index')->with('status');
    }
}
