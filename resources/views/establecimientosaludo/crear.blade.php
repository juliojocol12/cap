@extends('layouts.app')
@section('title')
Ingreso de estableciemiento de salud
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ingreso de establecimiento de salud</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body"  onkeypress="return pulsar(event)">     
                                                                      
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

                        {!! Form::open(array('route'=>'establecimientosaludo.store', 'method'=>'POST')) !!}
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    {!! Form::text('Nombre', null, array('class'=>'form-control', 'placeholder'=>'Ingrese el nombre del establecimiento','maxlength'=>'45', 'autocomplete'=>'off'))!!}
                                </div>
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="name">Dirección</label>
                                    {!! Form::text('Direccion', null, array('class'=>'form-control', 'placeholder'=>'Ingrese la dirección del establecimiento', 'maxlength'=>'60', 'autocomplete'=>'off')) !!}
                                </div>
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="name">Comunidad</label>
                                    {!! Form::text('Comunidad', null, array('class'=>'form-control', 'placeholder'=>'Ingrese la comunidad del establecimiento','maxlength'=>'30', 'autocomplete'=>'off')) !!}
                                </div>
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="name">Puesto de salud</label>
                                    {!! Form::text('PuestoSalud', null, array('class'=>'form-control', 'placeholder'=>'Ingrese el puesto de salud', 'maxlength'=>'30', 'autocomplete'=>'off')) !!}
                                </div>
                            </div>
                        </div>
                            
                        <div class="row">
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

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-crear">Guardar</button>
                                <a href="{{ route('establecimientosaludo.index') }}" class="btn btn-danger mr-3">Volver</a>
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
