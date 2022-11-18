@extends('layouts.app')
@section('title')
    Editar de datos de {{$paciente->NombresPaciente}} {{$paciente->ApellidosPaciente}}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar datos de la paciente {{$paciente->NombresPaciente}} {{$paciente->ApellidosPaciente}}</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body"  onkeypress="return pulsar(event)">

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
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombres</label>
                                        {!! Form::text('NombresPaciente', null, array('class'=>'form-control','minlength'=>'10','maxlength'=>'25','placeholder'=>'Ingrese los nombres del paciente','autocomplete'=>'off')) !!}
                                    </div>
                                       
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Apellidos</label>
                                        {!! Form::text('ApellidosPaciente', null, array('class'=>'form-control','maxlength'=>'25','placeholder'=>'Ingrese los apellidos del paciente','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Fecha de nacimiento</label>
                                        {!! Form::date('FechaNaciemientoPaciente', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">DPI</label>
                                        {!! Form::text('CUI', null, array('class'=>'form-control','minlength'=>'13', 'maxlength'=>'15','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Profesión u Oficio</label>
                                        {!! Form::text('ProfesionOficio', null, array('class'=>'form-control','minlength'=>'5', 'maxlength'=>'25','autocomplete'=>'off')) !!}
                                    </div>
                                </div> 



                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Descripción de la dirección</label>
                                        {!! Form::text('Descripciondireccion', null, array('class'=>'form-control', 'maxlength'=>'45','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-12 col-sm-12 col-md-4">
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
                                
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">>Municipio y departamento</label>
                                        {!! Form::text('Municipiodep', null, array('class'=>'form-control','minlength'=>'8', 'maxlength'=>'45','autocomplete'=>'off')) !!}
                                    </div>
                                </div>




                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Teléfono</label>
                                        {!! Form::text('Telefono', null, array('class'=>'form-control','minlength'=>'8', 'maxlength'=>'15','autocomplete'=>'off')) !!}
                                    </div>
                                </div>     

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Celular</label>
                                        {!! Form::text('Celular', null, array('class'=>'form-control', 'minlength'=>'8','maxlength'=>'15','autocomplete'=>'off')) !!}
                                    </div>
                                </div>        

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Estado Civil</label>
                                        {!! Form::text('EstadoCivil', null, array('class'=>'form-control','minlength'=>'2','maxlength'=>'7','autocomplete'=>'off')) !!}
                                    </div>
                                </div>     

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Peso</label>
                                        {!! Form::text('Peso', null, array('class'=>'form-control','minlength'=>'4','maxlength'=>'5','placeholder'=>'Ingrese peso en libras','autocomplete'=>'off')) !!}
                                    </div>
                                </div> 
                                
                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Tipo de Sangre</label>
                                        <select class="form-control" name="TipoSanguineo" value="{{$paciente->TipoSanguineo}}">
                                        <option select">{{$paciente->TipoSanguineo}}</option>
                                            
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O+">O-</option>
                                            </select>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">¿Toma medicamentos actualmente?</label>
                                        {!! Form::text('MedicamentosActualmente', null, array('class'=>'form-control','minlength'=>'2','maxlength'=>'100', 'placeholder'=>'Ingrese el nombre y la dosis, de lo contrario coloque un "No"')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="" >Migrante</label>
                                        <select class="form-control" name="Migrante" value="{{$paciente->Migrante}}">
                                        <option select">{{$paciente->Migrante}}</option>
                                        @if ($paciente->Migrante === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Pueblo</label> 
                                        {!! Form::select ('pueblo_id', $pueblos->pluck('Nombre', 'idPueblo')->all(), $paciente->pueblo_id, array('class'=>'form-control'))  !!}
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="" value="idDatosFamiliares">Nombre del familiar</label>
                                        <input class="form-control" list="filtroIdFamiliares" id="filtroIdFamiliare" name="idDatosFamiliares" value="{{$paciente->idDatosFamiliares}}" placeholder="Ingrese el nombre del familiar" autocomplete="off">                                        
                                        <datalist id="filtroIdFamiliares" name="idDatosFamiliares" value="{{$paciente->idDatosFamiliares}}">
                                            @foreach($datosfamiliares as $idfamliar)
                                                <option value="{{$idfamliar->idDatosFamiliares}}"> {{$idfamliar->CUI}}, {{$idfamliar->NombresFamiliar}}</option>                                            
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>

                                
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Parentesco</label>
                                        {!! Form::text('Parentesco', null, array('class'=>'form-control','maxlength'=>'20', 'placeholder'=>'Ingrese el parentesco con la paciente','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="d-none">
                                    <div class="col-xs-12 col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <label for="" value="Usuario_id">Encargado de llenado</label>
                                            <select id="Usuario_id" class="form-control" name="Usuario_id" maxlength="35">
                                                <option value="{{\Illuminate\Support\Facades\Auth::user()->id}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-none">
                                    <div class="col-xs-12 col-sm-12 col-md-2">
                                        <div class="form-group">
                                            <label for="" value="Stado">Estado</label>
                                            <input type="text" name="Stado" value="Si">
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-actualizar">Actualizar</button>
                                    <a href="{{ route('pacientes.index') }}" class="btn btn-danger mr-3">Volver</a>
                                    
                                </div>
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