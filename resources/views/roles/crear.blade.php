@extends('layouts.app')
@section('title')
    Crear roles
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear roles</h3>
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

                                {!! Form::open(array('route'=>'roles.store', 'method'=>'POST')) !!}
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Nombre del Rol</label>
                                            {!! Form::text('name', null, array('class'=>'form-control','maxlength'=>'45')) !!}
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="name">Permisos de rol</label>
                                            <br/>
                                            <table class="table  table-striped mt-2 table-responsive">
                                                <thead style="background-color: #6777ef;">
                                                    <th style="color:#fff;">Nombre</th>
                                                    <th style="color:#fff;">Permiso</th>
                                                </thead>
                                                <tbody>
                                                @foreach($permission as $value)
                                                    <tr>
                                                        <td>abc</td>
                                                        <td>
                                                        {{ Form::checkbox('permission', $value->id, false, array('class' => 'name')) }}
                                                        {{ $value->name }}
                                                        </td>
                                                    </tr>
                                                    
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    


                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
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