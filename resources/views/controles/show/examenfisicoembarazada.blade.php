<div class="card">
    <div class="card-body">
        <h4 class="page__heading">Examen físico de la paciente embarazada</h4>

        <h5 class="page__heading"></h5>
        <div class="row ">
 
            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                <label for="">Número de control</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->NoControl}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Semanas de embarazo</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->SemanasEmbarazo}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Fecha  de visita</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->FechaVisita}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Datos de la paciente</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->DatosPersonalesPacientes_id}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Ficha clínica</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->FCPrenatalPostparto_id}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Fecha posible del parto</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->FechaPosibleParto}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Circuferencia del brazo</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->CircuferenciaBrazo}}" disabled>
                </div>                                       
            </div>

        </div>    
    </div>                    
</div>