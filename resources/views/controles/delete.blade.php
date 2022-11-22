<!-- Modal -->
<div class="modal fade" data-backdrop="false" data-keyboard="false" id="modal-delete-{{$control->idControles}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <form action="{{ route('controles.destroy', $control->idControles) }}" method="post">
      @csrf
      @method('DELETE')
  
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar registro de controles</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        ¿Está seguro que desea eliminar el control prenatal de <br> la paciente: {{$control->NombresPaciente}} {{$control->ApellidosPaciente}}, con número de DPI: {{$control->CUI}} y expediente: {{$control->Numerodireccion}} ?
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-danger" value="Si">
          <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
          
        </div>
      </div>
      </form>
    </div>
  </div>