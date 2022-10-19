@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Personal</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

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

                            {!! Form::model($establecimientosaludo, ['method' => 'PATCH', 'route'=> ['establecimientosaludo.update', $establecimientosaludo->idEstablecimientoSaludos]]) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        {!! Form::text('Nombre', null, array('class'=>'form-control'))!!}
                                    </div>
                                </div>
    
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="name">Direccion</label>
                                        {!! Form::text('Direccion', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
    
                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="name">Comunidad</label>
                                        {!! Form::text('Comunidad', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>
    
                                <div class="col-xs-12 col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="name">Puesto de Salud</label>
                                        {!! Form::text('PuestoSalud', null, array('class'=>'form-control')) !!}
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