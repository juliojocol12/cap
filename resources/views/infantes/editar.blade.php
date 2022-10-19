@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar infantes</h3>
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

                            {!! Form::model($infant, ['method' => 'PATCH', 'route'=> ['infantes.update', $infant->idInfantes ]]) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        {!! Form::text('Nombres', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Apellidos</label>
                                        {!! Form::text('Apellidos', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Género</label>
                                        {!! Form::text('Genero',  null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Fecha de Nacimiento</label>
                                        {!! Form::text('FechaNacimiento',  null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Hora de Naciemiento</label>
                                        {!! Form::text('HoraNaciemiento',  null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Peso en Libras</label>
                                        {!! Form::text('PesoLB',  null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Peso en Onzas</label>
                                        {!! Form::text('PesoOnz',  null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Altura</label>
                                        {!! Form::text('Altura',  null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Fecha de Egreso</label>
                                        {!! Form::text('FechaEgreso',  null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Tipo de Sangre</label>
                                        {!! Form::text('TipoSanguineo',  null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Observaciones</label>
                                        {!! Form::text('Observaciones',  null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        
                                    <label for="name">Datos de la madre</label>
                                        {!! Form::text('NombresPaciente',  null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                    <label for="name">Datos de Familiar</label>
                                        @foreach($datosfamiliares as $nombrefamily)
                                        {!! Form::text('$nombrefamily->idDatosFamiliares',  null, array('class'=>'form-control')) !!}
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                    <button type="submit" class="btn btn btn-danger" href="infantes.index">Cancelar</button>
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