@extends('layouts.app')
@section('title')
Editar datos de la ficha de expediente No. {{$fichamspasriego->RegistroNo}}
@endsection
@section('content')
    <section class="section">        
        <div class="section-header">
            <h3 class="page__heading">Editar datos de la ficha de expediente No. {{$fichamspasriego->RegistroNo}} </h3>
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

                         <a href="{{ route('fichamspasriesgos.index') }}" class="btn btn-danger mr-3">Cancelar</a>
                    {!! Form::model($fichamspasriego, ['method' => 'PATCH', 'route'=> ['fichamspasriesgos.update', $fichamspasriego->idFichamspasriegos ]]) !!}


                        
                        @include('fichamspasriesgos.editar.inicio')
                        @include('fichamspasriesgos.editar.antecedentesobstreticos')
                        @include('fichamspasriesgos.editar.embarazoactual')                    
                        @include('fichamspasriesgos.editar.historiaclinica')
                        @include('fichamspasriesgos.editar.fin')  


                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-actualizar">Actualizar</button>
                        <a href="{{ route('fichamspasriesgos.index') }}" class="btn btn-danger mr-3">Cancelar</a>
                    </div>
                    @include('modal.actualizar')
                    {!! Form::close() !!}


                </div>
        </div>
        </div>

        
    </section>
    
@endsection