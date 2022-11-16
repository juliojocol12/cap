@extends('layouts.app')
@section('title')
    Crear datos del infante
@endsection

@section('content')
    <section class="section">
        
        <div class="section-header">
            <h6 class="page__heading">Ingreso de infantes</h6>
        </div>
        <div class="section-body">
        <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body"  onkeypress="return pulsar(event)">
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

                            {!! Form::open(array('route'=>'infantes.store', 'method'=>'POST')) !!}
                            <div class="row ">
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombres (*)</label>
                                        {!! Form::text('Nombres', null, array('class'=>'form-control', 'maxlength'=>'45','placeholder'=>'Ingrese los nombres del infante','autocomplete'=>'off' )) !!}
                                    </div>
                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Apellidos (*)</label>
                                        {!! Form::text('Apellidos', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Ingrese los apellidos del infante', 'autocomplete'=>'off')) !!}
                                    </div>
                                </div>


                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Genero">Género (*)</label>
                                        <select class="form-control" name="Genero" maxlength="45">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de Nacimiento (*)</label>
                                        {!! Form::date('FechaNacimiento', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Hora de Naciemiento</label>
                                        {!! Form::time('HoraNaciemiento', null, array('class'=>'form-control')) !!}
                                        
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Peso en Libras (*)</label>
                                        {!! Form::text('PesoLB', null, array('class'=>'form-control', 'maxlength'=>'7', 'placeholder'=>'Peso en libras', 'autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Peso en Onzas (*)</label>
                                        {!! Form::text('PesoOnz', null, array('class'=>'form-control', 'maxlength'=>'7', 'placeholder'=>'Peso en onzas', 'autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Altura (*)</label>
                                        {!! Form::text('Altura', null, array('class'=>'form-control','maxlength'=>'7', 'placeholder'=>'Altura en cm', 'autocomplete'=>'off' )) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Observaciones</label> <br> 
                                        
                                        <div class="form-outline w-100 mb-4">
                                            <textarea class="form-control" id="Observaciones" name="Observaciones" style="height:90px; width: 100%; " maxlength="45" placeholder="Observaciones durante el nacimiento"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de Egreso</label>
                                        {!! Form::date('FechaEgreso', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-1">
                                    <div class="form-group">
                                        <label for="">Tipo de Sangre</label>
                                        <select class="form-control" name="TipoSanguineo">
                                        <option value="N/A">N/A</option>
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

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="" value="DatosPersonalesPacientes_id">Datos de Madre (*)</label>

                                        <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="ingrese el cui de la madre" autocomplete="off">                                        
                                        <datalist id="filtroIDPacientes" name="DatosPersonalesPacientes_id">
                                            @foreach($datospacientes as $idpaciente)
                                            <option value="{{$idpaciente->idDatosPersonalesPacientes}}"> {{$idpaciente->CUI}}, {{$idpaciente->NombresPaciente}} {{$idpaciente->ApellidosPaciente}} </option>
                                            
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>
                                

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="" value="idDatosFamiliares">Datos de un Familiar (*)</label>
                                        <input class="form-control" list="filtroCUIFamiliares" id="filtroCUIFamiliar" name="idDatosFamiliares" placeholder="ingrese el cui del familiar" autocomplete="off">

                                        <datalist id="filtroCUIFamiliares" name="idDatosFamiliares">
                                            @foreach($datosfamiliares as $cuifamiliar)
                                            <option value="{{$cuifamiliar->idDatosFamiliares}}"> {{$cuifamiliar->CUI}}, {{$cuifamiliar->NombresFamiliar}} {{$cuifamiliar->ApellidosFamiliar}} </option>
                                            
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Parentesco (*)</label>
                                        {!! Form::text('Parentesco', null, array('class'=>'form-control', 'maxlength'=>'20', 'placeholder'=>'Parentesco', 'autocomplete'=>'off')) !!}
                                    </div>
                                </div>


                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" id="guardarmodal" data-target="#modal-crear">Guardar</button>
                                    <a href="{{ route('infantes.index') }}" class="btn btn-danger mr-3">Volver</a>
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


