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
                <div class="col-lg-3.5 ">
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

                                    <table class="table table-striped table-bordered table-responsive " >
                                        <tbody >
                                            <tr>
                                                <th scope="row" ">Nombres</th>
                                                <td>{{$datosfamiliare->NombresFamiliar}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Apellidos</th>
                                                <td>{{$datosfamiliare->ApellidosFamiliar}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">DPI</th>
                                                <td>{{$datosfamiliare->CUI}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Estado civil</th>
                                                <td>{{$datosfamiliare->EstadoCivil}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Profesion u oficio</th>
                                                <td>{{$datosfamiliare->ProfesionOficio}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Domicilio</th>
                                                <td>{{$datosfamiliare->Domicilio}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Número de teléfono</th>
                                                <td>{{$datosfamiliare->TelefonoFamiliar}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Número de celular</th>
                                                <td>{{$datosfamiliare->CelularFamiliar}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    

                        </div>
                    </div>   
                </div>
                <div class="col-lg-3.5 ">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <a href="{{ route('datosfamiliares.index') }}" class="btn btn-success mr-3">Volver</a>
                            <a href="{{ route('datosfamiliares.edit',  $datosfamiliare->idDatosFamiliares) }}" class="btn btn-info mr-3">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </section>
@endsection