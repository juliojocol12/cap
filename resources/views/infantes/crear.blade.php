@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ingreso de infantes</h3>
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

                            {!! Form::open(array('route'=>'roles.store', 'method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Nombres</label>
                                        {!! Form::text('Nombres', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los nombres del infante', 'data-maxlength'=>"45")) !!}
                                    </div>
                                       
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Apellidos</label>
                                        {!! Form::text('Apellidos', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los apellidos del infante')) !!}
                                    </div>
                                </div>


                                <div class="col-xs-1 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="Genero">Género</label>
                                        <select class="form-control" id="Genero">
                                        <option selected>Seleccione el genero</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de Nacimiento</label>
                                        {!! Form::date('FechaNacimiento', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Hora de Naciemiento</label>
                                        {!! Form::time('HoraNaciemiento', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-1">
                                    <div class="form-group" align='center'>
                                        <label for="">Peso en Libras</label>
                                        {!! Form::text('PesoLB', null, array('class'=>'form-control', 'placeholder'=>'Peso en libras')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-1" align='center'>
                                    <div class="form-group">
                                        <label for="">Peso en Onzas</label>
                                        {!! Form::text('PesoOnz', null, array('class'=>'form-control', 'placeholder'=>'Peso en onzas')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-1" align='center'>
                                    <div class="form-group">
                                        <label for="">Altura</label>
                                        {!! Form::text('Altura', null, array('class'=>'form-control', 'placeholder'=>'Altura en cm')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="">Observaciones</label>
                                        {!! Form::text('Observaciones', null, array('class'=>'form-control', 'placeholder'=>'Observaciones durante el nacimiento')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de Egreso</label>
                                        {!! Form::date('FechaEgreso', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-1" align='center'>
                                    <div class="form-group">
                                        <label for="">Tipo de Sangre</label>
                                        {!! Form::text('TipoSanguineo', null, array('class'=>'form-control', 'placeholder'=>'Ingrese el tipo de sangre')) !!}
                                    </div>
                                </div>

                                {{--

                                <div class="col-xs-12 col-sm-12 col-md-1">
                                    <div class="form-group">
                                        <label for="">Nombres</label>
                                        <select name="DatosFamiliares_idDatosFamiliar">
                                            @foreach($datospersonalespacientes as $datospersonalespaciente)
                                            <option value="{{ $datospersonalespaciente->idDatosPersonalesPaciente }}">{{ $datospersonalespaciente->NombresPaciente }} {{ $datospersonalespaciente->ApellidosPaciente }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                --}}


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