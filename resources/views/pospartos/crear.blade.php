@extends('layouts.app')
@section('content')
    <section class="section">
        
        <div class="section-header">
            <h3 class="page__heading">INGRESO DE FICHA CLINICA POST PARTO</h3>
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

                    {!! Form::open(array('route'=>'pospartos.store', 'method'=>'POST')) !!}
                    
                    @include('pospartos.crear.datospaciente')

                    

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="submit" class="btn btn btn-danger" href="posparto.index">Cancelar</button>
                    </div>

                    {!! Form::close() !!}


                </div>
            </div>
        </div>

        
    </section>
    
@endsection