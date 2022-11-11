@extends('layouts.app')
@section('title')
    Ingreso de personal
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ingreso de información de empleados</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body" onkeypress="return pulsar(event)">     
                                                                      
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif

                        {!! Form::open(array('route'=>'personal.store', 'method'=>'POST')) !!}
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
                                    <label for="name">Telefono</label>
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
                                    <input type="text" class="form-control" list="filtroIdPacientes" id="filtroIdPaciente" name="Cargo" placeholder="Ingrese el cargo" autocomplete="off">                                        
                                    <datalist id="filtroIdPacientes" name="Cargo">
                                        <option value="Doctor"> Doctor</option>       
                                        <option value="Enfermero"> Enfermero</option>      
                                    </datalist>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Fecha Nacimiento (*)</label>
                                    <input type="date" class="form-control" name="FechaNacimiento" id="FechaNacimiento" aria-describedby="helpId" placeholder="">
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

                                    <input class="form-control" list="filtroIdInfantes" id="filtroIdInfante" name="Usuario_id" placeholder="ingrese el nombre del usuario registrado " onkeypress="return tab(event)"autocomplete="off">                                        
                                    <datalist id="filtroIdInfantes" name="Usuario_id"">
                                        @foreach($usuarios as $usuario)
                                            <option value="{{$usuario->id}}"> {{$usuario->email}}</option>                                            
                                        @endforeach
                                    </datalist>                                    

                                </div>
                            </div>

                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-crear">Guardar</button>
                            <a href="{{ route('personal.index') }}" class="btn btn-danger mr-3">Volver</a>
                        </div>
                            
                        </div>
                        @include('modal.guardar')
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
