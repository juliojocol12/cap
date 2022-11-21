@extends('layouts.app')
@section('title')
Editar datos de control de la paciente {{$controlposparto->idControlPosparto}}
@endsection

@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">Editar datos de control de la paciente {{$controlposparto->idControlPosparto}}</h3>
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
                            <a href="{{ route('controlpospartos.index') }}" class="btn btn-danger mr-3">Cancelar</a>
                    {!! Form::model($controlposparto, ['method' => 'PATCH', 'route'=> ['controlpospartos.update', $controlposparto->idControlPosparto ]]) !!}
                    
                        @include('controlpospartos.editar.control')
                        @include('controlpospartos.editar.clasificacion')
                        @include('controlpospartos.editar.conducta')
                        @include('controlpospartos.editar.consejeria')



                    
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a href="{{ route('controlpospartos.index') }}" class="btn btn-danger mr-3">Cancelar</a>
                    </div>

                    {!! Form::close() !!}


                </div>
            </div>
        </div>

        
    </section>
    
@endsection