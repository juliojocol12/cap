<?php

namespace App\Http\Controllers;

use App\Models\personale;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonaleController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-personal | crear-personal | editar-personal | borrar-personal', ['only'=>['index']]);
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
        $personales = personale::paginate(10);
        return view('personal.index',compact('personales'));
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
        $this->validate($request,[
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
    
        personale::create($request->all());
    
        return redirect()->route('personal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\personale  $personale
     * @return \Illuminate\Http\Response
     */
    public function show(personale $personale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\personale  $personale
     * @param  int  $idPersonal
     * @return \Illuminate\Http\Response
     */
    public function edit($idPersonal)
    {
        $personal = personale::find($idPersonal);
        return view('personal.editar', compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idPersonal
     * @param  \App\Models\personale  $personale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPersonal)
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
    
        $input = $request->all();
        $personal = personale::find($idPersonal);
        $personal->update($input);
        return redirect()->route('personal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\personale  $personale
     * @param  int  $idPersonal
     * @return \Illuminate\Http\Response
     */
    public function destroy(personale $personale)
    {
        personale::find($idPersonal)->delete();
        return redirect()->route('personal.index');
    }
}
