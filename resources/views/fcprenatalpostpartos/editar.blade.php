@extends('layouts.app')
@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">EDITAR FICHA CLINICA PRENATAL Y/O POSPARTO</h3>
        </div>
        <div class="section-body">
        <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
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
                    {!! Form::model($fcprenatalpostparto, ['method' => 'PATCH', 'route'=> ['fcprenatalpostpartos.update', $fcprenatalpostparto->idFCPrenatalPostpartos ]]) !!}
                    <div class="card">
                        <div class="card-body">                            
                            <div class="row ">

                            {{--

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="" value="ExpedienteNo">No de expediente</label>

                                        <input class="form-control" list="filtroIDCasas" id="filtroIDCasa" name="ExpedienteNo" placeholder="ingrese el cui de la madre" autocomplete="off">                                        
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
                                        <label for="" value="DatosPersonalesPacientes_id">Datos de Madre (*)</label>

                                        <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="ingrese el cui de la madre" autocomplete="off" value="{{$fcprenatalpostparto->DatosPersonalesPacientes_id }}">                                        
                                        <datalist id="filtroIDPacientes" name="DatosPersonalesPacientes_id" value="{{$fcprenatalpostparto->DatosPersonalesPacientes_id }}">
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


                                @include('fcprenatalpostpartos.editar.signosysintomas')
                                @include('fcprenatalpostpartos.editar.obstretico')
                                @include('fcprenatalpostpartos.editar.medico')

                                     
                                </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-actualizar">Actualizar</button>
                        <a href="{{ route('fcprenatalpostpartos.index') }}" class="btn btn-danger mr-3">Cancelar</a>
                    </div>
                    @include('modal.actualizar')
                    {!! Form::close() !!}


                </div>
            </div>
        </div>

        
    </section>
    
@endsection