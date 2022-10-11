<?php

namespace App\Http\Controllers;

use App\Models\Infante;
use App\Models\DatosPersonalesPaciente;
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
        $datospersonalespacientes = DatosPersonalesPaciente::all();
        $infantes = Infante::paginate(10);
        return view('infantes.index', compact('infantes','datospersonalespacientes'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('infantes.crear');
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
        request()->validate([
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
     * @param  \App\Models\Infante  $infante
     * @return \Illuminate\Http\Response
     */
    public function show(Infante $infante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infante  $infante
     * @return \Illuminate\Http\Response
     */
    public function edit(Infante $infante)
    {
        //
        return view('infantes.editar', compact('infante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Infante  $infante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infante $infante)
    {
        //
        request()->validate([
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
            'DatosFamiliares_idDatosFamiliares' => 'required',
            'DatosFamiliares_idDatosFamiliares' => 'required'

        ]);
        $infante->update($request->all());
        return redirect()->route('infantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infante  $infante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infante $infante)
    {
        //
        $infante->delete();
        return redirect()->route('infantes.index');
    }
}
