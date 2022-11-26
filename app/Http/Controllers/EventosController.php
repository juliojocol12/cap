<?php

namespace App\Http\Controllers;


use App\Models\Evento;
use App\Models\datospersonalespaciente;
use App\Models\establecimientosaludo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventosController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ver-fullcalendar', ['only'=>['index']]);
        $this->middleware('permission:crear-fullcalendar', ['only'=>['create','store']]);
        $this->middleware('permission:editar-fullcalendar', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-fullcalendar', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datospacientes = datospersonalespaciente::all();
        $establecimientosaludos = establecimientosaludo::all();
        return view("eventos.index")->with('establecimientosaludos',$establecimientosaludos)->with('datospacientes',$datospacientes);
        //$datospacientes = datospersonalespaciente::all()->where('Stado','Si');
        ///$establecimientosaludos = establecimientosaludo::all()->where('Estado','Si');
        //return view("eventos.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosEvento=request()->except(['_token','_method']);
        Evento::insert($datosEvento);
        print_r($datosEvento);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data['eventos']=Evento::all();
        return response()->json($data['eventos']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEvento=request()->except(['_token','_method']);
        $respuesta=Evento::where('id','=',$id)->update($datosEvento);
        return response()->json($respuesta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $eventos=Evento::findOrFail($id);
        Evento::destroy($id);
        return response()->json($id);
    }
}
