@extends('layouts.app')
@section('title')
    Datos de {{$pacientes->NombresPaciente}} {{$pacientes->ApellidosPaciente}}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h4 class="page__heading">Información de {{$pacientes->NombresPaciente}} {{$pacientes->ApellidosPaciente}} </h4>
        </div>
        <div class="section-body">
        <a href="{{ route('pacientes.index') }}" class="btn btn-success mr-3">Volver</a>
                <a href="{{ route('pacientes.edit', $pacientes->idDatosPersonalesPacientes) }}" class="btn btn-info mr-3">Editar</a>
                <a href="{{ route('fcprenatalpostpartos.create') }}" class="btn btn-primary mr-3">Ingresar ficha clínica</a>
                <a href="{{ route('fcprenatalpostpartos.index') }}" class="btn btn-primary mr-3">Ver ficha clínica</a> 
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
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="page__heading">Datos personales</h4>
                            <div class="row ">                                

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for=""><b>Nombre </b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->NombresPaciente}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for=""><b>Apellidos</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->ApellidosPaciente}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for=""><b>Fecha de nacimiento</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ date('d-m-Y', strtotime($pacientes->FechaNaciemientoPaciente))}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for=""><b>DPI</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->CUI}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for=""><b>Estado civil</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->EstadoCivil}}" disabled>
                                    </div>
                                </div>
                                
                            </div>
                        </div>                        
                    </div>
                </div>

                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="page__heading">Datos de contacto</h4>
                            <div class="row ">                                

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for=""><b>Comunidad</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->Descripciondireccion}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for=""><b>Sector</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->Grupodireccion}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for=""><b>Número de casa</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->Numerodireccion}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for=""><b>Zona</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->Zonadireccion}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for=""><b>Municipio y departamento</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->Municipiodep}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for=""><b>Teléfono</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->Telefono}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for=""><b>Celular</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->Celular}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for=""><b>Profesión u oficio</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->ProfesionOficio}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for=""><b>Nombre de familiar</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->datosfamiliares->ApellidosFamiliar}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for=""><b>Parentesco</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->Parentesco}}" disabled>
                                    </div>
                                </div>
                                
                            </div>
                        </div>                        
                    </div>
                </div>

                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="page__heading">Otros datos</h4>
                            <div class="row ">                                

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for=""><b>Peso</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->Peso}} Libras" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for=""><b>Tipo de sangre</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->TipoSanguineo}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for=""><b>Historial de medicamentos</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->MedicamentosActualmente}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for=""><b>Migrante</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->Migrante}}" disabled>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for=""><b>Pueblo</b> </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$pacientes->pueblos->Nombre}}" disabled>
                                    </div>
                                </div>
                                
                            </div>
                        </div>                        
                    </div>
                </div>

                <a href="{{ route('pacientes.index') }}" class="btn btn-success mr-3">Volver</a>
                <a href="{{ route('pacientes.edit', $pacientes->idDatosPersonalesPacientes) }}" class="btn btn-info mr-3">Editar</a>
                <a href="{{ route('fcprenatalpostpartos.create') }}" class="btn btn-primary mr-3">Ingresar ficha clínica</a>
                <a href="{{ route('fcprenatalpostpartos.index') }}" class="btn btn-primary mr-3">Ver ficha clínica</a> 
                        
            </div>
            <div class="row">
                
            </div>
        </div>
    </section>
@endsection