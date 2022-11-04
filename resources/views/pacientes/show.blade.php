@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h4 class="page__heading">Datos de {{$pacientes->NombresPaciente}} {{$pacientes->ApellidosPaciente}} </h4>
        </div>
        <div class="section-body">
            <div class="row">
                {{-- Validacion para ingreso de campos --}}
                    @if($errors->any())
                    <div class="alert alert-dark alert-dismissible fade show" role="alert">
                        <strong>¡Revise los campos!</strong>
                        @foreach ($errors->all() as $error)
                            <span classs="badge badge-danger">{{$error}}</span>
                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="col-lg-3.5 ">
                    <div class="card">
                        <div class="card-body table-responsive">
                            
                                    <table class="table table-striped table-bordered table-responsive " >
                                        <h4 class="page__heading">Datos de personales</h4>
                                        <tbody >
                                            <tr>
                                                <th scope="row" ">Nombres</th>
                                                <td>{{$pacientes->NombresPaciente}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Apellidos</th>
                                                <td>{{$pacientes->ApellidosPaciente}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Fecha de nacimiento</th>
                                                <td data-order="DD/MM/YYYY">{{$pacientes->FechaNaciemientoPaciente}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">DPI</th>
                                                <td>{{$pacientes->CUI}}</td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <th scope="row" ">Estado civil</th>
                                                <td>{{$pacientes->EstadoCivil}}</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                    
                                    <h4 class="page__heading">Datos de contacto</h4>
                                    <table class="table table-striped table-bordered table-responsive " >
                                        <tbody >   
                                            <tr>
                                                <th scope="row" ">Descripcion direccion</th>
                                                <td>{{$pacientes->Descripciondireccion}}</td>
                                            </tr>

                                            <tr>
                                                <th scope="row" ">Grupo direccion</th>
                                                <td>{{$pacientes->Grupodireccion}}</td>
                                            </tr>

                                            <tr>
                                                <th scope="row" ">Número de casa</th>
                                                <td>{{$pacientes->Numerodireccion}}</td>
                                            </tr>

                                            <tr>
                                                <th scope="row" ">Zona</th>
                                                <td>{{$pacientes->Zonadireccion}}</td>
                                            </tr>

                                            <tr>
                                                <th scope="row" ">Lugar</th>
                                                <td>{{$pacientes->Municipiodep}}</td>
                                            </tr>

                                            <tr>
                                                <th scope="row" ">Telefono</th>
                                                <td>{{$pacientes->Telefono}}</td>
                                                
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Celular</th>
                                                <td>{{$pacientes->Celular}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Profesion</th>
                                                <td>{{$pacientes->ProfesionOficio}}</td>
                                            </tr>
                                            
                                            <tr>
                                                <th scope="row" ">Nombre de familiar</th>
                                                <td>{{$pacientes->datosfamiliares->NombresFamiliar}} {{$pacientes->datosfamiliares->ApellidosFamiliar}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Parentesco</th>
                                                <td>{{$pacientes->Parentesco}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h4 class="page__heading">Otros datos</h4>
                                    <table class="table table-striped table-bordered table-responsive " >
                                        <tbody >
                                            
                                            <tr>
                                                <th scope="row" ">Peso</th>
                                                <td>{{$pacientes->Peso}} Libras</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Tipo de sangre</th>
                                                <td>{{$pacientes->TipoSanguineo}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Medicamentos en uso</th>
                                                <td>{{$pacientes->MedicamentosActualmente}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Migrante</th>
                                                <td>{{$pacientes->Migrante}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Pueblo</th>
                                                <td>{{$pacientes->pueblos->Nombre}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                        </div>
                    </div>   
                    <div class="card">
                        
                    </div> 
                </div>


                
                <div class="col-lg-3.5 ">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <a href="{{ route('pacientes.index') }}" class="btn btn-success mr-3">Volver</a>
                            <a href="{{ route('pacientes.edit', $pacientes->idDatosPersonalesPacientes) }}" class="btn btn-info mr-3">Editar</a>
                            <a href="{{ route('fcprenatalpostpartos.create') }}" class="btn btn-primary mr-3">Ingresar ficha clinica</a>
                            <a href="{{ route('fcprenatalpostpartos.index') }}" class="btn btn-primary mr-3">Ver ficha clinica</a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </section>
@endsection