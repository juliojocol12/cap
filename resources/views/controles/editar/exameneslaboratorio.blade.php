<div class="card">
                        <div class="card-body">
                        <h3 class="page__heading">Examenes de laboratorio o pruebas de gabinete</h3>
                        <div class="row ">
                                
                                <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="PruebasEmbarazo">Prueba de embarazo</label>
                                                <select class="form-control" name="PruebasEmbarazo">
                                                <option select">{{$controle->PruebasEmbarazo}}</option>
                                                @if ($controle->PruebasEmbarazo === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Resultado de prueba de embarazo</label>
                                            {!! Form::text('DecripcionPruebasEmbarazo', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Describa el resultado', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="Hematologia">Hematología (Hemaglobina / Ht)</label>
                                                <select class="form-control" name="Hematologia">
                                                <option select">{{$controle->Hematologia}}</option>
                                                @if ($controle->Hematologia === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Resultado de Hematología </label>
                                            {!! Form::text('DescripcionHematologia', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Hematologia (Hemaglobina / Ht)', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="GrupoRH">Grupo y Rh</label>
                                                <select class="form-control" name="GrupoRH">
                                                <option select">{{$controle->GrupoRH}}</option>
                                                @if ($controle->GrupoRH === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Resultado de Grupo y Rh</label>
                                            {!! Form::text('DescripcionGrupoRH', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Describa el resultado', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="Orina">Orina (Bacteriuria y Proteinuria)</label>
                                                <select class="form-control" name="Orina">
                                                <option select">{{$controle->Orina}}</option>
                                                @if ($controle->Orina === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Resultado de Orina</label>
                                            {!! Form::text('DescripcionOrina', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'(Bacteriuria y Proteinuria)', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="Heces">Heces</label>
                                                <select class="form-control" name="Heces">
                                                <option select">{{$controle->Heces}}</option>
                                                @if ($controle->Heces === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Resultado de Heces</label>
                                            {!! Form::text('DescirpcionHeces', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Describa el resultado', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="GlicemiaAyunas">Glicemia en ayunas</label>
                                                <select class="form-control" name="GlicemiaAyunas">
                                                <option select">{{$controle->GlicemiaAyunas}}</option>
                                                @if ($controle->GlicemiaAyunas === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Resultado de Glicemia en ayunas</label>
                                            {!! Form::text('DescripcionGlicemiaAyunas', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Describa el resultado', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    
                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="VDLR">VDRL/RPR</label>
                                                <select class="form-control" name="VDLR">
                                                <option select">{{$controle->VDLR}}</option>
                                                @if ($controle->VDLR === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Resultado de VDRL/RPR</label>
                                            {!! Form::text('DescripcionVDLR', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Reargina plasmática para sífilis', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="VIH">VIH</label>
                                                <select class="form-control" name="VIH">
                                                <option select">{{$controle->VIH}}</option>
                                                @if ($controle->VIH === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Resultado de VIH</label>
                                            {!! Form::text('DescipcionVIH', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Describa el resultado', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>  

                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="TORCH">TORCH</label>
                                                <select class="form-control" name="TORCH">
                                                <option select">{{$controle->TORCH}}</option>
                                                @if ($controle->TORCH === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Resultado de TORCH</label>
                                            {!! Form::text('DescripcionTORCH', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Describa el resultado', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>
                                    
                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="PapanicolaouIVAA">Papanicolaou/IVAA</label>
                                                <select class="form-control" name="PapanicolaouIVAA">
                                                <option select">{{$controle->PapanicolaouIVAA}}</option>
                                                @if ($controle->PapanicolaouIVAA === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Resultado de Papanicolaou/IVAA</label>
                                            {!! Form::text('DescripcionPapanicolaouIVAA', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Describa el resultado', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>
                                    
                                    <div class="col-xs-1 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="HepatitisB">Prueba rápida de Hepatitis B</label>
                                                <select class="form-control" name="HepatitisB">
                                                <option select">{{$controle->HepatitisB}}</option>
                                                @if ($controle->HepatitisB === 'Si')
                                                    <option value="No">No</option>
                                                @else
                                                    <option value="Si">Si</option>
                                                @endif
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="">Resultado de Hepatitis B</label>
                                            {!! Form::text('DescripcionHepatitisB', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'Describa el resultado', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>
                                                

                                    <div class="col-xs-6 col-sm-6 col-md-5">
                                        <div class="form-group">
                                            <label for="">Otros estudios complementarios</label>
                                            {!! Form::text('OtrosEstudios', null, array('class'=>'form-control','maxlength'=>'45', 'placeholder'=>'(US), gota gruesa en zonas endémicas, si presenta fiebre', 'autocomplete'=>'off')) !!}
                                        </div>                                       
                                    </div>



                                
                              
                        </div>
                    </div>
 </div>