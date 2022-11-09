@extends('layouts.app')
@section('title')
    Crear datos del infante
@endsection

@section('content')
    <section class="section">
        
        <div class="section-header">
            <h6 class="page__heading">Vacunas infantes</h6>
        </div>
        <div class="section-body">
        <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">
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

                            {!! Form::open(array('route'=>'vacunainfantes.store', 'method'=>'POST')) !!}
                            <div class="row ">
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha (*)</label>
                                        {!! Form::date('FechaSuministro', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="" value="Vacunas_id">Datos de la vacuna (*)</label>
                                        <input class="form-control" list="filtroIdVacunas" id="filtroIdVacuna" name="Vacunas_id" placeholder="ingrese el nombre de la vacuna" autocomplete="off">                                        
                                        <datalist id="filtroIdVacunas" name="Vacunas_id">
                                            @foreach($vacunas as $vacuna)
                                                <option value="{{$vacuna->idVacunas}}"> {{$vacuna->NombreVacuna}} Fecha ingreso {{$vacuna->Fechaingreso}}</option>                                            
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="" value="Infante_id">Nombre del infante (*)</label>
                                        <input class="form-control" list="filtroIdInfantes" id="filtroIdInfante" name="Infante_id" placeholder="ingrese el nombre del infante" autocomplete="off">                                        
                                        <datalist id="filtroIdInfantes" name="Infante_id">
                                            @foreach($infantes as $infante)
                                                <option value="{{$infante->idInfantes}}"> {{$infante->Nombres}} {{$infante->Apellidos}}</option>                                            
                                            @endforeach
                                        </datalist>
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
                                
                            </div>
                            @include('modal.guardar')
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" id="guardarmodal" data-target="#modal-crear">Guardar</button>
                                    <a href="{{ route('vacunainfantes.index') }}" class="btn btn-danger mr-3">Volver</a>
                                </div>
                            {!! Form::close() !!}                    
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </section>
    
@endsection


