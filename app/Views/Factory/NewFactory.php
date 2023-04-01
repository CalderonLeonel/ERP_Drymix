<div class="modal-header">
  <h4 class="modal-title">Nueva Fabrica</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form action="" id="FormRegFactory" enctype="multipart/form-data">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Codigo Fabrica</label>
          <input type="text" class="form-control" id="codLine" name="codLine" placeholder="Codigo usado por la empresa">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Nombre Fabrica</label>
          <input type="text" class="form-control" id="nameLine" name="nameLine" placeholder="Nombre usado por la empresa">
        </div>
      </div> 
    </div>
  </form>
</div>

<div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="button" class="btn btn-primary" onclick="RegFac()">Guardar</button>
</div>
