<div class="card">

                        <div class="card-body">
                        <h3 class="page__heading">Antecedentes Obstétricos</h3>
                        <div class="row ">
                            <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Muertefetal">Muerte fetal o neonatal previas</label>
                                        <select class="form-control" name="Muertefetal">

                                        <option select">{{$fichamspasriego->Muertefetal}}</option>
                                        @if ($fichamspasriego->Muertefetal === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Ancedentesaborto">Ancedentes de 3 o más abortos espontaneos consecutivos</label>
                                        <select class="form-control" name="Ancedentesaborto">
                                        <option select">{{$fichamspasriego->Ancedentesaborto}}</option>
                                        @if ($fichamspasriego->Ancedentesaborto === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                        
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Antecedentegestas">Ancedentes de 3 o más gestas</label>
                                        <select class="form-control" name="Antecedentegestas">
                                        <option select">{{$fichamspasriego->Antecedentegestas}}</option>
                                        @if ($fichamspasriego->Antecedentegestas === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Pesocinco">Peso al nacer del último bebé: 2500g (5 libras 8 onzas)</label>
                                        <select class="form-control" name="Pesocinco">
                                        <option select">{{$fichamspasriego->Pesocinco}}</option>
                                        @if ($fichamspasriego->Pesocinco === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Pesonueve">Peso al nacer del último bebé: 4500g (9 libras 9 onzas)</label>
                                        <select class="form-control" name="Pesonueve">
                                        <option select">{{$fichamspasriego->Pesonueve}}</option>
                                        @if ($fichamspasriego->Pesonueve === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="Antecedentehipertension">Antecedentes de hipertensión o preeclampsia/eclampsia</label>
                                        <select class="form-control" name="Antecedentehipertension">
                                        <option select">{{$fichamspasriego->Antecedentehipertension}}</option>
                                        @if ($fichamspasriego->Antecedentehipertension === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-1 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="Cirugiasprevias">Cirugias previas en el tacto reproductivo (miomectomía, conización, cesárea o cerciaje cervical)</label>
                                        <select class="form-control" name="Cirugiasprevias">
                                        <option select">{{$fichamspasriego->Cirugiasprevias}}</option>
                                        @if ($fichamspasriego->Cirugiasprevias === 'Si')
                                            <option value="No">No</option>
                                        @else
                                            <option value="Si">Si</option>
                                        @endif 
                                        </select>
                                    </div>
                                </div>
                                             


                        




                                </div>
                        </div>
                        </div>
