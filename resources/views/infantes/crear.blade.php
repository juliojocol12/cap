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

                            {!! Form::open(array('route'=>'infantes.store', 'method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Nombres</label>
                                        {!! Form::text('Nombres', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los nombres del infante', )) !!}
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
                                        <select class="form-control" name="Genero">
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
                                        {!! Form::text('PesoLB', null, array('class'=>'form-control', 'placeholder'=>'Peso en libras', 'pattern'=>'[0-9]{3}+[.]+[0-9]{2}')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-1" align='center'>
                                    <div class="form-group">
                                        <label for="">Peso en Onzas</label>
                                        {!! Form::text('PesoOnz', null, array('class'=>'form-control', 'placeholder'=>'Peso en onzas', 'pattern'=>'[0-9]{3}+[.]+[0-9]{2}')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-1" align='center'>
                                    <div class="form-group">
                                        <label for="">Altura</label>
                                        {!! Form::text('Altura', null, array('class'=>'form-control', 'placeholder'=>'Altura en cm', 'pattern'=>'[0-9]{3}+[.]+[0-9]{2}')) !!}
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

                                <div class="col-xs-12 col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <label for="">Observaciones</label>
                                        
                                        {!! Form::text('Observaciones', null, array('class'=>'form-control', 'placeholder'=>'Observaciones durante el nacimiento')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="filtroCUI" class="form-label">Datos de Madre</label>
                                        <input class="form-control" list="filtroCUIs" name="filtroCUI" id="filtroCUI" placeholder="ingrese el cui">
                                        <datalist id="filtroCUIs">
                                            @foreach($datospacientes as $cuipaciente)
                                            <option value="{{$cuipaciente->CUI }}"> {{ $cuipaciente->CUI }} </option>
                                            @endforeach
                                        </datalist>
                                        if($datospacientes = $datospacientes)
                                            <label for="" class="form-label"> {{ $nombrepacient->ApellidosPaciente}}</label>
                                        elseif
                                        <input class="form-control" list="filtroCUIs" name="filtroCUI" id="filtroCUI" placeholder="ingrese el cui">

                                        <select class="form-control" name="DatosPersonalesPacientes_id">
                                            @foreach($datospacientes as $nombrepacient)
                                            <option value="{{$nombrepacient->idDatosPersonalesPacientes }}">{{ $nombrepacient->NombresPaciente}} {{ $nombrepacient->ApellidosPaciente}} </option>
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Datos de un Familiar</label>                            
                                        <select class="form-control" name="DatosFamiliares_id">
                                            @foreach($datosfamiliares as $nombrefamily)
                                            <option value="{{$nombrefamily->idDatosFamiliares}}">{{ $nombrefamily->NombresFamiliar}} {{$nombrefamily->ApellidosFamiliar}} </option>
                                            @endforeach
                                        </select>
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