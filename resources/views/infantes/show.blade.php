@extends('layouts.app')
@section('title')
    Datos de {{$infant->Nombres}} {{$infant->Apellidos}}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Datos de {{$infant->Nombres}} {{$infant->Apellidos}} </h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
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
                    
                    <div class="card">
                        <div class="card-body">
                            <div class="row ">

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Nombres</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->Nombres}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Apellidos</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->Apellidos}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Género</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->Genero}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de nacimiento</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->FechaNacimiento}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Hora de naciemiento</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->HoraNaciemiento}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de egreso</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->FechaEgreso}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Peso en libras</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->PesoLB}} libras" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Peso en onzas</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->PesoLB * 16}} onzas" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Altura</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->Altura}} centimetros" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Tipo sanguíneo</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->TipoSanguineo}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Dirección</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->datospersonalespacientes->Descripciondireccion}} {{$infant->datospersonalespacientes->Numerodireccion}} zona {{$infant->datospersonalespacientes->Zonadireccion}} {{$infant->datospersonalespacientes->Municipiodep}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombres de la madre</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->datospersonalespacientes->NombresPaciente}} {{$infant->datospersonalespacientes->ApellidosPaciente}}" disabled>
                                    </div>                                       
                                </div>


                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombres de familiar</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->datosfamiliares->NombresFamiliar}} {{$infant->datosfamiliares->ApellidosFamiliar}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Parentesco</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->Parentesco}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-8">
                                    <div class="form-group">
                                        <label for="">Observaciones</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$infant->Observaciones}}" disabled>
                                    </div>                                       
                                </div>

                            </div> 
                            
                            <h3>Datos de vacunación</h3>
                            <div class="row ">
                                
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Covid</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$restacovid}} dosis" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Td</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$restaTd}} dosis" disabled>
                                    </div>                                       
                                </div>


                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Influenza</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$restaInfluenza}} dosis" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">TdAp</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$restaTdAp}} dosis" disabled>
                                    </div>                                       
                                </div>

                            </div>
                        </div>                    
                    </div>

                    <a href="{{ route('infantes.index') }}" class="btn btn-success mr-3">Volver</a>
                    <a href="{{ route('infantes.edit', $infant->idInfantes) }}" class="btn btn-info mr-3">Editar</a>

                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </section>
@endsection