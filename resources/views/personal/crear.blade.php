@extends('layouts.app')
@section('title')
    Ingreso de personal
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ingreso de información de colaboradores</h3>
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
                                    {!! Form::text('Nombre', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Ingrese el nombre completo del colaborador','autocomplete'=>'off' ))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">DPI (*)</label>
                                    {!! Form::text('CUI', null, array('class'=>'form-control','maxlength'=>'13','minlength'=>'13', 'placeholder'=>'Ingrese el DPI en números y sin espacios','autocomplete'=>'off' )) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Celular</label>
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
                                    <input type="text" class="form-control" list="filtroIdPacientes" id="filtroIdPaciente" name="Cargo" placeholder="Ingrese el cargo" autocomplete="off">                                        
                                    <datalist id="filtroIdPacientes" name="Cargo">
                                        <option value="Doctor"> Doctor</option>       
                                        <option value="Enfermero"> Enfermero</option>      
                                    </datalist>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Fecha de nacimiento (*)</label>
                                    <input type="date" class="form-control" name="FechaNacimiento" id="FechaNacimiento" aria-describedby="helpId" placeholder="">
                                </div>
                            </div>
 
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for="name">Nivel académico</label>
                                    {!! Form::text('NivelAcademico', null, array('class'=>'form-control','minlength'=>'8', 'maxlength'=>'30', 'placeholder'=>'Ingrese el nivel académico alcanzado','autocomplete'=>'off')) !!}
                                </div>
                            </div>

                            <div class="d-none">	
                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="" value="Usuario_id">Encargado de llenado</label>
                                        <select id="Usuario_id" class="form-control" name="Usuario_id" maxlength="35">
                                            <option value="{{\Illuminate\Support\Facades\Auth::user()->id}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="d-none">
                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="" value="Estado">Estado</label>
                                        <input type="text" name="Estado" value="Si">
                                    </div>
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
