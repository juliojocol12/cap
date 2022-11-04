@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Paciente</h3>
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

                            {!! Form::model($paciente, [ 'method' => 'PATCH', 'route'=> ['pacientes.update', $paciente->idDatosPersonalesPacientes]]) !!}
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

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de nacimiento</label>
                                        {!! Form::date('FechaNaciemientoPaciente', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">DPI</label>
                                        {!! Form::text('CUI', null, array('class'=>'form-control', 'maxlength'=>'15','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Profesión u Oficio</label>
                                        {!! Form::text('ProfesionOficio', null, array('class'=>'form-control', 'maxlength'=>'25','autocomplete'=>'off')) !!}
                                    </div>
                                </div> 



                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Descripción de la dirección</label>
                                        {!! Form::text('Descripciondireccion', null, array('class'=>'form-control', 'maxlength'=>'45','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-12 col-sm-12 col-md-3">
                                    <div class="form-group">
                                        <label for="">Grupo de la dirección</label>
                                        {!! Form::text('Grupodireccion', null, array('class'=>'form-control', 'maxlength'=>'45','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de casa</label>
                                        {!! Form::text('Numerodireccion', null, array('class'=>'form-control', 'maxlength'=>'45','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Zona</label>
                                        {!! Form::text('Zonadireccion', null, array('class'=>'form-control', 'maxlength'=>'45','autocomplete'=>'off')) !!}
                                    </div>
                                </div>  
                                
                                <div class="col-xs-12 col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label for="">Lugar</label>
                                        {!! Form::text('Municipiodep', null, array('class'=>'form-control', 'maxlength'=>'45','autocomplete'=>'off')) !!}
                                    </div>
                                </div>




                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Telefono</label>
                                        {!! Form::text('Telefono', null, array('class'=>'form-control', 'maxlength'=>'15','autocomplete'=>'off')) !!}
                                    </div>
                                </div>     

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Celular</label>
                                        {!! Form::text('Celular', null, array('class'=>'form-control','maxlength'=>'15','autocomplete'=>'off')) !!}
                                    </div>
                                </div>        

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Estado Civil</label>
                                        {!! Form::text('EstadoCivil', null, array('class'=>'form-control','maxlength'=>'7','autocomplete'=>'off')) !!}
                                    </div>
                                </div>     

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Peso</label>
                                        {!! Form::text('Peso', null, array('class'=>'form-control','maxlength'=>'5','placeholder'=>'Ingrese peso en libras','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-1 col-sm-6 col-md-1">
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
                                        {!! Form::text('MedicamentosActualmente', null, array('class'=>'form-control','maxlength'=>'100', 'placeholder'=>'Ingrese los Medicamentos actuales del paciente')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-1 col-sm-6 col-md-1">
                                    <div class="form-group">
                                        <label for="">Migrante</label>
                                        <select class="form-control" name="Migrante">                                            
                                        <option value="No">NO</option>
                                        <option value="Si">SI</option>
                                        </select>
                                    </div>
                                </div>
                            

                                <div class="col-xs-12 col-sm-12 col-md-1">
                                    <div class="form-group">
                                        <label for="">Pueblo</label> 
                                        {!! Form::select ('pueblo_id', $pueblos->pluck('Nombre', 'idPueblo')->all(), $paciente->pueblo_id, array('class'=>'form-control'))  !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="" value="idDatosFamiliares">Nombre del familiar</label>
                                        <input class="form-control" list="filtroIdFamiliares" id="filtroIdFamiliare" name="idDatosFamiliares" placeholder="ingrese en número de expediente" autocomplete="off">                                        
                                        <datalist id="filtroIdFamiliares" name="idDatosFamiliares">
                                            @foreach($datosfamiliares as $idfamliar)
                                                <option value="{{$idfamliar->idDatosFamiliares}}"> {{$idfamliar->CUI}}, {{$idfamliar->NombresFamiliar}}</option>                                            
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>

                                
                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Parentesco</label>
                                        {!! Form::text('Parentesco', null, array('class'=>'form-control','maxlength'=>'20', 'placeholder'=>'Ingrese la relacion','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
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