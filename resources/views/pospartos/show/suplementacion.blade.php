<div class="card">
                        <div class="card-body">
                            <h3 class="page__heading">Suplementación, medicamentos y consejería en el posparto</h3>
                            <div class="row ">                               
 
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Sulfato ferroso</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->SulfatoFerroso}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Ácido fólico</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->AcidoFolico}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Otro medicamento</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->OtroMedicamento}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Tdap</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->Tdap}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Consejería en PF posparto</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->ConsejeriaPF_Posparto}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Consejería en mujer VIH+</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->ConsejeriaMujerVIH}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Consejería en lactancia materna a mujer VIH+</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->ConsejeriaLactanciaMujerVIH}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Consejería en MELA de la mujer lactante</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->ConsejeriaLactanciaAlimentacion}}" disabled>
                                    </div>                                       
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="AtencionPsicologica">Atención psicológica (*)</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->AtencionPsicologica}}" disabled>
                                </div>
                            </div>


                            <div class="col-xs-6 col-sm-6 col-md-4">                            
                                <div class="form-group">
                                    <div class="form-outline w-100 mb-4">
                                        <label for="ConsejeriaLactanciaAlimentacion">Observaciones de la atención</label>
                                        <textarea class="form-control" id="ObservacionAtencion" name="ObservacionAtencion" style="height:120px; width: 100%; " maxlength="150" placeholder="Ingrese la observación de la atención psicológica" disabled>{{$fcevaluacionposparto->ObservacionAtencion}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-1 col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label for="Seguimiento">Seguimiento de trabajo social (*)</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$fcevaluacionposparto->Seguimiento}}" disabled>
                                </div>
                            </div>


                            <div class="col-xs-6 col-sm-6 col-md-4">                            
                                <div class="form-group">
                                    <div class="form-outline w-100 mb-4">
                                        <label for="ConsejeriaLactanciaAlimentacion">Observaciones del seguimiento</label>
                                        <textarea class="form-control" id="ObservacionSeguimiento" name="ObservacionSeguimiento" style="height:120px; width: 100%; " maxlength="150" placeholder="Ingrese la observación del seguimiento del trabajo social" disabled>{{$fcevaluacionposparto->ObservacionSeguimiento}}</textarea>
                                    </div>
                                </div>
                            </div>



                            </div>    

                        </div>                    
                    </div>