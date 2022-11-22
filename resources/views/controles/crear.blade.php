@extends('layouts.app')
@section('title')
    Ingresar nuevo control prenatal
@endsection

@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">Ingreso de control prenatal y/o posparto</h3>
        </div>
        <div class="section-body">
        <div class="row row-responsive">
                <div class="col-lg-12 col-responsive" onkeypress="return pulsar(event)">
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
                            <a href="{{ route('controles.index') }}" class="btn btn-danger mr-3">Volver</a>
                            {!! Form::open(array('route'=>'controles.store', 'method'=>'POST')) !!}

                            @include('controles.crear.examenfisicoembarazada')
                            @include('controles.crear.signosysintomaspeligro')
                            @include('controles.crear.signosvitales')
                            @include('controles.crear.evaluacionnutricionalembarazada')
                            @include('controles.crear.examengeneral')
                            @include('controles.crear.examenobstetrico')
                            @include('controles.crear.examenginecologico')
                            @include('controles.crear.exameneslaboratorio')
                            @include('controles.crear.clasificacion')
                            @include('controles.crear.conducta')
                            @include('controles.crear.consejeria')
                    
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
                                <a href="{{ route('controles.index') }}" class="btn btn-danger mr-3">Volver</a>
                            </div>
                            @include('modal.guardar')
                    {!! Form::close() !!}


                </div>
            </div>
        </div>

        
    </section>
    
@endsection