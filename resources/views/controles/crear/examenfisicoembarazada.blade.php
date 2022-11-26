<div class="card">
    <div class="card-body">
    <h3 class="page__heading">Examen físico de la paciente embarazada</h3>
    <div class="row ">
  
        
        <div class="col-xs-6 col-sm-6 col-md-2">
            <div class="form-group">
                <label for="">Número de control</label>
                {!! Form::text('NoControl', null, array('class'=>'form-control','maxlength'=>'15', 'placeholder'=>'Ingrese no. de control', 'autocomplete'=>'off')) !!}
            </div>                                       
        </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Semanas de embarazo</label>
                    {!! Form::text('SemanasEmbarazo', null, array('class'=>'form-control','maxlength'=>'5', 'placeholder'=>'Ingrese en números','autocomplete'=>'off')) !!}
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
                    <input class="form-control" list="filtroIDPacientes" id="filtroIDPaciente" name="DatosPersonalesPacientes_id" placeholder="Ingrese el DPI " autocomplete="off">                                        
                    <datalist id="filtroIDPacientes" name="DatosPersonalesPacientes_id">
                        @foreach($datospacientes as $idpaciente)
                        <option value="{{$idpaciente->idDatosPersonalesPacientes}}"> {{$idpaciente->CUI}}, {{$idpaciente->NombresPaciente}} {{$idpaciente->ApellidosPaciente}} </option>
                        @endforeach
                    </datalist>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="" value="FCPrenatalPostparto_id">Ficha clínica</label>
                    <input class="form-control" list="filtroFClinicas" id="filtroFClinica" name="FCPrenatalPostparto_id" placeholder="Ingrese ficha clínica" autocomplete="off">                                        
                    <datalist id="filtroFClinicas" name="FCPrenatalPostparto_id">
                        @foreach($fcprenatalpostparto as $idFClinica)
                        <option value="{{$idFClinica->idFCPrenatalPostpartos}}"> {{$idFClinica->Fecha}} </option>
                        @endforeach
                    </datalist>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Fecha posible del parto</label>
                    {!! Form::date('FechaPosibleParto', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                    <br>
                    <a href="https://www.diainternacionalde.com/sumar-restar-dias-fecha" target="_blank" class="btn btn-danger mr-3">Calcular fecha</a>
                </div>
            </div>

            

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Circuferencia del brazo</label>
                    {!! Form::text('CircuferenciaBrazo', null, array('class'=>'form-control', 'maxlength'=>'5', 'placeholder'=>'Ingrese en centímetros', 'autocomplete'=>'off')) !!}
                </div>                                       
            </div>

            
            </div>
    </div>
</div>