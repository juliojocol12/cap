@extends('layouts.app')
@section('title')
    Datos de {{$datosfamiliare->NombresFamiliar}} {{$datosfamiliare->ApellidosFamiliar}}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Datos de {{$datosfamiliare->NombresFamiliar}} {{$datosfamiliare->ApellidosFamiliar}} </h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-body table-responsive">

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
                            <div class="row ">

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                    <label for="">Nombres</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$datosfamiliare->NombresFamiliar}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                    <label for="">Apellidos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$datosfamiliare->ApellidosFamiliar}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                    <label for="">DPI</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$datosfamiliare->CUI}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                    <label for="">Estado</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$datosfamiliare->EstadoCivil}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                    <label for="">Profesion u oficio</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$datosfamiliare->ProfesionOficio}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                    <label for="">Domicilio</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$datosfamiliare->Domicilio}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                    <label for="">Número de teléfono</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$datosfamiliare->TelefonoFamiliar}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                    <label for="">Número de celular</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$datosfamiliare->CelularFamiliar}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                    <label for="">Tipo de sangre</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$datosfamiliare->TipoSanguineo}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                    <label for="">Antecentes médicos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$datosfamiliare->AntecedentesMedicos}}" disabled>
                                    </div>                                       
                                </div>

                            </div>
                               
                            <a href="{{ route('datosfamiliares.index') }}" class="btn btn-success mr-3">Volver</a>
                            <a href="{{ route('datosfamiliares.edit',  $datosfamiliare->idDatosFamiliares) }}" class="btn btn-info mr-3">Editar</a>

                        </div>                           
                    </div>   
                </div>
            </div>
        </div>
    </section>
@endsection