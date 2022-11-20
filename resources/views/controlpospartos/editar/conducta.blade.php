<div class="card">
                        <div class="card-body">
                        <h3 class="page__heading">Conducta</h3>
                        <div class="row ">

                                    <div class="col-xs-6 col-sm-6 col-md-2">                            
                                        <div class="form-group">
                                            <label for="">Sulfato ferroso (*)</label>
                                            <div class="form-outline w-100 mb-2">

                                                <textarea class="form-control" id="SulfatoFerroso" name="SulfatoFerroso" style="height:60px; width: 100%; " maxlength="25" placeholder="Describa: el número de tabletas">{{$controlposparto->SulfatoFerroso}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-2">                            
                                        <div class="form-group">
                                            <label for="">Ácido fólico (*)</label>
                                            <div class="form-outline w-100 mb-2">
                                                <textarea class="form-control" id="AcidoFolico" name="AcidoFolico" style="height:60px; width: 100%; " maxlength="25" placeholder="Describa: el número de tabletas">{{$controlposparto->AcidoFolico}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-3">                            
                                        <div class="form-group">
                                            <label for="">Vacunacion de la madre (Tdap) (*)</label>
                                            <div class="form-outline w-100 mb-2">
                                                <textarea class="form-control" id="VacuncacionTdapMadre" name="VacuncacionTdapMadre" style="height:60px; width: 100%; " maxlength="20" placeholder="Describa: el número de dosis que se administra">{{$controlposparto->VacuncacionTdapMadre}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-4">                            
                                        <div class="form-group">
                                            <label for="">Medicamento (*)</label>
                                            <div class="form-outline w-100 mb-2">
                                                <textarea class="form-control" id="Medicamento" name="Medicamento" style="height:60px; width: 100%; " maxlength="45" placeholder="Describa">{{$controlposparto->Medicamento}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
                        </div>
                    </div>
