@extends('layouts.app')
@section('title')
    Abortos
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ingreso de abortos</h3>
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

                        {!! Form::open(array('route'=>'abortos.store', 'method'=>'POST')) !!}
                        <div class="row">                            
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="" value="DatosPersonalesPacientes_id">Datos de madre (*)</label>
                                    <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="ingrese el cui de la madre" autocomplete="off">                                        
                                    <datalist id="filtroIDPacientes" name="DatosPersonalesPacientes_id">
                                        @foreach($datospacientes as $idpaciente)
                                            <option value="{{$idpaciente->idDatosPersonalesPacientes}}"> {{$idpaciente->CUI}}, {{$idpaciente->NombresPaciente}} {{$idpaciente->ApellidosPaciente}} </option>
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-1 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="Antecedente">¿Tuvo aborto? (*)</label>
                                    <select class="form-control" name="Antecedente">
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="">¿Qué fecha fue? (*)</label>
                                    {!! Form::date('FechaAborto', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="form-group" responsive>
                                    <label for="">Describa (*)</label>
                                    <div class="form-outline w-100 mb-4">
                                        <textarea class="form-control" id="Descripcion" placeholder="Describa como fue" name="Descripcion" style="height:150px; width: 100%; " maxlength="250"></textarea>
                                    </div>  
                                </div>                                       
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-crear">Guardar</button>
                            <a href="{{ route('abortos.index') }}" class="btn btn-danger mr-3">Volver</a>
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
