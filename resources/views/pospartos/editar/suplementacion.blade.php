<div class="card">
                        <div class="card-body">
                        <h3 class="page__heading">Suplementación, medicamentos y consejería en el posparto</h3>
                        <div class="row ">


                            <div class="col-xs-1 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="SulfatoFerroso">Sulfato ferroso</label>
                                    <select class="form-control" name="SulfatoFerroso">
                                        <option select">{{$fcevaluacionposparto->SulfatoFerroso}}</option>
                                        @if ($fcevaluacionposparto->SulfatoFerroso === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-1 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="AcidoFolico">Ácido fólico </label>
                                    <select class="form-control" name="AcidoFolico">
                                        <option select">{{$fcevaluacionposparto->AcidoFolico}}</option>
                                        @if ($fcevaluacionposparto->AcidoFolico === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-1 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="OtroMedicamento">Otro medicamento</label>
                                    <select class="form-control" name="OtroMedicamento">
                                        <option select">{{$fcevaluacionposparto->OtroMedicamento}}</option>
                                        @if ($fcevaluacionposparto->OtroMedicamento === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-1 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="Tdap">Tdap</label>
                                    <select class="form-control" name="Tdap">
                                        <option select">{{$fcevaluacionposparto->Tdap}}</option>
                                        @if ($fcevaluacionposparto->Tdap === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-1 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="ConsejeriaPF_Posparto">Consejería en PF posparto</label>
                                    <select class="form-control" name="ConsejeriaPF_Posparto">
                                        <option select">{{$fcevaluacionposparto->ConsejeriaPF_Posparto}}</option>
                                        @if ($fcevaluacionposparto->ConsejeriaPF_Posparto === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            
                            <div class="col-xs-1 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="ConsejeriaMujerVIH">Consejería en mujer VIH+</label>
                                    <select class="form-control" name="ConsejeriaMujerVIH">
                                        <option select">{{$fcevaluacionposparto->ConsejeriaMujerVIH}}</option>
                                        @if ($fcevaluacionposparto->ConsejeriaMujerVIH === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-1 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="SulfatoFeConsejeriaLactanciaMujerVIHrroso">Consejería en lactancia materna a mujer VIH+</label>
                                    <select class="form-control" name="ConsejeriaLactanciaMujerVIH">
                                        <option select">{{$fcevaluacionposparto->ConsejeriaLactanciaMujerVIH}}</option>
                                        @if ($fcevaluacionposparto->ConsejeriaLactanciaMujerVIH === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-1 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="ConsejeriaLactanciaAlimentacion">Consejería en MELA de la mujer lactante</label>
                                    <select class="form-control" name="ConsejeriaLactanciaAlimentacion">
                                        <option select">{{$fcevaluacionposparto->ConsejeriaLactanciaAlimentacion}}</option>
                                        @if ($fcevaluacionposparto->ConsejeriaLactanciaAlimentacion === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-1 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="AtencionPsicologica">Atención psicológica</label>
                                    <select class="form-control" name="AtencionPsicologica">
                                        <option select">{{$fcevaluacionposparto->AtencionPsicologica}}</option>
                                        @if ($fcevaluacionposparto->AtencionPsicologica === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                    </select>
                                </div>
                            </div>


                            <div class="col-xs-6 col-sm-6 col-md-3">                            
                                <div class="form-group">
                                <label for="ConsejeriaLactanciaAlimentacion">Observaciones de la atención</label>
                                        <div class="form-outline w-100 mb-4">
                                        <textarea class="form-control" id="ObservacionAtencion" name="ObservacionAtencion" style="height:120px; width: 100%; " maxlength="150" placeholder="Ingrese la observación de la atención psicológica">{{ $fcevaluacionposparto->ObservacionAtencion }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-1 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="Seguimiento">Seguimiento de trabajo social (*)</label>
                                    <select class="form-control" name="Seguimiento">
                                        <option select">{{$fcevaluacionposparto->Seguimiento}}</option>
                                        @if ($fcevaluacionposparto->Seguimiento === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                    </select>
                                </div>
                            </div>


                            <div class="col-xs-6 col-sm-6 col-md-3">                            
                                <div class="form-group">
                                <label for="ConsejeriaLactanciaAlimentacion">Observaciones del seguimiento</label> 
                                    <div class="form-outline w-100 mb-3">
                                        <textarea class="form-control" id="ObservacionSeguimiento" name="ObservacionSeguimiento" style="height:120px; width: 100%; " maxlength="150" placeholder="Ingrese la observación del seguimiento del trabajo social">{{ $fcevaluacionposparto->ObservacionSeguimiento }}</textarea>
                                    </div>
                                </div>
                            </div>

                                </div>
                        </div>
                    </div>