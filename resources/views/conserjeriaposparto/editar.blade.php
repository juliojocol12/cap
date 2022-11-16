@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Conserjeria Postparto</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body" onkeypress="return pulsar(event)">

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

                            {!! Form::model($consejeriaposparto, ['method' => 'PATCH', 'route'=> ['conserjeriaposparto.update', $consejeriaposparto->idConsejeriaPospartos]]) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="name">Lactancia Materna Exclusiva</label>
                                        {!! Form::text('LactanciaMaternaExclusiva', null, array('class'=>'form-control','maxlength'=>'30'))!!}
                                    </div>
                                </div>
    
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="name">Planificacion Familiar Posparto</label>
                                        {!! Form::text('PlanificacionFamiliarPosparto', null, array('class'=>'form-control','maxlength'=>'30')) !!}
                                    </div>
                                </div>
    
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="name">Alimentacion Madre Lactante</label>
                                        {!! Form::text('AlimentacionMadreLactante', null, array('class'=>'form-control','maxlength'=>'30')) !!}
                                    </div>
                                </div>
    
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="name">Lactancia Materna VIH</label>
                                        {!! Form::text('LactanciaMaternaVIH', null, array('class'=>'form-control','maxlength'=>'30')) !!}
                                    </div>
                                </div>
    
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="name">Mujer VIH</label>
                                        {!! Form::text('MujerVIH', null, array('class'=>'form-control','maxlength'=>'30')) !!}
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