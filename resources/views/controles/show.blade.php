@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Datos del expediente No. {{$controle->NoControl}} </h3>
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

                    @include('controles.show.examenfisicoembarazada'),
                    @include('controles.show.signosysintomaspeligro'),
                    @include('controles.show.signosvitales'),
                    @include('controles.show.evaluacionnutricionalembarazada'),
                    @include('controles.show.examengeneral'),
                    @include('controles.show.examenobstetrico'),
                    @include('controles.show.examenginecologico'),

                    @include('controles.show.exameneslaboratorio'),
                    @include('controles.show.clasificacion'),
                    @include('controles.show.conducta'),
                    @include('controles.show.consejeria'),
                    <a href="{{ route('controles.index') }}" class="btn btn-success mr-3">Volver</a>
                    <a href="{{ route('controles.edit', $controle->idControles) }}" class="btn btn-info mr-3">Editar</a>
                    
                    
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </section>
@endsection