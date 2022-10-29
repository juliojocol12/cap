<?php

namespace App\Http\Controllers;

use App\Models\fcprenatalpostparto;
use Illuminate\Http\Request;

class FcprenatalpostpartoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-fcprenatalpostparto | crear-fcprenatalpostparto | editar-fcprenatalpostparto | borrar-fcprenatalpostparto', ['only'=>['index']]);
        $this->middleware('permission:crear-fcprenatalpostparto', ['only'=>['create','store']]);
        $this->middleware('permission:editar-fcprenatalpostparto', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-fcprenatalpostparto', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fcprenatalpostpartos = fcprenatalpostparto::paginate(10);
        return view('fcprenatalpostpartos.index', compact('fcprenatalpostpartos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('fcprenatalpostpartos.crear');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fcprenatalpostparto  $fcprenatalpostparto
     * @return \Illuminate\Http\Response
     */
    public function show(fcprenatalpostparto $fcprenatalpostparto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fcprenatalpostparto  $fcprenatalpostparto
     * @return \Illuminate\Http\Response
     */
    public function edit(fcprenatalpostparto $fcprenatalpostparto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fcprenatalpostparto  $fcprenatalpostparto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fcprenatalpostparto $fcprenatalpostparto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fcprenatalpostparto  $fcprenatalpostparto
     * @return \Illuminate\Http\Response
     */
    public function destroy(fcprenatalpostparto $fcprenatalpostparto)
    {
        //
    }
}
