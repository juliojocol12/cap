<?php

namespace App\Http\Controllers;

use App\Models\infante;
use App\Models\datospersonalespaciente;
use App\Models\datosfamiliare;
use Illuminate\Http\Request;

class InfanteController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-infante | crear-infante | editar-infante | borrar-infante', ['only'=>['index']]);
        $this->middleware('permission:crear-infante', ['only'=>['create','store']]);
        $this->middleware('permission:editar-infante', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-infante', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $infantes = infante::paginate(10);
        return view('infantes.index', compact('infantes'));

    }
        
        /*
        $datospacientes = datospersonalespaciente::all();
        $datosfamiliares = datosfamiliare::all();
        $infantes = infante::paginate(10);
        return view('infantes.index', compact('infantes'))->with('datospacientes',$datospacientes)->with('datosfamiliares',$datosfamiliares);/*
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $datospacientes = datospersonalespaciente::all();
        $datosfamiliares = datosfamiliare::all();
        
/*
        $texto = trim($request->get('texto'));
        $datospacientefiltro = datospersonalespaciente::all()->where('CUI','LIKE','%'.$texto.'%');
        $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','CUI')->where('CUI','LIKE','%'.$texto.'%')->paginate(10);
*/
        //return view ('infantes.crear', compact('datospersonalespacientes','datospacientefiltro','texto'))->with('datosfamiliares',$datosfamiliares);

        return view ('infantes.crear')->with('datosfamiliares',$datosfamiliares)->with('datospacientes',$datospacientes);
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
            'PesoLB' => 'required||DecimalRule',
            'PesoOnz' => 'required||DecimalRule',
            'Altura' => 'required||DecimalRule',
            'Observaciones',
            'FechaEgreso',
            'TipoSanguineo',
            'DatosPersonalesPacientes_id' => 'required',
            'idDatosFamiliares' => 'required',
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
        $datospacientes = datospersonalespaciente::all();
        $datosfamiliares = datosfamiliare::all();
        return view ('infantes.editar', compact('infant'))->with('datospacientes',$datospacientes)->with('datosfamiliares',$datosfamiliares);
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
            'PesoOnz' => 'required||DecimalRule',
            'Altura' => 'required||DecimalRule',
            'Observaciones',
            'FechaEgreso',
            'TipoSanguineo',
            'DatosPersonalesPacientes_id' => 'required',
            'idDatosFamiliares' => 'required',

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
        //
        infante::find($idInfantes)->delete();
        return redirect()->route('infantes.index')->with('status');
    }
}
