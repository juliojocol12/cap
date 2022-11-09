<?php

namespace App\Http\Controllers;

use App\Models\vacuna;
use App\Models\User;
use App\Models\vacunainfante;
use Illuminate\Http\Request;

class VacunaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-vacuna', ['only'=>['index']]);
        $this->middleware('permission:ver-vacunas', ['only'=>['vacunas']]);
        $this->middleware('permission:crear-vacuna', ['only'=>['create','store']]);
        $this->middleware('permission:editar-vacuna', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-vacuna', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //*
        $texto = trim($request->get('texto'));
        $vacunas = vacuna::where('NombreVacuna','LIKE','%'.$texto.'%')->paginate(10);

        $restacovid = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','Covid')->count('vacunainfantes.Vacunas_id');
        $sumacovid = vacuna::where('NombreVacuna', 'Covid')->sum('Cantidad');

        $vacunascovid = $sumacovid - $restacovid;

        $restatd = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','Td')->count('vacunainfantes.Vacunas_id');        
        $sumatd = vacuna::where('NombreVacuna', 'Td')->sum('Cantidad');
        $vacunastd = $sumatd - $restatd;

        $restainfluenza = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','Influenza')->count('vacunainfantes.Vacunas_id');
        $sumainfluenza = vacuna::where('NombreVacuna', 'Influenza')->sum('Cantidad');
        $vacunainfluenza = $sumainfluenza - $restainfluenza;

        $restatdap = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','TdAp')->count('vacunainfantes.Vacunas_id');
        $sumatdap = vacuna::where('NombreVacuna', 'TdAp')->sum('Cantidad');
        $vacunastdap =  $sumatdap - $restatdap;

        return view('vacunas.index', compact('vacunas','texto','vacunastd','vacunascovid','vacunainfluenza','vacunastdap'));
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function vacunas()
    {
        $vacunassum = vacuna::where('NombreVacuna', 'Covid')->sum('Cantidad');
        $vacunastd = vacuna::where('NombreVacuna', 'Td')->sum('Cantidad');
        $vacunas = vacuna::paginate(10);
        return view('vacunas.vacunas', compact('vacunas','vacunassum','vacunastd'));
        
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('vacunas.crear');
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
            'NombreVacuna' => 'required|TextoRule3',
            'TipoVacuna' => 'required|TextoRule3',
            'EstadoVacuna' => 'required|TextoRule3',
            'Fechaingreso' => 'required',
            'FechaVencimiento' => 'required',
            'Cantidad' => 'required|NumeroRule',
            'Usuario_id',
        ]);
        
        vacuna::create($request->all());

        return redirect()->route('vacunas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vacuna  $vacuna
     * @param int $idVacunas
     * @return \Illuminate\Http\Response
     */
    public function show($idVacunas)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vacuna  $vacuna
     * @param int $idVacunas
     * @return \Illuminate\Http\Response
     */
    public function edit($idVacunas)
    {
        //
        $vacunas = vacuna::find($idVacunas);
        return view ('vacunas.editar', compact('vacunas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vacuna  $vacuna
     * @param int $idVacunas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idVacunas)
    {
        //
        request()->validate([
            'NombreVacuna' => 'required|TextoRule3',
            'TipoVacuna' => 'required|TextoRule3',
            'EstadoVacuna' => 'required|TextoRule3',
            'Fechaingreso' => 'required',
            'FechaVencimiento' => 'required',
            'Cantidad' => 'required|NumeroRule',
            'Usuario_id',
        ]);
        
        vacuna::create($request->all());

        return redirect()->route('vacunas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vacuna  $vacuna
     * @param int $idVacunas
     * @return \Illuminate\Http\Response
     */
    public function destroy($idVacunas)
    {
        //
        vacuna::find($idVacunas)->delete();
        return redirect()->route('vacunas.index')->with('status');
    }
}
