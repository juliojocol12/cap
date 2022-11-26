@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ingreso de Clasificacion Posparto</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body"  onkeypress="return pulsar(event)">     
                                                                      
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif

                        {!! Form::open(array('route'=>'clasificacionposparto.store', 'method'=>'POST')) !!}
                        <div class="row">
                            <div class="col-xs-6 col-sm-9 col-md-3">
                                <div class="form-group">
                                    <label for="name">Problemas Detectados</label>
                                    {!! Form::textarea('ProblemasDetectados', null, array('style'=>'background:#FCFCFC;height:90px;border-color:#E3E3E3','maxlength'=>'100'))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            
                        </div>
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
