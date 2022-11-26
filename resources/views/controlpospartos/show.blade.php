@extends('layouts.app')

@section('title')
Datos el control de la paciente No.
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Datos el control de la paciente {{$controlposparto->idControlPosparto}}  </h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                <a href="{{ route('controlpospartos.index') }}" class="btn btn-success mr-3">Volver</a>
                    <a href="{{ route('controlpospartos.edit', $controlposparto->idControlPosparto) }}" class="btn btn-info mr-3">Editar</a>
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

                    @include('controlpospartos.show.control')
                    @include('controlpospartos.show.clasificacion')
                    @include('controlpospartos.show.conducta')
                    @include('controlpospartos.show.consejeria')

                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </section>
@endsection