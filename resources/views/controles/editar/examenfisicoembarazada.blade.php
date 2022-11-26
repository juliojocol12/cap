<div class="card">
    <div class="card-body">
    <h3 class="page__heading">Examen físico de la paciente embarazada</h3>
    <div class="row ">
  
        
        <div class="col-xs-6 col-sm-6 col-md-2">
            <div class="form-group">
                <label for="">Número de control</label>
                {!! Form::text('NoControl', null, array('class'=>'form-control','maxlength'=>'15', 'autocomplete'=>'off')) !!}
            </div>                                       
        </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Semanas de embarazo</label>
                    {!! Form::text('SemanasEmbarazo', null, array('class'=>'form-control','maxlength'=>'5','autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Fecha de visita</label>
                    {!! Form::date('FechaVisita', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="" value="DatosPersonalesPacientes_id">Datos de la paciente</label>
                    <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="Ingrese el CUI de la paciente" autocomplete="off" value="{{$controle->DatosPersonalesPacientes_id }}">                                        
                    <datalist id="filtroIDPacientes" name="DatosPersonalesPacientes_id" value="{{$controle->DatosPersonalesPacientes_id }}">
                    @foreach($datospacientes as $idpaciente)
                    <option value="{{$idpaciente->idDatosPersonalesPacientes}}"> {{$idpaciente->CUI}}, {{$idpaciente->NombresPaciente}} {{$idpaciente->ApellidosPaciente}} </option>
                                            
                    @endforeach
                    </datalist>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="" value="FCPrenatalPostparto_id">Ficha clínica</label>
                    <input class="form-control" list="filtroIDFichas" id="filtroIDFicha" name="FCPrenatalPostparto_id" placeholder="Ingrese número de ficha clínica" autocomplete="off" value="{{$controle->FCPrenatalPostparto_id }}">                                        
                    <datalist id="filtroIDFichas" name="FCPrenatalPostparto_id" value="{{$controle->DatosPersonalesPacientes_id }}">
                    @foreach($fcprenatalpostparto as $idFicha)
                    <option value="{{$idFicha->idFCPrenatalPostpartos}}"> {{$idFicha->Fecha}}, {{$idFicha->DatosPersonalesPacientes_id}}  </option>
                                            
                    @endforeach
                    </datalist>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Fecha posible del parto</label>
                    {!! Form::date('FechaPosibleParto', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                    <a href="https://www.diainternacionalde.com/sumar-restar-dias-fecha" target="_blank" class="btn btn-danger mr-3">Saber fecha</a>
                </div>
            </div>

            

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Circuferencia del brazo</label>
                    {!! Form::text('CircuferenciaBrazo', null, array('class'=>'form-control', 'maxlength'=>'5', 'placeholder'=>'Ingrese circunferencia en centimetros', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            
            </div>
    </div>
</div>