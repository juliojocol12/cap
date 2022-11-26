@extends('layouts.app')
@section('title')
    Ingresar vacuna
@endsection

@section('content')
    <section class="section">
        
        <div class="section-header">
            <h6 class="page__heading">Ingresar vacuna</h6>
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

                            {!! Form::open(array('route'=>'vacunas.store', 'method'=>'POST')) !!}
                            <div class="row ">

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="NombreVacuna">Nombre de la vacuna (*)</label>
                                        <select class="form-control" name="NombreVacuna" maxlength="45">
                                        <option value="Td">Td</option>
                                        <option value="TdAp">TdAp</option>
                                        <option value="Influenza">Influenza</option>
                                        <option value="Covid">Covid</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Tipo de vacuna (*)</label>
                                        {!! Form::text('TipoVacuna', null, array('class'=>'form-control', 'maxlength'=>'45','placeholder'=>'Ingrese el tipo de la vacuna','autocomplete'=>'off' )) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="" value="EstadoVacuna">Estado de la vacuna (*)</label>
                                        <input class="form-control" list="filtroIdVacunas" id="filtroIdVacuna" name="EstadoVacuna" placeholder="Ingrese el estado de la vacuna" maxlength="45" autocomplete="off">                                        
                                        <datalist id="filtroIdVacunas" name="EstadoVacuna">
                                            <option value="Bueno"> Bueno</option>       
                                            <option value="Malo"> Malo</option>      
                                        </datalist>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Fecha de ingreso (*)</label>
                                        {!! Form::date('Fechaingreso', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Fecha de vencimiento</label>
                                        {!! Form::date('FechaVencimiento', null, array('class'=>'form-control')) !!}
                                        
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Cantidad (*)</label>
                                        {!! Form::text('Cantidad', null, array('class'=>'form-control', 'maxlength'=>'5', 'placeholder'=>'Ingrese cantidad en números', 'autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="d-none">
                                    <div class="col-xs-12 col-sm-12 col-md-3">
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
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" id="guardarmodal" data-target="#modal-crear">Guardar</button>
                                    <a href="{{ route('vacunas.index') }}" class="btn btn-danger mr-3">Volver</a>
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


