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

                            {!! Form::model($datosfamiliare, ['method' => 'PATCH', 'route'=> ['datosfamiliares.update', $datosfamiliare->idDatosFamiliares ]]) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Nombres</label>
                                        {!! Form::text('NombresFamiliar', null, array('class'=>'form-control','maxlength'=>'25', 'placeholder'=>'Ingrese los nombres del familiar', )) !!}
                                    </div>
                                       
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Apellidos</label>
                                        {!! Form::text('ApellidosFamiliar', null, array('class'=>'form-control','maxlength'=>'25', 'placeholder'=>'Ingrese los apellidos del familiar')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">CUI</label>
                                        {!! Form::text('CUI', null, array('class'=>'form-control','maxlength'=>'15', 'placeholder'=>'Ingrese el CUI')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Estado Civil</label>
                                        {!! Form::text('EstadoCivil', null, array('class'=>'form-control','maxlength'=>'7', 'placeholder'=>'Ingrese el estado civil')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Profesion Oficio</label>
                                        {!! Form::text('ProfesionOficio', null, array('class'=>'form-control','maxlength'=>'25', 'placeholder'=>'Ingrese la profesión')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Domicilio</label>
                                        {!! Form::text('Domicilio', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Ingrese el domicilio')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de Telefono</label>
                                        {!! Form::text('TelefonoFamiliar', null, array('class'=>'form-control','maxlength'=>'12', 'placeholder'=>'Número de Telefono')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="">Número de Celular</label>
                                        {!! Form::text('CelularFamiliar', null, array('class'=>'form-control','maxlength'=>'12', 'placeholder'=>'Número de Celular')) !!}
                                    </div>
                                </div>



                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <button type="submit" class="btn btn btn-danger" href="datosfamiliares.index">Cancelar</button>
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