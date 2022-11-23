@extends('layouts.app')
@section('title')
    Datos del expediente
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Datos de la ficha aborto de  {{$aborto->NombresPaciente}} {{$aborto->ApellidosPaciente}}</h3>
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
                            <h4 class="page__heading">Datos registrados </h4>
                            <div class="row ">

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombre de la paciente</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$aborto->NombresPaciente}} {{$aborto->ApellidosPaciente}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                    <label for="">¿Tuvo aborto?</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$aborto->Antecedente}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de evento</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$aborto->FechaAborto}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-8">
                                    <div class="form-group">
                                    <label for="">Descripción del evento</label>
                                        <input type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="{{$aborto->Descripcion}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-5">
                                    <div class="form-group">
                                        <label for="">Médico que atendió el aborto</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$aborto->Nombre}}" disabled>
                                    </div>                                       
                                </div>


                            </div>    
                                 
                       

                                


                            </div>    

                        </div>                    
                    </div>
                    

                    <a href="{{ route('abortos.index') }}" class="btn btn-success mr-3">Volver</a>
                            


                </div>
            </div>
        </div>
    </section>
@endsection