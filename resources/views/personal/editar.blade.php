@extends('layouts.app')
@section('title')
    Editar datos de {{$personal->Nombre }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar datos de {{$personal->Nombre }}</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body" onkeypress="return pulsar(event)">

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

                            {!! Form::model($personal, ['method' => 'PATCH', 'route'=> ['personal.update', $personal->idPersonal]]) !!}
                            <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Nombres y apellidos (*)</label>
                                    {!! Form::text('Nombre', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Ingrese el nombre completo del colaborador','autocomplete'=>'off' ))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">DPI (*)</label>
                                    {!! Form::text('CUI', null, array('class'=>'form-control','maxlength'=>'13','minlength'=>'13', 'placeholder'=>'Ingrese el CUI en números y sin espacios','autocomplete'=>'off' )) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Celular (*)</label>
                                    {!! Form::text('Celular', null, array('class'=>'form-control','minlength'=>'8', 'maxlength'=>'8', 'placeholder'=>'Ingrese número de celular','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Teléfono (*)</label>
                                    {!! Form::text('Telefono', null, array('class'=>'form-control','minlength'=>'8', 'maxlength'=>'8', 'placeholder'=>'Ingrese número de teléfono','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Dirección (*)</label>
                                    {!! Form::text('Direccion', null, array('class'=>'form-control','minlength'=>'8', 'maxlength'=>'45', 'placeholder'=>'Ingrese la dirección del colaborador','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="" value="Cargo">Cargo que desempeña en el CAP (*)</label>
                                    <input class="form-control" list="filtroIdPacientes" id="filtroIdPaciente" name="Cargo" value="{{$personal->Cargo}}">
                                    <datalist id="filtroIdPacientes" name="Cargo" value="{{$personal->Cargo}}" {{$personal->Cargo}}>
                                    
                                        <option value="Doctor"> Doctor</option>       
                                        <option value="Enfermero"> Enfermero</option>  
                                        <option value="EPS"> EPS </option> 
                                        <option value="Auxiliar de enfermería"> Auxiliar de enfermería</option>    
                                    </datalist>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <div class="form-group">
                                    <label for="name">Fecha de nacimiento (*)</label>
                                    {!! Form::date('FechaNacimiento', null, array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-1 col-sm-6 col-md-2">
                                <div class="form-group">
                                    <label for="">Tipo de sangre (*)</label>
                                    <select class="form-control" name="TipoSanguineo">
                                    <option select">{{$personal->TipoSanguineo}}</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Estado civil (*)</label>
                                    {!! Form::text('EstadoCivil', null, array('class'=>'form-control','minlength'=>'5', 'maxlength'=>'45', 'placeholder'=>'Ingrese la dirección del colaborador','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="" value="NivelAcademico">Nivel académico (*)</label>
                                    <input type="text" class="form-control" list="filtroNiveles" id="filtroNivele" name="NivelAcademico" placeholder="Ingrese el nivel académico alcanzado" autocomplete="off" value="{{$personal->NivelAcademico}}">                                        
                                    <datalist id="filtroNiveles" name="NivelAcademico">
                                        <option value="Universitario">Universitario</option>       
                                        <option value="Licenciatura"> Licenciatura</option>
                                        <option value="Posgrado"> Posgrado</option>    
                                    </datalist>
                                </div>
                            </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-actualizar">Actualizar</button>
                                <a href="{{ route('personal.index') }}" class="btn btn-danger mr-3">Volver</a>
                            </div>
                            @include('modal.actualizar')
                            {!! Form::close() !!}                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 