@extends('layouts.app')
@section('title')
Registro de 
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Registro de </h3>
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

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$personal->Nombre}}" disabled>
                                    </div>                                       
                                </div>
                                
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">DPI</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$personal->CUI}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Celular</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$personal->Celular}}" disabled>
                                    </div>                                       
                                </div>


                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Teléfono</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$personal->Telefono}}" disabled>
                                    </div>                                       
                                </div>

                                
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de nacimiento</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{ date('d-m-Y', strtotime($personal->FechaNacimiento))}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Dirección</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$personal->Direccion}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Cargo</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$personal->Cargo}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Nivel académico</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$personal->NivelAcademico}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Estado civil</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$personal->EstadoCivil}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Tipo de sangre</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$personal->TipoSanguineo}}" disabled>
                                    </div>                                       
                                </div>
                                
                            </div>    

                        </div>                    
                    </div>

                    <a href="{{ route('personal.index') }}" class="btn btn-success mr-3">Volver</a>
                    <a class="btn btn-info mr-3" href="{{ route('personal.edit', $personal->idPersonal) }}">Editar</a>
                    
                                      

                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </section>
@endsection