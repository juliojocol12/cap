@extends('layouts.app')
@section('title')
    Editar datos de {{$datosfamiliare->NombresFamiliar}} {{$datosfamiliare->ApellidosFamiliar}}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar datos de {{$datosfamiliare->NombresFamiliar}} {{$datosfamiliare->ApellidosFamiliar}}</h3>
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

                            {!! Form::model($datosfamiliare, ['method' => 'PATCH', 'route'=> ['datosfamiliares.update', $datosfamiliare->idDatosFamiliares ]]) !!}
                            <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombres</label>
                                        {!! Form::text('NombresFamiliar', null, array('class'=>'form-control','minlength'=>'5','maxlength'=>'25', 'placeholder'=>'Ingrese los nombres del familiar','autocomplete'=>'off' )) !!}
                                    </div>
                                       
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Apellidos</label>
                                        {!! Form::text('ApellidosFamiliar', null, array('class'=>'form-control','minlength'=>'5','maxlength'=>'25', 'placeholder'=>'Ingrese los apellidos del familiar', 'autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">DPI</label>
                                        {!! Form::text('CUI', null, array('class'=>'form-control','maxlength'=>'13', 'minlength'=>'13', 'placeholder'=>'Ingrese el DPI en números y sin espacios', 'autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Estado civil</label>
                                        {!! Form::text('EstadoCivil', null, array('class'=>'form-control','minlength'=>'3', 'maxlength'=>'7', 'placeholder'=>'Ingrese el estado civil', 'autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Profesión u oficio</label>
                                        {!! Form::text('ProfesionOficio', null, array('class'=>'form-control','maxlength'=>'25', 'placeholder'=>'Ingrese la profesión u oficio', 'autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Domicilio</label>
                                        {!! Form::text('Domicilio', null, array('class'=>'form-control','minlength'=>'10','maxlength'=>'45', 'placeholder'=>'Ingrese el domicilio', 'autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Número de teléfono</label>
                                        {!! Form::text('TelefonoFamiliar', null, array('class'=>'form-control','minlength'=>'8','maxlength'=>'8', 'placeholder'=>'Ingrese número de teléfono', 'autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Número de celular</label>
                                        {!! Form::text('CelularFamiliar', null, array('class'=>'form-control','minlength'=>'5','maxlength'=>'8', 'placeholder'=>'Ingrese número de celular', 'autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="d-none">
                                    <div class="col-xs-12 col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <label for="" value="Usuario_id">Encargado de llenado</label>
                                            <select id="Usuario_id" class="form-control" name="Usuario_id" maxlength="35">
                                                <option value="{{\Illuminate\Support\Facades\Auth::user()->id}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-none">
                                    <div class="col-xs-12 col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <label for="" value="Estado">Estado</label>
                                            <input type="text" name="Estado" value="Si">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-actualizar">Actualizar</button>
                                <a href="{{ route('datosfamiliares.index') }}" class="btn btn-danger mr-3">Volver</a>
                            </div>
                            @include('modal.actualizar')
                            
                            {!! Form::close() !!}                            

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection