<?php

namespace App\Http\Controllers;

use App\Models\fichamspasriego;
use App\Models\datospersonalespaciente;
use App\Models\fcprenatalpostparto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FichamspasriegoController extends Controller
{
    
    function __construct()
    {
        $this->middleware('permission:ver-fichamspasriego | crear-fichamspasriego | editar-fichamspasriego | borrar-fichamspasriego', ['only'=>['index']]);
        $this->middleware('permission:crear-fichamspasriego', ['only'=>['create','store']]);
        $this->middleware('permission:editar-fichamspasriego', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-fichamspasriego', ['only'=>['destroy']]);
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $texto = trim($request->get('texto'));

        $fichamspasriesgos = fichamspasriego::select('idFichamspasriegos','RegistroNo', 'FCPrenatalPostparto_id', 'DatosPersonalesPacientes_id','NombresPaciente','ApellidosPaciente','CUI','Numerodireccion','Muertefetal','Ancedentesaborto','Antecedentegestas','Pesocinco','Pesonueve','Antecedentehipertension','Cirugiasprevias','Diagnosticosospecha','Menosveinte','Mastreinta','Pacienterh','Hemorragia','VIH','Presionarterial','Anemiaclinica','Desnutricion','Dolorabdominal','Sintomatologia','Ictericia','Diabetes','Enfermedadrenal','Enfermerdadcorazon','Hipertension','Consumodrogas','Cualquierenfermedad','Especifiquefichamspasriegos','Refirio','Fecha','Nombre',)
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','fichamspasriegos.DatosPersonalesPacientes_id')
        ->where('CUI','LIKE','%'.$texto.'%')
        ->paginate(10);
        return view('fichamspasriesgos.index', compact('fichamspasriesgos','texto'));
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
        $fcprenatalpostparto = fcprenatalpostparto::all();
        return view ('fichamspasriesgos.crear')->with('fcprenatalpostparto',$fcprenatalpostparto)->with('datospacientes',$datospacientes);
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
            'RegistroNo',
            'DatosPersonalesPacientes_id' => 'required|NumeroRule',
            'FCPrenatalPostparto_id' => 'required|NumeroRule',
            'Muertefetal' => 'required|TextoRule4',
            'Ancedentesaborto' => 'required|TextoRule4',
            'Antecedentegestas' => 'required|TextoRule4',
            'Pesocinco' => 'required|TextoRule4',
            'Pesonueve' => 'required|TextoRule4',
            'Antecedentehipertension' => 'required|TextoRule4',
            'Cirugiasprevias' => 'required|TextoRule4',
            'Diagnosticosospecha' => 'required|TextoRule4',
            'Menosveinte' => 'required|TextoRule4',
            'Mastreinta' => 'required|TextoRule4',
            'Pacienterh' => 'required|TextoRule4',
            'Hemorragia'  => 'required|TextoRule4',
            'VIH' => 'required|TextoRule4',
            'Presionarterial' => 'required|TextoRule4',
            'Anemiaclinica' => 'required|TextoRule4',
            'Desnutricion' => 'required|TextoRule4',
            'Dolorabdominal' => 'required|TextoRule4',
            'Sintomatologia' => 'required|TextoRule4',
            'Ictericia' => 'required|TextoRule4',
            'Diabetes' => 'required|TextoRule4',
            'Enfermedadrenal' => 'required|TextoRule4',
            'Enfermerdadcorazon' => 'required|TextoRule4',
            'Hipertension' => 'required|TextoRule4',
            'Consumodrogas' => 'required|TextoRule4',
            'Cualquierenfermedad' => 'required|TextoRule4',
            'Especifiquefichamspasriegos' => 'TextoRule4',
            'Refirio' => 'TextoRule4',
            'Fecha',
            'Nombre' => 'TextoRule4',
           
        ]);
        
        fichamspasriego::create($request->all());

        return redirect()->route('fichamspasriesgos.index');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fichamspasriego  $fichamspasriego
     * @param  int  $idFichamspasriegos
     * @return \Illuminate\Http\Response
     */
    public function show($idFichamspasriegos)
    {
        //
        $fichamspasriego = fichamspasriego::find($idFichamspasriegos);

        $datospacientes = datospersonalespaciente::all();
        $fcprenatalpostparto = fcprenatalpostparto::all();
        return view ('fichamspasriesgos.show', compact('fichamspasriego'))->with('fcprenatalpostparto',$fcprenatalpostparto)->with('datospacientes',$datospacientes);
   

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fichamspasriego  $fichamspasriego
     * @param  int  $idFichamspasriegos
     * @return \Illuminate\Http\Response
     */
    public function edit($idFichamspasriegos)
    {
        //
        $fichamspasriego = fichamspasriego::find($idFichamspasriegos);

        $datospacientes = datospersonalespaciente::all();
        $fcprenatalpostparto = fcprenatalpostparto::all();
        return view ('fichamspasriesgos.editar', compact('fichamspasriego'))->with('fcprenatalpostparto',$fcprenatalpostparto)->with('datospacientes',$datospacientes);
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fichamspasriego  $fichamspasriego
     * @param  int  $idFichamspasriegos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idFichamspasriegos)
    {
        //
        request()->validate([
            'RegistroNo',
            'DatosPersonalesPacientes_id' => 'required|NumeroRule',
            'FCPrenatalPostparto_id' => 'required|NumeroRule',
            'Muertefetal' => 'required|TextoRule4',
            'Ancedentesaborto' => 'required|TextoRule4',
            'Antecedentegestas' => 'required|TextoRule4',
            'Pesocinco' => 'required|TextoRule4',
            'Pesonueve' => 'required|TextoRule4',
            'Antecedentehipertension' => 'required|TextoRule4',
            'Cirugiasprevias' => 'required|TextoRule4',
            'Diagnosticosospecha' => 'required|TextoRule4',
            'Menosveinte' => 'required|TextoRule4',
            'Mastreinta' => 'required|TextoRule4',
            'Pacienterh' => 'required|TextoRule4',
            'Hemorragia'  => 'required|TextoRule4',
            'VIH' => 'required|TextoRule4',
            'Presionarterial' => 'required|TextoRule4',
            'Anemiaclinica' => 'required|TextoRule4',
            'Desnutricion' => 'required|TextoRule4',
            'Dolorabdominal' => 'required|TextoRule4',
            'Sintomatologia' => 'required|TextoRule4',
            'Ictericia' => 'required|TextoRule4',
            'Diabetes' => 'required|TextoRule4',
            'Enfermedadrenal' => 'required|TextoRule4',
            'Enfermerdadcorazon' => 'required|TextoRule4',
            'Hipertension' => 'required|TextoRule4',
            'Consumodrogas' => 'required|TextoRule4',
            'Cualquierenfermedad' => 'required|TextoRule4',
            'Especifiquefichamspasriegos' => 'TextoRule4',
            'Refirio' => 'TextoRule4',
            'Fecha',
            'Nombre' => 'TextoRule4',
           
        ]);
        $input = $request->all();
        $fichamspasriego = fichamspasriego::find($idFichamspasriegos);
        $fichamspasriego->update($input);
        return redirect()->route('fichamspasriesgos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fichamspasriego  $fichamspasriego
     * @param  int  $idFichamspasriegos
     * @return \Illuminate\Http\Response
     */
    public function destroy( $idFichamspasriegos)
    {
        //
        fichamspasriego::find($idFichamspasriegos)->delete();
        return redirect()->route('fichamspasriesgos.index')->with('status');
    }
}
