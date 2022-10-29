@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ingreso de pacientes</h3>
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

                            {!! Form::open(array('route'=>'pacientes.store', 'method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Nombres</label>
                                        {!! Form::text('NombresPaciente', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los nombres del paciente', 'data-maxlength'=>"25")) !!}
                                    </div>
                                       
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Apellidos</label>
                                        {!! Form::text('ApellidosPaciente', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los apellidos del paciente',)) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Fecha de nacimiento</label>
                                        {!! Form::date('FechaNaciemientoPaciente', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los apellidos del infante')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">DPI</label>
                                        {!! Form::text('CUI', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los apellidos del infante')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Profesión u Oficio</label>
                                        {!! Form::text('ProfesionOficio', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los apellidos del infante')) !!}
                                    </div>
                                </div> 

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Domicilio</label>
                                        {!! Form::text('Domicilio', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los apellidos del infante')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Telefono</label>
                                        {!! Form::text('Telefono', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los apellidos del infante')) !!}
                                    </div>
                                </div>     

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Celular</label>
                                        {!! Form::text('Celular', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los apellidos del infante')) !!}
                                    </div>
                                </div>        

                                                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Estado Civil</label>
                                        {!! Form::text('EstadoCivil', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los apellidos del infante')) !!}
                                    </div>
                                </div>     

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Peso</label>
                                        {!! Form::text('Peso', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los apellidos del infante')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Tipo Sanguineo</label>
                                        {!! Form::text('TipoSanguineo', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los apellidos del infante')) !!}
                                    </div>
                                </div>
                            
                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Medicamentos actualmente</label>
                                        {!! Form::text('MedicamentosActualmente', null, array('class'=>'form-control', 'placeholder'=>'Ingrese los apellidos del infante')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Migrante</label>
                                        {!! Form::text('Migrante', null, array('class'=>'form-control', 'placeholder'=>'Ingrese si el paciente es migrante')) !!}
                                    </div>
                                </div>  

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="" value="pueblo_id">Pueblo</label>
                                        <select class="form-control" name="pueblo_id">
                                            @foreach($pueblos as $pue)
                                            <option value="{{$pue->idPueblo}}" >{{ $pue->Nombre}} </option>
                                            @endforeach
                                        </select>
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