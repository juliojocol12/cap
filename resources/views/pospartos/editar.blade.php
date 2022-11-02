@extends('layouts.app')
@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">EDITAR FICHA</h3>
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

                    {!! Form::model($fcevaluacionposparto, ['method' => 'PATCH', 'route'=> ['pospartos.update', $fcevaluacionposparto->idFCEvaluacionPosparto ]]) !!}
                    
                        @include('pospartos.editar.datospaciente')

                        @include('pospartos.editar.signossintomas')

                        @include('pospartos.editar.refirio')

                        @include('pospartos.editar.primer')

                        @include('pospartos.editar.suplementacion')



                    
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a href="{{ route('pospartos.index') }}" class="btn btn-danger mr-3">Cancelar</a>
                    </div>

                    {!! Form::close() !!}


                </div>
            </div>
        </div>

        
    </section>
    
@endsection