<div class="card">
    <div class="card-body">
        <h4 class="page__heading">Signos vitales</h4>
 
        <h5 class="page__heading"></h5>
        <div class="row ">

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                <label for="">Presión arterial</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->PresionArterial}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Temperatura</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->Temperatura}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Respiraciones por minuto</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->RespiracionPorMinuto}}" disabled>
                </div>                                       
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2">
                <div class="form-group">
                    <label for="">Frecuencia cardíaca materna</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$controle->FrecuenciaCardiacaMaternal}}" disabled>
                </div>                                       
            </div>

        </div>    
    </div>                    
</div>