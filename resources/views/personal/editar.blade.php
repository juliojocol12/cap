@extends('layouts.app')
@section('title')
    Editar datos de {{$personal->Nombre }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Personal</h3>
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
                                    <label for="name">Nombres y Apellidos (*)</label>
                                    {!! Form::text('Nombre', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Ingrese el nombre completo','autocomplete'=>'off' ))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">DPI (*)</label>
                                    {!! Form::text('CUI', null, array('class'=>'form-control','maxlength'=>'15','minlength'=>'13', 'maxlength'=>'14', 'placeholder'=>'Ingrese el DPI con números','autocomplete'=>'off' )) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Celular</label>
                                    {!! Form::text('Celular', null, array('class'=>'form-control','minlength'=>'8', 'maxlength'=>'8', 'placeholder'=>'Ingrese números','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Telefono (*)</label>
                                    {!! Form::text('Telefono', null, array('class'=>'form-control','minlength'=>'8', 'maxlength'=>'8', 'placeholder'=>'Ingrese números','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Direccion (*)</label>
                                    {!! Form::text('Direccion', null, array('class'=>'form-control','minlength'=>'8', 'maxlength'=>'45', 'placeholder'=>'Ingrese la dirección','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="" value="Cargo">Cargo (*)</label>
                                    <input class="form-control" list="filtroIdPacientes" id="filtroIdPaciente" name="Cargo" value="{{$personal->Cargo}}">
                                    <datalist id="filtroIdPacientes" name="Cargo" value="{{$personal->Cargo}}" {{$personal->Cargo}}>
                                    
                                        <option value="Doctor"> Doctor</option>       
                                        <option value="Enfermero"> Enfermero</option>      
                                    </datalist>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Fecha Nacimiento (*)</label>
                                    {!! Form::date('FechaNacimiento', null, array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Nivel Academico</label>
                                    {!! Form::text('NivelAcademico', null, array('class'=>'form-control','minlength'=>'8', 'maxlength'=>'30', 'placeholder'=>'Ingrese el nivel academico','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="" value="Usuario_id">Email de usuario</label>

                                    <input class="form-control" list="filtroIdInfantes" id="filtroIdInfante" name="Usuario_id" placeholder="ingrese el nombre del usuario registrado " onkeypress="return tab(event)" value="{{$personal->usuarios->name}}" autocomplete="off">                                        
                                    <datalist id="filtroIdInfantes" name="Usuario_id"">
                                        @foreach($usuarios as $usuario)
                                            <option value="{{$usuario->id}}"> {{$usuario->email}}</option>                                            
                                        @endforeach
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