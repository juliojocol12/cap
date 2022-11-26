@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Conducta Postparto</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body"  onkeypress="return pulsar(event)">

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

                            {!! Form::model($conductapostparto, ['method' => 'PATCH', 'route'=> ['conductaposparto.update', $conductapostparto->idConductaPospartos]]) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="name">Sulfato Ferroso</label>
                                        {!! Form::text('SulfatoFerroso', null, array('class'=>'form-control','maxlength'=>'25'))!!}
                                    </div>
                                </div>
    
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="name">AcidoFolico</label>
                                        {!! Form::text('AcidoFolico', null, array('class'=>'form-control','maxlength'=>'25')) !!}
                                    </div>
                                </div>
    
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="name">VacuncacionTdapMadre</label>
                                        {!! Form::text('VacuncacionTdapMadre', null, array('class'=>'form-control','maxlength'=>'20')) !!}
                                    </div>
                                </div>
    
                                <div class="col-xs-12 col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="name">Medicamento</label>
                                        {!! Form::text('Medicamento', null, array('class'=>'form-control','maxlength'=>'45')) !!}
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