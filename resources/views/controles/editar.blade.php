@extends('layouts.app')
@section('title')
Editar control prenatal
@endsection
@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">Editar control prenatal y/o posparto</h3>
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

                            
                         <a href="{{ route('controles.index') }}" class="btn btn-danger mr-3">Cancelar</a>
                    {!! Form::model($controle, ['method' => 'PATCH', 'route'=> ['controles.update', $controle->idControles ]]) !!}
                    
                            @include('controles.editar.examenfisicoembarazada')
                            @include('controles.editar.signosysintomaspeligro')
                            @include('controles.editar.signosvitales')
                            @include('controles.editar.evaluacionnutricionalembarazada')
                            @include('controles.editar.examengeneral')
                            @include('controles.editar.examenobstetrico')
                            @include('controles.editar.examenginecologico')
                            @include('controles.editar.exameneslaboratorio')
                            @include('controles.editar.clasificacion')
                            @include('controles.editar.conducta')
                            @include('controles.editar.consejeria')  
                     

                         
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-actualizar">Actualizar</button>
                        <a href="{{ route('controles.index') }}" class="btn btn-danger mr-3">Cancelar</a>
                    </div>
                    @include('modal.actualizar')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        
    </section>
    
@endsection