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
        $infantes = Infante::paginate(10);
        return view('infantes.index', compact('infantes'));
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
        $datosfamiliares = datosfamiliare::all();

        //$datospacientes  = DatosPersonalesPaciente::pluck('NombresPaciente', 'idDatosPersonalesPacientes')->all();
        //$datosfamiliares  = DatosFamiliare::pluck('NombresFamiliar', 'idDatosFamiliares')->all();

        return view ('infantes.crear')->with('datospacientes',$datospacientes)->with('datosfamiliares',$datosfamiliares);
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
            'Nombres' => 'required',
            'Apellidos' => 'required',
            'Genero' => 'required',
            'FechaNacimiento' => 'required',
            'HoraNaciemiento',
            'PesoLB' => 'required',
            'PesoOnz' => 'required',
            'Altura' => 'required',
            'Observaciones',
            'FechaEgreso',
            'TipoSanguineo',
            'DatosPersonalesPacientes_id' => 'required',
            'DatosFamiliares_id' => 'required',
        ]);
        
        Infante::create($request->all());

        return redirect()->route('infantes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\infante  $infante
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
     * @param  \App\Models\infante  $infante
     * @param  int  $idInfantes
     * @return \Illuminate\Http\Response
     */
    public function edit($idInfantes)
    {
        //
        $infante = Infante::find($idInfantes);

        return view ('infantes.editar', compact('infante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idInfantes
     * @param  \App\Models\infante  $infante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idInfantes)
    {
        //
        request()->validate([
            'Nombres',
            'Apellidos',
            'Genero' ,
            'FechaNacimiento',
            'HoraNaciemiento',
            'PesoLB' => 'required',
            'PesoOnz' => 'required',
            'Altura' => 'required',
            'Observaciones',
            'FechaEgreso',
            'TipoSanguineo',
            'DatosPersonalesPacientes_id',
            'DatosFamiliares_id' => 'required'

        ]);
        $input = $request->all();
        $infante = Infante::find($idInfantes);
        $infante->update($input);
        return redirect()->route('infantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\infante  $infante
     * @return \Illuminate\Http\Response
     * @param  int  $idInfantes
     */
    public function destroy(infante $infante)
    {
        //
        Infante::find($idInfantes)->delete();
        return redirect()->route('infantes.index');
    }
}
