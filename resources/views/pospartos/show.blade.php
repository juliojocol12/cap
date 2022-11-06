@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Datos del expediente No. {{$fcevaluacionposparto->datospersonalespacientes->Numerodireccion}} </h3>
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

                    <a href="{{ route('pospartos.index') }}" class="btn btn-success mr-3">Volver</a>
                    <a class="btn btn-info mr-3" href="{{ route('pospartos.edit', $fcevaluacionposparto->idFCEvaluacionPosparto) }}">Editar</a>
                    
                                      

                    @include('pospartos.show.datospospartos')
                    @include('pospartos.show.datospaciente')
                    @include('pospartos.show.signossintomas')
                    @include('pospartos.show.refirio')
                    @include('pospartos.show.primer')
                    @include('pospartos.show.suplementacion')

                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </section>
@endsection