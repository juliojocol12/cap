<div class="card">
                        <div class="card-body">
                            <h3 class="page__heading">Signos y sintomas de peligro</h3>
                            <div class="row ">
                            <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="HemorragiaVaginal">Hemorragia vaginal</label>
                                        <select class="form-control" name="HemorragiaVaginal">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="DolordeCabeza">Dolor de cabeza severo</label>
                                        <select class="form-control" name="DolordeCabeza">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="VisionBorrosa">Vision Borrosa</label>
                                        <select class="form-control" name="VisionBorrosa">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Convulsion">Convulsion</label>
                                        <select class="form-control" name="Convulsion">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="DolorAbdominal">Dolor abdominal severo (epigastralgia)</label>
                                        <select class="form-control" name="DolorAbdominal">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Convulsion">Convulsion</label>
                                        <select class="form-control" name="Convulsion">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Convulsion">Convulsion</label>
                                        <select class="form-control" name="Convulsion">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="PresionArterial">Presion Arterial</label>
                                        <select class="form-control" name="PresionArterial">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Fiebre">Fiebre</label>
                                        <select class="form-control" name="Fiebre">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="PresentacionesFetales">Presentaciones fetales anormales</label>
                                        <select class="form-control" name="PresentacionesFetales">
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="MotivoConsulta">Motivo de consulta</label>
                                        <select class="form-control" name="MotivoConsulta">
                                        <option value="Embarazo">Embarazo</option>
                                        <option value="Parto">Parto</option>
                                        <option value="Postparto">Postparto</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Si refirio a la paciente registre manejo y estabilización</label>
                                        {!! Form::textarea('RegistrodeReferencia', null, array('style'=>'background:#FCFCFC;height:90px;width:500px;border-color:#E3E3E3','maxlength'=>'190')) !!}
                                    </div>                                       
                                </div>


                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Historia de la enfermedad Actual</label>
                                        {!! Form::textarea('HistoriaEnfermedadActual', null, array('style'=>'background:#FCFCFC;height:90px;width:500px;border-color:#E3E3E3','maxlength'=>'200')) !!}
                                    </div>                                       
                                </div>


                             </div>
                        </div>
                    </div>