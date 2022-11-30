<?php

namespace App\Http\Controllers;

use App\Models\establecimientosaludo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EstablecimientosaludoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-establecimientosaludo', ['only'=>['index']]);
         $this->middleware('permission:crear-establecimientosaludo', ['only' => ['create','store']]);
         $this->middleware('permission:editar-establecimientosaludo', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-establecimientosaludo', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cant_establecimiento = establecimientosaludo::count();
        if($cant_establecimiento === 0)
        {
            $establecimientosaludos = establecimientosaludo::paginate(10);
            return view('establecimientosaludo.index',compact('establecimientosaludos'));
        }
        else
        {
            $establecimientosaludos = establecimientosaludo::where('Estado','Si')->paginate(10);
            return view('establecimientosaludo.index',compact('establecimientosaludos'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('establecimientosaludo.crear');
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
            'Nombre' => 'required|TextoRule1|Unique:establecimientosaludos',
            'Direccion' => 'required',
            'Comunidad' => 'required|TextoRule1',
            'PuestoSalud' => 'required|TextoRule1',
            'Usuario_id',
			'Estado',
        ]);
    
        establecimientosaludo::create($request->all());
    
        return redirect()->route('establecimientosaludo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\establecimientosaludo  $establecimientosaludo
     * @return \Illuminate\Http\Response
     */
    public function show(establecimientosaludo $establecimientosaludo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\establecimientosaludo  $establecimientosaludo
     * @param  int  $idEstablecimientoSaludos
     * @return \Illuminate\Http\Response
     */
    public function edit($idEstablecimientoSaludos)
    {
        $establecimientosaludo = establecimientosaludo::find($idEstablecimientoSaludos);
        return view('establecimientosaludo.editar', compact('establecimientosaludo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idEstablecimientoSaludos
     * @param  \App\Models\establecimientosaludo  $establecimientosaludo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idEstablecimientoSaludos)
    {
        try {
            if ('CUI' === 'CUI') {
                $this->validate($request,[
                    'Nombre' => 'required|TextoRule1',
                    'Direccion' => 'required',
                    'Comunidad' => 'required|TextoRule1',
                    'PuestoSalud' => 'required|TextoRule1',
                    'Usuario_id',
			        'Estado',
                ]);
            }
        $input = $request->all();
        $establecimientosaludo = establecimientosaludo::find($idEstablecimientoSaludos);
        $establecimientosaludo->update($input);
        return redirect()->route('establecimientosaludo.index');

        } catch (\Throwable $th) {
            Log::debug($th -> getMessage());
            return $this->validate($request,[
                'Nombre' => 'required|TextoRule1|Unique:establecimientosaludos',
                'Direccion' => 'required',
                'Comunidad' => 'required|TextoRule1',
                'PuestoSalud' => 'required|TextoRule1',
                'Usuario_id',
			    'Estado',
            ]);
            $input = $request->all();
            $establecimientosaludo = establecimientosaludo::find($idEstablecimientoSaludos);
            $establecimientosaludo->update($input);
            return redirect()->route('establecimientosaludo.index');
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\establecimientosaludo  $establecimientosaludo
     * @param  int  $idEstablecimientoSaludos
     * @return \Illuminate\Http\Response
     */
    public function destroy($idEstablecimientoSaludos)
    {
        $establecimiento = establecimientosaludo::findOrFail($idEstablecimientoSaludos);
        $establecimiento->Estado='No';
        $establecimiento->update();
        return redirect()->route('establecimientosaludo.index')->with('status');
    }
}
