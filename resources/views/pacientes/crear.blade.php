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
                                        {!! Form::text('NombresPaciente', null, array('class'=>'form-control','maxlength'=>'25','placeholder'=>'Ingrese los nombres del paciente','autocomplete'=>'off')) !!}
                                    </div>
                                       
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Apellidos</label>
                                        {!! Form::text('ApellidosPaciente', null, array('class'=>'form-control','maxlength'=>'25','placeholder'=>'Ingrese los apellidos del paciente','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Fecha de nacimiento</label>
                                        {!! Form::date('FechaNaciemientoPaciente', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">DPI</label>
                                        {!! Form::text('CUI', null, array('class'=>'form-control', 'maxlength'=>'15','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Profesión u Oficio</label>
                                        {!! Form::text('ProfesionOficio', null, array('class'=>'form-control', 'maxlength'=>'25','autocomplete'=>'off')) !!}
                                    </div>
                                </div> 

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Domicilio</label>
                                        {!! Form::text('Domicilio', null, array('class'=>'form-control', 'maxlength'=>'45','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Telefono</label>
                                        {!! Form::text('Telefono', null, array('class'=>'form-control', 'maxlength'=>'15','autocomplete'=>'off')) !!}
                                    </div>
                                </div>     

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Celular</label>
                                        {!! Form::text('Celular', null, array('class'=>'form-control','maxlength'=>'15','autocomplete'=>'off')) !!}
                                    </div>
                                </div>        

                                                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Estado Civil</label>
                                        {!! Form::text('EstadoCivil', null, array('class'=>'form-control','maxlength'=>'7','autocomplete'=>'off')) !!}
                                    </div>
                                </div>     

                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Peso</label>
                                        {!! Form::text('Peso', null, array('class'=>'form-control','maxlength'=>'5','placeholder'=>'Ingrese peso en libras','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Tipo de Sangre</label>
                                        <select class="form-control" name="TipoSanguineo">
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Medicamentos actualmente</label>
                                        {!! Form::text('MedicamentosActualmente', null, array('class'=>'form-control','maxlength'=>'100', 'placeholder'=>'Ingrese los Medicamentos actuales del paciente','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Migrante</label>
                                        <select class="form-control" name="Migrante">
                                        <option value="Si+">Si</option>
                                        <option value="No-">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-3">
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