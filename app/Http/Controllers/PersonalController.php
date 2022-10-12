<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-personal|crear-personal|editar-personal|borrar-personal')->only('index');
         $this->middleware('permission:crear-personal', ['only' => ['create','store']]);
         $this->middleware('permission:editar-personal', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-personal', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personales = Personal::paginate(10 );
         return view('personal.index',compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'Nombre' => 'required',
            'CUI' => 'required',
            'Telefono' => 'required',
            'Direccion' => 'required',
            'Cargo' => 'required',
            'FechaNacimiento' => 'required',
            'NivelAcademico' ,
            'CorreoElectronico' ,
            'Observaciones' ,
        ]);
    
        Personal::create($request->all());
    
        return redirect()->route('personal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Personal $personal
     * @return \Illuminate\Http\Response
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Personal $personal
     * @return \Illuminate\Http\Response
     */
    public function edit(Personal $personal)
    {
        return view('personal.editar',compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\Personal $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        request()->validate([
            'Nombre' => 'required',
            'CUI' => 'required',
            'Telefono' => 'required',
            'Direccion' => 'required',
            'Cargo' => 'required',
            'FechaNacimiento' => 'required',
            'NivelAcademico' ,
            'CorreoElectronico' ,
            'Observaciones' ,
        ]);
    
        $personal->update($request->all());
    
        return redirect()->route('personal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Personal $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personal $personal)
    {
        $personal->delete();
    
        return redirect()->route('personal.index');
    }
}