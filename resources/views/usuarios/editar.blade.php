@extends('layouts.app')
@section('title')
    Editar datos de {{$user->name}}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar datos de usuario {{$user->name}}</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body" onkeypress="return pulsar(event)">

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

                            {!! Form::model($user, ['method' => 'PATCH', 'route'=> ['usuarios.update', $user->id]]) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        {!! Form::text('name', null, array('class'=>'form-control','maxlength'=>'45')) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Correo electrónico</label>
                                        {!! Form::text('email', null, array('class'=>'form-control','maxlength'=>'20')) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Contraseña</label>
                                        {!! Form::password('password', array('class'=>'form-control','maxlength'=>'12')) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Confirmar contraseña</label>
                                        {!! Form::password('confirm-password', array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Rol a desempeñar</label>
                                        <select class="form-control" name="roles[]" id="$roles" value="{{$user->roles}}">
                                            @foreach ($roles as $role )
                                                <option values="$role" >{{$role}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="d-none">
                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="" value="Estado">Estado</label>
                                        <input type="text" name="Estado" value="Si">
                                    </div>
                                </div>
                            </div>


                            

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-actualizar">Actualizar</button>
                                <a href="{{ route('usuarios.index') }}" class="btn btn-danger mr-3">Volver</a>
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