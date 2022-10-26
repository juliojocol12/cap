@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Pacientes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <a class="btn btn-warning" href="{{ route('pacientes.create') }}">Ingresar Paciente</a>

                            <div class="row">
                                <div class="col-xl-12">
                                    <form action="{{ route('pacientes.index') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-4 my-1">
                                                <input type="text" class="form-control" name="texto" autocomplete="off" value="{{$texto}}" placeholder="Ingrese el CUI para buscar">
                                            </div>
                                            <div class="col-sm-4 my-1">
                                                <input type="submit" class="btn btn-primary" value="Buscar">
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <table class="table table-striped table-bordered table-responsive mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="color:#fff;">Nombres</th>
                                    <th style="color:#fff;">Apellidos</th>
                                    <th style="color:#fff;">Fecha de Nacimiento</th>
                                    <th style="color:#fff;">CUI</th>
                                    <th style="color:#fff;">Profesión</th>
                                    <th style="color:#fff;">Domicilio</th>
                                    <th style="color:#fff;">Telefono</th>
                                    <th style="color:#fff;">Celular</th>
                                    <th style="color:#fff;">Estado Civil</th>
                                    <th style="color:#fff;">Peso</th>
                                    <th style="color:#fff;">Tipo Sanguineo</th>
                                    <th style="color:#fff;">Medicamentos</th>
                                    <th style="color:#fff;">Migrante</th>
                                    <th style="color:#fff;">Pueblo</th>
                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                            
                                
                                <tbody>
                                    @if(count($datospersonalespacientes)<=0)
                                        <tr>
                                            <td colspan="8">No hay resultados</td>
                                        </tr>
                                    @else
                                    @foreach($datospersonalespacientes as $paciente)
                                        <tr "table-active">
                                      
                                            <td>{{$paciente->NombresPaciente}}</td>
                                            <td>{{$paciente->ApellidosPaciente}}</td> 
                                            <td>{{$paciente->FechaNaciemientoPaciente}}</td> 
                                            <td>{{$paciente->CUI}}</td> 
                                            <td>{{$paciente->ProfesionOficio}}</td> 
                                            <td>{{$paciente->Domicilio}}</td> 
                                            <td>{{$paciente->Telefono}}</td> 
                                            <td>{{$paciente->Celular}}</td> 
                                            <td>{{$paciente->EstadoCivil}}</td> 
                                            <td>{{$paciente->Peso}}</td> 
                                            <td>{{$paciente->TipoSanguineo}}</td> 
                                            <td>{{$paciente->MedicamentosActualmente}}</td> 
                                            <td>{{$paciente->Migrante}}</td> 
                                            <td>{{$paciente->pueblos->Nombre}}</td>   
                                            <td>
                                                <a class="btn btn-info" href="{{ route('pacientes.edit', $paciente->idDatosPersonalesPacientes) }}">Editar</a>
                                                {!! Form::open(['method'=> 'DELETE', 'route'=> ['pacientes.destroy', $paciente->idDatosPersonalesPacientes], 'style'=>'display:inline' ]) !!}
                                                    <input type="submit" onclick="return confirm ('¿Desea eliminar la información de {{ $paciente->NombresPaciente }} {{ $paciente->ApellidosPaciente }}?')" class="btn btn-danger" value="Borrar">
                                                {!! Form::close() !!}
                                            </td>                                    
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>

                            </table>
                            
                            <div class="pagination justify-content-end">
                                {!! $datospersonalespacientes->links() !!}
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
