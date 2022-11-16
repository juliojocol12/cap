@extends('layouts.app')
@section('title')
Ingreso de ficha clinica Posparto
@endsection

@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">INGRESO DE FICHA CLINICA POST PARTO</h3>
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

                    {!! Form::open(array('route'=>'pospartos.store', 'method'=>'POST')) !!}
                        @include('pospartos.crear.datospaciente')

                        @include('pospartos.crear.signossintomas')

                        @include('pospartos.crear.refirio')

                        @include('pospartos.crear.primer')

                        @include('pospartos.crear.suplementacion')

                    

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-crear">Guardar</button>
                            <a href="{{ route('pospartos.index') }}" class="btn btn-danger mr-3">Volver</a>
                        </div>
                        @include('modal.guardar')
                    {!! Form::close() !!}


                </div>
            </div>
        </div>

        
    </section>
    
@endsection