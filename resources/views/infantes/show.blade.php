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
                                                <td>{{$infant->Nombres}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Apellidos</th>
                                                <td>{{$infant->Apellidos}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Género</th>
                                                <td>{{$infant->Genero}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Fecha de nacimiento</th>
                                                <td>{{$infant->FechaNacimiento}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Hora de naciemiento</th>
                                                <td>{{$infant->HoraNaciemiento}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Peso en libras</th>
                                                <td>{{$infant->PesoLB}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Peso en onzas</th>
                                                <td>{{$infant->PesoOnz}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Altura</th>
                                                <td>{{$infant->Altura}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Tipo sanguíneo</th>
                                                <td>{{$infant->TipoSanguineo}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Nombres de la madre </th>
                                                <td>{{$infant->datospersonalespacientes->NombresPaciente}} {{$infant->datospersonalespacientes->ApellidosPaciente}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Nombres de familiar</th>
                                                <td>{{$infant->datosfamiliares->NombresFamiliar}} {{$infant->datosfamiliares->ApellidosFamiliar}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Parentesco</th>
                                                <td>{{$infant->Parentesco}}</td>
                                            </tr>
                                                                                       <tr>
                                                <th scope="row" ">Fecha de egreso</th>
                                                <td>{{$infant->FechaEgreso}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" ">Observaciones</th>
                                                <td>{{$infant->Observaciones}}</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                    

                        </div>
                    </div>   
                </div>
                <div class="col-lg-3.5 ">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <a href="{{ route('infantes.index') }}" class="btn btn-success mr-3">Volver</a>
                            <a href="{{ route('infantes.edit', $infant->idInfantes) }}" class="btn btn-info mr-3">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </section>
@endsection