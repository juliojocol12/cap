@extends('layouts.app')
@section('title')
    Crear datos para ficha clinica prenatal
@endsection

@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">Ingreso de ficha clínica prenatal</h3>
        </div>
        <div class="section-body">
        <div class="row row-responsive">
                <div class="col-lg-12 col-responsive"  onkeypress="return pulsar(event)">
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
                            <a href="{{ route('fcprenatalpostpartos.index') }}" class="btn btn-danger mr-3">Cancelar</a>
                            {!! Form::open(array('route'=>'fcprenatalpostpartos.store', 'method'=>'POST')) !!}
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="row ">

                                {{--

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="" value="ExpedienteNo">Número de expediente</label>

                                        <input class="form-control" list="filtroIDCasas" id="filtroIDCasa" name="ExpedienteNo" placeholder="Ingrese el DPI de la madre" autocomplete="off">                                        
                                        <datalist id="filtroIDCasas" name="ExpedienteNo">
                                            @foreach($datospacientes as $idpaciente)
                                            <option value="{{$idpaciente->Numerodireccion}}"> {{$idpaciente->CUI}}, {{$idpaciente->NombresPaciente}} {{$idpaciente->ApellidosPaciente}} </option>
                                            
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>

                                --}}

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="" value="DatosPersonalesPacientes_id">Datos de la paciente (*)</label>

                                        <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="Ingrese el DPI de la paciente" autocomplete="off">                                        
                                        <datalist id="filtroIDPacientes" name="DatosPersonalesPacientes_id">
                                            @foreach($datospacientes as $idpaciente)
                                            <option value="{{$idpaciente->idDatosPersonalesPacientes}}"> {{$idpaciente->CUI}}, {{$idpaciente->NombresPaciente}} {{$idpaciente->ApellidosPaciente}} </option>
                                            
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha (*)</label>
                                        {!! Form::date('Fecha', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>                                

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="" value="EstablecimientoSalud_id">Establecimiento (*)</label>
                                        <select class="form-control" name="EstablecimientoSalud_id">
                                            @foreach($establecimientosaludos as $establecimiento)
                                            <option value="{{$establecimiento->idEstablecimientoSaludos}}" >{{ $establecimiento->Nombre}}, {{ $establecimiento->PuestoSalud}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>                                
                                
                            </div>
                                                
                        </div>
                    </div>

                    
                    @include('fcprenatalpostpartos.crear.signosysintomas')
                    @include('fcprenatalpostpartos.crear.obstretico')
                    @include('fcprenatalpostpartos.crear.medico')

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
                    

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-crear">Guardar</button>
                        <a href="{{ route('fcprenatalpostpartos.index') }}" class="btn btn-danger mr-3">Volver</a>
                    </div>
                    @include('modal.guardar')
                    {!! Form::close() !!}


                </div>
            </div>
        </div>

        
    </section>
    
@endsection