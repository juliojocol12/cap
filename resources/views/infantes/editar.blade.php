@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar datos de {{$infant->Nombres}} {{$infant->Apellidos}}</h3>
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
                                        <label for="">Nombres</label>
                                        {!! Form::text('Nombres', null, array('class'=>'form-control','maxlength'=>'25','placeholder'=>'Ingrese los nombres del infante', )) !!}
                                    </div>
                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Apellidos</label>
                                        {!! Form::text('Apellidos', null, array('class'=>'form-control','maxlength'=>'25','placeholder'=>'Ingrese los apellidos del infante')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="Genero">Género</label>
                                        <select class="form-control" name="Genero" maxlength="45">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Fecha de Nacimiento</label>
                                        {!! Form::date('FechaNacimiento', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Hora de Naciemiento</label>
                                        {!! Form::time('HoraNaciemiento', null, array('class'=>'form-control','maxlength'=>'5')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Peso en Libras</label>
                                        {!! Form::text('PesoLB', null, array('class'=>'form-control','maxlength'=>'5','placeholder'=>'Peso en libras', 'pattern'=>'[0-9]{3}+[.]+[0-9]{2}')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Peso en Onzas</label>
                                        {!! Form::text('PesoOnz', null, array('class'=>'form-control','maxlength'=>'5','placeholder'=>'Peso en onzas', 'pattern'=>'[0-9]{3}+[.]+[0-9]{2}')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Altura</label>
                                        {!! Form::text('Altura', null, array('class'=>'form-control','maxlength'=>'5','placeholder'=>'Altura en cm', 'pattern'=>'[0-9]{3}+[.]+[0-9]{2}')) !!}
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
                                        <label for="name">Observaciones</label><br>
                                        {!! Form::textarea('Observaciones', null, array('style'=>'background:#FCFCFC;height:90px;width:400px;border-color:#E3E3E3'))!!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">                                        
                                    <label for="name">Datos de la madre</label>
                                        {!! Form::text('DatosPersonalesPacientes_id',  null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                    <label for="name">Datos de Familiar</label>
                                        {!! Form::text('idDatosFamiliares',  null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Parentesco</label>
                                        {!! Form::text('Parentesco', null, array('class'=>'form-control', 'placeholder'=>'Parentesco', 'autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-5">
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