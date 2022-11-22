                    <div class="card">
                        <div class="card-body">
                        <h3 class="page__heading">Antecedentes médicos</h3>
                        <div class="row ">
                        <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="AsmaBronquial">Asma bronquial</label>
                                        <select class="form-control" name="AsmaBronquial" value="{{$fcprenatalpostparto->AsmaBronquial}}">
                                        <option select">{{$fcprenatalpostparto->AsmaBronquial}}</option>
                                        @if ($fcprenatalpostparto->AsmaBronquial === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="HipertensionArterial">Hipertensión arterial</label>
                                        <select class="form-control" name="HipertensionArterial" value="{{$fcprenatalpostparto->HipertensionArterial}}">
                                        <option select">{{$fcprenatalpostparto->HipertensionArterial}}</option>
                                        @if ($fcprenatalpostparto->HipertensionArterial === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="Cancer">Cáncer</label>
                                        <select class="form-control" name="Cancer" value="{{$fcprenatalpostparto->Cancer}}">
                                        <option select">{{$fcprenatalpostparto->Cancer}}</option>
                                        @if ($fcprenatalpostparto->Cancer === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="ITS">ITS</label>
                                        <select class="form-control" name="ITS" value="{{$fcprenatalpostparto->ITS}}">
                                        <option select">{{$fcprenatalpostparto->ITS}}</option>
                                        @if ($fcprenatalpostparto->ITS === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="Chagas">Chagas</label>
                                        <select class="form-control" name="Chagas" value="{{$fcprenatalpostparto->Chagas}}">
                                        <option select">{{$fcprenatalpostparto->Chagas}}</option>
                                        @if ($fcprenatalpostparto->Chagas === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="TomaMedicamentos">Toma médicamentos</label>
                                        <select class="form-control" name="TomaMedicamentos" value="{{$fcprenatalpostparto->TomaMedicamentos}}">
                                        <option select">{{$fcprenatalpostparto->TomaMedicamentos}}</option>
                                        @if ($fcprenatalpostparto->TomaMedicamentos === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="TrastornoPiscoSocial">Trastorno psicosocial</label>
                                        <select class="form-control" name="TrastornoPiscoSocial" value="{{$fcprenatalpostparto->TrastornoPiscoSocial}}">
                                        <option select">{{$fcprenatalpostparto->TrastornoPiscoSocial}}</option>
                                        @if ($fcprenatalpostparto->TrastornoPiscoSocial === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="ViolenciaGenero">Violencia basada en género</label>
                                        <select class="form-control" name="ViolenciaGenero" value="{{$fcprenatalpostparto->ViolenciaGenero}}">
                                        <option select">{{$fcprenatalpostparto->ViolenciaGenero}}</option>
                                        @if ($fcprenatalpostparto->ViolenciaGenero === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="Diabetes">Diabetes</label>
                                        <select class="form-control" name="Diabetes" value="{{$fcprenatalpostparto->Diabetes}}">
                                        <option select">{{$fcprenatalpostparto->Diabetes}}</option>
                                        @if ($fcprenatalpostparto->Diabetes === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="Cardiopatia">Cardiopatía</label>
                                        <select class="form-control" name="Cardiopatia" value="{{$fcprenatalpostparto->Cardiopatia}}">
                                        <option select">{{$fcprenatalpostparto->Cardiopatia}}</option>
                                        @if ($fcprenatalpostparto->Cardiopatia === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="Tuberculosis">Tuberculosis</label>
                                        <select class="form-control" name="Tuberculosis" value="{{$fcprenatalpostparto->Tuberculosis}}">
                                        <option select">{{$fcprenatalpostparto->Tuberculosis}}</option>
                                        @if ($fcprenatalpostparto->Tuberculosis === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="Neuropatia">Neuropatía</label>
                                        <select class="form-control" name="Neuropatia" value="{{$fcprenatalpostparto->Neuropatia}}">
                                        <option select">{{$fcprenatalpostparto->Neuropatia}}</option>
                                        @if ($fcprenatalpostparto->Neuropatia === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="InfeccionesUrinarias">Infecciones urinarias</label>
                                        <select class="form-control" name="InfeccionesUrinarias" value="{{$fcprenatalpostparto->InfeccionesUrinarias}}">
                                        <option select">{{$fcprenatalpostparto->InfeccionesUrinarias}}</option>
                                        @if ($fcprenatalpostparto->InfeccionesUrinarias === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="ViolenciaInrtraFamiliar">Violencia inrtrafamiliar</label>
                                        <select class="form-control" name="ViolenciaInrtraFamiliar" value="{{$fcprenatalpostparto->ViolenciaInrtraFamiliar}}">
                                        <option select">{{$fcprenatalpostparto->ViolenciaInrtraFamiliar}}</option>
                                        @if ($fcprenatalpostparto->ViolenciaInrtraFamiliar === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Tipo sanguíneo</label>
                                        <select class="form-control" name="TipoSangre" value="{{$fcprenatalpostparto->TipoSangre}}">
                                        <option select">{{$fcprenatalpostparto->TipoSangre}}</option>
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

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="Fuma">Fuma</label>
                                        <select class="form-control" name="Fuma" value="{{$fcprenatalpostparto->Fuma}}">
                                        <option select">{{$fcprenatalpostparto->Fuma}}</option>
                                        @if ($fcprenatalpostparto->Fuma === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="BebidasAlcoholicas">Ingiere bebidas alcohólicas</label>
                                        <select class="form-control" name="BebidasAlcoholicas" value="{{$fcprenatalpostparto->BebidasAlcoholicas}}">
                                        <option select">{{$fcprenatalpostparto->BebidasAlcoholicas}}</option>
                                        @if ($fcprenatalpostparto->BebidasAlcoholicas === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="ConsumoDrogas">Consumo de drogas</label>
                                        <select class="form-control" name="ConsumoDrogas" value="{{$fcprenatalpostparto->ConsumoDrogas}}">
                                        <option select">{{$fcprenatalpostparto->ConsumoDrogas}}</option>
                                        @if ($fcprenatalpostparto->ConsumoDrogas === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="AntecedentesVacunas">Antecedentes de vacuna Td</label>
                                        <select class="form-control" name="AntecedentesVacunas" value="{{$fcprenatalpostparto->AntecedentesVacunas}}">
                                        <option select">{{$fcprenatalpostparto->AntecedentesVacunas}}</option>
                                        @if ($fcprenatalpostparto->AntecedentesVacunas === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Dosis de vacuna</label>
                                        {!! Form::text('DosisVacuna', null, array('class'=>'form-control', 'maxlength'=>'2', 'placeholder'=>'Dosis de Vacuna', 'autocomplete'=>'off')) !!}
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="">Fecha de última dosis</label>
                                        {!! Form::date('FechaUltimaDosis', null, array('class'=>'form-control','autocomplete'=>'off')) !!}
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label for="SR">SR</label>
                                        <select class="form-control" name="SR" value="{{$fcprenatalpostparto->SR}}">
                                        <option select">{{$fcprenatalpostparto->SR}}</option>
                                        @if ($fcprenatalpostparto->SR === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif
                                        </select>
                                    </div>
                                </div>                                
                                
                                <div class="col-xs-6 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="">Quirúrgicos</label>
                                        <div class="form-outline w-100 mb-4">

                                            <textarea class="form-control" id="Quirurgicos" name="Quirurgicos" style="height: 90px; width: 100%; " maxlength="45" placeholder="Ingrese información quirurgico">{{$fcprenatalpostparto->Quirurgicos}}</textarea>

                                        </div>  
                                    </div>                                       
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Otros antecedentes</label>
                                        <div class="form-outline w-100 mb-4">
                                            <textarea class="form-control" id="OtrosAntecedentes" name="OtrosAntecedentes" style="height: 90px; width: 100%; " maxlength="75" placeholder="Describa otros antecedentes">{{$fcprenatalpostparto->OtrosAntecedentes}}</textarea>
                                        </div>
                                    </div>      
                                </div>

                                    
                                </div>
                        </div>
                    </div>