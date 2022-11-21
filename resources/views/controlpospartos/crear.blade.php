@extends('layouts.app')
@section('title')
Ingreso de control posparto
@endsection

@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">Ingreso de control posparto</h3>
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

                    {!! Form::open(array('route'=>'controlpospartos.store', 'method'=>'POST')) !!}
                        @include('controlpospartos.crear.control')
                        @include('controlpospartos.crear.clasificacion')
                        @include('controlpospartos.crear.conducta')
                        @include('controlpospartos.crear.consejeria')

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('controlpospartos.index') }}" class="btn btn-danger mr-3">Volver</a>
                        </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

        
    </section>
    
@endsection