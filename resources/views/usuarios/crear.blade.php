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

                            {!! Form::open(array('route'=>'usuarios.store', 'method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        {!! Form::text('name', null, array('class'=>'form-control', 'pattern'=>'[a-z]+', 'maxlength'=>'20', 'placeholder'=>'ingrese el nombre de usuario')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        {!! Form::text('email', null, array('class'=>'form-control', 'size'=>'64', 'maxlength'=>'191', 'pattern'=>'[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$', 'placeholder'=>'ingrese una direccion de correo')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Contraseña</label>
                                        {!! Form::password('password', array('class'=>'form-control', 'pattern'=>'?=.*[a-z])(?=.*[A-Z]', 'maxlength'=>'12', 'placeholder'=>'ingrese la contraseña')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Confirmar contraseña</label>
                                        {!! Form::password('confirm-password', array('class'=>'form-control', 'maxlength'=>'12',    'placeholder'=>'vuelva a ingresar la contraseña')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Roles</label>
                                        {!! Form::select('roles[]', $roles,[], array('class'=>'form-control')) !!}
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