<?php

namespace App\Http\Controllers;

use App\Models\datosfamiliare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DatosfamiliareController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-datosfamiliare', ['only'=>['index']]);
        $this->middleware('permission:crear-datosfamiliare', ['only'=>['create','store']]);
        $this->middleware('permission:editar-datosfamiliare', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-datosfamiliare', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datosfamiliares = datosfamiliare::paginate(10);
        return view('datosfamiliares.index', compact('datosfamiliares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('datosfamiliares.crear');
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
            'NombresFamiliar' => 'required|TextoRule1',
            'ApellidosFamiliar' => 'required|TextoRule1',
            'CUI' => 'required|Unique:datosfamiliares|NumeroRule',
            'EstadoCivil' => 'required|TextoRule1',
            'ProfesionOficio' => 'required|TextoRule1',
            'Domicilio' => 'required',
            'TelefonoFamiliar' => 'required|NumeroRule',
            'CelularFamiliar' => 'required|NumeroRule',
        ]);
        
        datosfamiliare::create($request->all());

        return redirect()->route('datosfamiliares.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datosfamiliare  $datosfamiliare
     * @param  int  $idDatosFamiliares
     * @return \Illuminate\Http\Response
     */
    public function show($idDatosFamiliares)
    {
        //
        $datosfamiliare = datosfamiliare::find($idDatosFamiliares);
        return view ('datosfamiliares.show', compact('datosfamiliare'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datosfamiliare  $datosfamiliare
     * @param  int  $idDatosFamiliares
     * @return \Illuminate\Http\Response
     */
    public function edit($idDatosFamiliares)
    {
        //
        $datosfamiliare = datosfamiliare::find($idDatosFamiliares);

        return view ('datosfamiliares.editar', compact('datosfamiliare'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\datosfamiliare  $datosfamiliare
     * @param  int  $idDatosFamiliares
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idDatosFamiliares)
    {
        try {
            if ('CUI' === 'CUI') {
        $this->validate($request,[
            'NombresFamiliar' => 'required|TextoRule1',
            'ApellidosFamiliar' => 'required|TextoRule1',
            'CUI' => 'required|NumeroRule',
            'EstadoCivil' => 'required|TextoRule1',
            'ProfesionOficio' => 'required|TextoRule1',
            'Domicilio' => 'required',
            'TelefonoFamiliar' => 'required|NumeroRule',
            'CelularFamiliar' => 'required|NumeroRule',
        ]);
    }
        $input = $request->all();
        $datosfamiliare = datosfamiliare::find($idDatosFamiliares);
        $datosfamiliare->update($input);
        return redirect()->route('datosfamiliares.index');

    } catch (\Throwable $th) {
        Log::debug($th -> getMessage());
       return $this->validate($request,[
            'NombresFamiliar' => 'required|TextoRule1',
            'ApellidosFamiliar' => 'required|TextoRule1',
            'CUI' => 'required|Unique:datosfamiliares|NumeroRule',
            'EstadoCivil' => 'required|TextoRule1',
            'ProfesionOficio' => 'required|TextoRule1',
            'Domicilio' => 'required',
            'TelefonoFamiliar' => 'required|NumeroRule',
            'CelularFamiliar' => 'required|NumeroRule',
        ]);
        $input = $request->all();
        $datosfamiliare = datosfamiliare::find($idDatosFamiliares);
        $datosfamiliare->update($input);
        return redirect()->route('datosfamiliares.index');
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datosfamiliare  $datosfamiliare
     * @return \Illuminate\Http\Response
     */
    public function destroy(datosfamiliare $datosfamiliare)
    {
        //
    }
}
