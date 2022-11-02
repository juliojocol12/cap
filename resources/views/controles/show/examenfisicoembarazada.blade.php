<div class="card">
    <div class="card-body">
        <h4 class="page__heading">Examen Fisico de la Embarazada</h4>

        <h5 class="page__heading"></h5>
        <div class="row ">

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                <label for="">No. Control</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->NoControl}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Semanas de Embarazo</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->SemanasEmbarazo}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Fecha Visita</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->FechaVisita}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Datos de Madre</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->DatosPersonalesPacientes_id}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Ficha Clinica</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->FCPrenatalPostparto_id}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Fecha Posible Parto</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->FechaPosibleParto}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Circuferencia de Embarazo</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->CircuferenciaBrazo}}" disabled>
                </div>                                       
            </div>

        </div>    
    </div>                    
</div>