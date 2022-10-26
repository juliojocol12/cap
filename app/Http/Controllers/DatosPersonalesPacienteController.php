<?php

namespace App\Http\Controllers;

use App\Models\datospersonalespaciente;
use App\Models\pueblo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $datospacientefiltro = datospersonalespaciente::all()->where('CUI','LIKE','%'.$texto.'%');

        $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente','CUI','ProfesionOficio','Domicilio','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente','Migrante','pueblo_id')->where('CUI','LIKE','%'.$texto.'%')->orwhere('NombresPaciente','LIKE','%'.$texto.'%')->orwhere('ApellidosPaciente','LIKE','%'.$texto.'%')->paginate(10);
        return view('pacientes.index', compact('datospersonalespacientes','datospacientefiltro','texto'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pueblos = pueblo::select('idPueblo','Nombre')->get();
        return view ('pacientes.crear')->with('pueblos',$pueblos);
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
            'NombresPaciente' => 'required',
            'ApellidosPaciente' => 'required',
            'FechaNaciemientoPaciente' => 'required',
            'CUI' => 'required|Unique:datospersonalespacientes',
            'ProfesionOficio' => 'required',
            'Domicilio' => 'required',
            'Telefono',
            'Celular',
            'EstadoCivil' => 'required',
            'Peso' => 'required',
            'TipoSanguineo' => 'required',
            'MedicamentosActualmente',
            'Migrante',
            'pueblo_id'=> 'required',
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
        return view ('pacientes.read')-with('pacientes',$pacientes);
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
        //return view ('pacientes.editar')->with('paciente',$paciente)->with('pueblos',$pueblos);
        return view ('pacientes.editar', compact('paciente'))->with('pueblos',$pueblos);
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
        /*
        request()->validate([
            'NombresPaciente' => 'required',
            'ApellidosPaciente' => 'required',
            'FechaNaciemientoPaciente' => 'required',
            'CUI',
            'ProfesionOficio' => 'required',
            'Domicilio' => 'required',
            'Telefono',
            'Celular',
            'EstadoCivil' => 'required',
            'Peso' => 'required',
            'TipoSanguineo' => 'required',
            'MedicamentosActualmente',
            'Migrante',
            'pueblo_id'=> 'required',
        ]);

        $input = $request->all();
        $paciente = datospersonalespaciente::find($idDatosPersonalesPacientes);
        $paciente->update($input);
        return redirect()->route('pacientes.index');
*/
        $datos = $request->all();
        $paciente = datospersonalespaciente::find($idDatosPersonalesPacientes);
        $paciente->update($datos);
        return redirect()->route('pacientes.index');
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
