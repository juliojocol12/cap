@extends('layouts.app')
@section('title')
    Datos de {{$vacunainfantes->infantes->Nombres}} {{$vacunainfantes->infantes->Apellidos}}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Datos de {{$vacunainfantes->infantes->Nombres}} {{$vacunainfantes->infantes->Apellidos}} </h3>
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

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Fecha de suministro</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$vacunainfantes->FechaSuministro}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Datos de la vacuna</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$vacunainfantes->Vacunas_id}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Nombre del infante</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$vacunainfantes->Infante_id}}" disabled>
                                    </div>                                       
                                </div>
                                <a href="{{ route('vacunainfantes.index') }}" class="btn btn-danger mr-3">Volver</a>
                            <a href="{{ route('vacunainfantes.edit', $vacunainfantes->idVacunasInfantes) }}" class="btn btn-info mr-3">Editar</a>

                        </div>
                    </div>   
                </div>

            </div>

        </div>
    </section>
@endsection