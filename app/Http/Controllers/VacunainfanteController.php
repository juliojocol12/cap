<?php

namespace App\Http\Controllers;

use App\Models\vacunainfante;
use App\Models\vacuna;
use App\Models\Infante;
use Illuminate\Http\Request;

class VacunainfanteController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-vacunainfante', ['only'=>['index']]);
        $this->middleware('permission:crear-vacunainfante', ['only'=>['create','store']]);
        $this->middleware('permission:editar-vacunainfante', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-vacunainfante', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cant_vacunainfante = vacunainfante::count();
        if($cant_vacunainfante === 0)
        {
            $texto = trim($request->get('texto'));
            $vacunainfantes = vacunainfante::select('idVacunasInfantes','FechaSuministro','Vacunas_id','NombreVacuna','Nombres','Apellidos','Tado')
            ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
            ->join('infantes', 'infantes.idInfantes', '=','vacunainfantes.Infante_id')
            ->where('NombreVacuna','LIKE','%'.$texto.'%')
            ->paginate(10);
            return view('vacunainfantes.index', compact('vacunainfantes','texto'));     
        }
        else{
            $texto = trim($request->get('texto'));
            $vacunainfantes = vacunainfante::select('idVacunasInfantes','FechaSuministro','Vacunas_id','NombreVacuna','Nombres','Apellidos','Tado')
            ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
            ->join('infantes', 'infantes.idInfantes', '=','vacunainfantes.Infante_id')
            ->where('NombreVacuna','LIKE','%'.$texto.'%')
            ->where('Tado','Si')
            ->paginate(10);
            return view('vacunainfantes.index', compact('vacunainfantes','texto'));   
        }   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vacunas = vacuna::all()->where('Estado','Si');
        $infantes = Infante::all()->where('Estado','Si');
        return view ('vacunainfantes.crear')->with('vacunas',$vacunas)->with('infantes',$infantes);
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
            'FechaSuministro' => 'required',
            'Vacunas_id' => 'required',
            'Infante_id' => 'required',
            'Usuario_id' => 'required',
            'Tado' => 'required',
        ]);        
        vacunainfante::create($request->all());

        return redirect()->route('vacunainfantes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vacunainfante  $vacunainfante
     * @param int $idVacunasInfantes
     * @return \Illuminate\Http\Response
     */
    public function show($idVacunasInfantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vacunainfante  $vacunainfante
     * @param int $idVacunasInfantes
     * @return \Illuminate\Http\Response
     */
    public function edit($idVacunasInfantes)
    {
        $vacunainfantes = vacunainfante::find($idVacunasInfantes);
        $vacunas = vacuna::all()->where('Estado','Si');
        $infantes = Infante::all()->where('Estado','Si');
        return view ('vacunainfantes.editar', compact('vacunainfantes'))->with('vacunas',$vacunas)->with('infantes',$infantes);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $idVacunasInfantes
     * @param  \App\Models\vacunainfante  $vacunainfante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idVacunasInfantes)
    {
        request()->validate([
            'FechaSuministro' => 'required',
            'Vacunas_id' => 'required',
            'Infante_id' => 'required',
            'Usuario_id' => 'required',
            'Tado' => 'required',
        ]);
        
        vacunainfante::create($request->all());

        return redirect()->route('vacunainfantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vacunainfante  $vacunainfante
     * @param int $idVacunasInfantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($idVacunasInfantes)
    {
        $vacunainfante = vacunainfante::findOrFail($idVacunasInfantes);
        $vacunainfante->Tado='No';
        $vacunainfante->update();
        return redirect()->route('vacunainfantes.index')->with('status');
    }
}
