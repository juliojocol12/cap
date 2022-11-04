
@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">CALENDARIO</h3>
        </div>
        <div class="section-body">
            <div class="row row-responsive">
                <div class="col-lg-12 col-responsive">
                    <div class="card">
                        <div class="card-body">
                            
                            <div id="agenda" class="responsive">
                            </div>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#evento">
                              Launch
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" data-backdrop="false" data-keyboard="false" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                
                                                <div class="form-group">
                                                  <label for="id">ID</label>
                                                  <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                  <label for="title">Título</label>
                                                  <input type="text" class="form-control" name="title" id="title" placeholder="Escribe el titulo del evento">
                                                </div>

                                                <div class="form-group">
                                                    <label for="Descripcion">Descripcion del evento</label>
                                                    <div class="form-outline w-100 mb-4">
                                                        <textarea class="form-control" id="Descripcion" name="Descripcion" style="height:60px; width: 100%; " rows="3" maxlength=""></textarea>
                                                    </div> 
                                                </div>

                                                

                                                {{-- fecha de inicio y fecha final--}}
                                                <div class="form-group">
                                                  <label for="start">start</label>
                                                  <input type="text" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                                                  <small id="helpId" class="form-text text-muted">Help text</small>
                                                </div>

                                                <div class="form-group">
                                                  <label for="end">end</label>
                                                  <input type="text" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                                                  <small id="helpId" class="form-text text-muted">Help text</small>
                                                </div>

                                            </form>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                                            <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                                            <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection