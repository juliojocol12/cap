@extends('layouts.app')
@section('title')
    Control prenatal
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Reportes</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">

                            <h3>Mujeres embarazadas</h3>
                        
                            <div align="right">
                                <a href="{{ route('reportes.index') }}" class="btn btn-success mr-3">Volver</a>
                                <a class="btn btn-danger mr-3" href="{{ route('datospersonalespacientes.pdf4') }}"><h8 style="color: white"><strong>Descargar: </strong></h8><i style="color: white" class="fa fa-download"></i></a>
                            </div>

                            <table class="table  table-striped mt-2 table-responsive">
                                <thead style="background-color: #6777ef;">
                                    <th style="color:#fff;">Nombres</th>
                                    <th style="color:#fff;">Apellidos</th>
                                    <th style="color:#fff;">Fecha nacimiento</th>
                                    <th style="color:#fff;">DPI</th>
                                    <th style="color:#fff;">Profesión</th>
                                    <th style="color:#fff;">Dirección</th>
                                    <th style="color:#fff;">Municipio</th>
                                    <th style="color:#fff;">Celular</th>
                                    <th style="color:#fff;">Pueblo</th>
                                    <th style="color:#fff;">Estado civil</th>
                                    <th style="color:#fff;">Peso</th>
                                    <th style="color:#fff;">Tipo sanguíneo</th>
                                    <th style="color:#fff;">Migrante</th>
                                </thead>

                                <tbody>
                                    @foreach($datospersonalespacientes as $paciente)
                                        <tr "table-active">
                                      
                                            <td>{{$paciente->NombresPaciente}}</td>
                                            <td>{{$paciente->ApellidosPaciente}}</td> 
                                            <td>{{$paciente->FechaNaciemientoPaciente}}</td> 
                                            <td>{{$paciente->CUI}}</td> 
                                            <td>{{$paciente->ProfesionOficio}}</td> 
                                            <td>{{$paciente->Descripciondireccion}}</td> 
                                            <td>{{$paciente->Municipiodep}}</td>                                    
                                            <td>{{$paciente->Celular}}</td>
                                            <td>{{$paciente->Nombre}}</td>
                                            <td>{{$paciente->EstadoCivil}}</td>
                                            <td>{{$paciente->Peso}}</td>
                                            <td>{{$paciente->TipoSanguineo}}</td>
                                            <td>{{$paciente->Migrante}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection