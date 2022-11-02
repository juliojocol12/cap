<?php

namespace App\Http\Controllers;

use App\Models\datospersonalespaciente;
use App\Models\pueblo;
use App\Models\DatosFamiliare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DatospersonalespacienteController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-datospersonalespaciente | crear-datospersonalespaciente | editar-datospersonalespaciente | borrar-datospersonalespaciente', ['only'=>['index']]);
        $this->middleware('permission:crear-datospersonalespaciente', ['only'=>['create','store']]);
        $this->middleware('permission:editar-datospersonalespaciente', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-datospersonalespaciente', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));

        $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente','CUI','ProfesionOficio','Domicilio','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente','Migrante','Nombre')
        ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
        ->where('CUI','LIKE','%'.$texto.'%')->paginate(10);
        return view('pacientes.index', compact('datospersonalespacientes','texto'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pueblos = pueblo::select('idPueblo','Nombre')->get();
        $datosfamiliares = DatosFamiliare::all();
        return view ('pacientes.crear')->with('pueblos',$pueblos)->with('datosfamiliares',$datosfamiliares);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'NombresPaciente' => 'required|TextoRule1',
            'ApellidosPaciente' => 'required|TextoRule1',
            'FechaNaciemientoPaciente' => 'required',
            'CUI' => 'required|NumeroRule|Unique:datospersonalespacientes',
            'ProfesionOficio' => 'required|TextoRule1',
            'Domicilio' => 'required',
            'Telefono|NumeroRule',
            'Celular|NumeroRule',
            'EstadoCivil' => 'required|TextoRule1',
            'Peso' => 'required|DecimalRule',
            'TipoSanguineo' => 'required',
            'MedicamentosActualmente',
            'Migrante',
            'pueblo_id'=> 'required',
            'idDatosFamiliares',
            'Parentesco' => 'required|TextoRule1',
        ]);
        
        datospersonalespaciente::create($request->all());
        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datospersonalespaciente  $datospersonalespaciente
     * @return \Illuminate\Http\Response
     * @param  int  $idDatosPersonalesPacientes
     */
    public function show($idDatosPersonalesPacientes)
    {
        $pacientes = datospersonalespaciente::find($idDatosPersonalesPacientes);
        $pueblos = pueblo::select('idPueblo','Nombre')->get();
        $datosfamiliares = DatosFamiliare::all();
        return view ('pacientes.show', compact('pacientes'))->with('pueblos',$pueblos)->with('datosfamiliares',$datosfamiliares);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datospersonalespaciente  $datospersonalespaciente
     * @return \Illuminate\Http\Response
     * @param  int  $idDatosPersonalesPacientes
     */
    public function edit($idDatosPersonalesPacientes)
    {
        /*
        $paciente = datospersonalespaciente::find($datospersonalespaciente);
        return view ('pacientes.editar', compact('paciente'));
        */
        $paciente = datospersonalespaciente::find($idDatosPersonalesPacientes);
        $pueblos = pueblo::select('idPueblo','Nombre')->get();
        $datosfamiliares = DatosFamiliare::all();
        return view ('pacientes.editar', compact('paciente'))->with('pueblos',$pueblos)->with('datosfamiliares',$datosfamiliares);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\datospersonalespaciente  $datospersonalespaciente
     * @return \Illuminate\Http\Response
     * @param  int  $idDatosPersonalesPacientes
     */
    public function update(Request $request, $idDatosPersonalesPacientes)
    {
        
        try {
            if ('CUI' === 'CUI') {
                request()->validate([
                    'NombresPaciente' => 'required|TextoRule1',
                    'ApellidosPaciente' => 'required|TextoRule1',
                    'FechaNaciemientoPaciente' => 'required',
                    'CUI' => 'required|NumeroRule',
                    'ProfesionOficio' => 'required|TextoRule1',
                    'Domicilio' => 'required',
                    'Telefono|NumeroRule',
                    'Celular|NumeroRule',
                    'EstadoCivil' => 'required|TextoRule1',
                    'Peso' => 'required|DecimalRule',
                    'TipoSanguineo' => 'required',
                    'MedicamentosActualmente',
                    'Migrante',
                    'pueblo_id'=> 'required',                    
                    'idDatosFamiliares',
                    'Parentesco' => 'required|TextoRule1',
                ]);
            } 
            
            $datos = $request->all();
            $paciente = datospersonalespaciente::find($idDatosPersonalesPacientes);
            $paciente->update($datos);
            return redirect()->route('pacientes.index');

        } catch (\Throwable $th) {
            Log::debug($th -> getMessage());
            return request()->validate([
                'NombresPaciente' => 'required|TextoRule1',
                'ApellidosPaciente' => 'required|TextoRule1',
                'FechaNaciemientoPaciente' => 'required',
                'CUI' => 'required|NumeroRule|Unique:datospersonalespacientes',
                'ProfesionOficio' => 'required|TextoRule1',
                'Domicilio' => 'required',
                'Telefono|NumeroRule',
                'Celular|NumeroRule',
                'EstadoCivil' => 'required|TextoRule1',
                'Peso' => 'required|DecimalRule',
                'TipoSanguineo' => 'required',
                'MedicamentosActualmente',
                'Migrante',
                'pueblo_id'=> 'required',
                'idDatosFamiliares',
                'Parentesco' => 'required|TextoRule1',
            ]);
            $datos = $request->all();
            $paciente = datospersonalespaciente::find($idDatosPersonalesPacientes);
            $paciente->update($datos);
            return redirect()->route('pacientes.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datospersonalespaciente  $datospersonalespaciente
     * @return \Illuminate\Http\Response
     * @param  int  $idDatosPersonalesPacientes
     */
    public function destroy($idDatosPersonalesPacientes)
    {
        datospersonalespaciente::find($idDatosPersonalesPacientes)->delete();
        return redirect()->route('pacientes.index')->with('status');
    }
}
