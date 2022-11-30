<?php

namespace App\Http\Controllers;

use App\Models\Muertematerna;
use App\Models\datospersonalespaciente;
use App\Models\personale;
use App\Models\establecimientosaludo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MuertematernaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cant_muertematerna = Muertematerna::count();
        if($cant_muertematerna === 0)
        {
        $texto = trim($request->get('texto'));
        $muertematernas = Muertematerna::select('DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaMuerte','Estado','Personal_idD','EstablecimientoSalud_id','NombresPaciente','ApellidosPaciente','CUI',)
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','muertematernas.idMuerteMaterna')           
        ->where('CUI','LIKE','%'.$texto.'%')
        ->paginate(10);
        return view('muertematerna.index', compact('muertematernas','texto'));
        }
        else{
            $texto = trim($request->get('texto'));
        $muertematernas = Muertematerna::select('DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaMuerte','muertematernas.Estado','Personal_idD','EstablecimientoSalud_id','NombresPaciente','ApellidosPaciente','CUI',)
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','muertematernas.idMuerteMaterna')           
        ->where('CUI','LIKE','%'.$texto.'%')
        ->where('muertematernas.Estado','Si')
        ->paginate(10);
        return view('muertematerna.index', compact('muertematernas','texto'));
        }
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datospacientes = datospersonalespaciente::all();
        $establecimientosaludos = establecimientosaludo::all()->where('Estado','Si');
        $personaless = personale::all()->where('Cargo','=','Doctor')->where('Estado','Si');
        return view ('muertematerna.crear')->with('datospacientes',$datospacientes)->with('personaless',$personaless)->with('establecimientosaludos',$establecimientosaludos);

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
            'DatosPersonalesPacientes_id', 
            'Antecedente',
            'Descripcion', 
            'FechaMuerte',
            'Usuario_id', 
            'Estado',
            'Personal_idD',
            'EstablecimientoSalud_id'            
        ]);        
        Muertematerna::create($request->all());
        return redirect()->route('muertematerna.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Muertematerna  $muertematerna
     * @param int $idMuerteMaterna
     * @return \Illuminate\Http\Response
     */
    public function show(Muertematerna $muertematerna)
    {
        $muertematernas = Muertematerna::find($idMuerteMaterna);
        $datospacientes = datospersonalespaciente::all()->where('Stado','Si');
        $establecimientosaludos = establecimientosaludo::all()->where('Estado','Si');
        return view ('muertematerna.show', compact('muertematernas'))->with('datospacientes',$datospacientes)->with('establecimientosaludos',$establecimientosaludos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Muertematerna  $muertematerna
     * @param int $idMuerteMaterna
     * @return \Illuminate\Http\Response
     */
    public function edit(Muertematerna $muertematerna)
    {
        $muertematernas = Muertematerna::find($idMuerteMaterna);
        $datospacientes = datospersonalespaciente::all();
        $establecimientosaludos = establecimientosaludo::all()->where('Estado','Si');
        return view ('muertematerna.show', compact('muertematernas'))->with('datospacientes',$datospacientes)->with('establecimientosaludos',$establecimientosaludos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Muertematerna  $muertematerna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Muertematerna $muertematerna)
    {
        request()->validate([
            'DatosPersonalesPacientes_id' => 'required|NumeroRule', 
            'Antecedente' => 'required',
            'Descripcion' => 'required|TextoRule3', 
            'FechaAborto' => 'required',
            'Usuario_id',
            'Estado',
            'Personal_idD',
        ]);
        $input = $request->all();
        $muertematernas = Muertematerna::find($idMuerteMaterna);
        $Muertematerna->update($input);
        return redirect()->route('muertematerna.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Muertematerna  $muertematerna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Muertematerna $muertematerna)
    {
        //
    }
}
