@extends('layouts.app')
@section('title')
    Datos de 
@endsection


@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar datos de vacunación </h3>
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

                            {!! Form::model($vacunainfantes, ['method' => 'PATCH', 'route'=> ['vacunainfantes.update', $vacunainfantes->idVacunasInfantes ]]) !!}
                            <div class="row">

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

                                <div class="d-none">
                                    <div class="col-xs-12 col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <label for="" value="Tado">Estado</label>
                                            <input type="text" name="Tado" value="Si">
                                        </div>
                                    </div>
                                </div>  

                                
                                
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-actualizar">Actualizar</button>
                                    <a href="{{ route('vacunainfantes.index') }}" class="btn btn-danger mr-3">Volver</a>
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