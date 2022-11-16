@extends('layouts.app')
@section('title')
    Datos de {{$vacunas->NombreVacuna}}
@endsection


@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar datos {{$vacunas->NombreVacuna}} con fecha de ingreso {{$vacunas->Fechaingreso}}</h3>
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

                            {!! Form::model($vacunas, ['method' => 'PATCH', 'route'=> ['vacunas.update', $vacunas->idVacunas ]]) !!}
                            <div class="row">

                            <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="NombreVacuna">Nombre de la vacuna (*)</label>
                                        <select class="form-control" name="NombreVacuna" maxlength="45">
                                        <option select">{{$vacunas->NombreVacuna}}</option>
                                        <option value="Td">Td</option>
                                        <option value="TdAp">TdAp</option>
                                        <option value="Influenza">Influenza</option>
                                        <option value="Covid">Covid</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Tipo de vacuna (*)</label>
                                        {!! Form::text('TipoVacuna', null, array('class'=>'form-control', 'maxlength'=>'45','placeholder'=>'Ingrese los nombre de la vacuna','autocomplete'=>'off' )) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="" value="EstadoVacuna">Estado de la Vacuna (*)</label>
                                        <input class="form-control" list="filtroIdVacunas" id="filtroIdVacuna" name="EstadoVacuna" placeholder="Ingrese el nombre de la vacuna" maxlength="45" autocomplete="off" value="{{$vacunas->EstadoVacuna}} ">                                        
                                        <datalist id="filtroIdVacunas" name="EstadoVacuna">
                                            <option value="Bueno"> Bueno</option>       
                                            <option value="Malo"> Malo</option>      
                                        </datalist>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de ingreso (*)</label>
                                        {!! Form::date('Fechaingreso', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de vencimiento</label>
                                        {!! Form::date('FechaVencimiento', null, array('class'=>'form-control')) !!}
                                        
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Cantidad (*)</label>
                                        {!! Form::text('Cantidad', null, array('class'=>'form-control', 'maxlength'=>'5', 'placeholder'=>'Cantidad en números', 'autocomplete'=>'off')) !!}
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

                                
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-actualizar">Actualizar</button>
                                    <a href="{{ route('vacunas.index') }}" class="btn btn-danger mr-3">Volver</a>
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