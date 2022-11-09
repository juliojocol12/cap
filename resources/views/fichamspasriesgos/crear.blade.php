@extends('layouts.app')
@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">Ingreso de ficha de riesgo obstétrico del MSPAS </h3>
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

                            {!! Form::open(array('route'=>'fichamspasriesgos.store', 'method'=>'POST')) !!}
                            
                    
                    @include('fichamspasriesgos.crear.inicio')
                    @include('fichamspasriesgos.crear.antecedentesobstreticos')
                    @include('fichamspasriesgos.crear.embarazoactual')                    
                    @include('fichamspasriesgos.crear.historiaclinica')
                    @include('fichamspasriesgos.crear.fin')     
                    

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-crear">Guardar</button>
                        <a href="{{ route('fichamspasriesgos.index') }}" class="btn btn-danger mr-3">Volver</a>
                    </div>
                    @include('modal.guardar')
                    {!! Form::close() !!}


                </div>
            </div>
        </div>

        
    </section>
    
@endsection