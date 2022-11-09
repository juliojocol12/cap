@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Alta de usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
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

                            {!! Form::open(array('route'=>'usuarios.store', 'method'=>'POST',)) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Nombre (*)</label>
                                        {!! Form::text('name', null, array('class'=>'form-control','maxlength'=>'20', 'placeholder'=>'Ingrese el nombre de usuario','autocomplete'=>'off')) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Email (*)</label>
                                        {!! Form::text('email', null, array('class'=>'form-control','maxlength'=>'80','placeholder'=>'Ingrese una direccion de correo','autocomplete'=>'off')) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Contraseña (*)</label>
                                        {!! Form::password('password', array('class'=>'form-control', 'maxlength'=>'12','placeholder'=>'Ingrese la contraseña','autocomplete'=>'off')) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Confirmar contraseña (*)</label>
                                        {!! Form::password('confirm-password', array('class'=>'form-control', 'maxlength'=>'12', 'placeholder'=>'Ingrese nuevamente la contraseña')) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="name">Roles</label>
                                        {!! Form::select('roles[]', $roles,[], array('class'=>'form-control')) !!}
                                    </div>
                                </div>                                
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-2">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-crear">Guardar</button>
                                <a href="{{ route('usuarios.index') }}" class="btn btn-danger mr-3">Volver</a>
                            </div>
                            @include('modal.guardar')
                            {!! Form::close() !!}                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection