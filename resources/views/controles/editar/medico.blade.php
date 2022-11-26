                    <div class="card">
                        <div class="card-body">
                        <h3 class="page__heading">Antecedentes medicos</h3>
                        <div class="row ">
                        <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="AsmaBronquial">Asma Bronquial</label>
                                        <select class="form-control" name="AsmaBronquial">
                                        <option select">{{$controle->AsmaBronquial}}</option>
                                        @if ($controle->AsmaBronquial === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="HipertensionArterial">Hipertensión Arterial</label>
                                        <select class="form-control" name="HipertensionArterial">
                                        <option select">{{$controle->HipertensionArterial}}</option>
                                        @if ($controle->HipertensionArterial === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Cancer">Cáncer</label>
                                        <select class="form-control" name="Cancer">
                                        <option select">{{$controle->Cancer}}</option>
                                        @if ($controle->Cancer === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="ITS">ITS</label>
                                        <select class="form-control" name="ITS">
                                        <option select">{{$controle->ITS}}</option>
                                        @if ($controle->ITS === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Chagas">Chagas</label>
                                        <select class="form-control" name="Chagas">
                                        <option select">{{$controle->Chagas}}</option>
                                        @if ($controle->Chagas === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="TomaMedicamentos">Toma Medicamentos</label>
                                        <select class="form-control" name="TomaMedicamentos">
                                        <option select">{{$controle->TomaMedicamentos}}</option>
                                        @if ($controle->TomaMedicamentos === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="TrastornoPiscoSocial">Trastorno PsicoSocial</label>
                                        <select class="form-control" name="TrastornoPiscoSocial">
                                        <option select">{{$controle->TrastornoPiscoSocial}}</option>
                                        @if ($controle->TrastornoPiscoSocial === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="ViolenciaGenero">Violencia basada en género</label>
                                        <select class="form-control" name="ViolenciaGenero">
                                        <option select">{{$controle->ViolenciaGenero}}</option>
                                        @if ($controle->ViolenciaGenero === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Diabetes">Diabetes</label>
                                        <select class="form-control" name="Diabetes">
                                        <option select">{{$controle->Diabetes}}</option>
                                        @if ($controle->Diabetes === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Cardiopatia">Cardiopatia</label>
                                        <select class="form-control" name="Cardiopatia">
                                        <option select">{{$controle->Cardiopatia}}</option>
                                        @if ($controle->Cardiopatia === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Tuberculosis">Tuberculosis</label>
                                        <select class="form-control" name="Tuberculosis">
                                        <option select">{{$controle->Tuberculosis}}</option>
                                        @if ($controle->Tuberculosis === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Neuropatia">Neuropatia</label>
                                        <select class="form-control" name="Neuropatia">
                                        <option select">{{$controle->Neuropatia}}</option>
                                        @if ($controle->Neuropatia === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="InfeccionesUrinarias">Infecciones Urinarias</label>
                                        <select class="form-control" name="InfeccionesUrinarias">
                                        <option select">{{$controle->InfeccionesUrinarias}}</option>
                                        @if ($controle->InfeccionesUrinarias === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="ViolenciaInrtraFamiliar">Violencia InrtraFamiliar</label>
                                        <select class="form-control" name="ViolenciaInrtraFamiliar">
                                        <option select">{{$controle->ViolenciaInrtraFamiliar}}</option>
                                        @if ($controle->ViolenciaInrtraFamiliar === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Tipo de Sangre</label>
                                        <select class="form-control" name="TipoSangre">
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

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="Fuma">Fuma</label>
                                        <select class="form-control" name="Fuma">
                                        <option select">{{$controle->Fuma}}</option>
                                        @if ($controle->Fuma === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="BebidasAlcoholicas">Ingiere bebidas alcohólicas</label>
                                        <select class="form-control" name="BebidasAlcoholicas">
                                        <option select">{{$controle->BebidasAlcoholicas}}</option>
                                        @if ($controle->BebidasAlcoholicas === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="ConsumoDrogas">Consumo de drogas</label>
                                        <select class="form-control" name="ConsumoDrogas">
                                        <option select">{{$controle->ConsumoDrogas}}</option>
                                        @if ($controle->ConsumoDrogas === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="AntecedentesVacunas">Antecedentes de vacuna Td</label>
                                        <select class="form-control" name="AntecedentesVacunas">
                                        <option select">{{$controle->AntecedentesVacunas}}</option>
                                        @if ($controle->AntecedentesVacunas === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Dosis de Vacuna</label>
                                        {!! Form::text('DosisVacuna', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Dosis de Vacuna', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="">Fecha de Ultima Dosis</label>
                                        {!! Form::date('FechaUltimaDosis', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-2">
                                    <div class="form-group">
                                        <label for="SR">SR</label>
                                        <select class="form-control" name="SR">
                                        <option select">{{$controle->SR}}</option>
                                        @if ($controle->SR === 'Si')
                                        <option value="No">No</option>
                                        @else
                                        <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>                                
                                
                                <div class="row ">
                                    
                                <div class="col-xs-6 col-sm-6 col-md-5">
                                    <div class="form-group">
                                        <label for="">Quirurgicos</label>
                                        {!! Form::textarea('Quirurgicos', null, array('style'=>'background:#FCFCFC;height:90px;width:500px;border-color:#E3E3E3','maxlength'=>'45')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-5 col-responsive">
                                    <div class="form-group">
                                        <label for="">Otros Antecedentes</label>
                                        {!! Form::textarea('OtrosAntecedentes', null, array('style'=>'background:#FCFCFC;height:90px;width:500px;border-color:#E3E3E3','maxlength'=>'75', 'overflow'=>'auto', 'position'=> 'relative')) !!}
                                    </div>      
                                </div>

                                    
                                </div>  
                                </div>
                        </div>
                    </div>