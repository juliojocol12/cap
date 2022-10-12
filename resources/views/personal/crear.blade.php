@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ingreso de Personal</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">     
                                                                      
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif

                        {!! Form::open(array('route'=>'personal.store', 'method'=>'POST')) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    {!! Form::text('name', null, array('class'=>'form-control', 
                                    placeholder="Nombre Completo", maxlenght="40", required pattern="[A-Za-z]")) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">CUI</label>
                                    {!! Form::text('CUI', null, array('class'=>'form-control', maxlenght="15", required pattern="[0-9]")) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Telefono</label>
                                    {!! Form::text('Telefono', array('class'=>'form-control',
                                     maxlenght="15", required pattern="[0-9]")) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Direccion</label>
                                    {!! Form::text('Direccion', array('class'=>'form-control', maxlenght="45", required pattern="[A-Za-z]")) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Cargo</label>
                                    {!! Form::text('Cargo', array('class'=>'form-control', maxlenght="30", required pattern="[A-Za-z]")) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">FechaNacimiento</label>
                                    {!! Form::date('FechaNacimiento', array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">NivelAcademico</label>
                                    {!! Form::text('NivelAcademico', array('class'=>'form-control', maxlenght="30", required pattern="[A-Za-z]")) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">CorreoElectronico</label>
                                    {!! Form::text('CorreoElectronico', array('class'=>'form-control', maxlenght="20", required pattern="[A-Za-z]")) !!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Observaciones</label>
                                    {!! Form::text('Observaciones', array('class'=>'form-control', maxlenght="50", required pattern="[A-Za-z]")) !!}
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
