<?php

namespace App\Http\Controllers;

use App\Models\Aborto;
use App\Models\datospersonalespaciente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbortoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-Aborto', ['only'=>['index']]);
         $this->middleware('permission:crear-Aborto', ['only' => ['create','store']]);
         $this->middleware('permission:editar-Aborto', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-Aborto', ['only' => ['destroy']]);
    }  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $cant_aborto = Aborto::count();
        if($cant_aborto === 0)
        {
        $texto = trim($request->get('texto'));
        $abortos = Aborto::select('idAbortos','DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto', 'NombresPaciente','ApellidosPaciente','CUI','Usuario_id','Estado')
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','abortos.DatosPersonalesPacientes_id')           
        ->where('CUI','LIKE','%'.$texto.'%')
        ->paginate(10);
        return view('abortos.index', compact('abortos','texto'));
        }
        else{
            $texto = trim($request->get('texto'));
        $abortos = Aborto::select('idAbortos','DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto', 'NombresPaciente','ApellidosPaciente','CUI','Usuario_id','Estado')
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','abortos.DatosPersonalesPacientes_id')           
        ->where('CUI','LIKE','%'.$texto.'%')
        ->where('Estado','Si')
        ->paginate(10);
        return view('abortos.index', compact('abortos','texto'));
        }
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
        return view ('abortos.crear')->with('datospacientes',$datospacientes);
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
            'DatosPersonalesPacientes_id' => 'required|NumeroRule', 
            'Antecedente' => 'required',
            'Descripcion' => 'required|TextoRule3', 
            'FechaAborto' => 'required',
            'Usuario_id',
            'Estado',
            
        ]);
        
        Aborto::create($request->all());

        return redirect()->route('abortos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aborto  $aborto
     * @return \Illuminate\Http\Response
     */
    public function show(Aborto $aborto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aborto  $aborto
     * @param int $idAbortos
     * @return \Illuminate\Http\Response
     */
    public function edit($idAbortos)
    {
        $aborto = Aborto::find($idAbortos);
        $datospacientes = datospersonalespaciente::all();
        return view ('abortos.editar', compact('aborto'))->with('datospacientes',$datospacientes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aborto  $aborto
     * @param int $idAbortos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idAbortos)
    {
        request()->validate([
            'DatosPersonalesPacientes_id' => 'required|NumeroRule', 
            'Antecedente' => 'required',
            'Descripcion' => 'required|TextoRule3', 
            'FechaAborto' => 'required',
            'Usuario_id',
            'Estado',
        ]);
        $input = $request->all();
        $aborto = Aborto::find($idAbortos);
        $aborto->update($input);
        return redirect()->route('abortos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aborto  $aborto
     * @param int $idAbortos
     * @return \Illuminate\Http\Response
     */
    public function destroy($idAbortos)
    {
        $abortos = Aborto::findOrFail($idAbortos);
        $abortos->Estado='No';
        $abortos->update();
        return redirect()->route('abortos.index')->with('status');
    }
}
