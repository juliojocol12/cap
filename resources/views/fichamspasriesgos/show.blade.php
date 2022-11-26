@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Datos del registro No. {{$fichamspasriego->RegistroNo}} </h3>
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

                    <a href="{{ route('fichamspasriesgos.index') }}" class="btn btn-success mr-3">Volver</a>
                            <a href="{{ route('fichamspasriesgos.edit', $fichamspasriego->idFichamspasriegos) }}" class="btn btn-info mr-3">Editar</a>
                    
                    
                        @include('fichamspasriesgos.show.inicio')
                        @include('fichamspasriesgos.show.antecedentesobstreticos')
                        @include('fichamspasriesgos.show.embarazoactual')                    
                        @include('fichamspasriesgos.show.historiaclinica')
                        @include('fichamspasriesgos.show.fin') 

                </div>
            </div>
        <div class="row">
                
            </div>
        </div>
    </section>
@endsection