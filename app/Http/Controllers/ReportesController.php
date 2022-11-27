<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pueblo;
use App\Models\DatosFamiliare;
use App\Models\DatosPersonalesPaciente;
use PDF;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reportes.index');
    }

    //Mujeres embarazadas por rango edad
    public function r1()
    {
        return view('reportes.r1');
    }

    //Mujeres embarazadas por trimestre (primero, segundo o tercero)
    public function r2()
    {
        return view('reportes.r2');
    }

    //Mujeres embarazadas en alto riego
    public function r3()
    {
        return view('reportes.r3');
    }

    public function buscador4(Request $request){
        $texto1 = trim($request->get('texto'));
    }

    //Reporte general de mujeres embarazadas
    public function r4(Request $request)
    {
        $busqueda = trim($request->get('filtro'));
        $busquedaDPI = trim($request->get('filtroDPI'));
        $busquedaProfesion = trim($request->get('filtroProfesion'));
        $busquedaPueblo = trim($request->get('filtroPueblo'));
        $busquedaEstadoCivil = trim($request->get('filtroEstadoCivil'));
        $busquedaSangre = trim($request->get('filtroSangre'));
        $busquedaNombre = trim($request->get('filtroNombre'));
        $busquedaApellido = trim($request->get('filtroApellido'));

        $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
        'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
        'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente',
        'Migrante','Nombre')
        ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
        ->where('FechaNaciemientoPaciente','LIKE','%'.$busqueda.'%')
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('ProfesionOficio','LIKE','%'.$busquedaProfesion.'%')
        ->where('Nombre','LIKE','%'.$busquedaPueblo.'%')
        ->where('EstadoCivil','LIKE','%'.$busquedaEstadoCivil.'%')
        ->where('TipoSanguineo','LIKE','%'.$busquedaSangre.'%')
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->paginate(10);

        $totalpacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
        'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
        'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente',
        'Migrante','Nombre')
        ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
        ->where('FechaNaciemientoPaciente','LIKE','%'.$busqueda.'%')
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('ProfesionOficio','LIKE','%'.$busquedaProfesion.'%')
        ->where('Nombre','LIKE','%'.$busquedaPueblo.'%')
        ->where('EstadoCivil','LIKE','%'.$busquedaEstadoCivil.'%')
        ->where('TipoSanguineo','LIKE','%'.$busquedaSangre.'%')
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->count('idDatosPersonalesPacientes');

        $union = compact('datospersonalespacientes','busqueda','busquedaDPI','busquedaProfesion','busquedaPueblo','busquedaEstadoCivil','busquedaSangre','totalpacientes','busquedaNombre','busquedaApellido');
        return view('reportes.r4', $union );
    }

    public function pdf4(Request $request){
        $busqueda = trim($request->get('filtro'));
        $busquedaDPI = trim($request->get('filtroDPI'));
        $busquedaProfesion = trim($request->get('filtroProfesion'));        
        $busquedaPueblo = trim($request->get('filtroPueblo'));
        $busquedaEstadoCivil = trim($request->get('filtroEstadoCivil'));
        $busquedaSangre = trim($request->get('filtroSangre'));
        $busquedaNombre = trim($request->get('filtroNombre'));
        $busquedaApellido = trim($request->get('filtroApellido'));

        $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
        'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
        'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente',
        'Migrante','Nombre')
        ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
        ->where('FechaNaciemientoPaciente','LIKE','%'.$busqueda.'%')
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('ProfesionOficio','LIKE','%'.$busquedaProfesion.'%')
        ->where('Nombre','LIKE','%'.$busquedaPueblo.'%')
        ->where('EstadoCivil','LIKE','%'.$busquedaEstadoCivil.'%')
        ->where('TipoSanguineo','LIKE','%'.$busquedaSangre.'%')
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->paginate(10);

        $totalpacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
        'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
        'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente',
        'Migrante','Nombre')
        ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
        ->where('FechaNaciemientoPaciente','LIKE','%'.$busqueda.'%')
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('ProfesionOficio','LIKE','%'.$busquedaProfesion.'%')
        ->where('Nombre','LIKE','%'.$busquedaPueblo.'%')
        ->where('EstadoCivil','LIKE','%'.$busquedaEstadoCivil.'%')
        ->where('TipoSanguineo','LIKE','%'.$busquedaSangre.'%')
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->count('idDatosPersonalesPacientes');

        $union = compact('datospersonalespacientes','busqueda','busquedaDPI','busquedaProfesion','busquedaPueblo','busquedaEstadoCivil','busquedaSangre','totalpacientes','busquedaNombre','busquedaApellido');


        $pdf = PDF::loadView('reportes/pdf/pdf4', $union);
        return $pdf->stream('Reporte de pacientes.pdf');
        //return $pdf->download('Ficha_Clinia.pdf');
    }

    //Cantidad de mujeres en el periodo puerperio
    public function r5()
    {
        return view('reportes.r5');
    }

    //Cantidad de nacimientos por fechas
    public function r6()
    {
        return view('reportes.r6');
    }

    //Infantes atendidos menores a cinco años
    public function r7()
    {
        return view('reportes.r7');
    }

    //Infantes que concluyen con la etapa de vacunación
    public function r8()
    {
        return view('reportes.r8');
    }

    //Índice de muertes maternas
    public function r9()
    {
        return view('reportes.r9');
    }

    //Índice de abortos
    public function r10()
    {
        return view('reportes.r10');
    }

    //Alertas de ausencia de pacientes a citas 
    public function r11()
    {
        return view('reportes.r11');
    }

    //Alerta de insumos que se estén agotando y que se prontos a la fecha de caducidad.
    public function r12()
    {
        return view('reportes.r12');
    }

    //Inventario de insumos médicos
    public function r13()
    {
        return view('reportes.r13');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
    }
}
