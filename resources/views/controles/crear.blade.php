@extends('layouts.app')
@section('title')
    Ingresar nuevo control prenatal
@endsection

@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">Ingreso de Control Prenatal y/o Posparto</h3>
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
                    


                    

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <a href="{{ route('controles.index') }}" class="btn btn-danger mr-3">Volver</a>
                                </div>

                    {!! Form::close() !!}


                </div>
            </div>
        </div>

        
    </section>
    
@endsection