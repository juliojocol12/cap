<?php

namespace App\Http\Controllers;

use App\Models\clasificacionposparto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClasificacionpospartoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-clasificacionposparto | crear-clasificacionposparto | editar-clasificacionposparto | borrar-clasificacionposparto', ['only'=>['index']]);
         $this->middleware('permission:crear-clasificacionposparto', ['only' => ['create','store']]);
         $this->middleware('permission:editar-clasificacionposparto', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-clasificacionposparto', ['only' => ['destroy']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clasificacionpospartos = clasificacionposparto::paginate(10);
        return view('clasificacionposparto.index',compact('clasificacionpospartos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clasificacionposparto.crear');
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
            'ProblemasDetectados' => 'required|max:100|TextoRule3',
        ]);
    
        clasificacionposparto::create($request->all());
    
        return redirect()->route('clasificacionposparto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clasificacionposparto  $clasificacionposparto
     * @return \Illuminate\Http\Response
     */
    public function show(clasificacionposparto $clasificacionposparto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clasificacionposparto  $clasificacionposparto
     * @param  int  $idClasificacionPospartos
     * @return \Illuminate\Http\Response
     */
    public function edit($idClasificacionPospartos)
    {
        $clasificacionposparto = clasificacionposparto::find($idClasificacionPospartos);
        return view('clasificacionposparto.editar', compact('clasificacionposparto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idClasificacionPospartos
     * @param  \App\Models\clasificacionposparto  $clasificacionposparto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idClasificacionPospartos)
    {
        request()->validate([
            'ProblemasDetectados' => 'required|max:100|TextoRule3',
        ]);
    
        $input = $request->all();
        $clasificacionposparto = clasificacionposparto::find($idClasificacionPospartos);
        $clasificacionposparto->update($input);
        return redirect()->route('clasificacionposparto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clasificacionposparto  $clasificacionposparto
     * @param  int  $idClasificacionPospartos
     * @return \Illuminate\Http\Response
     */
    public function destroy($idClasificacionPospartos)
    {
        clasificacionposparto::find($idClasificacionPospartos)->delete();
        return redirect()->route('clasificacionposparto.index');
    }
}
