@extends('layouts.app')
@section('title')
    Crear ficha de paciente
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Ingreso de nuevo paciente</h3>
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

                            {!! Form::open(array('route'=>'pacientes.store', 'method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Nombres (*)</label>
                                        {!! Form::text('NombresPaciente', null, array('class'=>'form-control','maxlength'=>'25','placeholder'=>'Ingrese los nombres de la paciente','autocomplete'=>'off')) !!}
                                    </div>
                                       
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Apellidos (*)</label>
                                        {!! Form::text('ApellidosPaciente', null, array('class'=>'form-control','maxlength'=>'25','placeholder'=>'Ingrese los apellidos de la paciente','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Fecha de nacimiento (*)</label>
                                        {!! Form::date('FechaNaciemientoPaciente', null, array('class'=>'form-control')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">DPI (*)</label>
                                        {!! Form::text('CUI', null, array('class'=>'form-control', 'maxlength'=>'13','placeholder'=>'Ingrese el DPI en números y sin espacios','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Profesión u oficio (*)</label>
                                        {!! Form::text('ProfesionOficio', null, array('class'=>'form-control', 'maxlength'=>'25','placeholder'=>'Ingrese la profesión u oficio','autocomplete'=>'off')) !!}
                                    </div>
                                </div> 

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Descripción de la dirección (*)</label>
                                        {!! Form::text('Descripciondireccion', null, array('class'=>'form-control', 'maxlength'=>'60','placeholder'=>'Ingrese la dirección de la paciente','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Grupo de la dirección (*)</label>
                                        {!! Form::text('Grupodireccion', null, array('class'=>'form-control', 'maxlength'=>'20','placeholder'=>'Ingrese el grupo de la dirección','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Número de casa (*)</label>
                                        {!! Form::text('Numerodireccion', null, array('class'=>'form-control', 'maxlength'=>'10','placeholder'=>'Ingrese el número de casa','autocomplete'=>'off')) !!}
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Zona (*)</label>
                                        {!! Form::text('Zonadireccion', null, array('class'=>'form-control', 'maxlength'=>'3','placeholder'=>'Ingrese la zona','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Municipio y departamento (*)</label>
                                        {!! Form::text('Municipiodep', null, array('class'=>'form-control', 'maxlength'=>'60','placeholder'=>'Ingrese el municipio y departamento','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Número de teléfono (*)</label>
                                        {!! Form::text('Telefono', null, array('class'=>'form-control', 'maxlength'=>'8','placeholder'=>'Ingrese número de teléfono','autocomplete'=>'off')) !!}
                                    </div>
                                </div>     

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Número de celular</label>
                                        {!! Form::text('Celular', null, array('class'=>'form-control','maxlength'=>'8','placeholder'=>'Ingrese el número de celular','autocomplete'=>'off')) !!}
                                    </div>
                                </div>        

                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">Estado civil (*)</label>
                                        {!! Form::text('EstadoCivil', null, array('class'=>'form-control','maxlength'=>'7','placeholder'=>'Ingrese el estado civil','autocomplete'=>'off')) !!}
                                    </div>
                                </div>     

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="">Peso (*)</label>
                                        {!! Form::text('Peso', null, array('class'=>'form-control','maxlength'=>'6','placeholder'=>'Ingrese peso en libras','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Tipo de sangre (*)</label>
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
                            
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="">¿Toma medicamentos actualmente?</label>
                                        {!! Form::text('MedicamentosActualmente', null, array('class'=>'form-control','maxlength'=>'100', 'placeholder'=>'Ingrese el nombre y la dosis, de lo contrario coloque "No"','autocomplete'=>'off')) !!}
                                    </div>
                                </div>   

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Migrante (*)</label>
                                        <select class="form-control" name="Migrante">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="" value="pueblo_id">Pueblo (*)</label>
                                        <select class="form-control" name="pueblo_id">
                                            @foreach($pueblos as $pue)
                                            <option value="{{$pue->idPueblo}}" >{{ $pue->Nombre}} </option>
                                            @endforeach
                                        </select>                                        
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="" value="idDatosFamiliares">Nombre del familiar</label>
                                        <input class="form-control" list="filtroIdFamiliares" id="filtroIdFamiliare" name="idDatosFamiliares" placeholder="Ingrese el nombre del familiar" autocomplete="off">                                        
                                        <datalist id="filtroIdFamiliares" name="idDatosFamiliares">
                                            @foreach($datosfamiliares as $idfamliar)
                                                <option value="{{$idfamliar->idDatosFamiliares}}"> {{$idfamliar->CUI}}, {{$idfamliar->NombresFamiliar}}</
                                                option>                                            
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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-crear">Guardar</button>
                                <a href="{{ route('pacientes.index') }}" class="btn btn-danger mr-3">Volver</a>
                                </div>

                                
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